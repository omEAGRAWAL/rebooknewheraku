<?php

# backend_testing_script

include "be.php";
include "be_initial_setup.php";

echo "Hello world!";


echo __toString(db_query(["SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema';"])[0]);

echo "\n";

initial_setup();

echo __toString(db_query(["SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema';"])[0]);

?>
