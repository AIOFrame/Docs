<?php get_comp('head'); ?>

    <h1 class="mb30"><?php E('Setup Wizard'); ?></h1>
    <p><?php E('The setup wizard will run once you visit your domain, after your have pointed your domain to root of AIO'); ?></p>
    <p><?php E('You can choose Fonts, Styles & Scripts, even setup pages and sub pages during setup'); ?></p>
    <div class="mb60"></div>

    <h1 class="mb30"><?php E('MANUAL SETUP'); ?></h1>

    <div class="code">
        <pre class="lh15 mb30">
root / <small><?php E('AIO, Domain Root'); ?></small>
├─ apps
│  <span class="app">├─ instafood</span> <small><?php E('1 Create your APP directory'); ?></small>
│  <span class="app">│  ├─ assets</span> <small><?php E('2 Create your assets directory'); ?></small>
│  <span class="app">│  │  ├─ scripts</span> <small><?php E('2.1 Create scripts dir, place your scripts here'); ?></small>
│  <span class="app">│  │  └─ styles</span> <small><?php E('2.2 Create styles dir, place your styles here'); ?></small>
│  <span class="app">│  ├─ components</span> <small><?php E('3. Create components dir, place html and php components here'); ?></small>
│  <span class="app">│  ├─ functions</span> <small><?php E('4. Create functions dir, place your function files here'); ?></small>
│  <span class="app">│  └─ pages</span> <small><?php E('5. Create pages dir, place your pages here'); ?></small>
│  <span class="app">└──── config.php</span> <small><?php E('6. Create config.php file, configure your app'); ?></small>
├─ assets
├─ core
└─ index.php
</pre>
    </div>

    <p><?php E('1. You need to create a directory inside'); ?> <span class="define">ROOTPATH</span>/apps/ <?php E('with the same name as your domain / sub domain'); ?></p>
    <p class="ml20"><?php E('Ex: instafood.com app dir should be "instafood", crm.instafood.com app dir should be "crm"'); ?></p>
    <p class="ml20"><?php E('AIO will serve you multiple web apps based on the domain you are visiting from'); ?></p>
    <p><?php E('2. Create a directory named "assets"'); ?></p>
    <p class="ml20"><?php E('2.1 Create a directory "scripts" inside "assets" and place all your js files in it'); ?></p>
    <div class="ml30">
        <div class="code ml20">
            <pre><?php pre('<?php get_script("jquery"); ?>'); ?></pre>
            <div class="copy" data-clipboard-text="get_script();"><?php E('COPY'); ?></div>
        </div>
        <p class="ml20"><?php E('will get you script that you have placed here, links to .min.js if available'); ?></p>
        <div class="code ml20">
            <pre><?php pre('<?php get_scripts(["jquery","form-validation","add_contact"]); ?>'); ?></pre>
            <div class="copy" data-clipboard-text="get_scripts([]);"><?php E('COPY'); ?></div>
        </div>
        <p class="ml20"><?php E('You can also link multiple scripts if needed, duplicated will be automatically be removed'); ?></p>
    </div>
    <p class="ml20"><?php E('2.2 Create a directory "styles" inside "assets" and place all your scss, css files in it'); ?></p>
    <div class="ml30">
        <div class="code ml20">
            <pre><?php pre('<?php get_style("bootstrap"); ?>'); ?></pre>
            <div class="copy" data-clipboard-text="get_style();"><?php E('COPY'); ?></div>
        </div>
        <p class="ml20"><?php E('will get you style that you have placed here, links to .min.css if available'); ?></p>
        <div class="code ml20">
            <pre><?php pre('<?php get_styles(["bootstrap","form-inputs","style"]); ?>'); ?></pre>
            <div class="copy" data-clipboard-text="get_styles([]);"><?php E('COPY'); ?></div>
        </div>
        <p class="ml20"><?php E('You can also link multiple styles if needed, duplicated will be automatically be removed'); ?></p>
    </div>
    <p><?php E('3. Create a directory named "components"'); ?></p>
    <p class="ml20"><?php E('Place your html, php files in this dir and you can use them anywhere in your APP by using'); ?></p>
    <div class="code ml20">
        <pre><?php pre('<?php get_comp("header"); ?>'); ?></pre>
        <div class="copy" data-clipboard-text="get_comp();"><?php E('COPY'); ?></div>
    </div>
    <p><?php E('4. Create a directory named "functions"'); ?></p>
    <p class="ml20"><?php E('Place your functions organized in php files in this dir and they will be automatically included in your APP'); ?></p>
    <p class="ml20"><?php E('Tip: You can configure the order of files included by configuring in config.php'); ?></p>
    <p><?php E('5. Create a directory named "pages"'); ?></p>
    <p class="ml20"><?php E('Place all your pages structured in folders, AIO will open them prettified by visiting your domain/pagename'); ?></p>
    <p class="ml20"><?php E('Ex 1: instafood.com/foods will open foods.php in "pages" dir'); ?></p>
    <p class="ml20"><?php E('Ex 2: instafood.com/users/login will open login.php inside "pages/users" dir'); ?></p>

    <div class="mb60"></div>


    <div class="dn">
        <h1 id="multiple" class="mb30">Multiple Apps</h1>
        <img src="<?php echo APPURL.'apps/'.APPNAME.'/assets/images/multi_app.svg'; ?>" height="250px">
        <p>AIO supports multiple apps and your app will be automatically your domain / subdomain name</p>
        <p>You can create multiple apps inside AIO and work on all of them at once</p>
        <p>You can map multiple domains to same App or you can configure single domain to multiple apps</p>
        <div class="mb60"></div>
    </div>

    <div class="dn">
        <h1 id="auto" class="mb30">Domain to App (Automatic Detection)</h1>
        <p>AIO automatically detects your domain or subdomain and looks for app with same name inside <span class="define">ROOTPATH</span>/apps</p>
        <p>Refer to following example how you can name your app to be automatically detected</p>
        <img src="<?php echo APPURL.'apps/'.APPNAME.'/assets/images/multi_app2.svg'; ?>" height="250px">
        <p class="mt20">Refer to the following table for few more examples</p>
        <table class="mb15 tac">
            <thead>
            <tr>
                <td>Example Domain</td>
                <td>Automatic App Directory*</td>
                <td>Comments</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>company.com</td>
                <td>company</td>
                <td>same result on any domain tld (.in,.net,.io...)</td>
            </tr>
            <tr>
                <td>company.uk</td>
                <td>company</td>
                <td></td>
            </tr>
            <tr>
                <td>alphabeta.io</td>
                <td>alphabeta</td>
                <td></td>
            </tr>
            <tr>
                <td>admin.project.com</td>
                <td>admin</td>
                <td>on subdomains it becomes sub name</td>
            </tr>
            <tr>
                <td>docs.wifiproject.com</td>
                <td>docs</td>
                <td></td>
            </tr>
            <tr>
                <td>admin.wifiproject.com</td>
                <td>admin</td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <p>Automatic App Directory: Means you can create a folder with that name and domain will automatically browse to your app's pages</p>
    </div>
<?php get_comp('foot');