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
