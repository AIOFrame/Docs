<?php get_comp('head'); ?>
    <h1 class="mb30">Database</h1>
    <p>Once you provide database hostname, database name, database user and password in config <a href="<?php echo APPURL.'setup/config'; ?>">as instructed here.</a></p>
    <div class="mb15">Now you can call <pre class="dib">global $db</pre> and run your queries using <pre class="dib">$db->query('your query');</pre></div>
    <p class="mb60">You can also setup default database structure just by writing an array. Or you can import an existing database for ready deployment.</p>
    <h3 id="structure">Database Structure</h3>
    <p>Database structure lets you setup a structure for your database and a database with tables and columns will be setup for you according to your array.</p>
    <p>Create a php with any name inside your 'functions' dir and write your database structure based on following code</p>
    <p></p>
    <div class="row">
        <div class="col-lg-6 col-12">
            <h4>Sample Database Array</h4>
            <div class="code">
    <pre class="lh15">&#60;?php

$tables[] = [ 'contacts', 'cn', [
    [ 'name', 'VARCHAR', 35, 0 ],
    [ 'phone', 'VARCHAR', 50, 0 ],
    [ 'email', 'VARCHAR', 155, 1 ],
    [ 'date', 'DATE', 1, 0 ],
    [ 'added_by', 'INT', 13, 0 ],
]];

create_tables( $tables );
    </pre>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <h4>Description</h4>
            <div class="code">
    <pre class="lh15">


'contacts' -> table name
'cn'       -> table short name
'name'     -> column name
'varchar'  -> column type
35         -> length
1 or 0     -> Null or Non Null


    </pre>
            </div>
        </div>
    </div>
<?php get_comp('foot');