<?php

//一维数组
$a=array("姓名"=>"曲思雨","性别"=>"女","年龄"=>18,"外貌"=>"look like flower");
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<hr>";

//二维数组
$b=array(
		array("姓名"=>"二狗","性别"=>"女","年龄"=>24),
        array("姓名"=>"狗剩","性别"=>"男","年龄"=>19),
        array("姓名"=>"狗蛋","性别"=>"男","年龄"=>21),
        array("姓名"=>"狗子","性别"=>"女","年龄"=>18)
		);
echo "<pre>";
echo $b[2]["年龄"];
echo "</pre>";

echo "<hr>";

//三维数组
$c=array(
		"一班"=>array(
				array("姓名"=>"二狗","性别"=>"女","年龄"=>24),
				array("姓名"=>"狗剩","性别"=>"男","年龄"=>19),
				array("姓名"=>"狗蛋","性别"=>"男","年龄"=>21),
				array("姓名"=>"狗子","性别"=>"女","年龄"=>18)
		),
		"二班"=>array(
				array("姓名"=>"旺财","性别"=>"男","年龄"=>24),
				array("姓名"=>"狗剩","性别"=>"男","年龄"=>19),
				array("姓名"=>"狗蛋","性别"=>"男","年龄"=>21),
				array("姓名"=>"狗子","性别"=>"女","年龄"=>18)
		),
		"三班"=>array(
				array("姓名"=>"二狗","性别"=>"女","年龄"=>24),
				array("姓名"=>"狗剩","性别"=>"男","年龄"=>19),
				array("姓名"=>"狗蛋","性别"=>"男","年龄"=>21),
				array("姓名"=>"狗子","性别"=>"女","年龄"=>18)
		)	
		);
echo "<pre>";
echo $c["二班"][0]["姓名"];
echo "</pre>";
echo "<hr>";

//遍历二维数组
foreach ($b as $key=>$table){
	   
}

//遍历三维数组
foreach ($c as $key=>$table){
	echo "<option>{$key}</option>";
	echo "<table border='2px' cellpadding='10px'>";
	echo "<tr>
	      <th>姓名</th>
	      <th>性别</th>
	      <th>年龄</th>
	      </tr>";
	
	foreach ($table as $rows){
		echo "<tr>";
		foreach ($rows as $cols){
			echo "<td>";
			echo $cols;
			echo "</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>";
	
}
