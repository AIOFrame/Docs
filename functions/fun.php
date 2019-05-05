<?php

function micro_css_table( $array ) {
    foreach( $array as $k => $v ) {
        echo '<tr>
            <td>'.$k.'<div class="copy" data-clipboard-text="'.$k.'">COPY</div></td>
            <td><pre>'.$v.'<div class="copy" data-clipboard-text="'.$v.'">COPY</div></pre></td>
        </tr>';
    }
}