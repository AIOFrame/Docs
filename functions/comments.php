<?php

function get_comments( string $class = '', string $fun = '' ): string|array {
    $r = new ReflectionClass( $class );
    $cs = $r->getMethod( $fun )->getDocComment();
    $cs = str_replace( '/**', '', $cs );
    $cs = str_replace( '*/', '', $cs );
    $cs = ltrim( rtrim( $cs ) );
    $ex = explode( ' * ', $cs );
    $docs = [ 'fun' => $fun ];
    //skel( $cs );
    if( !str_contains( $ex[0], '@param' ) ) {
        $docs['desc'] = str_replace( '* ', '', $ex[0] );
        unset( $ex[0] );
    }
    /* if( !str_contains( $ex[1], '@param' ) ) {
        $docs['desc'] = $ex[1];
        unset( $ex[1] );
    } */
    foreach( $ex as $e ) {
        if( str_contains( $e, '@param' ) ) {
            $e = rtrim( ltrim( str_replace( '@param', '', $e ) ) );
            $s = explode( ' ', $e );
            $docs['params'][] = [
                'type' => $s[0],
                'param' => $s[1],
                'desc' => ltrim( rtrim( str_replace( $s[0], '', str_replace( $s[1], '', $e ) ) ) )
            ];
        } else if ( str_contains( $e, '@tip' ) ) {
            $e = rtrim( ltrim( str_replace( '@tip', '', $e ) ) );
            $docs['tips'][] = $e;
        }
    }
    //skel( $docs );
    return $docs;
}