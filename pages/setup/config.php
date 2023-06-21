<?php


 get_comp('head'); 

render_docs([
    ['h1','Configuration'],
    ['p','Config file will let you control your app configuration'],
    ['p','Create a file "config.php" inside your APP'],
    ['p','AIO will read and configure your app based on your configuration inside config.php'],
    ['p','NOTE: The file should return following parameters as a Associative PHP Array'],
    '.mb60',
    ['h3','Parameters'],
    'table',
    ['th', ['Parameter (Key)','Description','Ex: (Value)','Value Type']],
    ['td', ['name','Name of APP ','"Delivery App"','string']],
    ['td', ['ssl','Redirect to https','true','boolean']],
    ['td', ['key','Encryption Key','Awesome','string']],
    ['td', ['debug','Enable debug mode, PHP logs to error_log, JS logs to console','false','boolean']],
    'table',
    ['p','Note: Do not change "key" (Encryption Key) once in use!'],
    '.mb60',
    ['h3','Sample config.php'],
    ['code', "<?php
    return [
        'name' => 'Delivery App',
        'ssl' => true,
        'key' => 'Awesome',
        'debug' => false,
    ]; ?>"],
]);
docs_nav();
get_comp('foot');