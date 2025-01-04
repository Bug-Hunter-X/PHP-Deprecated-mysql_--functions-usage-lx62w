This code uses the `mysql_*` functions, which are deprecated and removed from PHP 7.0 onwards.  Using them leads to security vulnerabilities and compatibility issues.
```php
<?php
$link = mysql_connect("localhost", "username", "password");
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo "Connected successfully";
mysql_close($link);
?>
```