<?php
echo"Exmaple of Assignment operator";

$x = 3;
$y = 4;
$result ="\$x = \$y";
$result1="\$x += \$y";
$result2="\$x -= \$y";
$result3="\$x *= \$y";
$result4="\$x /= \$y";
$result5="\$x %= \$y";
echo "\$x= .$x. <br>"; 
echo "\$y = .$y. <br>";

echo "The value of right operand is assigned to the left operand <br>";
echo "\result = \$x = \$y <br>";
echo "result =".$result;
echo"<br/>========================<br/>";
echo " Addition <br>";
echo "\result1 = \$x += \$y <br>";
$y +=$x;
$result1 =$y;
echo "result1 =".$result1;
echo"<br/>========================<br/>";
echo " Subtraction <br>";
echo "\result2 = \$x -= \$y <br>";
$y -=$x;
$result2 =$y;
echo "result2 =".$result2;
echo"<br/>========================<br/>";
echo " Multiply <br>";
echo "\result3 = \$x *= \$y <br>";
$y *=$x;
$result3 =$y;
echo "result3 =".$result3;
echo"<br/>========================<br/>";
echo " Division <br>";
echo "\result4 = \$x /= \$y <br>";
$y /=$x;
$result4 =$y;
echo "result4 =".$result4;
echo"<br/>========================<br/>";
echo " Mod <br>";
echo "\result5 = \$x %= \$y <br>";
$y %=$x;
$result5 =$y;
echo "result5 =".$result5;
echo"<br/>========================<br/>";
?>