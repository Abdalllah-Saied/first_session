<?php
$str="ooP focuses on the objects that are";
$arr=['a','e','i','o','u'];
$result=[
    'a'=>0,
    'e'=>0,
    'i'=>0,
    'o'=>0,
];
for($i=0;$i<strlen($str);$i++){
    if(in_array($str[$i],$arr)){
        $result[$str[$i]]++;
    }
}
print_r($result);

