<?php get_comp('head'); ?>
<article>
    <h1 id="config" class="mb30">Configure your <span class="app">APP</span></h1>
    <p>You can create a file 'config.php' inside your <span class="app">APP</span> directory</p>
    <p>Our App will read the configuration file and use it for your <span class="app">APP</span></p>
    <p class="mb60">NOTE: The file should return following parameters as a Associative PHP Array</p>
    <h3 id="params">Parameters</h3>
    <table class="mb60">
        <thead>
        <tr>
            <td>Parameter Name (Array Key)</td>
            <td>Description</td>
            <td>Example (Array Value)</td>
            <td>Value Type</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>name</td>
            <td>Name of your <span class="app">APP</span></td>
            <td>"Delivery App"</td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>slug</td>
            <td>Short slug for your <span class="app">APP</span></td>
            <td>"DA"</td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>ssl</td>
            <td>Force Redirect URL to SSL</td>
            <td>true</td>
            <td><pre>boolean</pre></td>
        </tr>
        <tr>
            <td>key</td>
            <td>Encryption Key (Don't change once in Use)</td>
            <td>Awesome</td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>debug</td>
            <td>Toggle debug mode, Generate error_log for PHP and console.log for JavaScripts</td>
            <td>false</td>
            <td><pre>boolean</pre></td>
        </tr>
        <tr>
            <td colspan="3" class="tac">The following parameters are optional, necessary only if your <span class="app">APP</span> connects to database</td>
        </tr>
        <tr>
            <td>host</td>
            <td>Database Host</td>
            <td>localhost</td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>database</td>
            <td>Database name</td>
            <td>delivery_db</td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>user</td>
            <td>Database Username</td>
            <td>deli_user</td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>pass</td>
            <td>Database Password</td>
            <td>deli_pass</td>
            <td><pre>string</pre></td>
        </tr>
        </tbody>
    </table>
    <h3 id="sample">Sample config.php</h3>
    <div class="code">
<pre class="lh15">&#60;?php
return [
    'name' => 'Delivery App',
    'slug' => 'da',
    'host' => 'localhost',
    'database' => 'delivery_db',
    'user' => 'deli_user',
    'pass' => 'deli_pass',
    'key' => 'Awesome',
    'debug' => false,
    'ssl' => true
];</pre>
    <div class="copy" data-clipboard-text="return [
    'name' => 'Delivery App',
    'slug' => 'da',
    'host' => 'localhost',
    'database' => 'delivery_db',
    'user' => 'deli_user',
    'pass' => 'deli_pass',
    'key' => 'Awesome',
    'debug' => false,
    'ssl' => true
];">COPY</div>
    </div>
</article>
<div id="links">
    <a href="#config">Top</a>
    <a href="#params">Parameters</a>
    <a href="#sample">Sample Code</a>
</div>
<?php get_comp('foot');