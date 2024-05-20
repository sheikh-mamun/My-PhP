<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>demo2</title>
</head>
<body>


<?php

// echo "my first php run";

// $food = "burger";
// echo "my favourit " .$food;

// $foods = "pizza";
// echo "my favourit $food";



// access index arrays

// $cars = array ("volve", "BMW", "TOYTOTA");
// echo $cars[1];
// echo "<br>";
// echo $cars[0];


// $cars = array ("volve", "BMW", "TOYTOTA");
// echo $cars[1];
// echo "<br>";
// echo $cars[0];
// echo $cars[2];


// array_pop

// $a = array("kalam","roni","foisal");
// $b = array_pop($a);
// echo $b;


// array_push

// $a=array("rowdra","liza","lucky","kalpona");
//  $b=array_push($a,"afroza");
 	// print_r($a);
	// echo "<br/>";
// 	echo $b;


// array_shift

// $p =array("kolpona","foisal","jamal");
// $q = array_shift($p);
//   print_r($p);
//   echo "<br/>";
//   echo $q;


// array_slice 
// $a =array("jmal","klama","foisal");
// print_r(array_slice($a,2));



// array_splice

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,1,$a2);
// print_r($a1);

// echo "<br>";

// array_unshift

// $a =array("dog","cat");
// $b = array_unshift($a, "cow","elephant" );
// echo $b;
// echo "<br>";
// print_r($b);


// Array unique

// $status = array("dhaka","washington","mirpur","dhaka","Vatican City","dhaka","DC");
// $statusFraq = array_unique($status);
// print_r($statusFraq);

//it is removed the duplicate value of an array


// count_array

// $garden = array("guyava","mango","lichu","dalim","jamrol");
// echo count($garden);

// count values arrays

// $states = array("Washington","Vatican City","Dhaka","DC","Dhaka","DC");
	
// 	$stateFrequency = array_count_values($states);
	
// 		print_r($stateFrequency);
		
//how many times are situated elements in an array



// echo "Today is " . date("Y/m/d") . "<br>";
// echo "Today is " . date("Y.m.d") . "<br>";
// echo "Today is " . date("Y-m-d") . "<br>";
// echo "Today is " . date("1") . "<br>";


// echo "The time is " .date("h:i:sa");

// $d=strtotime("tomorrow");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d=strtotime("next Saturday");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d=strtotime("+3 Months");
// echo date("Y-m-d h:i:sa", $d) . "<br>";


// $startdate = strtotime("friday");
// $enddate = strtotime("+7 weeks", $startdate);
<<<<<<< HEAD

// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);
// }


// cuurent rarray

// $fruits = array ("apple","orange","banana");

// $fruit = current($fruits);

// echo $fruit . "<br>";

// $b = array ("appale", "orange","banana");
// $c = end($b);  // returns banana  

// echo $c;


// date_default_timezone_set("America/New_York");
// echo "The time is " . date("h:i:sa");


// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);

// $d = strtotime ("tommorow");
// echo date ("y-m-d h:i:sa , $d") . "<br>";

// $d=strtotime("next Saturday");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d=strtotime("+3 Months");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// new file create 

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe";
// fwrite($myfile, $txt);
// $txt = "Jane Doe";
// fwrite($myfile, $txt);
// fclose($myfile);

// 


=======

// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);
// }


// echo $_SERVER["SERVER_NAME"];
// echo $_SERVER['HTTP_HOST']


// $_SERVER['HTTP_REFERER']

// $_SERVER['GATEWAY_INTERFACE'];

$_SERVER["HTTPS"]
>>>>>>> 89d7fe546e3b095f47e4aac67d0cac59c8fb0d1f
























?>


  
</body>
</html>