<?php
$a=array("a","b","c","d","e");
//echo count($a);      //count:计算个数；相当于lenght
/* for ($i=0;$i<count($a);$i++){
 echo $a[$i]."<br>";
} */
//foreach语句
$b=array("姓名"=>"曲思雨","性别"=>"女","年龄"=>18,"外貌"=>"貌美如花");
//语法一
foreach ($b as $value){
	echo $value."<br>";
}
//语法二
foreach ($b as $key=>$value){
	echo $key."：".$value."<br>";
}