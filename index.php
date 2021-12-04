<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>叶开楗个人博客</title>
</head>

<body>
    <header>
        <h1>我的个人博客</h1>
        <aside>这是描述.</aside>
    </header>

     <hr>
	
<?php
 if (!isset($_GET["p"])) { // 判断是否为空  空为首页
	 
  $hostdir= "./p"; //获取本文件目录的文件夹地址

  $filesnames = scandir($hostdir); //获取也就是扫描文件夹内的文件及文件夹名存入数组 $filesnames

 //print_r ($filesnames);

foreach ($filesnames as $name) {  // 循环输出？ 百度的代码
 
//echo $name; 
$post=substr(strrchr($name, '.'), 1); // 不知道干嘛的 

    if($post=='txt'){ // 判断是否txt 格式
	
		$name = str_replace(".txt","",$name); // 去掉.txt 
		
        $url="http://localhost/?p=".$name;  // 组合成url 
         
        $aurl= "<a href=\"".$url."\">".$name."</a>"; // 输出 a链接 
         
        echo $aurl . "<br/>";
    }
}
	  
	 }else{  // 输出文章页面
		 
	$text = file_get_contents("./p/" .  $_GET["p"] . ".txt");
	echo "<p>" . $text . "</p>";
 }
 ?>
 
     <hr>
     
     <h2>Epilogue</h2>
     <p>@2021  叶开楗所有。</p>
     
 </body>
 </html>
