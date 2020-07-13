<?php get_comp('head'); ?>
<article>
    <h1 id="config" class="mb30"><?php E('Configuration'); ?></h1>
    <p><?php E('Config file will let you control your app configuration'); ?></p>
    <p><?php E('Create a file "config.php" inside your '); ?> <span class="app">APP</span></p>
    <p><?php E('AIO will read and configure your app based on your configuration inside config.php'); ?></p>
    <p class="mb60"><?php E('NOTE: The file should return following parameters as a Associative PHP Array'); ?></p>
    <h3 id="params">Parameters</h3>
    <table>
        <thead>
        <tr>
            <td><p><?php E('Parameter (Key)'); ?></p></td>
            <td><p><?php E('Description'); ?></p></td>
            <td><p><?php E('Ex: (Value)'); ?></p></td>
            <td><p><?php E('Value Type'); ?></p></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><p>name</p></td>
            <td><p><?php E('Name of APP'); ?></p></td>
            <td><p><?php E('"Delivery App"'); ?></p></td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td><p>ssl</p></td>
            <td><p><?php E('Redirect to https'); ?></p></td>
            <td><p><?php E('true'); ?></p></td>
            <td><pre>boolean</pre></td>
        </tr>
        <tr>
            <td><p>key</p></td>
            <td><p><?php E('Encryption Key'); ?></p></td>
            <td><p><?php E('Awesome'); ?></p></td>
            <td><pre>string</pre></td>
        </tr>
        <tr>
            <td>debug</td>
            <td><p><?php E('Enable debug mode, PHP logs to error_log, JS logs to console'); ?></p></td>
            <td><p>false</p></td>
            <td><pre>boolean</pre></td>
        </tr>
        </tbody>
    </table>
    <p class="mb60"><?php E('Note: Do not change "key" (Encryption Key) once in use!'); ?></p>
    <h3 id="sample">Sample config.php</h3>
    <div class="code">
<pre class="lh15"><?php pre("<?php
return [
    'name' => 'Delivery App',
    'ssl' => true,
    'key' => 'Awesome',
    'debug' => false,
]; ?>"); ?></pre>
    <div class="copy" data-clipboard-text="return [
    'name' => 'Delivery App',
    'ssl' => true,
    'debug' => false,
    'key' => 'Awesome',
];">COPY</div>
    </div>
</article>
<div id="links">
    <a href="#config"><?php E('Configuration'); ?></a>
    <a href="#params"><?php E('Parameters'); ?></a>
    <a href="#sample"><?php E('Sample Config'); ?></a>
</div>
<?php get_comp('foot');