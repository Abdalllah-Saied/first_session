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
//$number=readline('enter the number: ');
//if($number%3==0 && $number%5==0){
//    echo "FizzBuzz";
//}else if ($number%3==0) {
//    echo "Fizz";
//}else if ($number%5==0) {
//    echo "Buzz";
//}else {
//    echo $number;
//}
$a=10;
$b=20;
//a=a+b;//a=30 (10+20)
//b=a-b;//b=10 (30-20)
//a=a-b;//a=20 (30-10)



$b='test';
$r ='!#%&*';
$a="hello";
//$a =array(2,3,5,6);
//strlen()
//for($i="a";$i<'y';++$i){
//    echo $i;
//    echo '<br>';
//}
//










//string functions

//- strlen()
echo '<br>';
$str = "Hello world!";
echo strlen($str);

//strrev()
$str = "Hello";
echo '<br>';
echo strrev ($str);
//- strpos()
echo '<br>';
$str = "Hello world!";
echo strpos($str,'world');


//- str_replace()
echo '<br>';
$str = "Hello world!";
echo str_replace("world!","abdullah@",$str);


//- str_word_count()
echo '<br>';
$str = "Hello world! sdfsdf sdfasdfsdf asdfasdf";
echo str_word_count($str);

//- explode()
echo '<br>';
$str = "Hello world. It's a beautiful day.";
$arr= explode(' ',$str);
//print_r($arr);
$a='hello';
echo 'test';echo '<br>';
foreach($a as $le){
    echo $le;
    echo '<br>';
}
for ($i=0; $i<strlen($a); $i++){
    echo $a[$i];
    echo '<br>';
}
echo  'tete'; echo '<br>';

foreach($arr as $word){
//    for ($i=0 ; $i<strlen($word); $i++){
//        echo $word[$i];
//        echo '<br>';
//    }
    echo $word;
    echo '<br>';
}

//- implode()
echo '<br>';
$arr = array('Hello','world!','Beautiful','day!');
echo implode(" ",$arr);

//str_shuffle
echo '<br>';
$str = "Hello";


echo str_shuffle($str);



//substr()// str , offset, length
echo '<br>';

$str = "Hello world. It's a beautiful day.";

//echo 'test:'. substr("Hello world",6,3); // world
echo substr($str,6,5);

function generatePasswrd($length){
    $chars = "abcdefghijklmnopqdsfsdwghmjgsdfrstuvwxyzABhj,hsCDEfdbdFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $str= str_shuffle($chars);
    return substr($str,0,$length);

}
echo '<br>';
echo generatePasswrd(14);
echo '<br>';









//generate password
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";

/// math functions
//pi()
echo '<br>';
echo pi();



//min(3,3,3,3)
echo '<br>';

function getMin($arr){
    $min=$arr[0];
    foreach ($arr as $val){
        if($val<$min)
            $min=$val;
    }
    return $min;
}
$arr=array(3,4,63,-3);
echo getMin($arr);
echo '<br>';
//$min=$arr[0];
//foreach ($arr as $val){
//    if($val<$min)
//        $min=$val;
//}
//echo '<br>';
//echo $min;
//echo '<br>';







//echo min(5,7,9,4,6);





///max(4,4,6.7,4)
echo '<br>';
echo 'test';
$arr=array(3,4,63,-3);
echo max($arr);
echo '<br>';


//abs() get absolute value of number
echo '<br>';
echo abs(-4.7);
echo '<br>';

//sqrt()
echo '<br>';
echo sqrt(64);


//round() round the number to nearest integer
echo '<br>';
echo round (4.4);



//rand(1,1222) generate random number
echo '<br>';
echo rand(1,4);
echo '<br>';



//generate password
echo '<br>';
//echo generatePassword(10);
//function generatePassword(int $length){
//    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
//    $password = substr( str_shuffle( $chars ), 0, $length );
//    return $password;
//}

//uniqId()
echo '<br>';


//
//function reverseNumber($num) {
//    // Reverse the number and remove leading zeroes
//    $reversed = strrev($num);
////    $reversed = ltrim($reversed, '0');
//    return $reversed;
//}
//echo '<br>';
//echo (int)reverseNumber(23330);





// recursive function
