<?php

global $menu;
$menu = [
    [ 'setup', 'Setup', [
        [ 'pre', 'Prerequisites' ],
        [ 'start', 'Get Started' ],
        [ 'create', 'Create your First App' ],
        [ 'config', 'Configuration' ],
        [ 'static', 'Static Pages' ],
        [ 'dynamic', 'Dynamic Pages' ],
        [ 'functions', 'Custom Functions' ],
        [ 'components', 'Components' ],
        [ 'assets', 'Styles & Scripts' ],
        [ 'structure', 'Structure of AIO' ],
        [ 'defines', 'Defines' ],
        [ 'database', 'Database' ],
        [ 'multiple', 'Multiple Apps' ],
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