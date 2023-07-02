<?php get_comp('head');
render_docs([
    ['h2','Prerequisites'],
    ['p','1. PHP version 8.0.6 or above'],
    ['p','2. We advise using a local domain management tool like MAMP'],
    '.pb30',
    ['h2','Get Started via git'],
    ['p','Just clone the AIO git repo to your root, point your domain! That\'s All'],
    ['code','git clone https://github.com/AIOFrame/AIO.git'],
    //['p.tip','You can use root in your development as a defined variable'],
    '.pb30',
    ['p','or'],
    ['h2','Get Started with download'],
    ['p','<a class="btn" href="https://github.com/AIOFrame/AIO/archive/refs/heads/master.zip">download the repository!</a>'],
    '.pb30',
    ['p.tip','Don\'t forget to point your domain to aio root path, Start developing!']
]);
docs_nav();

get_comp('foot');