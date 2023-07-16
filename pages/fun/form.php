<?php
get_comp('head');
//skel( $docs );
$d = [];
$functions = [ 'text', 'date' ];
$d = docs_functions( 'FORM', $functions );
render_docs($d);
docs_nav();
get_comp('foot');