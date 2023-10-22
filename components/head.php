<?php
$styles = 'bootstrap-grid,micro,docs';
$styles = is_mobile() ? $styles.',fluid' : $styles;
pre_html('','','','','','inputs,modal,buttons,table,alerts,icons',$styles,'jquery',['Poppins','300,400,500'],['AnonymousPro','400'],'MaterialIcons');
pre( '', '', 'header' );
    is_mobile() ? div( '', '', 'menu', 'data-on="#menu,#doc_menu"' ) : '';
    div( '', _a( APPURL, '', '', 'Go to Home', '', 'brand' ) );
    is_mobile() ? div( '', '', 'more', 'data-on="#more,#prime"' ) : '';
    div( 'search', '<input type="text" placeholder="Search Documentation...">' );
    div( '', _div( 'icon lang' ) . _div( 'icon dark' ) );
post( 'header' );
get_comp('nav');
div( 'loader on', _el( 'i' ) );
pre( 'port' );
    pre( '', 'dynamic' );
        pre( '', '', 'article' );