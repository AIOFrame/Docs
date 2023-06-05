<?php get_comp('head'); ?>
<article>
    <h1 id="dynamic"><?php E('DYNAMIC PAGES'); ?></h1>
    <p><?php E('Dynamic page doesn\'t exist as a file, its loaded programmatically'); ?></p>
    <p><?php E('You can call the dynamic parameter as $_GET value with specific alphabet based on its position in url'); ?></p>
    <p><?php E('For instance, lets say your url is'); ?> university.com/training/courses/programming/swift</p>
    <table class="mb15">
        <thead>
        <tr>
            <td><p>university.com</p></td>
            <td><p>courses</p></td>
            <td><p>courses</p></td>
            <td><p>programming</p></td>
            <td><p>swift</p></td>
        </tr>
        </thead>
        <tbody>
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
            <td><p><?php E('Dynamic File'); ?></p></td>
            <td><p><?php E('Variable'); ?></p></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><p>university.com/student/66215</p></td>
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
<?php
quick_links(['dynamic'=>'Dynamic Pages','dynamic_routes'=>'Routing Example']);
get_comp('foot');