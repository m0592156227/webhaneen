<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>


<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
<?php
function familyName1($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");
?>




<?php
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4). "<br>";
?>




<?php 
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>

<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo  "<br>".$num;
?>