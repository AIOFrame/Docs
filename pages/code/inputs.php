<?php get_comp('head'); ?>
<article>
    <h1><?php E('Inputs'); ?></h1>
    <p><?php E('Creating inputs within a form is just a single line function with minimal parameters! You would absolutely love creating forms within AIO apps'); ?></p>
    <div class="mb60"></div>
    <h2 id="input"><?php E('Generic Input Field'); ?></h2>
    <p></p>
    <div class="code">
        <pre>get_style('micro');</pre>
        <div class="copy" data-clipboard-text="get_style('micro');"><?php E('COPY'); ?></div>
    </div>
    <div class="code">
        <pre>get_styles(['your_other_style','micro']);</pre>
        <div class="copy" data-clipboard-text="get_styles(['micro']);"><?php E('COPY'); ?></div>
    </div>
    <div class="mb60"></div>
</article>
<?php
quick_links([
    'input'=>'Generic Input Field',
    'inputs'=>'Multiple Input Fields',
    'text'=>'Text Field',
    'email'=>'Email Field',
    'password'=>'Password Field',
    'date'=>'Date Field',
    'color'=>'Color Field',
    'select'=>'Select Dropdown',
    'textarea'=>'Textarea',
    'cbs'=>'Checkbox Fields',
    'radios'=>'Radio Fields',
    'slide'=>'Slide Field',
    'upload'=>'File Upload Field',
    'code'=>'Code Input',
    'rt'=>'Rich Text Input',
    'map'=>'Map Field',
]);
get_comp('foot');