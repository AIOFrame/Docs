<?php get_comp('head'); ?>
<article>
    <h1 class="mb30"><?php E('Prerequisites'); ?></h1>
    <ol>
        <li><?php E('Make sure you have PHP version 7.2 or above'); ?></li>
        <li><?php E('Point your domain / sub domain to root of AIO'); ?></li>
    </ol>
    <h1 class="mb30"><?php E('Get Started'); ?></h1>
    <p><?php E('Getting started with AIO is very easy!'); ?></p>
    <p><?php E(' Just clone the AIO git repo to your root, point your domain! That\'s All'); ?></p>
    <div class="code">
        <pre>git clone https://github.com/AIOFrame/AIO.git</pre>
        <div class="copy" data-clipboard-text="git clone https://github.com/AIOFrame/AIO.git">COPY</div>
    </div>
    <p><?php E('Tip: You can use root in your development as a defined variable'); ?> <span class="define">ROOTPATH</span></p>
</article>
<?php get_comp('foot');