<?php

if(isset($_POST['string']) && isset($_POST['find']) && isset($_POST['replace'])){
$string = $_POST["string"];
$find = $_POST["find"];
$replace = $_POST["replace"];

$offset = 0;
$strlen = strlen($find);

if(!empty($string) && !empty($find) && !empty($replace))
  while($strpos = strpos($string,$find,$offset)){

    $offset = $strpos + $strlen;
    $string =substr_replace($string,$replace,$offset,$strlen);
}
echo $string;

}else{
  echo "fill my all files";
}



?>