<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
?>


<?php
for ($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*" ;
    }
    echo "<br>";
}
?>


<?php
for ($i=0;$i<=5;$i++){
    for($j=5-$i
    ;$j>=1;$j--){
        echo "*" ;
    }
    echo "<br>";
}

?>



<?php
$count = 5;
while($count <= 15)
{
  echo $count;
  echo "<br>" ;

  $count++;
}
?>



<?php
$num = 3;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "The factorial of $num is $factorial";

?>
