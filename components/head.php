<?php
$styles = 'bootstrap-grid,micro,docs';
$styles = is_mobile() ? $styles.',fluid' : $styles;
$c = new CODE();
$c->pre_html('','','','','','inputs,modal,buttons,table,alerts,icons',$styles,'jquery',['Poppins','300,400,500'],['AnonymousPro','400'],'MaterialIcons');
?>
<header>
    <?php echo is_mobile() ? '<div id="menu" data-on="#menu,#doc_menu"></div>' : ''; ?>
    <div><a href="<?php echo APPURL; ?>" id="brand"></a></div>
    <?php echo is_mobile() ? '<div id="more" data-on="#more,#prime"></div>' : ''; ?>
    <div class="search">
        <input type="text" placeholder="Search Documentation...">
    </div>
    <div>
        <div class="icon lang"></div>
        <div class="icon dark"></div>
    </div>
</header>
<?php get_comp('nav'); ?>
<div class="loader on"><i></i></div>
<div id="port">
    <div class="dynamic">
        <article>