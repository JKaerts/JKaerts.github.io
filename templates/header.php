<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <script type="text/javascript" id="MathJax-script" async
      src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
    </script>
    <script type="text/javascript">
      window.MathJax = {
        tex: {
          macros: {
            R: "{\\mathbb{R}}",
            C: "{\\mathbb{C}}",
            dd: "{\\mathrm{d}}",
            diff: ["{\\frac{\\dd #1 }{\\dd #2 }}", 2],
            odiff: ["{\\frac{\\dd^{#1} #2}{\\dd #3^{#1}}}", 3]
          }
        }
      };
    </script>
    <link rel="stylesheet" href="stijl.css">
  </head>
  <body>
	<header>
      <h1>Jonas Kaerts</h1>
      <nav>
        <a href="./documenten.html">schrijfsels</a>
        -
        <a href="./links.html">links</a>
        -
        <a href="./about.html">over</a>
      </nav>
      <hr/>
	</header>