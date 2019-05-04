<?php get_comp('head'); ?>
<article>
    <h1 id="pages" class="mb30">Pages, <small>Routes</small></h1>
    <h3 id="static">Static Pages</h3>
    <p>We made it very easy to create pages and route them via url in our AIO, that you do not have to configure anything</p>
    <p>Previously we created a directory inside AIO, which is your app root.</p>
    <p>You can create a directory named 'pages' inside your <span class="app">APP</span> which will serve your pages (routes)</p>
    <p>Any PHP file created inside pages directory can automatically be visited from your website just by adding name to your url</p>
    <p class="mb60">Similarly you can create directories inside pages and create PHP files inside and visit them, refer to following examples</p>
    <h3 id="static_ex">Example Static Page Routing</h3>
    <table class="mb60">
        <thead>
        <tr>
            <td>Example URL</td>
            <td>File Location</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>www.delivery.com/about</td>
            <td>coreapp / apps / delivery / about.php</td>
        </tr>
        <tr>
            <td>www.delivery.com/reports/sales</td>
            <td>coreapp / apps / delivery / reports / sales.php</td>
        </tr>
        <tr>
            <td>www.games.com/arcade/pacman</td>
            <td>coreapp / apps / games / arcade / pacman.php</td>
        </tr>
        <tr>
            <td>www.homebazar.com/action/drone</td>
            <td>coreapp / apps / homebazar / action / drone.php</td>
        </tr>
        </tbody>
    </table>
    <h3 id="dynamic">Dynamic Pages</h3>
    <p>If you are developing your app that has dynamic pages, the app will load its previous page if page doesn't exist</p>
    <p>And you can call the dynamic parameter as $_GET value with specific alphabet based on its position in url</p>
    <p>For instance, lets say your url is www.university.com/training/courses/programming/swift</p>
    <table class="mb15">
        <tbody>
        <tr>
            <td>www.university.com</td>
            <td>training</td>
            <td>courses</td>
            <td>programming</td>
            <td>swift</td>
        </tr>
        <tr>
            <td>APPURL</td>
            <td><pre>$_GET['a']</pre></td>
            <td><pre>$_GET['b']</pre></td>
            <td><pre>$_GET['c']</pre></td>
            <td><pre>$_GET['d']</pre></td>
        </tr>
        </tbody>
    </table>
    <p>So if swift.php exists inside training/courses/programming/ then it will be loaded or else the app will load programming.php inside training/courses/</p>
    <p>And you can use $_GET['d'] inside your programming.php file and keep changing the url dynamically</p>
    <p class="mb60">Please refer to following examples</p>
    <h3 id="dynamic_ex">Example Dynamic Page Routing</h3>
    <table class="mb30">
        <thead>
        <tr>
            <td>Example URL</td>
            <td>Static Location</td>
            <td>Dynamic Location (When static doesn't exist)</td>
            <td>Dynamic Variable</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>www.university.com/exam/1154</td>
            <td>coreapp / apps / university / exam / 1154.php</td>
            <td>coreapp / apps / university / exam.php</td>
            <td><pre class="dib">$_GET['b']</pre> = 1154</td>
        </tr>
        <tr>
            <td>www.store.com/action/drones/dji-spark</td>
            <td>coreapp / apps / store / action / drones / dji-spark.php</td>
            <td>coreapp / apps / store / action / drones.php</td>
            <td><pre class="dib">$_GET['c']</pre> = dji-spark</td>
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