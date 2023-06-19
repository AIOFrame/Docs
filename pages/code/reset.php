<?php
get_comp('head');
render_docs([
    [ 'h1', 'Reset CSS' ],
    [ 'p', 'AIO comes with a pre-built custom made reset styles' ],
    [ 'p', 'Reset CSS is usually a set of CSS rules that resets the styling of all HTML elements to a consistent baseline' ],
    '.pb30',
    [ 'h2', 'Use reset css' ],
    [ 'code', 'reset_styles();' ],
    [ 'p', 'You can use above php function to render link to reset css inside head tag' ],
    '.pb30',
    [ 'p', 'Instead of making it all to consistent, our reset eradicates the most common overwrites that you use' ],
    [ 'p', 'AIO\'s reset style also gives a basic improved interface to input elements instead of default interface' ],
]);
get_comp('foot');