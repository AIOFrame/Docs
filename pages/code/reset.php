<?php get_comp('head'); ?>
<article>
    <h1><?php E('Reset CSS'); ?></h1>
    <p><?php E('AIO comes with a custom made reset styles css'); ?></p>
    <p><?php E('If you don\'t know, Reset css is usually a set of CSS rules that resets the styling of all HTML elements to a consistent baseline'); ?></p>
    <p><?php E('Instead of making it all to consistent, our reset eradicates the most common overwrites that you use'); ?></p>
    <p><?php E('AIO\'s reset style also gives a basic improved interface to input elements instead of default interface'); ?></p>
    <div class="mb60"></div>
    <h2>Use Reset CSS:</h2>
    <p>In your head you can use following php function to render link to reset stylesheet.</p>
    <div class="code">
        <pre class="dib">reset_styles();</pre>
    </div>
</article>
<?php get_comp('foot');