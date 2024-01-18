<?php

global $quick_nav;

function micro_css_table( $array ) {
    foreach( $array as $k => $v ) {
        echo '<tr>
            <td><p class="dib">'.$k.'</p><div class="copy" data-clipboard-text="'.$k.'">'.T('COPY').'</div></td>
            <td><pre>'.$v.'</pre></td>
        </tr>';
    }
}

function main_page_links() {
    global $menu;
    if( !empty( $menu ) && is_array( $menu ) ) {
        foreach( $menu as $sub ) {
            if( $sub[0] == $_GET['a'] ) {
                echo '<h1>'.T($sub[1]).'</h1>';
                echo '<div class="row">';
                foreach( $sub[2] as $f ) {
                    echo '<div class="col-3 tac"><a href="'.$f[0].'" class="block ttu pt40 pb40">'.$f[1].'</a></div>';
                }
                echo '</div>';
            }
            //foreach( $sub_menu[3] )
        }
    }
}

function docs_title( string $title = '', string $type = 'h1' ): void {
    echo '<'.$type.' aria-label="'.$title.'">'.$title.'</'.$type.'>';
}

function docs_content( string|array $content = '', string $element = '', string $class = '' ): void {
    if( is_array( $content ) ) {
        foreach( $content as $c ) {
            render_content( $c, $element, $class );
        }
    } else {
        render_content( $content, $element, $class );
    }
}

function render_content( string|array $content, string $element = 'p', string $class = '' ): void {
    global $quick_nav;
    if( is_array( $content ) ) {
        $title = $content[0];
        $con = $content[1];
        $quick_nav[] = $title;
    } else {
        $con = $content;
    }
    $class = !empty( $class ) ? ' class="'.$class.'"' : '';
    echo '<'.$element.$class;
    echo !empty( $title ) ? ' aria-label="'.$title.'"' : '';
    echo '>'.$con.'</'.$element.'>';
}

function docs_nav(): void {
    global $quick_nav;
    if( !empty( $quick_nav ) ) {
        _d( '', 'links' );
            _d( 'action', '', 'data-toggle-on="#links"' );
                div( 'mat-ico open', 'open_in_full' );
                div( 'mat-ico close', 'close_fullscreen' );
            d_();
            div( 'title', 'Page Contents', '', '', 1 );
            _d( 'links' );
                foreach( $quick_nav as $n ) {
                    echo !empty( $n ) ? '<div data-scroll="'.$n.'">'.$n.'</div>' : '';
                }
            d_();
        d_();
    }
}

function code( string $code = '' ): string {
    return '<div class="code"><pre>'.$code.'</pre><div class="copy" data-clipboard-text="'.strip_tags($code).'" title="Copy code to clipboard"><div class="mat-ico">content_copy</div></div></div>';
}

function docs_code( string $code = '' ): void {
    echo code( $code );
}

function button_code( string $class = '', string $text = '' ): array {
    return [ '<button class="'.$class.'">'.$text.'</button>', code('<button class="'.$class.'">'.$text.'</button>') ];
}

global $docs_table;

function render_docs( array $docs = [] ): void {
    global $quick_nav;
    global $docs_table;
    foreach( $docs as $doc ) {
        if( is_string( $doc ) && str_contains( $doc, '.' ) ) {
            echo '<div class="'.str_replace('.','',$doc).'"></div>';
        } else if( $doc == 'br' || $doc == 'break' ) {
            docs_break();
        } else if( is_string( $doc ) && ( $doc == 'table' || $doc == 'plain' ) ) {
            if( $docs_table ) {
                echo '</table>';
                $docs_table = 0;
            } else {
                $class = $doc == 'plain' ? 'plain' : 'r5';
                echo '<table class="'.$class.'">';
                $docs_table = 1;
            }
        } else if( $doc[0] == 'code' ) {
            docs_code( $doc[1] );
        } else if( ( $doc[0] == 'th' || $doc[0] == 'td' || $doc[0] == 'tr' ) && !empty( $doc[1] ) ) {
            echo $doc[0] == 'th' ? '<thead>' : '<tbody>';
            echo '<tr>';
            foreach( $doc[1] as $th ) {
                echo '<'.$doc[0].'>'.$th.'</'.$doc[0].'>';
            }
            echo '</tr>';
            echo $doc[0] == 'th' ? '</thead>' : '</tbody>';
        } else if( in_array( $doc[0], [ 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ] ) ) {
            docs_title( $doc[1], $doc[0] );
            $quick_nav[] = $doc[1];
        } else {
            $s = explode( '.', $doc[0] );
            $title = is_array( $doc[1] ) ? $doc[1][0] : '';
            !empty( $title ) ? $quick_nav[] = $title : '';
            docs_content( $doc[1], $s[0], count($s) > 1 ? $s[1] : '' );
        }
    }
}

function docs_break(): void {
    echo '<br/>';
}

function docs_functions( string $class = '', array $functions = [] ): array {
    $d = [];
    foreach( $functions as $gf ) {
        $docs = get_comments( $class, $gf );
        $params = [];
        $param_data = [];
        if( !empty( $docs['params'] ) && is_array( $docs['params'] ) ) {
            foreach( $docs['params'] as $i ) {
                $params[] = $i['param'];
                $param_data[] = [ 'td', [ $i['type'], $i['param'], $i['desc'] ] ];
            }
        }
        $d[] = [ 'h2', $docs['fun']. '()' ];
        $d[] = [ 'p', $docs['desc'] ?? '' ];
        $d[] = [ 'code', $docs['fun'] . '( '.implode( ', ', $params ) .' );' ];
        $d[] = 'table';
        $d[] = [ 'th', [ 'Type', 'Parameter', 'Description' ] ];
        foreach( $param_data as $pd ){
            $d[] = $pd;
        }
        $d[] = 'table';
        if( !empty( $docs['tips'] ) ) {
            foreach( $docs['tips'] as $tip ) {
                $d[] = [ 'p.tip', $tip ];
            }
        }
        $d[] = '.pb40';
    }
    return $d;
}