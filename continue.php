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


echo "<hr>";


//continue与break
$a=1;
while (true){
	if($a==2){
		$a++;
		continue;    //continue:跳出当前语句
	}
	else if ($a==5){
		break;		//break:跳出整个循环体
	}
	else {
		echo $a;
	}
	$a++;
}
   echo $a;







  