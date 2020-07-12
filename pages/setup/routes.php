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
    <div class="mb60"></div>
    <h1 id="dynamic"><?php E('DYNAMIC PAGES'); ?></h1>
    <p><?php E('Dynamic page doesn\'t exist as a file, its loaded programmatically'); ?></p>
    <p><?php E('You can call the dynamic parameter as $_GET value with specific alphabet based on its position in url'); ?></p>
    <p><?php E('For instance, lets say your url is'); ?> www.university.com/training/courses/programming/swift</p>
    <table class="mb15">
        <tbody>
        <tr>
            <td><p>www.university.com</p></td>
            <td><p>courses</p></td>
            <td><p>courses</p></td>
            <td><p>programming</p></td>
            <td><p>swift</p></td>
        </tr>
        <tr>
            <td><p>APPURL</p></td>
            <td><pre>$_GET['a']</pre></td>
            <td><pre>$_GET['b']</pre></td>
            <td><pre>$_GET['c']</pre></td>
            <td><pre>$_GET['d']</pre></td>
        </tr>
        </tbody>
    </table>
    <p><?php E('Ex: If swift.php exists inside training/courses/programming/ then it will be loaded or else the app will load programming.php inside training/courses/'); ?></p>
    <p><?php E('You can use $_GET[\'d\'] inside your programming.php file and keep changing the url dynamically'); ?></p>
    <table class="mb30">
        <thead>
        <tr>
            <td><p><?php E('Example URL'); ?></p></td>
            <td><p><?php E('Dynamic Location (When physical file doesn\'t exist)'); ?></p></td>
            <td><p><?php E('Variable'); ?></p></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><p>www.university.com/student/66215</p></td>
            <td><p>root / apps / university / student.php</p></td>
            <td><p><pre class="dib">$_GET['b']</pre> = 66215</p></td>
        </tr>
        <tr>
            <td><p>www.store.com/action/drones/dji-spark</p></td>
            <td><p>coreapp / apps / store / action / drones.php</p></td>
            <td><p><pre class="dib">$_GET['c']</pre> = dji-spark</p></td>
        </tr>
        </tbody>
    </table>
</article>
<div id="links">
    <a href="#static">Static Pages</a>
    <a href="#static_ex">Example Static Page Routing</a>
    <a href="#dynamic">Dynamic Pages</a>
    <a href="#dynamic_ex">Example Dynamic Page Routing</a>
</div>
<?php get_comp('foot');