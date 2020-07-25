#lang pollen

◊topic{Basic equations of motion}

◊heading{Motion in one dimension}

Suppose a particle moves along a line in a path \(x(t)\).
The velocity (\(v(t)\)) and acceleration (\(a(t)\)) are defined as
\[v(t) := \diff{x}{t}, \quad a(t) := \odiff{2}{x}{t} \left(=\diff{v}{t}\right)\]

The ◊em{particle under constant velocity} obeys by definition the differential equation
\[\diff{x}{t} = v_c\]
where \(v_c\) is the given constant velocity.
Given an initial position \(x(0)=x_i\), this problem has a unique solution
\[x(t) = x_i + v_c t.\]

The ◊em{particle under constant acceleration} obeys by definition the differential equation
\[\odiff{2}{x}{t} = a_c\]
where \(a_c\) is the given constant acceleration.
Given an initial position \(x(0)=x_i\) and an initial velocity \(v(0) = v_i\), this problem has a unique solution
\[x(t) = x_i + v_it + a_c \frac{t^2}{2}.\]

◊exercise{
This last equation is the first of five equations used in elementary motion problems.
From this equation, derive the remaining four:
◊numbered-list{
\(v(t) = v_i + a_c t\)


\(x(t) = x_i + v(t) - a_c\frac{t^2}{2}\)


\(x(t) = x_i + \frac{v(t)+v_i}{2}t\)


\(v(t)^2 = v_i^2 + 2a_c(x(t) - x_i)\)}}
◊solution{◊numbered-list{
Take the derivative with respect to \(t\).


From the previous equation, we find that \(v_i = v(t) - a_c t\).
We now find
\[\begin{align*}
x(t) &amp;= x_i + v_it + a_c \frac{t^2}{2}\\
     &amp;= x_i + v(t)t - a_c t^2 + a_c \frac{t^2}{2}\\
     &amp;= x_i + v(t)t - a_c\frac{t^2}{2}.
\end{align*}\]


We now have two different expressions for \(x(t)\).
Let's add them together:
\[\begin{align*}
2x(t) &amp;= \left(x_i + v_it + a_c \frac{t^2}{2}\right) + \left(x_i + v(t)t - a_c\frac{t^2}{2}\right)\\
      &amp;= 2x_i + (v_i + v(t))t\\
 x(t) &amp;= x(t) = x_i + \frac{v(t)+v_i}{2}t.
\end{align*}\]


We square the expression for \(v(t)\) and find after some algebra that
\[\begin{align*}
v(t)^2 &amp;= v_i^2 + 2v_ia_xt + a_x^2t^2\\
       &amp;= v_i^2 + 2a_x\left(v_it + a_x\frac{t^2}{2}\right)\\
       &amp;= v_i^2 + 2a_x(x(t) - x_i).
\end{align*}\]}}

Stating that a particle is in ◊em{free fall}, is the same as stating that the particle has a constant acceleration of \(g=9.81m/s^2\).
The following exercise is a classic problem of motion in one dimension.

◊exercise{
A stone is thrown straight upwards from the top of a building \(50m\) high.
Its initial velocity is \(20\tfrac{m}{s}\).
The stone just misses the edge of the roof on its way down.
◊numbered-list{
Determine the time at which the stone hits its maximal height (the stone is thrown at \(t=0\)).


Determine the maximal height of the stone.


Find the velocity of the stone when it again reaches a height of \(50m\).


Determine the position and the velocity of the stone after \(5s\).}}
◊solution{◊numbered-list{
The maximal height of the stone is the turning point of the motion.
At this point the velocity is zero.
We can use the formula for velocity in terms of time:
\[v(t) = v_i - gt\]
Now \(v(t) = 0\) by the above reasoning so
\[t = \frac{20}{9.81} = 2.04.\]
After \(2.04s\) the stone reaches maximal height.


The height as a function of time is given by
\[x(t) = 50 - 20t + 9.81\frac{t^2}{2}\]
where we already took the liberty of entering the values for \(x_i\) and \(v_i\).
Simply enter the time found above to find
\[x(2.04) = 70.4.\]
The maximal height is therefore \(70.4m\), or \(20.4m\) above the roof of the building


TODO


TODO}}

◊heading{Motion in two dimensions}

In two dimensions, the quantities of position, velocity and acceleration form vectors in the plane.
Still we have the familiar relations
\[\vec{v}(t) = \diff{\vec{r}}{t} ,\quad \vec{a}(t) = \odiff{2}{\vec{r}}{t} \left( =\diff{\vec{v}}{t}\right).\]