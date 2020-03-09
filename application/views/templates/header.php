<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$current_controller = $this->router->fetch_class();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php if (file_exists(FCPATH.'/assets/css/'.$current_controller.'.css')) {
        echo '<link rel="stylesheet" href="/assets/css/'.$current_controller.'.css'.'">';
    }
    ?>
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</head>
<body>