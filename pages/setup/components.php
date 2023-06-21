<?php
get_comp('head');
render_docs([
    [ 'h1', 'Components' ],
    [ 'p', 'A repetitive HTML or PHP code can be easily re-used in multiple pages using a simple php function' ],
    [ 'p', 'you can place such code in a PHP file inside "components" directory under your web app directory' ],
    [ 'code', 'get_comp(\'add_user_form\');' ],
    [ 'p', 'With this above function, you can get "add_user_form.php" from your web app\'s components directory anywhere, even inside another component' ],
    '.pb30',
    [ 'h2', 'Organized Components' ],
    [ 'p', 'You can organize components inside directories as long as they are inside components directory of your web app, you can use them' ],
    [ 'code', 'get_comp(\'students/add_student\');' ],
    [ 'p', 'Note: You do not need to add .php or .html when fetching a component file' ],
    [ 'p', 'Note: If the component file does not exist, no errors will be thrown! AIO just wont load that file' ]
]);
docs_nav();
get_comp('foot');