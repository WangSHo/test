<?php
//��ֵ����
/* function fun($a,$b){
	echo $a+$b;
}
fun(23, 49); */


//���ô���
function example(&$m){
	$m=$m*5+10;
	echo "�ں����ڣ�\$m=".$m;
}
$m=10;
example($m);
echo "<p>�ں�����: \$m=$m<p>";
echo "<hr>";

//�ɱ亯��

function fun(){
	echo "����";
}
function fun1(){
	echo "����";
}
$str="fun";
$str.=1;     //$str=fun."1";
$str();

/* $a="fun1";
$a(); */
echo "<hr>";
 

//�ص�����
//��һ��
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

//����
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




















