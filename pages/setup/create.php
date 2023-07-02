<?php get_comp('head');

render_docs([
    //['h1','Setup Wizard'],
    //'.mb30',
    //['p','The setup wizard will run once you visit your domain, after your have pointed your domain to root of AIO'],
    //['p','You can choose Fonts, Styles & Scripts, even setup pages and sub pages during setup'],
    //'.mb60',
    /* ['code','root / AIO, Domain Root
    ├─ apps
    │  ├─ instafood 1 Create your APP directory
    │  │  ├─ assets 2 Create your assets directory
    │  │  │  ├─ scripts 2.1 Create scripts dir, place your scripts here
    │  │  │  └─ styles 2.2 Create styles dir, place your styles here
    │  │  ├─ components 3. Create components dir, place html and php components here
    │  │  ├─ functions 4. Create functions dir, place your function files here
    │  │  └─ pages 5. Create pages dir, place your pages here
    │  └──── config.php 6. Create config.php file, configure your app
    ├─ assets
    ├─ core
    └─ index.php'], */
    ['h2','Creating App'],
    [ 'p', 'First step is to create a directory inside aio_root/apps/ named same as your domain / sub-domain without tld' ],
    [ 'p', _render_image( ASSETURI . 'images/create/app.svg', 'Create AIO App', 'artwork', 'img' ) ],
    [ 'p', 'Ex: walletsy.com web app directory should be "walletsy", structure should be aio_root/apps/walletsy' ],
    //[ 'p', 'Ex: crm.walletsy.com app directory should be "crm", structure should be aio_root/apps/crm' ],
    //[ 'p.tip', 'Before starting, please refer to <a href="setup/structure">AIO Structure</a> for visual understanding' ],
    '.pt60',
    ['h2','Pages'],
    ['p','Create a directory named "pages" inside your app directory, create php files within pages and AIO does page routing automatically!'],
    ['p','You can start visiting the pages by appending page name to your domain without .php extension'],
    [ 'p', _render_image( ASSETURI . 'images/create/pages.svg', 'Create Pages', 'artwork', 'img' ) ],
    ['p','Ex: pages/orders/expenses.php can be accessible by visiting your walletsy.com/orders/expenses'],
    '.pt60',
    ['h2','Assets'],
    ['p','Create a directory named "assets" inside your app directory, create 3 directories "styles", "scripts", "fonts"'],
    ['p','Place your asset files in relative folders and you can start utilizing them instantly with single line functions'],
    [ 'p', _render_image( ASSETURI . 'images/create/assets.svg', 'Setup Assets', 'artwork', 'img' ) ],
    [ 'p.tip', 'If you use get_style() to call a stylesheet or script multiple times, AIO will automatically detect and load it once!'],
    '.pt60',
    ['h2','Functions'],
    ['p','Create a directory "functions" and write your functions in independent php files'],
    ['p','All these files will be included automatically in alphabetical order before visited page content is rendered!'],
    [ 'p', _render_image( ASSETURI . 'images/create/functions.svg', 'Custom Functions', 'artwork', 'img' ) ],
    [ 'p.tip', 'You can <a href="'.APPURL.'setup/config">manually configure</a> the order of functions loaded, limit them by user logged in or logged out status.'],
    '.pt60',
    ['h2','Components'],
    ['p','Create a directory "components" and place content in php files'],
    ['p','You can use files repetitively in various pages or even in components'],
    [ 'p', _render_image( ASSETURI . 'images/create/components.svg', 'Components', 'artwork', 'img' ) ],
    '.pt60',
    [ 'p.tip', 'AIO can serve you multiple web apps from single root, app pages are rendered based on the domain you are visiting from' ],
]);


docs_nav();
get_comp('foot');