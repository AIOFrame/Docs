<?php get_comp('head'); ?>
<article>
    <h1>Components</h1>
    <p>If you have some HTML or PHP code that you have to use in multiple pages</p>
    <p>You can place it as PHP file inside 'components' directory under your <span class="app">APP</span></p>
    <p>You can easily get the component by using a function</p>
    <div class="code">
        <pre>get_comp();</pre>
        <div class="copy" data-clipboard-text="get_comp();">COPY</div>
    </div>
    <p class="mb60">Refer to the following example</p>
    <h3 id="samples">Sample Components</h3>
    <table>
        <thead>
        <tr>
            <td>File Location</td>
            <td>Function to include file</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>aio / apps / delivery / components / header.php</td>
            <td><pre>get_comp('header');</pre></td>
        </tr>
        <tr>
            <td>aio / apps / university / components / admin / sidebar.php</td>
            <td><pre>get_comp('admin/sidebar');</pre></td>
        </tr>
        </tbody>
    </table>
</article>
<?php get_comp('foot');