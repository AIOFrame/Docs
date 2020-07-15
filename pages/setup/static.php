<?php get_comp('head'); ?>
<article>
    <h1 id="static"><?php E('STATIC PAGES'); ?></h1>
    <p><?php E('Create a directory named \'pages\' inside your web app'); ?>
    <p><?php E('Any php file created inside \'pages\', becomes a page'); ?></p>
    <p>Ex: http://instafood.com/about = root/apps/instafood/pages/about.php</p>
    <p><?php E('You can also create directories inside pages and create PHP files inside, refer to following examples'); ?></p>
    <p><?php E('Tip: If a page doesn\'t exist AIO will render the index.php from previous directory'); ?></p>
    <table>
        <thead>
        <tr>
            <td><p><?php E('Example URL'); ?></p></td>
            <td><p><?php E('File Location'); ?></p></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><p>www.delivery.com/about</p></td>
            <td><p>root / apps / delivery / about.php</p></td>
        </tr>
        <tr>
            <td><p>www.delivery.com/reports/sales</p></td>
            <td><p>root / apps / delivery / reports / sales.php</p></td>
        </tr>
        <tr>
            <td><p>www.delivery.com/reports/sales</p></td>
            <td><p>root / apps / delivery / reports / sales / index.php</p></td>
        </tr>
        <tr>
            <td><p>www.games.com/arcade/pacman</p></td>
            <td><p>root / apps / games / arcade / pacman.php</p></td>
        </tr>
        </tbody>
    </table>
</article>
<div id="links">
    <a href="#static">Static Pages</a>
    <a href="#static_ex">Example Static Page Routing</a>
</div>
<?php get_comp('foot');