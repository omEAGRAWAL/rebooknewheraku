<?php

# Backend_dependencies
# Created on : 2022 Feb 22

# Edit log YYYY/MM/DD : Editor_Name : Edit details

# 2022/02/22 : Vyasdev : Functions for database query and fetching book details from ISBN
# 2022/02/22 : Vyasdev : Functions for INSERT, UPDATE and DELETE sql commands (Incomplete)


# This function reads your DATABASE_URL config var and returns a connection
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}


# Make a db query
function db_query($q){# Argument: Array of queries
  
  # Establish the connection
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  
  # Make the query and get response
  $response = pg_query($pg_conn,$q);
  
  # Close the connection
  pg_close();
  
  $result=[];
  
  while ($data = pg_fetch_row($response)) {
    array_push($result,$data["tablename"]);
  }
  
  return $result;
}


// TODO: Complete db_edit()
// TODO: Correct logical error of following 3 functions
function db_insert($table,$data){
  
  $data_keys=array_keys($data);
  $keys="";
  $values="";
  
  for($i=0;$i<count($data_keys);$i++){
    $keys=$keys.",".$data_keys[i];
    $values=$values.",".$data[$data_keys[i]];
  }
  
  db_query("INSERT INTO ".$table." ("+$keys+") VALUES (".$values.");");
  
}

function db_delete($table,$condition){
  
  $data_keys=array_keys($data);
  
  for($i=0;$i<count($data_keys);$i++){
    $condition_str=$condition_str.",".$data_keys[i]."=".$data[$data_keys[i]];
  }
  
  db_query("DELETE FROM ".$table."WHERE ".$condition_str.";");

}

function db_edit($table,$data){
  
  db_query("UPDATE ".$table." SET ".$update_str." WHERE ".$update_condition_str);
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
