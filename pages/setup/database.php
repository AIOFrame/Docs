<?php get_comp('head');

render_docs([
['h1','Database'],
['p',"Once you provide database hostname, database name, database user and password in config <a href=\"<?php echo APPURL.'config'; ?>\""],
['p','<div>Now you can call <pre class="dib">global $db</pre> and run your queries using <pre class="dib">$db->query(\'your query\');</pre>'],
['p','You can also setup default database structure just by writing an array. Or you can import an existing database for ready deployment.'],
'.mb60',
['h3','Database Structure'],
['p','Database structure lets you setup a structure for your database and a database with tables and columns will be setup for you according to your array.'],
['p','Create a php with any name inside your \'functions\' dir and write your database structure based on following code'],
'plain',
['td',['Sample Database Array','Description']],
['td',[code('
<?php
$tables[] = [ \'contacts\', \'cn\', [
    [ \'name\', \'VARCHAR\', 35, 0 ],
    [ \'phone\', \'VARCHAR\', 50, 0 ],
    [ \'email\', \'VARCHAR\', 155, 1 ],
    [ \'date\', \'DATE\', 1, 0 ],
    [ \'added_by\', \'INT\', 13, 0 ],
]];

create_tables( $tables );
'),code('

\'contacts\' -> table name
\'cn\'       -> table short name
\'name\'     -> column name
\'varchar\'  -> column type
35         -> length
1 or 0     -> Null or Non Null



')]],

]);

docs_nav();
get_comp('foot');