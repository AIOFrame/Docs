<?php get_comp('head');

render_docs([
    ['h1','Setup Wizard'],
    '.mb30',
    ['p','The setup wizard will run once you visit your domain, after your have pointed your domain to root of AIO'],
    ['p','You can choose Fonts, Styles & Scripts, even setup pages and sub pages during setup'],
    '.mb60',
    ['h1','MANUAL SETUP'],
    '.mb30',
    ['code','root / AIO, Domain Root
    ├─ apps
    │  ├─ instafood 1 Create your APP directory
    │  │  ├─ assets 2 Create your assets directory
    │  │  │  ├─ scripts 2.1 Create scripts dir, place your scripts here
    │  │  │  └─ styles 2.2 Create styles dir, place your styles here
    │  │  ├─ components 3. Create components dir, place html and php components here
    │  │  ├─ functions 4. Create functions dir, place your function files here
    │  │  └─ pages 5. Create pages dir, place your pages here
    │  └──── config.php 6. Create config.php file, configure your app
    ├─ assets
    ├─ core
    └─ index.php'],
['p',['1. You need to create a directory inside <span class="define">ROOTPATH</span>/apps/ with the same name as your domain / sub domain']],


['p','Ex: instafood.com app dir should be "instafood", crm.instafood.com app dir should be "crm"'],
'.ml20',
['p','AIO will serve you multiple web apps based on the domain you are visiting from'],
'.ml20',
['p','2. Create a directory named "assets"'],
['p','2.1 Create a directory "scripts" inside "assets" and place all your js files in it'],
'.ml20',
['code','<?php get_script("jquery"); ?>'],
'.ml50',
['p','will get you script that you have placed here, links to .min.js if available'],
'.ml50',
['code','<?php get_scripts(["jquery","form-validation","add_contact"]); ?>'],
'.ml50',
['p','will get you style that you have placed here, links to .min.css if available'],
'.ml50',
['code','<?php get_styles(["bootstrap","form-inputs","style"]); ?>'],
'.ml50',
['p','You can also link multiple styles if needed, duplicated will be automatically be removed'],
'.ml50',
['p','3. Create a directory named "components"'],
['p','Place your html, php files in this dir and you can use them anywhere in your APP by using'],
'.ml20',
['code','<?php get_comp("header"); ?>'],
'.ml20',
['p','4. Create a directory named "functions"'],
['p','Place your functions organized in php files in this dir and they will be automatically included in your APP'],
'.ml20',
['p','Tip: You can configure the order of files included by configuring in config.php'],
'.ml20',
['p','5. Create a directory named "pages"'],
['p','Place all your pages structured in folders, AIO will open them prettified by visiting your domain/pagename'],
'.ml20',
['p','Ex 1: instafood.com/foods will open foods.php in "pages" dir'],
'.ml20',
['p','Ex 2: instafood.com/users/login will open login.php inside "pages/users" dir'],
'.ml20 mb60',

]);


docs_nav();
get_comp('foot');
?>

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