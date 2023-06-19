<?php
get_comp('head');
render_docs([
    [ 'h1', 'Custom PHP Functions' ],
    [ 'p', 'Create a directory "functions" inside your web app, create .php files and write your php functions within' ],
    [ 'p', 'they will all be loaded before any page loads' ],
    '.pb30',
    [ 'h2', 'Auto Loading Functions' ],
    [ 'p', 'All php files placed under "functions" directory will be loaded alphabetically by default before loading any pages' ],
    '.pb30',
    [ 'h2', 'Manually Ordering Functions' ],
    [ 'p', 'An easy way is to re-order the loading of your function files is to name alphabetically as per the order you want' ],
    [ 'p', 'OR' ],
    [ 'p', 'You can edit the config and add the following code to structure the order of your functions' ],
    [ 'code', 'functions => [ \'users\', \'students\' ]' ],
    [ 'p', 'With this above config, AIO will include functions/users.php and then functions/students.php' ],
    [ 'p', 'Note: Once you use functions key in your config, functions won\'t auto load unless specified in config' ],
    '.pb30',
    [ 'h2', 'Load by user login status' ],
    [ 'p', 'You can also login functions in specific order based on user login status' ],
    [ 'code', 'functions => [ \'logged_in\' => [ \'users\', \'students\' ], \'logged_out\' => [ \'register\', \'login\' ] ]' ],
]);
docs_nav();
get_comp('head');