<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentation v1.0</title>
    <?php
    font(['lato','300,400']);
    art('#333','#ddd');
    get_styles(['reset','inputs','shorts','docs']);
    ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div id="brand"></div>
    <nav id="prime">
        <ul>
            <li><a href="<?php echo APPURL; ?>">App</a></li>
            <li><a href="<?php echo APPURL; ?>features">Features</a></li>
            <li><a href="<?php echo APPURL; ?>docs">Docs</a></li>
            <li><a href="<?php echo APPURL; ?>github">Github</a></li>
            <li><a href="<?php echo APPURL; ?>issues">Issues</a></li>
            <li><a href="<?php echo APPURL; ?>support">Support</a></li>
            <li><a href="<?php echo APPURL; ?>contact">Contact</a></li>
        </ul>
    </nav>
</header>
<?php get_comp('nav'); ?>
