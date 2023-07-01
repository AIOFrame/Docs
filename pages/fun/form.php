<?php
get_comp('head');
$d = [];
$els = [
    [ 'text', 'text() function adds input type=text', [
        [ '$id', 'ID of the input element', 'string', 'username' ],
        [ '$label', 'Label for the input', 'string', 'User Name' ],
        [ '$placeholder', 'Sample text to display inside the input', 'string', 'Ex: john_doe' ],
        [ '$value', 'Sample text to display inside the input', 'string', 'Ex: john_doe' ],
        [ '$attrs', 'Sample text to display inside the input', 'string', 'Ex: john_doe' ],
        [ '$pre', 'Sample text to display inside the input', 'string', 'Ex: john_doe' ],
        [ '$post', 'Sample text to display inside the input', 'string', 'Ex: john_doe' ],
    ] ],
    [ 'date', '', [
        [ '$id', 'ID of the input element', '', 'username' ],
        [ '$label', 'Label for the input', '', 'User Name' ],
        [ '$placeholder', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$value', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$attrs', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$position', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$pre', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$range', 'Sample text to display inside the input', 'bool', 'Ex: john_doe' ],
        [ '$multiple', 'Sample text to display inside the input', 'bool', 'Ex: john_doe' ],
        [ '$view', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$min', 'Minimum Date yyyy-mm-dd', '', 'Ex: john_doe' ],
        [ '$max', 'Maximum Date yyyy-mm-dd', '', 'Ex: john_doe' ],
        [ '$post', 'Sample text to display inside the input', 'string', 'Ex: john_doe' ],
    ] ],
    [ 'phone', '', [
        [ '$id', 'ID of the input element', '', 'username' ],
        [ '$label', 'Label for the input', '', 'User Name' ],
        [ '$placeholder', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$value', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
        [ '$attrs', 'Sample text to display inside the input', '', 'Ex: john_doe' ],
    ] ]
];
foreach( $els as $e ) {

    $params = [];
    $param_data = [];
    if( !empty( $e[2] ) && is_array( $e[2] ) ) {
        foreach( $e[2] as $i ) {
            $params[] = $i[0];
            $param_data[] = [ 'td', [ $i[0], $i[1], $i[2], $i[3] ] ];
        }
    }
    $d[] = [ 'h2', $e[0]. '()' ];
    $d[] = [ 'p', $e[1] ];
    $d[] = [ 'code', $e[0] . '( '.implode( ', ', $params ) .' );' ];
    $d[] = 'table';
    $d[] = [ 'th', [ 'Parameter', 'Description', 'Type', 'Example' ] ];
    foreach( $param_data as $pd ){
        $d[] = $pd;
    }
    $d[] = 'table';
    $d[] = '.pb40';
}
render_docs($d);
docs_nav();
get_comp('foot');