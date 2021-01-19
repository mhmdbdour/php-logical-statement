<?php 

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q1 <br> ";
$bills = 300 ;
$TotalPrice = 0 ;
for ( $i = 1 ; $i <= $bills ; $i++) {

    if ( $i <= 50) {
$TotalPrice += 2.5 ;
    }elseif ( $i <= 150) {
        $TotalPrice += 5 ;

    }elseif ( $i <= 250) {
        $TotalPrice += 6.2 ;

    }elseif ( $i > 250) {
        $TotalPrice += 7.5 ;

    }

}
echo $TotalPrice ;


echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q2 <br> ";
$x = 300 ;
$y = 5 ;
$op = "-";
if (is_numeric($x) && is_numeric($y)) {
  if (($op === "-")) {
    echo  $x - $y ;
  }elseif ($op === "+") {
    echo  $x + $y ;

  }elseif ($op === "*") {
    echo  $x * $y ;

  }elseif ($op === "/") {
    echo  $x / $y ;

  }else {
      echo 'invalid operator';
  }
  
}else {
    echo "invalid numbers";
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q3 <br> ";
$age = 20 ;
if ($age > 18) {
    echo "Go for voting";
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q4 <br> ";
$x = 300 ;
if (is_numeric($x)) {
  if ($x === 0) {
    echo  "Zero" ;
  }elseif ($x > 0)  {
    echo "Positive"  ;

}else {
    echo "Negative";
}}
