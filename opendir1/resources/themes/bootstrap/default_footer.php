<br>
<center><div style="padding-right:77.6rem;">

<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("python3 php-b.py");
}
?>

<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
<a href="?run=true">Make!</a>


<?php
if ($_GET['run2']) {
  # This code will run if ?run=true is set.
  exec("python3 php-b2.py");
}
?>

<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
<a href="?run2=true">Remove!</a>

<?php
if ($_GET['newdir']) {
  # This code will run if ?run=true is set.
  exec("python3 php-a1.py");
}
?>

<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
<a href="?newdir=true">Change OpenDir!</a>




</div>
</center>

<div style="float: left;margin-left:45%;">

<hr style="padding-left:55%;">

</div>

<div style="float:right;">

<hr style="padding-right:55%;">



</div>

<table><tr><td style='width:33%'><hr/></td><td style='width:33%'>Hits.</td><td style='width:33%'><hr/></td></tr></table>


<div class="footer">



<div style="text-align: left;padding-left:32%;">

<?php

//seesion_start();

echo "ip ";

	 $str1 = getenv('REMOTE_ADDR');

$str1 = $_SERVER['REMOTE_ADDR'];

echo "$str1";

include 'db/usage.php';

?>

</div>

</div>


