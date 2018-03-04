<?php
//For detail about Fiboonacci using dynamic programming. can visit --> https://www.geeksforgeeks.org/dynamic-programming-set-1/
/* Recursive version of Fibonacci */
function fib($n){
  if($n == 0 || $n == 1)
    return $n;
  return fib($n-1)+fib($n-2);
}

echo fib(5);

/* Memoization (Top Down) version of Fibonacci*/
$ar=[];
$ar[0]=0;
$ar[1]=1;
function fibMemoization($n,$lookup){

  if(!isset($lookup[$n])){
     $lookup[$n]=fib($n-1,$lookup)+fib($n-2,$lookup);
    }
 return $lookup[$n];
}
echo fibMemoization(6,$ar);

/* Tabulation (Bottom Up) version of Fibonacci*/
function fibTabulation($n)
{
  $ar=[];
  $ar[0] = 0;   $ar[1] = 1; 
  for ($i = 2; $i <= $n; $i++)
      $ar[$i] = $ar[$i-1] + $ar[$i-2];
 
  return $ar[$n];
}
echo fibTabulation(7);


 ?>