<?php get_comp('head'); ?>
<article>
    <h1 class="mb30">Defined Variables and their outputs</h1>
    <p class="mb30">Along the way app being initiated, few following defines are added automatically</p>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">COREPATH</div>Ex: /users/root/www/application</div>
        <div class="col-6">Main Application Server ROOT Directory Path<br/>(Generated automatically based on pointed root folder)</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPURL</div>Ex: https://ecommerce.mainapp.com/</div>
        <div class="col-6">Current Application URL<br/>(Generated automatically based on visiting URL)</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPNAME</div>Ex: The Amazing App</div>
        <div class="col-6">Current Application<br/>(Generated from Application Config)</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPDIR</div>Ex: ecommerce</div>
        <div class="col-6">Current Application Directory Name<br/>(Generated based on current app directory)</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPURI</div>Ex: https://ecommerce.mainapp.com/apps/ecommerce</div>
        <div class="col-6">Current Application Directory URI<br/>(Generated based on current visiting URL subdomain + directory exists with same subdomain name)</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPPATH</div>Ex: /users/root/www/application/apps/ecommerce/</div>
        <div class="col-6">Current Application Server Directory Path<br/>(Generated based on current visiting URL subdomain + directory exists with same subdomain name)</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">PAGENAME</div>'product' for 'www.shop.omega.com/deals/product/45'<br/>'deals' for 'www.shop.omega.com/deals'</div>
        <div class="col-6">Current last page inside your App</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">PAGEPATH</div>'deals/product' for 'www.shop.omega.com/deals/product/45'<br/>'deals' for 'www.shop.omega.com/deals'</div>
        <div class="col-6">Current Page inside your App</div>
    </div>
</article>
<?php get_comp('foot');