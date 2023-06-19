<?php
get_comp('head');
render_docs([
    [ 'h1', 'Defined Variables' ],
    [ 'p', 'As your AIO app is initiated, following variables are defined automatically' ],
    'table',
    [ 'th', [ 'Defined String', 'Description' ] ],
    [ 'td', [ 'ROOTPATH', 'AIO ROOT directory path <br/>Ex: /users/root/www/aio_root' ] ],
    [ 'td', [ 'APPURL', 'Current Application URL based on visiting URL <br/>Ex: https://admin.mystore.com' ] ],
    [ 'td', [ 'APPNAME', 'Current web app Name from config or app directory <br/>Ex: The Amazing App' ] ],
    [ 'td', [ 'APPDIR', 'Current web app directory <br/>Ex: admin' ] ],
    [ 'td', [ 'APPURI', 'Current web app directory URI <br/>https://admin.mystore.com/apps/admin' ] ],
    [ 'td', [ 'APPPATH', 'Current web app server directory path <br/>Ex: /users/root/www/aio_root/apps/admin/' ] ],
    [ 'td', [ 'PAGENAME', 'Current or parent page inside your web app<br>\'product\' for \'www.shop.omega.com/deals/product/45\'<br/>\'deals\' for \'www.shop.omega.com/deals' ] ],
    [ 'td', [ 'PAGEPATH', 'Current page inside your web app<br>\'deals/product\' for \'www.shop.omega.com/deals/product/45\'<br/>\'deals\' for \'www.shop.omega.com/deals' ] ],
    'table',
]);
get_comp('foot');