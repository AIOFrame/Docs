<?php
get_comp('head');
docs_title( 'ART' );
render_docs([
    [ 'h2', 'Using ART' ],
    [ 'p', 'Just use a php function art() and add either string or array of art types needed' ],
    [ 'code', 'art(\'buttons,inputs,tabs,steps\');' ],
    [ 'p', 'OR' ],
    [ 'code', 'art([\'buttons\',\'inputs\',\'tabs\',\'steps\']);' ],
    'br',
    [ 'h2', 'Pre-art available in AIO' ],
    'table',
    [ 'th', [ 'art title', 'Adds Feature / Functionality' ] ],
    [ 'td', [ 'buttons', 'Add a wide range of button styles for quick use. Styles vary by color, size, design etc.' ] ],
    'table',
]);
docs_nav();
get_comp('foot');