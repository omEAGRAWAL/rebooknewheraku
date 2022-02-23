<?php

# backend_testing_script

include "be.php";
include "be_initial_setup.php";

echo "Hello world!\n";


echo db_query("SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema';");

echo "\n";

initial_setup();

echo db_query("SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema';");

?>
