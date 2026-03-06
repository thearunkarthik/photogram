<?php
error_reporting( E_ALL & ~E_NOTICE);
error_reporting(-1);
ini_set('error_reporting', E_ALL & ~E_NOTICE);


if (Null == 0 and false == NULL and false == 0){
    print("NULL == 0 and false == NULL and false == 0<br>\n");
}
?>




<?php

$int1 = 10; //positive Number
print($int1);
$int2 = -34; //Negative Number
$int3 = 0; //Zero
$int4 = 012; //Octal Number
$int5 = 0x1A; //Hexadecimal Number
$int6 = 0b1010; //Binary Number



print($int1);


print("$int1 + $int2)<br>\n");
print("$int1 - $int2)<br>\n");
print("$int1 * $int2)<br>\n");
print("$int1 / $int2)<br>\n");





$float1 = 3.14; //Positive Float
$float2 = -2.5; //Negative Float
$float3 = 0.0; //Zero Float


?>



<?php
$num = 0;
$num = $num + 1; // Incrementing the value of num by 1
print($num . "<br>\n"); // Output: 1

?>




<!-- Multiline string -->
<?php

$doc = <<<"Arun"
My 
Name 
is 
Nan than da 
Arun;
print($doc . "<br>\n");
?>



<!-- Arrays -->
<hr>
<h2>Array</h2>
<hr>
<?php
// for loop condition


$arr = [1, 2, 3, 4, 5];

$dummy_array = [3, 4, 5, 6, 7];
echo $dummy_array[2];


$arr = [1, 2.5, "String", 012, true, 0xff, $dummy_array ];
printf("%s \n", gettype($arr[$i]));

for($i=0; $i<5; $i++){
    printf("%d", $arr[$i] . "<br>\n");
}

?>

<?php
$arunarray = [
    "one" => 1,
    "two" => 12.5,
    "three" => "String",
    "four" => 012, 
    "five" => 2323,
    6 => True,
    7 => 0xff,
    8 => $dummy_array
    ];


    echo $arunarray["three"] ."<br>\n";
    echo $arunarray[0];
?>
<hr>
<?php 
$ak = [1, 12.5, "karthik", 012, true,];
 print_r(array_flip($ak));
?>
   
<hr></hr>
<?php 
// print_r($ak);
$flip = array_flip($arunarray);
print_r($flip);

function testfunc ($value, $key){
    print("$key: $value<br>\n");
}

array_walk($flip, 'testfunc');


if(array_key_exists("two", $arunarray)){
   print("This key is exist");
} else {
    print("it's Not Exist");
}

?>

<hr>

<pre>
    <?php 
    print_r($flip);
    print_r(array_chunk($arunarray, 3, true));
    ?>
</pre>

<hr>
<pre>
<?php
// array pad
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 12 ];
print_r(array_pad($arr1, 12, 15));

?>
</pre>

<hr>


Real life example and implementation of Array
