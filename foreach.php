<?php
$a=array("a","b","c","d","e");
//echo count($a);      //count:����������൱��lenght
/* for ($i=0;$i<count($a);$i++){
 echo $a[$i]."<br>";
} */
//foreach���
$b=array("����"=>"��˼��","�Ա�"=>"Ů","����"=>18,"��ò"=>"ò���绨");
//�﷨һ
foreach ($b as $value){
	echo $value."<br>";
}
//�﷨��
foreach ($b as $key=>$value){
	echo $key."��".$value."<br>";
}