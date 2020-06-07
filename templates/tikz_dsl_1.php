<?php 
$title="Creating a small DSL in TikZ, part 1: The primitives";
include("header.php");
?>

<h3 class="topic"><?= $title ?></h3>
<h4 class="heading">Background</h4>
<p>
For a class on linear algebra we added a part on linear system theory a few years ago.
The notes for this part came from an existing set of course notes written in MS Word.
The text was easily added to our LaTeX source files but the figures proved a problem.
These pictures were bitmaps, drawn by the author using a simple drawing program.
An example of such a drawing is given below.
</p>
<p>
<img src=".\images\system_old.jpg"/>
</p>
<p>
This kind of diagram consists of two tanks of water, connected through pipes.
At both ends and in the middle there are three valves (the bowties with a T on top) which control the flow of water.
At the top are two taps which supply new water.
</p>
<p>
Looking at the drawing and the context, there are three problems I wanted to solve.
</p>
<ul>
  <li>There is no quick and easy way to produce such a diagram. This is important in creating exam questions where we want to adjust the diagram a little or create a new one from scratch.</li>
  <li>The lines do not connect cleanly. Between the two tanks, the lines of the pipes overlap with the valve.</li>
  <li>The font of the annotations is different from the font used in the text. This makes for some inconsistent design.</li>
</ul>
<p>
Although only the first point <em>must</em> be fixed, it will be the case that our solution will take care of all three problems at once.
The macros that we will define here are only possible because of TikZ's ability to handle transforms of figures.
In general the approach we use here will work with any drawing system capable of arbitrary affine transforms.
In the case of TeX-based systems, these include MetaPost, Asymptote and (as we'll use here) TikZ.
</p>

<h4 class="heading">The primitive elements</h4>
<p>
A diagram like in the example can be broken down into the following parts:
</p>
<ul>
  <li>a tank of water, filled a given amount,</li>
  <li>a pipe segment, which can be arbitrary long,</li>
  <li>a valve,</li>
  <li>a tap, which can be added onto a pipe.</li>
</ul>
<p>
Since our drawing system includes arbitrary affine transforms, we can certainly scale and translate parts of our drawing.
This allows us to make macros for simple versions of each component, which can be scaled and translated as needed.
Let's put this idea into practice.
</p>
<p>
<subsection>A tank of water</subsection>
</p>
<p>
We will define a macro <tt>\drawtank</tt> which takes one mandatory and one optional argument.
The goal is to make the command <tt>\drawtank{0.3}</tt> draw a tank of 1cm by 1cm which is 30% filled with water.
The optional argument allows us to pass arguments to the tikz drawing commands.
This way we can use <tt>\drawtank{0.7}[shift={(1cm, 2cm)}, xscale=2, yscale=4]</tt> to draw a tank of 2cm by 4cm, 70% filled, with its lower left corner at the coordinates (1cm, 2cm).</p><p>How do we implement this macro? In order to efficiently handle optional arguments we can use the package <tt>xparse</tt>.
</p>
<pre>
\NewDocumentCommand{\drawtank}{ m o }{%
  \def\tank{(0,1) -- (0,0) -- (1,0) -- (1,1)}
  \def\water{(1,#1) -- (0,#1)}
  \IfValueTF{#2}
    {\draw[#2] \tank; \draw[#2] \water;}
    {\draw \tank; \draw \water;}
}
</pre>
</div>

<?php 
include("footer.php");
?>