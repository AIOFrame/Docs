<?php
get_comp('head');
render_docs([
    [ 'h1', 'Dynamic Pages' ],
    [ 'p', 'Dynamic page is automatically routed like static page, but does not exist and parent file is loaded' ],
    [ 'p', 'Dynamic page lets you have a base page but with changing trail path that can be used as parameters' ],
    [ 'code', 'my_app.com/student/651110' ],
    [ 'p', 'In this instance, we cannot create .php page for each student hence pages/student.php is loaded' ],
    [ 'p', 'You can use number in student.php by calling $_GET[\'b\'], each trailing slashed word is mapped alphabetically after domain' ],
    '.pb30',
    [ 'h2', 'Using Dynamic Pages' ],
    [ 'p', 'For instance, lets say your url is' ],
    [ 'code', 'university_app.com/courses/programming/swift' ],
    'table',
    [ 'th', [ 'university.com', 'courses', 'programming', 'swift' ] ],
    [ 'th', [ 'university.com', 'courses', 'programming', 'react' ] ],
    [ 'td', [ 'APPURL', '$_GET[\'a\']', '$_GET[\'b\']', '$_GET[\'c\']' ] ],
    'table',
    [ 'p', 'Here programming.php file will be loaded if exists, using $_GET[\'c\'] will get you dynamic url text like swift or react' ],
    [ 'p', 'You can call the dynamic parameter as $_GET value with specific alphabet based on its position in url' ],
    '.pb30',
    [ 'h2', 'Dynamic Page Samples' ],
    'table',
    [ 'th', [ 'Example URL', 'Dynamic File', 'GET Variable', 'GET Value' ] ],
    [ 'td', [ 'university.com/student/66215', 'root / apps / university / pages / student.php', '$_GET[\'b\']', '65215' ] ],
    [ 'td', [ 'aio_store.com/action/drones/dji-spark', 'root / apps / aio_store / pages /action / drones.php', '$_GET[\'c\']', 'dji-spark' ] ],
    'table',
]);
docs_nav();
get_comp('foot');