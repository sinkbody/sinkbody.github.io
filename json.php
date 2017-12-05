<?php
	// 生成一个PHP数组
	$data = array();
	$data['a'] = $_POST["name"];
	$data['b'] = $_POST["word"];
	 
	// 把PHP数组转成JSON字符串
	$json_string = json_encode($data);
	 
	// 写入文件
	file_put_contents('js/test.json', $json_string, FILE_APPEND);
	
	// 从文件中读取数据到PHP变量
//	$json_string = file_get_contents('js/test.json');
	 
	// 把JSON字符串转成PHP数组
//	$data = json_decode($json_string, true);
	 
	// 显示出来看看
//	var_dump($data);
print_r(file("js/test.json"));
//echo $data
?>