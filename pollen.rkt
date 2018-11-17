#lang racket
(require pollen/decode
         pollen/tag
         txexpr
         hyphenate)
(provide (all-defined-out))

;I do not like the default behaviour of inserting linebreaks so I disabled it.
;In order to force a line break, just put "\\" on its own line in the source.
(module setup racket/base
  (provide (all-defined-out))
  (define linebreak-separator "\\\\"))

;Arrange hyphenation
(define no-hyphens-attr '(hyphens "none"))

(define (hyphenate-block block-tx)
  (define (no-hyphens? tx)
    (or (member (get-tag tx) '(th h1 h2 h3 h4 style script))
        (member no-hyphens-attr (get-attrs tx))))
  (hyphenate block-tx
             #:min-left-length 3
             #:min-right-length 3
             #:omit-txexpr no-hyphens?))

;The tag functions
;;Math
(define ($ . elements)
  `(mathjax ,(apply string-append `("$" ,@elements "$"))))
(define ($$ . elements)
  `(mathjax ,(apply string-append `("$$" ,@elements "$$"))))

;;Headings
(define topic
  (default-tag-function 'h3 #:class "topic"))
(define heading
  (default-tag-function 'h4 #:class "heading"))

;;Exposition
(define (exposition . elements)
  `(span ((class "tooltip")
          (onclick "this.classList.toggle('tooltip_visible')"))
         "+"
         (span ((class "tooltip-inner"))
               (span ((class "no-hyphens"))
                     ,@elements))))


;;processing the root tag
(define (root . elements)
  (define elements-with-paragraphs
    (decode-elements elements #:txexpr-elements-proc decode-paragraphs))
  (list* 'div '((id "doc"))
         (decode-elements elements-with-paragraphs
                          #:block-txexpr-proc hyphenate-block
                          #:exclude-tags '(style script))))

