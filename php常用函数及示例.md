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
