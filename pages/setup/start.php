<?php get_comp('head');
render_docs([
    ['h1','Prerequisites'],
    ['p','<ol><li>Make sure you have PHP version 7.2 or above</li><li>Point your domain / sub domain to root of AIO</li></ol>'],
    ['h1','Get Started'],
    '.mb30',
    ['p','Getting started with AIO is very easy!'],
    ['p','Just clone the AIO git repo to your root, point your domain! That\'s All'],
    ['code','git clone https://github.com/AIOFrame/AIO.git'],
    ['p','Tip: You can use root in your development as a defined variable'],
]);
docs_nav();

get_comp('foot');