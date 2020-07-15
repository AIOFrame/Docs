<?php get_comp('head'); ?>
<article>
    <h1 class="mb30"><?php E('Styles & Scripts'); ?></h1>
    <p><?php E('Create a dir "assets" inside your APP and add "styles" and "scripts" dirs inside it'); ?></p>
    <p><?php E('Place your .scss, .css files in "styles" dir and .js in "scripts" dir, and use the following functions to load them'); ?></p>
    <div class="code">
        <pre>get_style('style');</pre>
        <div class="copy" data-clipboard-text="get_style();">COPY</div>
    </div>
    <p><?php E('To load a script file "form.js" inside your "scripts" directory'); ?></p>
    <div class="code">
        <pre>get_script('form');</pre>
    </div>
    <p><?php E('AIO auto detects minified CSS and JS files, if present will load minified file instead'); ?></p>
    <div class="mb60"></div>

    <h1 id="multiple"><?php E('MULTIPLE ASSETS'); ?></h1>
    <p><?php E('You can also get multiple styles and scripts at once, which loads in same order'); ?></p>
    <div class="row">
        <div class="col-6">
            <div class="code">
                <pre>get_styles(['tables','style']);</pre>
                <div class="copy" data-clipboard-text="get_styles([]);">COPY</div>
            </div>
        </div>
        <div class="col-6">
            <div class="code">
                <pre>get_scripts(['jquery','scripts']);</pre>
                <div class="copy" data-clipboard-text="get_scripts([]);">COPY</div>
            </div>
        </div>
    </div>
    <p class="mb60"><?php E('Note: AIO will remove duplicated styles and scripts'); ?></p>
    <p><?php E('Tip: Following code will load contacts css if current page is contacts or sub page'); ?></p>
    <pre class="dib">page_of("contacts") ? get_style('contacts') : "";</pre>
</article>
<?php get_comp('foot');