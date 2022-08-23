<?php
//1
function factorial_of_a_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_of_a_number($n-1);
    }
	}
print_r(factorial_of_a_number(10)."\n");
?>





<?php
//2
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {

      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(2);
if ($a==0)   
echo "<br>".'This is not a Prime Number.....'."\n";
else

echo "<br>".'This is a Prime Number..'."\n";
?>






<?php
//3
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('1234')."\n");
?>

<?php
// PHP program to reverse a string using strrev()

function Reverse($str){
	return strrev($str);
}

// Driver Code
$str = "Hello Word";
echo Reverse($str)
?>












<?php
//4
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo check_palindrome('madam')."\n";
?>
<?php
function Palindrome($string){ 
    if (strrev($string) == $string)
    { 
        return 1; 
    }
    else
    {
        return 0;
    }
} 
$a = "1211";
if(Palindrome($a))
{ 
    echo "Palindrome"; 
}
else
 { 
echo "Not a Palindrome"; 
}