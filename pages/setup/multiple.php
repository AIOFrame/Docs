<?php
get_comp('head');
render_docs([
    [ 'h1', 'Multiple Apps' ],
    [ 'p', 'You can build multiple web apps with same instance / repo of AIO' ],
    [ 'p', 'All you need to do is point your domain or sub-domain and have that same name app in apps directory' ],
]);
get_comp('foot');