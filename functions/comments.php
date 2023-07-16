<?php

function get_comments( string $class = '', string $fun = '' ): string|array {
    $r = new ReflectionClass( $class );
    $cs = $r->getMethod( $fun )->getDocComment();
    $cs = str_replace( '/**', '', $cs );
    $cs = str_replace( '*/', '', $cs );
    $cs = ltrim( rtrim( $cs ) );
    $ex = explode( ' * ', $cs );
    $docs = [ 'fun' => $fun ];
    if( !str_contains( $ex[0], '@param' ) ) {
        $docs['title'] = str_replace( '* ', '', $ex[0] );
        unset( $ex[0] );
    }
    if( !str_contains( $ex[1], '@param' ) ) {
        $docs['desc'] = $ex[1];
        unset( $ex[1] );
    }
    foreach( $ex as $e ) {
        if( str_contains( $e, '@param' ) ) {
            $e = str_replace( '@param', '', $e );
            $e = rtrim( ltrim( $e ) );
            $s = explode( ' ', $e );
            $docs['params'][] = [
                'type' => $s[0],
                'param' => $s[1],
                'desc' => ltrim( rtrim( str_replace( $s[0], '', str_replace( $s[1], '', $e ) ) ) )
            ];
        }
    }
    return $docs;
}