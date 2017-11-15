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
	    $zip->addFile($add_file_name,$date.".xml");//在zip更目录添加一个文件,并且命名为in.html,第二个参数可以省略
	    $zip->close();//关闭资源句柄
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
	    curl_setopt($curl, CURLOPT_HEADER, 0);					//不输出头文件内容 0：表示不输出
	    //设置获取的信息以文件流的形式返回，而不是直接输出。
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);			//网页内容是否展示在浏览器上，0表示展示
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
