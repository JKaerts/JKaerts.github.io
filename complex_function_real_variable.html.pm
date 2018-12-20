#lang pollen
◊topic{Complex functions of a real variable}

Just like a real function of a real variable, we can consider complex functions of a real variable.
These are functions of the form
◊$${f\colon I \subseteq \R \to \C \colon t \mapsto f(t).}
Let's call these functions CRV-functions (Complex functions of a Real Variable).

Why are we looking at these functions? Because we can look at differential equations of CRV-functions.

We consider such a function ◊${f} to be ◊em{differentiable} at a point ◊${t} if the limit
◊$${\lim_{h \to 0} \frac{f(t+h) - f(t)}{h}}
exists in ◊${\C}.
This limit is then denoted by ◊${f'(t)}.

The shape of this limit, the difference quotient, is exactly the same as for real functions of a real variable.
Do we need to develop an entirely new theory of differentiation for CRV functions? Not if we're clever about it.
Every complex number has a real part and an imaginary part.
Because ◊${f(t)} is a complex number we can find two real numbers ◊${u(t)} and ◊${v(t)} such that
◊$${f(t) = u(t) + iv(t)}
This means that there are two real functions of a real variable (◊${u} and ◊${v}) such that ◊${f = u+iv}.

Using this notation we can see that (if everything works out nicely)
◊$${
\begin{align*}
f'(t) &= \lim_{h\to 0} \frac{f(t+h)-f(t)}{h}\\
      &= \lim_{h\to 0} \frac{u(t+h)-u(t)}{h} + i\frac{v(t+h)-v(t)}{h}\\
      &= u'(t) + iv'(t)
\end{align*}
}
The function ◊${f} is therefore differentiable (in the CRV sense) if both ◊${u} and ◊${v} are (in the ordinary sense) and there is a simple relationship between their derivatives.

In general we can state that
◊$${
\begin{align*}
f(t) &= u(t)+iv(t)\\
f'(t) &= u'(t) + iv'(t)\\
f''(t) &= u''(t) + iv''(t)\\
f^{(3)}(t) &= u^{(3)}(t) + iv^{(3)}(t)\\
\end{align*}
}
and so on.

Now we can look at differential equations of CRV-functions.
Because we have given meaning to the concept of the derivative of a CRV-function, it makes sense to ask if there exists a CRV-function ◊${f} such that
◊$${f'' + f = 0.}
Again, like in the real case we can look for exponential solutions to this equation.
We try to find ◊${r\in\C} such that ◊${t\mapsto e^{rt}} is a solution to the equation.
In that case ◊${r} has to satisfy --- like in the real case --- the characteristic equation
◊${r^2 + 1 = 0}
so ◊${r} is equal to ◊${i} or ◊${-i}.
The general solution to the differential equation is therefore
◊$${f(t) = Ae^{it} + Be^{-it}}
for two constants ◊${A} and ◊${B}.