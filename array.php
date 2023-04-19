<?php
$arr=array(1,2,3,4,5,6);
print_r($arr);
echo  count($arr);
echo $arr[2];
echo "<br>".$arr[2];
$arr[2]=9;
print_r($arr);
echo "<br>".$arr[2]."<br>";



?>  

<?php

$arr=array("hello \n","i\n","am\n","kiran\n");
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
}

?>