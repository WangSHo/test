<?php
//按值传递
/* function fun($a,$b){
	echo $a+$b;
}
fun(23, 49); */


//引用传递
function example(&$m){
	$m=$m*5+10;
	echo "在函数内：\$m=".$m;
}
$m=10;
example($m);
echo "<p>在函数外: \$m=$m<p>";
echo "<hr>";

//可变函数

function fun(){
	echo "来了";
}
function fun1(){
	echo "走了";
}
$str="fun";
$str.=1;     //$str=fun."1";
$str();

/* $a="fun1";
$a(); */
echo "<hr>";
 

//回调函数
//例一：
function one($a){
	return $a%3==0;
}
function two($a){
	return $a%2==0;
}
function a($fun){
	for($i=1;$i<=100;$i++){
		if ($fun($i)==true){
			echo $i."\n";
		}
	}
}
a("two");
echo "<br>";
a("one");


echo "<hr>";

//例二
function test($x,$y){
	return $x*$y;
}
function test1($x,$y){
	return $x*$x+$y*$y;
}
function sum($a,$b,$fun){
	return $a*$b+$fun($a,$b);	
} 
echo sum(10, 5, "test");    //100
echo "<br>";
echo sum(10, 5, "test1");   //175




















