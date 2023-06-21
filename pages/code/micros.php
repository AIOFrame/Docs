<?php
get_comp('head');
render_docs([
    ['h1','Micro CSS'],
    ['p','Micro CSS lets you style the element directly by writing micro class'],
    
    ['p','<div>Instead of styling <pre class="dib">text-align: right</pre> to an element, you can just add class</p><pre class="dib">tar</pre></div>'],
    ['p','Micro CSS covers almost all css styling you need in the smallest shortcode possible'],
    '.mb60',
    ['h1','LINK MICRO CSS'],
    ['code',"get_style('micro');"],
    ['code',"get_styles(['micro']);"],
    ['h3','Reference'],
    'table',
    ['th', ['MICRO CLASS','EQUIVALENT STYLE']],
    ['td',['rel',code('position: relative')]],

]);

docs_nav();
get_comp('foot');
