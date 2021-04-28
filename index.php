<?php
  $quote = 'Sometimes it pays to stay in bed on Monday, rather than spending the rest of the week debugging Monday’s code. – Dan Salomon';
  $word = $_GET["badword"];
?>

<p>Quote: <?php echo $quote ?></p>
<p>Quote length: <?php echo strlen($quote) ?> </p>
<p>Changed quote: <?php echo str_replace($word,'***',$quote) ?></p>
