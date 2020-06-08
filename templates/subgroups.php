<?php 
$title="The subgroup criterion";
include("header.php");
?>

<?= topic($title) ?>

<p>This page is an experiment in gradual exposition for a maths proof.
Try clicking on the plus-signs near the end of the proof.
</p>
<?= theorem() ?>
Let \(H\) be a nonempty subset of a group \(G,*\).
The following three statements are equivalent:
<ol>
  <li>\(H\) is a subgroup of \(G,*\).</li>
  <li>\(\forall x, y\in H: x*y\in H\) and \(x^{-1}\in H\)</li>
  <li>\(\forall x, y\in H: x*y^{-1}\in H\)</li>
</ol>
<?= endtheorem() ?>
<p>
<em>Proof:</em> We first show that the second statement follows from the first. This is immediate from the definition of a group.
</p>
<p>
Now we show that the third statement follows from the second.
Take \(x, y\in H\).
Because \(y\) lies in \(H\), also \(y^{-1}\) lies in \(H\).
Therefore \(x*y^{-1}\) must also lie in \(H\).
</p>
<p>
Finally we show that the first statement follows from the third.
Take an element \(h\in H\).
It is then given that \(h*h^{-1}=e\in H\).
Now that we know \(e\) lies in \(H\) we get for free that <span class="tooltip" onclick="this.classList.toggle('tooltip_visible')">+<span class="tooltip-inner">since \(x^{-1} = e*x^{-1}\)</span></span> for any \(x\in H\), that \(x^{-1}\) also lies in $H$.
For random \(x, y\in H\), therefore, we know that \(x\) and \(y\) lie in \(H\) and hence
\[x*(y^{-1})^{-1} = x*y\in H.\]
This proves that \(*\) is a binary operation on \(H\).
This operation is associative
<span class="tooltip" onclick="this.classList.toggle('tooltip_visible')">+<span class="tooltip-inner">Since \(*\) is an associative operation on \(G\), for every \(x,y,z\in G\) we have that
\[(x*y)*z = x*(y*z).\]
This fact remains when \(x\), \(y\) and \(z\) belong to \(H\).</span></span>
and \(e\) is a neutral element for \(*\).
Moreover, every element \(x\in H\) has an inverse which also belongs to \(H\).
This proves that \(H\) is a group.
</p>
</div>

<?php 
include("footer.php");
?>