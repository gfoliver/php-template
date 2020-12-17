<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Do Site<?php echo isset($data['title']) ? ' | '. $title : ''; ?></title>
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
    <link rel="icon" href="<?php echo asset('favicon.ico'); ?>">
</head>
<body data-src="<?php echo base_url(); ?>">
    <div id="app">
        <?php echo view(root_path('partials/menu.php')); ?>
