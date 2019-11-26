#lang pollen
◊topic{Basic equations of motion}

◊heading{Motion in one dimension}
Suppose a particle moves along a line in a path ◊${x(t)}.
The velocity (◊${v(t)}) and acceleration (◊${a(t)}) are defined as
◊$${v(t) := \diff{x}{t}, \quad a(t) := \odiff{2}{x}{t} \left(=\diff{v}{t}\right)}

The ◊em{particle under constant velocity} obeys by definition the differential equation
◊$${\diff{x}{t} = v_c}
where ◊${v_c} is the given constant velocity.
Given an initial position ◊${x(0)=x_i}, this problem has a unique solution
◊$${x(t) = x_i + v_c t.}

The ◊em{particle under constant acceleration} obeys by definition the differential equation
◊$${\odiff{2}{x}{t} = a_c}
where ◊${a_c} is the given constant acceleration.
Given an initial position ◊${x(0)=x_i} and an initial velocity ◊${v(0) = v_i}, this problem has a unique solution
◊$${x(t) = x_i + v_it + a_c \frac{t^2}{2}.}

◊exercise{
This last equation is the first of five equations used in elementary motion problems.
From this equation, derive the remaining four:
◊numbered-list{
◊${v(t) = v_i + a_c t}


◊${x(t) = x_i + v(t) - a_c\frac{t^2}{2}}


◊${x(t) = x_i + \frac{v(t)+v_i}{2}t}


◊${v(t)^2 = v_i^2 + 2a_c(x(t) - x_i)}}}

◊solution{
◊numbered-list{
Take the derivative with respect to ◊${t}.


From the previous equation, we find that ◊${v_i = v(t) - a_c t}.
We now find
◊$${\begin{align*}
x(t) &= x_i + v_it + a_c \frac{t^2}{2}\\
     &= x_i + v(t)t - a_c t^2 + a_c \frac{t^2}{2}\\
	 &= x_i + v(t)t - a_c\frac{t^2}{2}.
\end{align*}}


We now have two different expression for ◊${x(t)}.
Let's add them together:
◊$${\begin{align*}
2x(t) &= \left(x_i + v_it + a_c \frac{t^2}{2}\right) + \left(x_i + v(t)t - a_c\frac{t^2}{2}\right)\\
      &= 2x_i + (v_i + v(t))t\\
 x(t) &= x(t) = x_i + \frac{v(t)+v_i}{2}t.
\end{align*}}


We square the expression for ◊${v(t)} and find after some algebra that
◊$${\begin{align*}
v(t)^2 &= v_i^2 + 2v_ia_xt + a_x^2t^2\\
       &= v_i^2 + 2a_x\left(v_it + a_x\frac{t^2}{2}\right)\\
       &= v_i^2 + 2a_x(x(t) - x_i).
\end{align*}}}}

Stating that a particle is in ◊em{free fall}, is the same as stating that the particle has a constant acceleration of ◊${g=9.81m/s^2}.

◊heading{Motion in two dimensions}

In two dimensions, the quantities of position, velocity and acceleration form vectors in the plane.
Still we have the familiar relations
◊$${\vec{v}(t) = \diff{\vec{r}}{t} ,\quad \vec{a}(t) = \odiff{2}{\vec{r}}{t} \left( =\diff{\vec{v}}{t}\right).}