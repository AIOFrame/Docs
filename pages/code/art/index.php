<?php
get_comp('head');
render_docs([
    [ 'h1', 'ART' ],
    [ 'p', 'ART is a set of visual and functional collaboration of improvements, for visual improvement styles are used and for functional improvements scripts are used' ],
    [ 'p', 'But you can use individual features of art based on the app you are developing, we believe it will make your life easier' ],
    '.pb30',
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