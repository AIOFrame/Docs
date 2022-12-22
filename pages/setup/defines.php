<?php get_comp('head'); ?>
<article>
    <h1 class="mb30"><?php E('Defined Variables'); ?></h1>
    <p class="mb30">Along the way AIO is initiated, following defines are added automatically</p>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">ROOTPATH</div><?php E('Main Application Server ROOT Directory Path'); ?><br/><small><?php E('(Generated automatically based on pointed root folder)'); ?></small></div>
        <div class="col-6">Ex: /users/root/www/application<br/></div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPURL</div><?php E('Current Application URL'); ?><br/><small><?php E('(Generated automatically based on visiting URL)'); ?></small></div>
        <div class="col-6">Ex: https://ecommerce.mainapp.com/<br/></div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPNAME</div><?php E('Current Application'); ?><br/><small><?php E('(Generated from Application Config)'); ?></small></div>
        <div class="col-6">Ex: The Amazing App</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPDIR</div><?php E('Current Application Directory Name'); ?><br/><small><?php E('(Generated based on current app directory)'); ?></small></div>
        <div class="col-6">Ex: ecommerce</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPURI</div><?php E('Current Application Directory URI'); ?><br/><small><?php E('(Generated based on current visiting URL subdomain + directory exists with same subdomain name)'); ?></small></div>
        <div class="col-6">Ex: https://ecommerce.mainapp.com/apps/ecommerce</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">APPPATH</div><?php E('Current Application Server Directory Path'); ?><br/><small><?php E('(Generated based on current visiting URL subdomain + directory exists with same subdomain name)'); ?></small></div>
        <div class="col-6">Ex: /users/root/www/application/apps/ecommerce/</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">PAGENAME</div><?php E('Current last page inside your App'); ?><br/><small><?php E(''); ?></small></div>
        <div class="col-6">'product' for 'www.shop.omega.com/deals/product/45'<br/>'deals' for 'www.shop.omega.com/deals'</div>
    </div>
    <div class="row mb30">
        <div class="col-6"><div class="define mb15">PAGEPATH</div><?php E('Current Page inside your App'); ?><br/><small><?php E(''); ?></small></div>
        <div class="col-6">'deals/product' for 'www.shop.omega.com/deals/product/45'<br/>'deals' for 'www.shop.omega.com/deals'</div>
    </div>
</article>
<?php get_comp('foot');