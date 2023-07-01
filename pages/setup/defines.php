<?php
get_comp('head');
$root_path = '/users/john/documents/public_html/aio_www/';
$defines = [
    [ 'ROOTPATH', 'AIO ROOT directory path relative to system', 'Ex: '.$root_path, 'Used when including a file in php relative to project directory position in system' ],
    [ 'COREPATH', 'AIO core files directory path', 'Ex: '.$root_path.'core/' ],
    [ 'INCPATH', 'AIO includes path that contains core functionalities', 'Ex: '.$root_path.'core/includes/' ],
    [ 'EXTPATH', 'AIO external dependencies directory path where vendor exists', 'Ex: '.$root_path.'core/external/' ],
    [ 'VENDORPATH', 'AIO external dependencies vendor directory path', 'Ex: '.$root_path.'core/external/vendor' ],
    [ 'VENDORLOAD', 'AIO external dependencies vendor autoload.php path', 'Ex: '.$root_path.'core/external/vendor/autoload.php' ],
    [ 'APPPATH', 'Current web app directory path relative to system', 'Ex: '.$root_path.'apps/my_store/' ],
    [ 'PAGEPATH', 'Path to current page inside your web app excluding domain', 'Ex: '.PAGEPATH ],
    [ 'PAGELOAD', 'Path to current page relative to system', 'Ex: '.$root_path.'apps/my_store/users/new' ],
    'break',
    [ 'APPURL', 'Current web app URL', 'Ex: https://my_store.com' ],
    [ 'APPURI', 'Current web app directory URI', 'Ex: https://my_store.com/apps/my_store' ],
    [ 'APPNAME', 'Current web app name from options or config or app directory', 'Ex: ABC Store or ABC Delivery App' ],
    [ 'APPDIR', 'Current web app directory', 'Ex: my_store or admin' ],
    [ 'PAGENAME', 'Current page inside your web app', 'Ex: users or contacts or orders', 'Based on the page user currently is in' ],
    [ 'PAGE', 'Same as above' ],
    'break',
    [ 'CONFIG', 'Config array', '', 'Returns config as array' ],
    [ 'LOGGED_IN', 'Returns 1 if user logged in' ],
    [ 'BASELANG', 'Base Language', 'Ex: en' ],
    [ 'FAKER', 'Returns Faker Locale' ],
];
$data = [
    [ 'h1', 'Defined Variables' ],
    [ 'p', 'As your AIO app is initiated, following variables are defined automatically' ],
];
foreach( $defines as $d ) {
    if( $d == 'break' ) {
        $data[] = '.pb60';
    } else {
        $data[] = '.pb30';
        $data[] = [ 'h2', $d[0] ];
        $data[] = [ 'p', ($d[1] ?? '') ];
        $data[] = 'plain';
        $data[] = [ 'td', [ code( $d[0] ), '', '', '' ] ];
        $data[] = 'plain';
        $data[] = [ 'p', ($d[2] ?? '') ];
        $data[] = [ 'p', ($d[3] ?? '') ];
    }
}
$data[] = '.pb60';
$data[] = [ 'h2', 'Database' ];
$data[] = 'table';
$data[] = [ 'th', [ 'Defined', 'Description', 'Example' ] ];
$data[] = [ 'td', [ code('DB_TYPE'), 'Database type, if and as defined in config', 'Ex: 127.0.0.1 or localhost' ] ];
$data[] = [ 'td', [ code('DB_HOST'), 'Database host ip or domain', 'Ex: mysql or mssql' ] ];
$data[] = [ 'td', [ code('DB_BASE'), 'Database name, if defined in config', 'Ex: my_store_live' ] ];
$data[] = [ 'td', [ code('DB_USER'), 'Database username, if defined in config', 'Ex: my_store_user' ] ];
$data[] = [ 'td', [ code('DB_PASS'), 'Database access password', '' ] ];
$data[] = [ 'td', [ code('APPCON'), '1 or 0 based on connection is established', '' ] ];
$data[] = 'table';
render_docs( $data );
/*
 * [ 'th', [ 'Defined String', 'Description' ] ],
    [ 'td', [ code('PAGENAME'), '<div class="mb15">Current or parent page inside your web app</div>\'product\' for \'www.shop.omega.com/deals/product/45\'<br/>\'deals\' for \'www.shop.omega.com/deals' ] ],
    'table',
 */
docs_nav();
get_comp('foot');