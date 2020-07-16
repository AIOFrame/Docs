<?php get_comp('head'); ?>
<article>
    <h1><?php E('Micro CSS'); ?></h1>
    <p><?php E('Micro CSS lets you style the element directly by writing micro class'); ?></p>
    <div><p class="dib"><?php E('Instead of styling'); ?></p> <pre class="dib">text align:right;</pre> <p class="dib"><?php E('to an element, you can just add class'); ?></p> <pre class="dib">tar</pre></div>
    <p><?php E('Micro CSS covers almost all css styling you need in the smallest shortcode possible'); ?></p>
    <div class="mb60"></div>
    <h1><?php E('LINK MICRO CSS'); ?></h1>
    <p></p>
    <div class="code">
        <pre>get_style('micro');</pre>
        <div class="copy" data-clipboard-text="get_style('micro');"><?php E('COPY'); ?></div>
    </div>
    <div class="code">
        <pre>get_styles(['your_other_style','micro']);</pre>
        <div class="copy" data-clipboard-text="get_styles(['micro']);"><?php E('COPY'); ?></div>
    </div>
    <div class="mb60"></div>
    <h3><?php E('REFERENCE'); ?></h3>
    <table class="micro">
        <thead>
        <tr>
            <td><p><?php E('MICRO CLASS'); ?></p></td>
            <td><p><?php E('EQUIVALENT STYLE'); ?></p></td>
        </tr>
        </thead>
        <tbody>
        <?php $array = [
            'rel' => 'position: relative',
            'abs' => 'position: absolute',
            'fxd' => 'position: fixed',
            'abs l' => 'position: absolute; left: 0',
            'abs r' => 'position: absolute; right: 0',
            'abs t' => 'position: absolute; top: 0',
            'abs b' => 'position: absolute; bottom: 0',
            't5' => 'top: 5',
            't10' => 'top: 10',
            't15' => 'top: 15',
            't20' => 'top: 20',
            'fr' => 'float: right',
            'fl' => 'float: left',
            'fn' => 'float: none',
            'dib' => 'display: inline-block',
            'db' => 'display: block',
            'dn' => 'display: none',
            'di' => 'display: inline',
            'df' => 'display: flex',
            'dibi' => 'display: inline-block !important;',
            'dbi' => 'display: block !important;',
            'dni' => 'display: none !important;',
            'dfi' => 'display: flex !important;',
            'vat' => 'vertical-align: top',
            'val' => 'vertical-align: baseline',
            'vam' => 'vertical-align: middle',
            'vab' => 'vertical-align: bottom',
            'fw' => 'width: 100%',
            'fv' => 'width: 100vw; height: 100vh',
            'wa' => 'width:auto',
        ];
        micro_css_table( $array );
        ?>
        </tbody>
    </table>
    <div class="mb30"></div>
    <h3>Appearance</h3>
    <table class="micro">
        <thead>
        <tr>
            <td>Micro Class</td>
            <td>Styling</td>
        </tr>
        </thead>
        <tbody>
        <?php $array = [
            'op0' => 'opacity: 0',
            'op2' => 'opacity: .2',
            'op3' => 'opacity: .3',
            'op5' => 'opacity: .5',
            'op9' => 'opacity: .9',
            'op1' => 'opacity: 1',
            'bt1' => 'border-top:1px solid',
            'br1' => 'border-right:1px solid',
            'bl1' => 'border-left:1px solid',
            'bb1' => 'border-bottom:1px solid',
            'br2' => 'border-radius:2px',
            'br5' => 'border-radius:5px',
            'br10' => 'border-radius:10px',
            'br15' => 'border-radius:15px',
            'br20' => 'border-radius:20px',
            'tal' => 'text-align:left',
            'tac' => 'text-align:center',
            'tar' => 'text-align:right',
            'df l' => 'justify-content: flex-start',
            'df c' => 'justify-content: center',
            'df r' => 'justify-content: flex-end',
        ];
        micro_css_table( $array );
        ?>
        </tbody>
    </table>
    <div class="mb30"></div>
    <h3>Text Appearance</h3>
    <table class="micro">
        <thead>
        <tr>
            <td>Micro Class</td>
            <td>Styling</td>
        </tr>
        </thead>
        <tbody>
        <?php $array = [
            'lh1' => 'line-height:100%',
            'lh15' => 'line-height:150%',
            'lh2' => 'line-height:200%',
            'lh20' => 'line-height: 20px',
            'lh40' => 'line-height: 40px',
            'fz0' => 'font-size: 0',
            'fz20' => 'font-size: 20px',
            'fz15' => 'font-size: 15px',
            'fz12' => 'font-size: 12px',
            'fl' => 'font-weight: lighter',
            'fb' => 'font-weight: bold',
            'fn' => 'font-weight: normal',
            'ls0' => 'letter-spacing: 0',
            'ls1' => 'letter-spacing: 1px',
            'ls2' => 'letter-spacing: 2px',
            'ls3' => 'letter-spacing: 3px',
            'uc' => 'text-transform: uppercase',
            'nc' => 'text-transform: none',
        ];
        micro_css_table( $array );
        ?>
        </tbody>
    </table>
</article>
<?php get_comp('foot');