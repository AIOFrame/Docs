<nav id="doc_menu" data-save-scroll>
    <div class="search"><input type="text" placeholder="Search Documentation..."></div>
    <?php $secondary_menu = [
        [ 'intro', 'Introduction', [
            [ 'idea', 'The Idea' ],
            [ 'features', 'Features' ],
        ] ],
        [ 'setup', 'Setup', [
            [ 'install', 'Install AIO' ],
            [ 'create', 'Create your First App' ],
            [ 'routes', 'Routes aka Pages' ],
            [ 'functions', 'Functions' ],
            [ 'components', 'Components' ],
            [ 'assets', 'Assets (Styles, Scripts)' ],
            [ 'structure', 'Structure of AIO' ],
            [ 'config', 'Configuration' ],
            [ 'defines', 'Defines' ],
            [ 'database', 'Database' ]
        ] ],
        [ 'front', 'Frontend', [
            [ 'intro', 'Introduction' ],
            [ 'reset', 'Reset CSS' ],
            [ 'fonts', 'Fonts' ],
            [ 'micro', 'Micro CSS' ],
            [ 'art', 'Art CSS', [
                [ 'grid', 'Grid' ],
                [ 'inputs', 'Inputs' ],
                [ 'buttons', 'Buttons' ],
                [ 'tabs', 'Tabs' ],
                [ 'blocks', 'Blocks' ],
                [ 'modals', 'Modals' ],
                [ 'notifications', 'Notifications' ],
            ] ],
            [ 'core', 'Core JS' ],
            [ 'icons', 'Icons' ],
            [ 'party', '3rd Party', [
                [ 'ace', 'Ace' ],
                [ 'barba', 'BarbaJS' ],
                [ 'bot', 'BotJS' ],
                [ 'chart', 'ChartJS' ],
                [ 'clipboard', 'ClipboardJS' ],
                [ 'barcode', 'Barcode' ],
                [ 'maps', 'Google Maps' ],
                [ 'kinetic', 'Kinetic' ],
                [ 'fullpage', 'Fullpage' ],
                [ 'select2', 'Select 2' ],
                [ 'moment', 'Moment JS' ],
                [ 'tilt', 'Tilt JS' ],
            ] ]
        ] ],
        [ 'back', 'Backend', [
            [ 'intro', 'Introduction' ],
            [ 'ajax', 'Ajax' ],
            [ 'alerts', 'Alerts' ],
            [ 'arrays', 'Arrays' ],
            [ 'crypto', 'Crypto' ],
            [ 'database', 'Database' ],
            [ 'elements', 'Elements' ],
            [ 'uploader', 'File Uploader' ],
            [ 'translations', 'Translations' ],
            [ 'options', 'Options' ],
            [ 'queries', 'Database Queries' ],
            [ 'functions', 'Functions' ],
            [ 'log', 'Error Log' ],
            [ 'party', '3rd Party', [
                [ 'email', 'Email' ],
                [ 'cache', 'Fast Cache' ],
                [ 'pay', 'Payment Gateways' ],
                [ 'sms', 'SMS' ],
                [ 'spreadsheet', 'Spreadsheet' ],
            ] ]
        ] ],
        [ 'aio', 'Ahead', [
            [ 'future', 'Future of AIO' ],
            [ 'credits', 'Credits' ],
        ] ]
    ];
    foreach( $secondary_menu as $m ) {
        $mc = isset( $_GET['a'] ) && $_GET['a'] == $m[0] ? 'class="on"' : '';
        echo '<ul '.$mc.'><li><a href="'.APPURL.$m[0].'" '.$mc.'>'.$m[1].'</a><ul>';
        foreach( $m[2] as $sm ) {
            $msc = isset( $_GET['b'] ) && ($_GET['b'] == $sm[0]) && ($_GET['a'] == $m[0]) ? 'class="on"' : '';
            echo '<li><a href="'.APPURL.$m[0].'/'.$sm[0].'" '.$msc.'>'.$sm[1].'</a>';
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