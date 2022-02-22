# Backend_dependencies
# Created on : 2022 Feb 22

# Edit log YYYY/MM/DD : Editor_Name : Edit details

# 2022/02/22 : Vyasdev : Functions for database query and fetching book details from ISBN

<?php

# This function reads your DATABASE_URL config var and returns a connection
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}


# Make a set of db queries
function db_query($queries){# Argument: Array of queries
  
  # Establish the connection
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  
  $response=array();
  
  foreach ($queries as $query){
    # Make a query and get response
    array_push($response , pg_query($pg_conn,$query));
  }
  
  # Close the connection
  pg_close();
  
  return $response;
}


# Fetch book details from isbn
function get_book_details($isbn){
  return file_get_contents('https://www.googleapis.com/books/v1/volumes?q='.$isbn.'+isbn');
  //$json = json_decode($str, true);
  //echo '<pre>' . print_r($json, true) . '</pre>';
}

/*
# Reference

# Generate password hash
function hash($password){
  password_hash($password, PASSWORD_DEFAULT);
}

# Check password
function verify_pw($password, $pw_hash){
  return password_verify($password, $pw_hash);
  # True -- Correct pw
  # False -- Wrong pw
}

*/

?>
