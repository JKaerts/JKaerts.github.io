#lang racket
(require txexpr)
(provide (all-defined-out))

(define ($ . elements)
  `(mathjax ,(apply string-append `("$" ,@elements "$"))))
(define ($$ . elements)
  `(mathjax ,(apply string-append `("$$" ,@elements "$$"))))