<?php
$user_name = $_POST['user_name'];
mkdir("../resources/users/$user_name");
mkdir("../resources/users/$user_name/images");
mkdir("../resources/users/$user_name/post");
mkdir("../resources/users/$user_name/connections");
?>