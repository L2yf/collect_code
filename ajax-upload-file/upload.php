<?php

// echo '<pre>';
// var_dump($_POST);
var_dump($_FILES);
// uniqid();
$res = move_uploaded_file($_FILES['pic']['tmp_name'],uniqid().'.jpg');
var_dump($res);