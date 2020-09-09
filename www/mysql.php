<?php

$con=mysqli_connect('mysql','root','123456','test');//登陆数据库并进入里面的test数据库
if($con){
	// print("连接成功");
	// mysqli_select_db('test',$conn);
	$result=mysqli_query($con,"SELECT * FROM test");//对test数据库进行SQL语句操作SELECT * FROM class1，并将结果作为一个对象返回
	$result_arr=mysqli_fetch_assoc($result);//将数据读成一个数组
	print_r($result_arr);
var_dump($result_arr);
}else{
	echo "连接失败";
}

