<?php get_comp('head'); ?>
<article>
    <h1>Installation</h1>
    <p>Installing NIDA App is very easy. All you have to do is git clone our project and start working on it. Every now and then you can run git pull for updates.</p>
    <div class="code">
        <pre>git clone https://ShaikhAdnanMoinuddin@bitbucket.org/ShaikhAdnanMoinuddin/coreapp.git</pre>
        <div class="copy" data-clipboard-text="git clone https://ShaikhAdnanMoinuddin@bitbucket.org/ShaikhAdnanMoinuddin/coreapp.git">COPY</div>
    </div>
    <p>Then you need to set this dir as your root directory. You can point multiple domains to this directory and build multiple applications</p>
    <p>From now lets call this root as <span class="define">COREPATH</span></p>
    <p>That's all you had to do my Nigga!</p>
    <a href="<?php echo APPURL.'setup/create'; ?>" class="btn blue r5">Create your First App</a>
</article>
<?php get_comp('foot');