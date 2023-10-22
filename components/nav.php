<?php
pre( '', '', 'aside' );
    pre( 'doc_menu', '', 'nav' );
global $menu;
foreach( $menu as $m ) {
    $mc = isset( $_GET['a'] ) && $_GET['a'] == $m[0] ? 'class="on"' : '';
    echo '<ul id="'.strtolower($m[1]).'" '.$mc.'><li><div >'.T($m[1]).'</div><ul>';
    foreach( $m[2] as $sm ) {
        $msc = isset( $_GET['b'] ) && ($_GET['b'] == $sm[0]) && ($_GET['a'] == $m[0]) ? 'class="on"' : '';
        echo '<li><a href="'.APPURL.$m[0].'/'.$sm[0].'" '.$msc.'>'.T($sm[1]).'</a>';
            if( !empty( $sm[2] ) ) {
                echo '<ul>';
                foreach( $sm[2] as $ssm ) {
                    $msc = isset( $_GET['c'] ) && ($_GET['c'] == $ssm[0]) && $_GET['b'] == $sm[0] && ($_GET['a'] == $m[0]) ? 'class="on"' : '';
                    $title = isset( $ssm[1] ) && !empty( $ssm[1] ) ? $ssm[1] : $ssm[0];
                    echo '<li><a href="'.APPURL.$m[0].'/'.$sm[0].'/'.$ssm[0].'" '.$msc.'>'.T( $title ).'</a>';
                }
                echo '</ul>';
            }
        echo '</li>';

        /* if( !file_exists( APPPATH . 'pages/'. $m[0] . '/' . $sm[0] . '.php' ) ) {
            $fp = fopen( APPPATH . 'pages/' . $m[0] . '/' . $sm[0] . '.php', 'w' );
            fwrite($fp, "<?php get_comp('head'); ?>
<article>

</article>
<?php get_comp('foot');");
            fclose( $fp );
        } */
    }
    echo '</ul></li></ul>';

    /* if( !file_exists( APPPATH . 'pages/'. $m[0] ) ) {
        mkdir( APPPATH . 'pages/'. $m[0], 0777);
    }
    if( !file_exists( APPPATH . 'pages/'. $m[0] . '/index.php' ) ) {
        $fp = fopen( APPPATH . 'pages/' . $m[0] . '/index.php', 'w' );
    fwrite($fp, "<?php get_comp('head'); ?>
<article>

</article>
<?php get_comp('foot');");
        fclose( $fp );
    } */
}
post('aside');
post('nav');