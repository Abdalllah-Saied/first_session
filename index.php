<?php
//Input: n = 3
//Output: [1 2 Fizz]
//
//Input: n = 10
//Output: [1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz]
//
//Input: n = 20
//Output: [1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz]

//input
$number=readline('enter the number: ');
if($number%3==0 && $number%5==0){
    echo "FizzBuzz";
}else if ($number%3==0) {
    echo "Fizz";
}else if ($number%5==0) {
    echo "Buzz";
}else {
    echo $number;
}
$a=10;
$b=20;
//a=a+b;//a=30 (10+20)
//b=a-b;//b=10 (30-20)
//a=a-b;//a=20 (30-10)

