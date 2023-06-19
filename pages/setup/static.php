<?php
get_comp('head');
render_docs([
    [ 'h1', 'Static Pages' ],
    [ 'p', 'Create a directory "pages" inside your web app, create .php files and place your content within' ],
    [ 'p', 'Any .php file created inside "pages" directory of your web app is called a page and is works automatically by adding page name to url' ],
    [ 'code', 'web_app.com/about' ],
    [ 'p', 'Visiting your web app\'s url with trailing path will load that specific page, in this above instance pages/about.php' ],
    '.pb30',
    [ 'h2', 'Auto Routing' ],
    [ 'p', 'URL routing works automatically in AIO. For example, you can create and directly call any php file created inside pages by adding its path to url' ],
    [ 'code', 'web_app.com/gallery/videos' ],
    [ 'p', 'Above url will make AIO load AIOROOT/apps/web_app/pages/gallery/videos.php' ],
    [ 'p', 'Note: If a page doesn\'t exist, AIO will load the index.php from previous directory' ],
    '.pb30',
    [ 'h2', 'Examples' ],
    'table',
    [ 'th', [ 'URL', 'Page File Location' ] ],
    [ 'td', [ 'delivery_app.com/about', 'root / apps / delivery_app / about.php' ] ],
    [ 'td', [ 'delivery_app.com/reports/sales', 'root / apps / delivery_app / reports / sales.php' ] ],
    [ 'td', [ 'delivery_app.com/reports/sales', 'root / apps / delivery_app / reports / sales / index.php' ] ],
    'table',
]);
docs_nav();
get_comp('foot');