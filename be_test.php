<?php

# backend_testing_script

include "be.php";
include "be_initial_setup.php";

print("Hello world!<br>");


print(serialize(db_query("SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema';")));

print("<br>");

initial_setup();

print(db_query("SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema';")[0]->tablename);

?>
