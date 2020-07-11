<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentation v1.5</title>
    <?php
    reset_styles( 'Lato,SourceCodePro', '300', 5 );
    fonts([['lato','300,400'],['SourceCodePro','Regular']]);
    art('#333','#ddd');
    favicon('aio');
    get_styles(['bootstrap-grid','inputs','micro','docs']);
    is_mobile() ? get_style('fluid') : '';
    ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php echo is_mobile() ? '<div id="menu" data-on="#menu,#doc_menu"></div>' : ''; ?>
    <div><a href="<?php echo APPURL; ?>" id="brand"></a></div>
    <?php echo is_mobile() ? '<div id="more" data-on="#more,#prime"></div>' : ''; ?>
    <div class="search">
        <input type="text" placeholder="Search Documentation...">
    </div>
    <div>
        <div class="ico lang"></div>
        <div class="ico dark"></div>
    </div>
</header>
<aside>
    <?php get_comp('nav'); ?>
</aside>
<div class="loader on"><i></i></div>
<div id="port">
    <div class="dynamic">