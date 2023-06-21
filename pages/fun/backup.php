<?php
get_comp('head');
render_docs([
    [ 'h1', 'BACKUP()' ],
    [ 'p', 'AIO gives you functionality to backup or restore your full database' ],
    '.pb30',
    [ 'h2', 'Pre Requisite' ],
    [ 'p', 'Make sure you add \'backup\' in features in your web app config' ],
    [ 'p', docs_config() ],
    '.pb30',
    [ 'h2', 'Initiate' ],
    [ 'p', 'Call the BACKUP() class and assign it to any variable' ],
    [ 'code', '$bk = new BACKUP();' ],
    '.pb30',
    [ 'h2', 'Usage' ],
    'plain',
    [ 'tr', [ 'Function' ] ],
    'plain',
]);
docs_nav();
get_comp('foot');