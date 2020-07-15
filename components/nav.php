<nav id="doc_menu" data-save-scroll>
    <?php
    global $menu;
    foreach( $menu as $m ) {
        $mc = isset( $_GET['a'] ) && $_GET['a'] == $m[0] ? 'class="on"' : '';
        echo '<ul id="'.strtolower($m[1]).'" '.$mc.'><li><div data-on="#'.strtolower($m[1]).'">'.T($m[1]).'</div><ul>';
        foreach( $m[2] as $sm ) {
            $msc = isset( $_GET['b'] ) && ($_GET['b'] == $sm[0]) && ($_GET['a'] == $m[0]) ? 'class="on"' : '';
            echo '<li><a href="'.APPURL.$m[0].'/'.$sm[0].'" '.$msc.'>'.T($sm[1]).'</a>';
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
    ?>
</nav>