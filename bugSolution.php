This updated code uses the `mysqli_*` functions which are secure and compatible with modern PHP versions.
```php
<?php
$link = new mysqli("localhost", "username", "password", "database_name");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}
echo "Connected successfully";
$link->close();
?>
```
Consider using PDO for improved database abstraction and security: 
```php
<?php
$pdo = new PDO('mysql:host=localhost;dbname=database_name', 'username', 'password');
if (!$pdo) {
die('Could not connect: ' . $pdo->errorInfo());
}
echo "Connected successfully";
?>
```
Remember to replace placeholders like "localhost", "username", "password", and "database_name" with your actual database credentials.