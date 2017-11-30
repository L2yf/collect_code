##字符串处理

### 1、左右填充

```php   
	$input = "Alien";
	echo str_pad($input, 10);                      // 输出 "Alien     "
	echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // 输出 "-=-=-Alien"
	echo str_pad($input, 10, "_", STR_PAD_BOTH);   // 输出 "__Alien___"
	echo str_pad($input, 6 , "___");               // 输出 "Alien_"
	echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // 输出 "-=-=-Alien"
```

```php
// 九个一组 的组合
// $list 是个二维数组
$i = 1;
foreach ($list as $key => $value) {
    $tempList[] = $value[0];
    if ($i % 9 == 0 || $value == end($list)) {
        $result[] = implode("','", $tempList);
        $tempList = [];
    }
    $i++;
}
```

### laravel 数据填充
```php
<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('zh_CN');

// generate data by accessing properties
for($i=1;$i<100;$i++){
    echo $faker->name;
    echo "<br>";
    echo $faker->email;
    echo "<br>";
      // 'Lucy Cechtelar';
    echo $faker->address;
    echo "<br>";
      // 'Lucy Cechtelar';
    echo $faker->numerify('640#############');
    echo "<br>";
      // 'Lucy Cechtelar';
    echo $faker->date;
    echo "<br>";
      // "426 Jordy Lodge
      // Cartwrightshire, SC 88120-6700"
    echo $faker->phoneNumber;
    echo "<hr>";
      // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
      // et sit et mollitia sed.
      // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
      // sit minima sint.
}
```

### php zip打包
```php
	$zip = new ZipArchive();//新建一个对象
	$zip_file_name =$path.'/xml.zip';
	$add_file_name = $path.'/collage.xml';
	if ($zip->open($zip_file_name, ZipArchive::OVERWRITE) === TRUE) {
	    $zip->addFile($add_file_name,$date.".xml");
	    //在zip更目录添加一个文件,并且命名为in.html,第二个参数可以省略
	    $zip->close();//关闭资源句柄
	}
```
>> 更多解释
```php 
	<?php

	$zip = new ZipArchive();//新建一个对象

	/* 
	$zip->open这个方法第一个参数表示处理的zip文件名。 
	第二个参数表示处理模式，ZipArchive::OVERWRITE表示如果zip文件存在，
	就覆盖掉原来的zip文件。 如果参数使用ZIPARCHIVE::CREATE，
	系统就会往原来的zip文件里添加内容。 如果不是为了多次添加内容到zip文件，
	建议使用ZipArchive::OVERWRITE。 使用这两个参数，如果zip文件不存在，
	系统都会自动新建。 如果对zip文件对象操作成功，$zip->open这个方法会返回TRUE
	*/
	$zip_file_name = 'demo.zip';
	$add_file_name = 'ehr20170716000313.xml';
	if ($zip->open($zip_file_name, ZipArchive::OVERWRITE) === TRUE) {

	    /* ZipArchive类中的所有属性*/
	    echo $zip->status;//Zip Archive 的状态
	    echo $zip->statusSys;//Zip Archive 的系统状态
	    echo $zip->numFiles;//压缩包里的文件数
	    echo $zip->filename;//在文件系统里的文件名，包含绝对路径
	//    echo $zip->comment;//压缩包的注释

	    /* ZipArchive类中的常用方法*/
	//    $zip->addEmptyDir('css');//在zip压缩包中建一个空文件夹，成功时返回 TRUE， 或者在失败时返回 FALSE
	    $zip->addFile($add_file_name);//在zip更目录添加一个文件,并且命名为in.html,第二个参数可以省略
	//    $zip->addFile('index.html','in.html');//在zip更目录添加一个文件,并且命名为in.html,第二个参数可以省略
	//    $zip->addFromString('in.html','hello world');//往zip中一个文件中添加内容
	//    $zip->extractTo('/tmp/zip/');//解压文件到/tmp/zip/文件夹下面
	//    $zip->renameName('in.html','index.html');//重新命名zip里面的文件
	//    $zip->setArchiveComment('Do what you love,Love what you do.');//设置压缩包的注释
	//    $zip->getArchiveComment();//获取压缩包的注释
	//    $zip->getFromName('index.html');//获取压缩包文件的内容
	//    $zip->deleteName('index.html');//删除文件
	//    $zip->setPassword('123456');//设置压缩包的密码
	    $zip->close();//关闭资源句柄
	}else{
	    echo '文件打开失败';
	}

```
### curl模拟post请求
```php
	    //初始化
	    $curl = curl_init();
	    //设置抓取的url
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); //不验证证书
	    //设置头文件的信息作为数据流输出
	    curl_setopt($curl, CURLOPT_HEADER, 0); //不输出头文件内容 0：表示不输出
	    //设置获取的信息以文件流的形式返回，而不是直接输出。
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0); //网页内容是否展示在浏览器上，0表示展示
	    //设置post方式提交
	    curl_setopt($curl, CURLOPT_POST, 1);
	    //设置post数据
	    $post_data = array(
	    	'***'=>'***'
		);		
	    $post_data = http_build_query($post_data);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);	
	    //执行命令//header("content-type:text/html;charset=utf-8");
	    $data = curl_exec($curl);
	    //关闭URL请求
	    curl_close($curl);
```
