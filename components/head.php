<?php
$styles = 'bootstrap-grid,micro,docs';
$styles = is_mobile() ? $styles.',fluid' : $styles;
$c = new CONTENT();
$c->pre_html('','','','inputs,modal,table,alerts',$styles,'jquery',['Poppins','300,400,500'],['ChivoMono','300,400']);
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