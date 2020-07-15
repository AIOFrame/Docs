<?php get_comp('head'); ?>
<article>
    <h1 class="mb30"><?php E('CUSTOM FUNCTIONS'); ?></h1>
    <p><?php E('Create a directory "functions" inside your'); ?> <span class="app">APPPATH</span></p>
    <p><?php E('All php files placed under "functions" folder will be loaded alphabetically by default'); ?></p>
    <p><?php E('You can change the order, include or exclude loading of function files thru config'); ?></p>
    <p><?php E('From this example, logged_in gives the order of functions for users logged in'); ?></p>
    <p><?php E('Similarly logged_out gives the order of functions for users not logged in'); ?></p>
    <div class="code">
<pre class="lh15"><?php pre("<?php
return [
    'name' => 'Delivery App',
    'ssl' => true,
    'key' => 'Awesome',
    'debug' => false,
    'functions' => [
        'logged_in' => [ 
            'contacts',
            'invoices',
            'reports',
            'settings',
            'users'
        ],
        'logged_out' => [
            'login',
            'register'
        ],
]; ?>"); ?></pre>
        <div class="copy" data-clipboard-text="return [
    'name' => 'Delivery App',
    'ssl' => true,
    'key' => 'Awesome',
    'debug' => false,
    'functions' => [
        'logged_in' => [
            'contacts',
            'invoices',
            'reports',
            'settings',
            'users'
        ],
        'logged_out' => [
            'login',
            'register'
        ],
];">COPY</div>
    </div>
</article>
<?php get_comp('foot');