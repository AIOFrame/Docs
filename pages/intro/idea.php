<?php
get_comp('head');
render_docs([
    [ 'h1', 'The Idea' ],
    [ 'p', 'AIO is inspired from Wordpress, Laravel and other frameworks. The main idea behind AIO was to create instant application deploying environment so that developer gets straight into developing rather than spending hours installing and configuring.' ],
    [ 'p', 'The best feature of WordPress to let users add pages with pretty permalinks is also a nightmare for developers if they have to develop different design or functionality per page. Using PHP frameworks, configuring routes will take time.' ],
    [ 'p', 'AIO lets you do that in seconds. AIO also supports multiple domains, multiple apps inside single framework. You can just redirect your domain or sub-domain to AIO and it will open your app.' ],
    '.pb30',
    [ 'h1', 'The Idea' ],
]);
docs_nav();
get_comp('foot');