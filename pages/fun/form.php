<?php
get_comp('head');
//skel( $docs );
$l_text = '<div class="col-12 col-md-6">
    <label for="name">User Name</label>
    <input type="text" id="name_1" placeholder="Ex: John Doe">
</div>';
$d = [
    [ 'h1', 'FORM()' ],
    [ 'p', 'FORM() class has a wide range of functions that make it easier to create input elements with other necessary elements' ],
    [ 'p', 'Initiate the class to any variable and start using!' ],
    [ 'code', '$f = new FORM();' ],
    [ 'p', 'Instead of writing left 6 lines of code,' ],
    [ 'code', $l_text ],
    [ 'p', 'you can simply write a single line for same output' ],
    [ 'code', '$f->text(\'name\',\'User Name\',\'Ex: John Doe\',\'\',\'\',\'6\');' ],
    [ 'p.tip', 'For all elements you can prepend and append custom html wrappers, if your string contains . your input element will be auto wrapped with div bearing your $pre as class' ],
    [ 'p.tip', 'If your $pre contains int, it will be turned into bootstrap column class Ex: 6 will turn into div with class col-12 col-md-6' ],
    '.mb60',
];
render_docs($d);
$functions = [
    'input',
    'inputs',
    'text',
    'texts',
    'textarea',
    'select',
    'radios',
    'checkboxes',
    'slide',
    'date',
    'dates',
    'phone',
    'color',
    'map',
    'upload',
    'code',
    'richtext',
];
$d = docs_functions( 'FORM', $functions );
render_docs($d);
docs_nav();
get_comp('foot');