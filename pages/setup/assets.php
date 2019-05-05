<?php get_comp('head'); ?>
<article>
    <h1 class="mb30">Assets</h1>
    <h3 id="intro">Script or Style files</h3>
    <p>Assets lets you easily link to your styles or scripts.</p>
    <p>Simply add a dir 'assets' inside your <span class="app">APP</span> and add 'styles' and 'scripts' dirs inside it.</p>
    <p>Place your styles in styles dir and scripts in scripts dir.</p>
    <p>AIO has in built functions that lets your easily get these files and render them as &#60;link> or &#60;script></p>
    <p class="mb60">AIO also detects minified CSS and JS files, if present will link to minified file instead</p>

    <h3 id="script">Get Script File</h3>
    <p>To get a script you can simple use get_script('') with file name as parameter</p>
    <div class="code">
        <pre>get_script();</pre>
        <div class="copy" data-clipboard-text="get_script();">COPY</div>
    </div>
    <p>Example to get a script file 'form.js' inside your scripts directory</p>
    <div class="code">
        <pre>get_script('form');</pre>
    </div>
    <p>Output:</p>
    <div class="code mb60">
        <pre>&#60;script src="http://driver.com/apps/driver/assets/scripts/form.js">&#60;/script></pre>
    </div>

    <h3 id="scripts">Multiple Script Files</h3>
    <p>You can also get multiple script files at once</p>
    <div class="code">
        <pre>get_scripts([]);</pre>
        <div class="copy" data-clipboard-text="get_scripts([]);">COPY</div>
    </div>
    <p>Example to fetch multiple script files named 'form.js', 'validation.js' and 'ajax.js' from your scripts directory</p>
    <div class="code">
        <pre>get_scripts(['frontend','responsive','rtl']);</pre>
    </div>
    <p>Note: The scripts will be added in the same order of the array</p>
    <p>Output:</p>
    <div class="code mb60">
        <pre>&#60;script src="http://driver.com/apps/driver/assets/scripts/form.js">&#60;/script>
&#60;script src="http://driver.com/apps/driver/assets/scripts/validation.js">&#60;/script>
&#60;script src="http://driver.com/apps/driver/assets/scripts/ajax.min.js">&#60;/script></pre>
    </div>

    <h3 id="style">Get Style File</h3>
    <p>You can use get_style('') with file name as parameter</p>
    <div class="code">
        <pre>get_style();</pre>
        <div class="copy" data-clipboard-text="get_style();">COPY</div>
    </div>
    <p>Example to get a style file 'frontend.css' inside your styles directory</p>
    <div class="code">
        <pre>get_style('frontend');</pre>
    </div>
    <p>Output:</p>
    <div class="code mb60">
        <pre>&#60;link rel="stylesheet" href="http://driver.com/apps/driver/assets/scripts/frontend.css"></pre>
    </div>

    <h3 id="styles">Multiple Style Files</h3>
    <p>You can also multiple styles files at once</p>
    <div class="code">
        <pre>get_styles([]);</pre>
        <div class="copy" data-clipboard-text="get_styles([]);">COPY</div>
    </div>
    <p>Example to fetch multiple styles files named 'frontend.css', 'responsive.css' and 'rtl' from your styles directory</p>
    <div class="code">
        <pre>get_styles(['frontend','responsive','rtl']);</pre>
    </div>
    <p>Output:</p>
    <div class="code mb60">
        <pre>&#60;link rel="stylesheet" href="http://driver.com/apps/driver/assets/scripts/frontend.css">
&#60;link rel="stylesheet" href="http://driver.com/apps/driver/assets/scripts/responsive.min.css">
&#60;link rel="stylesheet" href="http://driver.com/apps/driver/assets/scripts/rtl.css"></pre>
    </div>
</article>
<div id="links">
    <a href="#intro">Script or Style files</a>
    <a href="#script">Get Script File</a>
    <a href="#scripts">Multiple Script Files</a>
    <a href="#style">Get Style File</a>
    <a href="#styles">Multiple Style Files</a>
</div>
<?php get_comp('foot');