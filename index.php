<?php 

//file path ;
$path='../src';
$files=scandir($path);
//print_r($files);

$a=0;
foreach ($files as $key => $value) { 
   $dt= $path."/".$value ;
   $file_parts = pathinfo($dt); 
   if($file_parts["extension"]=="txt"){ 
       $cs=unlink($dt); 
       if($cs){
          $a++; 
       }
    
}

echo $a;
?>
