<?php
get_comp('head');
$e = Encrypt::initiate();
$hw = $e->encrypt( 'Hello World!' );
//skel( $docs );
$d = [
    [ 'h1', 'Encrypt()' ],
    [ 'p', 'Encrypt() encrypts or decrypts your string or array' ],
    [ 'code', '$e = Encrypt::initiate();' ],
    [ 'p', 'Instead of risking saving your data in human readable format, you can easily encrypt it' ],
    [ 'code', '$e->encrypt(\'Hello World!\');' ],
    [ 'p', 'Returns '.$hw ],
    [ 'p', 'And you can decrypt it the same way but using decrypt() function' ],
    [ 'code', '$e->decrypt(\''.$hw.'\');' ],
    [ 'p', 'Returns \'Hello World!\'' ],
    [ 'p.tip', 'You can use function enc() or dec() to echo output instead of return' ],
    '.mb60',
];
render_docs($d);
$functions = [
    'encrypt',
    'encrypt_array',
    'enc',
    'decrypt',
    'decrypt_array',
    'dec',
    'check',
];
$d = docs_functions( 'ENCRYPT', $functions );
render_docs($d);
docs_nav();
get_comp('foot');