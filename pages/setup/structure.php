<?php get_comp('head'); ?>
<article>
    <h1>Structure of our <span class="core">APP</span></h1>
    <?php
    /* $structure = [
        'coreapp' => [ 'apps' => [ '' ] ],
    ]; */
    ?>
<div class="row" style="font-size: calc(.6vw + .6vh);">
    <div class="col-3">
<h3>Directory Structure</h3>
<pre class="lh15">
coreapp/
├─ apps
│  <span class="app">├─ delivery</span>
│  <span class="app">│  ├─ assets</span>
│  <span class="app">│  │  ├─ scripts</span>
│  <span class="app">│  │  │  ├─ jquery.js</span>
│  <span class="app">│  │  │  ├─ form.js</span>
│  <span class="app">│  │  ├─ styles</span>
│  <span class="app">│  │  │  ├─ bootstrap.css</span>
│  <span class="app">│  │  │  ├─ form.css</span>
│  <span class="app">│  ├─ components</span>
│  <span class="app">│  │  │  ├─ header.php</span>
│  <span class="app">│  │  │  ├─ footer.php</span>
│  <span class="app">│  ├─ functions</span>
│  <span class="app">│  │  │  ├─ form_process.php</span>
│  <span class="app">│  │  │  ├─ other_functions.php</span>
│  <span class="app">│  ├─ pages</span>
│  <span class="app">│  │  │  ├─ index.php</span>
│  <span class="app">│  │  │  ├─ form.php</span>
│  <span class="app">└─ └─ config.php</span>
├─ assets
├─ core
├─ .gitignore
├─ .htaccess
├─ index.php
├─ map.php
└─ README.md
</pre>
    </div>
    <div class="col-3">
<h3>Directory Functionality</h3>
<pre class="lh15">
Domain Root
Application Host
<span class="app">Your APP Root

Scripts Root


Styles Root


Components Root


Functions Root
</span>
</pre>
    </div>
    <div class="col-3">
<h3>Description</h3>
<pre class="lh15">

Place your apps here

<span class="app">
Place scripts here


Place styles here


Place HTML & PHP Components


Place functions
    </span>
</pre>
    </div>
    <div class="col-3">
    <h3>Related Function</h3>
<pre class="lh15">





get_script('jquery');
or get_scripts(['jquery','form']);

get_style('bootstrap');
or get_styles(['bootstrap','form']);

get_comp('header');
</pre>
    </div>
</div>
</article>
<?php get_comp('foot');