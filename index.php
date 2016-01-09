<?php
/*
    PHP Markov Chain text generator 1.0
    Copyright (c) 2008-2010, Hay Kranen <http://www.haykranen.nl/projects/markov/>
    Fork on Github: < http://github.com/hay/markov >
*/

require 'markov.php';

$texts = array("IAE_1", "IAE_2", "IAE_3", "alice", "calvin", "kant");

if (isset($_POST['submit'])) {
    // generate text with markov library
    $order  = $_REQUEST['order'];
    $length = $_REQUEST['length'];
    $input  = $_REQUEST['input'];
    $ptext  = $_REQUEST['text'];

    if ($input) $text = $input;
    if ($ptext && in_array($ptext, $texts)) {
        $text = file_get_contents("text/".$ptext.".txt");
    }

    if(isset($text)) {
        $markov_table = generate_markov_table($text, $order);
        $markov = generate_markov_text($length, $markov_table, $order);

        if (get_magic_quotes_gpc()) $markov = stripslashes($markov);
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Markov chain text generator by Hay Kranen, tweaked by RAH to make International Art English gibberish</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="wrapper">
    <h1>Markov gibberish generator (International Art English edition)</h1>
    <p>This is a very simple Markov chain text generator. Try it below by entering some
    text or by selecting one of the pre-selected texts available. </p>
    <p>The source code of this generator is available under the terms of the <a href="http://www.opensource.org/licenses/mit-license.php">MIT license</a>. See the original posting on this generator <a href="http://www.haykranen.nl/projects/markov">here</a>.</p>
	<p>This fork adds a (huge) source corpus of <a href="https://www.canopycanopycanopy.com/contents/international_art_english">International Art English</a> (IAE), collected by Richard Alexander Hall. You may find that it generates paragraphs which only require a bit of editing to make them as "coherent" as so much that you've seen (and, if you're me, been very annoyed at) in museums. Want an "Artist Statement?" Click the "GO" button, copy, paste, and edit a bit. Done! This forked code available <a href="https://github.com/r-alex-hall/markov-php">yon</a>.</p>

    <?php if (isset($markov)) : ?>
        <h2>Output text</h2>
        <textarea rows="15" cols="100" readonly="readonly"><?php echo $markov; ?></textarea>
    <?php endif; ?>

    <h2>Input text</h2>
    <form method="post" action="" name="markov">
        <textarea rows="15" cols="100" name="input"></textarea>
        <br />
        <select name="text">
			<option value="IAE_1">International Art English (1), by weirdos worldwide</option>
			<option value="IAE_2">International Art English (2), by weirdos worldwide</option>
			<option value="IAE_3">International Art English (3), by weirdos worldwide</option>
            <option value="">Paste any text into the "input text" as the source</option>
            <option value="alice">Alice's Adventures in Wonderland, by Lewis Carroll</option>
            <option value="calvin">The Wikipedia article on Calvin and Hobbes</option>
            <option value="kant">The Critique of Pure Reason by Immanuel Kant</option>
        </select>
        <br />
        <label for="order">Order</label>
        <input type="text" name="order" value="8" />
        <label for="length">Text size of output</label>
        <input type="text" name="length" value="1360" />
        <br />
        <input type="submit" name="submit" value="GO" />
    </form>
	
<p>Click these links to go to the <a href="http://earthbound.io">earthbound.io</a> home page or <a href="http://earthbound.io/blog">blog.</a></p>
<script type='text/javascript'>
<!--
var s="=q?Qmfbtf!fnbjm!nf!zpvs!gbwpsjuf!fejufe!ps!sbx!pvuqvu!gspn!uijt-!boe0ps!mjolt!up!qmbdft!zpv!qptu!ju;!=b!isfg>#nbjmup;botjcmf2Afbsuicpvoe/jp@tvckfdu>hfofsbufe!JBF!hjccfsjti#?botjcmf2Afbsuicpvoe/jp=0b?=0q?";
m=""; for (i=0; i<s.length; i++) {	if(s.charCodeAt(i) == 28){	  m+= '&';} else if (s.charCodeAt(i) == 23) {	  m+= '!';} else {	  m+=String.fromCharCode(s.charCodeAt(i)-1);	}}document.write(m);//-->
</script>
<h3>Kožarić wrote, "Plaster casts should be viewed as heroes, not pariahs."</h3>
<p>--This here gibberish generator.
<h3>. . . also interrogates how artists choose to perform martyrdom for the helpless victim of gun violence.</h3>
~
</div> <!-- /wrapper -->
</body>
</html>