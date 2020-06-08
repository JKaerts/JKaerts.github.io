<?php 
$title="Basic equations of motion";
include("header.php");
?>

<?= topic($title) ?>

<h4 class="heading">Motion in one dimension</h4>

<p>
Suppose a particle moves along a line in a path \(x(t)\).
The velocity (\(v(t)\)) and acceleration (\(a(t)\)) are defined as
\[v(t) := \diff{x}{t}, \quad a(t) := \odiff{2}{x}{t} \left(=\diff{v}{t}\right)\]
</p>
<p>
The <em>particle under constant velocity</em> obeys by definition the differential equation
\[\diff{x}{t} = v_c\]
where \(v_c\) is the given constant velocity.
Given an initial position \(x(0)=x_i\), this problem has a unique solution
\[x(t) = x_i + v_c t.\]
</p>
<p>
The <em>particle under constant acceleration</em> obeys by definition the differential equation
\[\odiff{2}{x}{t} = a_c\]
where \(a_c\) is the given constant acceleration.
Given an initial position \(x(0)=x_i\) and an initial velocity \(v(0) = v_i\), this problem has a unique solution
\[x(t) = x_i + v_it + a_c \frac{t^2}{2}.\]
</p>
<?= exercise() ?>
This last equation is the first of five equations used in elementary motion problems.
From this equation, derive the remaining four:
<ol>
  <li>\(v(t) = v_i + a_c t\)</li>
  <li>\(x(t) = x_i + v(t) - a_c\frac{t^2}{2}\)</li>
  <li>\(x(t) = x_i + \frac{v(t)+v_i}{2}t\)</li>
  <li>\(v(t)^2 = v_i^2 + 2a_c(x(t) - x_i)\)</li>
</ol>
<?= endexercise() ?>
<?= solution() ?>
<ol>
  <li>Take the derivative with respect to \(t\).</li>
  <li><p>From the previous equation, we find that \(v_i = v(t) - a_c t\).
We now find
\[\begin{align*}
x(t) &amp;= x_i + v_it + a_c \frac{t^2}{2}\\
     &amp;= x_i + v(t)t - a_c t^2 + a_c \frac{t^2}{2}\\
     &amp;= x_i + v(t)t - a_c\frac{t^2}{2}.
\end{align*}\]</p></li>
  <li><p>We now have two different expressions for \(x(t)\).
Let's add them together:
\[\begin{align*}
2x(t) &amp;= \left(x_i + v_it + a_c \frac{t^2}{2}\right) + \left(x_i + v(t)t - a_c\frac{t^2}{2}\right)\\
      &amp;= 2x_i + (v_i + v(t))t\\
 x(t) &amp;= x(t) = x_i + \frac{v(t)+v_i}{2}t.
\end{align*}\]</p></li>
  <li><p>We square the expression for \(v(t)\) and find after some algebra that
\[\begin{align*}
v(t)^2 &amp;= v_i^2 + 2v_ia_xt + a_x^2t^2\\
       &amp;= v_i^2 + 2a_x\left(v_it + a_x\frac{t^2}{2}\right)\\
       &amp;= v_i^2 + 2a_x(x(t) - x_i).
\end{align*}\]</p></li>
</ol>
<?= endsolution() ?>
<p>
Stating that a particle is in <em>free fall</em>, is the same as stating that the particle has a constant acceleration of \(g=9.81m/s^2\).
The following exercise is a classic problem of motion in one dimension.
</p>
<?= exercise() ?>
A stone is thrown straight upwards from the top of a building \(50m\) high.
Its initial velocity is \(20\tfrac{m}{s}\).
The stone just misses the edge of the roof on its way down.
<ol>
  <li>Determine the time at which the stone hits its maximal height (the stone is thrown at \(t=0\)).</li>
  <li>Determine the maximal height of the stone.</li>
  <li>Find the velocity of the stone when it again reaches a height of \(50m\).</li>
  <li>Determine the position and the velocity of the stone after \(5s\).</li>
</ol>
<?= endexercise() ?>
<?= solution() ?>
<ol>
  <li>The maximal height of the stone is the turning point of the motion.
  At this point the velocity is zero.
  We can use the formula for velocity in terms of time:
  \[v(t) = v_i - gt\]
  Now \(v(t) = 0\) by the above reasoning so
  \[t = \frac{20}{9.81} = 2.04.\]
  After \(2.04s\) the stone reaches maximal height.</li>
  <li>The height as a function of time is given by
  \[x(t) = 50 - 20t + 9.81\frac{t^2}{2}\]
  where we already took the liberty of entering the values for \(x_i\) and \(v_i\).
  Simply enter the time found above to find
  \[x(2.04) = 70.4.\]
  The maximal height is therefore \(70.4m\), or \(20.4m\) above the roof of the building</li>
  <li></li>
  <li></li>
</ol>
<?= endsolution() ?>

<h4 class="heading">Motion in two dimensions</h4>
<p>
In two dimensions, the quantities of position, velocity and acceleration form vectors in the plane.
Still we have the familiar relations
\[\vec{v}(t) = \diff{\vec{r}}{t} ,\quad \vec{a}(t) = \odiff{2}{\vec{r}}{t} \left( =\diff{\vec{v}}{t}\right).\]
</p>

<?php 
include("footer.php");
?>