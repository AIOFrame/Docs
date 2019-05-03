<?php get_comp('head'); ?>
<article>
    <h1>Install AIO</h1>
    <p>Installing AIO is very easy. All you have to do is git clone our project and start working on it. Every now and then you can run git pull for updates.</p>
    <div class="code">
        <pre>git clone https://github.com/AIOFrame/AIO.git</pre>
        <div class="copy" data-clipboard-text="git clone https://github.com/AIOFrame/AIO.git">COPY</div>
    </div>
    <p>Then you need to set this dir as your root directory for your domains. You can point multiple domains to this directory and build multiple applications</p>
    <p>From now you can use this path in your development as a defined variable <span class="define">COREPATH</span></p>
    <p>Ex: <span class="define">COREPATH</span> = /users/hero/desktop/coreapp</p>
    <p>That's all you had to do my Nigga!</p>
    <a href="<?php echo APPURL.'setup/create'; ?>" class="btn blue r5">Create your First App</a>
</article>
<?php get_comp('foot');