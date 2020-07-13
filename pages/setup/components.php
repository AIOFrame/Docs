<?php get_comp('head'); ?>
<article>
    <h1 class="mb30"><?php E('COMPONENTS'); ?></h1>
    <p><?php E('If you have some HTML or PHP code that you have to repeatedly use in multiple pages'); ?></p>
    <p><?php E('You can place such code in a PHP file inside "components" directory under your'); ?> <span class="app">APP</span></p>
    <p><?php E('You can easily get the component by using a function'); ?></p>
    <div class="code mb30">
        <pre>get_comp('filename');</pre>
        <div class="copy" data-clipboard-text="get_comp();">COPY</div>
    </div>
    <table>
        <thead>
        <tr>
            <td><p><?php E('File Location'); ?></p></td>
            <td><p><?php E('Function'); ?></p></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><p>root / apps / delivery / components / header.php</p></td>
            <td><pre>get_comp('header');</pre></td>
        </tr>
        <tr>
            <td><p>root / apps / university / components / admin / sidebar.php</p></td>
            <td><pre>get_comp('admin/sidebar');</pre></td>
        </tr>
        </tbody>
    </table>
</article>
<?php get_comp('foot');