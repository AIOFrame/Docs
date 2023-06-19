<?php
get_comp('head');
render_docs([
    [ 'h1', 'Structure of AIO' ],
    [ 'h2', 'Directory Structure' ],
]);
?>
    <pre class="lh15">
root / <small><?php E('AIO, Domain Root'); ?></small>
├─ apps
│  <span class="app">├─ instafood</span> <small><?php E('Your App Root'); ?></small>
│  <span class="app">│  ├─ assets</span> <small><?php E('Place your apps here'); ?></small>
│  <span class="app">│  │  ├─ scripts</span> <small><?php E('Place your Scripts here'); ?></small>
│  <span class="app">│  │  │  ├─ jquery.js</span>
│  <span class="app">│  │  │  └─ form.js</span>
│  <span class="app">│  │  └─ styles</span> <small><?php E('Place your styles here'); ?></small>
│  <span class="app">│  │     ├─ bootstrap.css</span>
│  <span class="app">│  │     └─ form.css</span>
│  <span class="app">│  ├─ components</span> <small><?php E('Place html and php components here'); ?></small>
│  <span class="app">│  │     ├─ header.php</span>
│  <span class="app">│  │     └─ footer.php</span>
│  <span class="app">│  ├─ functions</span> <small><?php E('Place your function files here'); ?></small>
│  <span class="app">│  │     ├─ form_process.php</span>
│  <span class="app">│  │     └─ other_functions.php</span>
│  <span class="app">│  └─ pages</span> <small><?php E('Place your pages here'); ?></small>
│  <span class="app">│        ├─ index.php</span>
│  <span class="app">│        ├─ foods.php</span>
│  <span class="app">│        └─ book.php</span>
│  <span class="app">└──── config.php</span> <small><?php E('Your APP config'); ?></small>
├─ assets
├─ core
├─ index.php
└─ README.md
</pre>
<?php get_comp('foot');