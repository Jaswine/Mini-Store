<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="/styles/main.css">

    <title>Mini Store</title>
</head>
<body>

<?php 
    $user_id = '';
    $user_email = '';
    $user_username = '';

    if (isset($_COOKIE['UserID'])) {
        $user_id = $_COOKIE['UserID'];
        $user_email = $_COOKIE['UserEmail'];
        $user_username = $_COOKIE['UserUsername'];
    }
?>

<?php if(isset($_COOKIE['UserID'])) {?>

<header>
    <div class="">
        <a href="/product_list.php">Product List</a>
        <a href="/dashboard.php">Dashboard</a>
        <a href="/profile.php"><?=$user_username?></a>
        <a href="/logout">Logout</a>
    </div>
</header>

<?php } ?>