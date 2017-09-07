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
