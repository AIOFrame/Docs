<?php
get_comp('head');
render_docs([
    [ 'h1', 'Styles & Scripts' ],
    [ 'p', 'Create a dir "assets" inside your web app and add "styles" and "scripts" dirs inside it' ],
    [ 'p', 'Place your .scss, .css files in "styles" dir and .js in "scripts" dir, and use the following functions to load them' ],
    [ 'code', 'get_style();' ],
    [ 'code', 'get_script();' ],
    [ 'p', 'To load a stylesheet "design.css" from styles directory and script file "form.js" inside your scripts directory' ],
    [ 'code', 'get_style(\'design\');' ],
    [ 'code', 'get_script(\'form\');' ],
    [ 'p', 'AIO auto detects minified CSS and JS files, if present minified file will be loaded automatically' ],
    '.pb30',
    [ 'h2', 'Load Multiple Assets' ],
    [ 'p', 'You can load multiple styles or scripts in a single line, loaded in requested order' ],
    [ 'code', 'get_styles(\'design,table_design\');' ],
    [ 'code', 'get_scripts([\'jquery\',\'scripts\']);' ],
    [ 'p', 'Note: First parameter can be array of files or string of file titles separates by ,' ],
    [ 'p', 'Note: AIO will automatically remove duplicated styles and scripts' ],
    '.pb30',
    [ 'h2', 'Logical Load by Page' ],
    [ 'p', 'You can load a specific stylesheet or script in specific page by path' ],
    [ 'code', 'get_style(\'table_design\',\'students/all\');' ],
    [ 'p', 'In this above instance, table_design.css is loaded only for url webapp.com/students/all' ],
]);
docs_nav();
get_comp('foot');