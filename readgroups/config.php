<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'readgroup');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


$connect = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

define('login','<div class="alert alert-danger error">Invalid username or Password</div>');

?>