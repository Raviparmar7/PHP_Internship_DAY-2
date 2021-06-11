<?php 

function palindrom($number){
   $temp = $number;
   $new = 0;
   while (floor($temp)) {
     $d = $temp % 10;
     $new = $new * 10 + $d;
     $temp = $temp/10;
}
if($new == $number) { 
     return 1;
}
else{
     return 0;
   }
}
$original = 1441;
if(palindrom($original)){
    echo "palindrom";
}
else{
echo "Not a palindrom";
}
?>