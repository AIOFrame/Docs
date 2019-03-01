<?php get_comp('head'); ?>
<article>
    <h1 id="create" class="mb60">Creating your First Application</h1>
    <p>All you need to do is create a directory inside <span class="define">COREPATH</span>/apps/</p>
    <p>If your domain is wifipro.com, <b>wifipro</b> could be your directory inside apps (Irrespective of domain TLD)</p>
    <p>Ex: <span class="define">COREPATH</span>/apps/wifipro</p>
    <p>If you are visiting from subdomain like admin.wifipro.com, <b>admin</b> will be your app automatically (You can manually map too)</p>
    <p>Ex: <span class="define">COREPATH</span>/apps/admin</p>
    <p>This way, NIDA App will serve you multiple apps based on the domain you are visiting from.</p>
    <p>From now everytime we refer to your <span class="app">APP</span>, we will highlight it in green</p>
    <p>During development you can refer to your <span class="app">APP</span> directory by using pre defined var <span class="define">APPPATH</span></p>
    <p>Ex: <span class="define">APPPATH</span> = <span class="define">COREPATH</span>/apps/wifipro</p>
    <div class="mb60"></div>

    <h3 id="multiple">Multiple Apps</h3>
    <img src="<?php echo APPURL.'apps/'.APPNAME.'/assets/images/multi_app.svg'; ?>" height="250px">
    <p>NIDA App supports multiple apps and your app will be automatically your domain / subdomain name</p>
    <p>You can create multiple apps inside NIDA App and work on all of them at once</p>
    <p>You can map multiple domains to same App or you can configure single domain to multiple apps</p>
    <div class="mb60"></div>

    <h3 id="auto">Domain to App (Automatic Detection)</h3>
    <p>NIDA App automatically detects your domain or subdomain and looks for app with same name inside <span class="define">COREPATH</span>/apps</p>
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
</article>
    <div id="links">
        <a href="#create">Creating your First Application</a>
        <a href="#multiple">Multiple Apps</a>
        <a href="#auto">Domain to App (Automatic Detection)</a>
    </div>
<?php get_comp('foot');