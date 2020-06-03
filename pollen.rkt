#lang racket
(require pollen/decode
         pollen/tag
         txexpr
         sugar
         hyphenate)
(provide (all-defined-out))

; I do not like the default behaviour of inserting linebreaks so I disabled it.
; In order to force a line break, just put "\\" on its own line in the source.
(module setup racket/base
  (provide (all-defined-out))
  (define linebreak-separator "\\\\"))

; Arrange hyphenation
; In addition to M.B.'s minimal example I added mathjax 
(define no-hyphens-attr '(hyphens "none"))

(define (hyphenate-block block-tx)
  (define (no-hyphens? tx)
    (or (member (get-tag tx) '(th h1 h2 h3 h4 style script mathjax))
        (member no-hyphens-attr (get-attrs tx))))
  (hyphenate block-tx
             #:min-left-length 3
             #:min-right-length 3
             #:omit-txexpr no-hyphens?))

;The tag functions
;;Math
(define ($ . elements)
  `(mathjax ,(apply string-append `("\\(" ,@elements "\\)"))))
(define ($$ . elements)
  `(mathjax ,(apply string-append `("\\[" ,@elements "\\]"))))

;;Headings
(define-syntax-rule (define-heading heading-name tag)
  (define heading-name
    (default-tag-function tag
      #:class (symbol->string 'heading-name))))

(define-heading topic 'h3)
(define-heading heading 'h4)

;; Lists

(define (detect-list-items elems)
  (define elems-merged (merge-newlines elems))
  (define (list-item-break? elem)
    (define list-item-separator-pattern (regexp "\n\n\n+"))
    (and (string? elem) (regexp-match list-item-separator-pattern elem)))
  (define list-of-li-elems (filter-split elems-merged list-item-break?))
  (define list-of-li-paragraphs
    (map (λ(li) (decode-paragraphs li #:force? #t)) list-of-li-elems))
  (define li-tag (default-tag-function 'li))
  (map (λ(lip) (apply li-tag lip)) list-of-li-paragraphs))

(define (make-list-function tag [attrs empty])
  (λ args (list* tag attrs (detect-list-items args))))

(define bullet-list (make-list-function 'ul))
(define numbered-list (make-list-function 'ol))

;; Theorems
(define-syntax-rule (define-theorem theorem-name)
  (define (theorem-name . elements)
    `(div ((class ,(symbol->string 'theorem-name)))
          ,@elements)))

(define-theorem theorem)
(define-theorem exercise)
(define-theorem solution)

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
    (decode-elements elements #:txexpr-elements-proc decode-paragraphs #:exclude-attrs '((class "therorem"))))
  (list* 'div '((id "doc"))
         (decode-elements elements-with-paragraphs
                          #:block-txexpr-proc hyphenate-block
                          #:exclude-tags '(style script))))

