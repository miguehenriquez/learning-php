<?php
require "functions.php";
require "env.php";
require "Database.php";


$db = new Database($dsn, $username, $password);
$posts = $db->query('select * from posts');

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
// require 'router.php';
