<?php
get_comp('head');
render_docs([
    [ 'h1', 'Domains' ],
    [ 'h2', 'Multiple Apps' ],
    [ 'p', 'Lets say you are building admin portal and user portal, you can build both inside AIO as well code a completely different app inside AIO without conflict' ],
    [ 'p', 'You can direct your domain, ex: www.delivery.com to AIO and serve user portal, setup sub-domain Ex: admin.delivery.com and serve admin portal. Isn\'t it Awesome?' ],
]);
docs_nav();
get_comp('foot');