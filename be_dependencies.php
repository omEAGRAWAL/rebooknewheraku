<?php

# Backend_dependencies
# Created on : 2022 Feb 22

# This function reads your DATABASE_URL config var and returns a connection
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

# Make a db query
function db_query($q){
  # Establish the connection
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  # Make the query and get response
  $response = pg_query($pg_conn,$q);
  # Close the connection
  pg_close();
  $result=[];# To store result rows
  while ($data = pg_fetch_object($response))
    array_push($result,$data);
  return $result;
}

# SQL INSERT
function db_insert($table,$data){
  $data_keys=array_keys($data);
  $keys="";
  $values="";
  for($i=0;$i<count($data_keys);$i++){
    $keys=$keys.",".$data_keys[i];
    $values=$values.","."'".$data[$data_keys[i]]."'";
  }
  # To remove comma at beginning of string
  $keys=substr($keys,1);
  $values=substr($values,1);
  db_query("INSERT INTO ".$table." ("+$keys+") VALUES (".$values.");");
}

# SQL DELETE
function db_delete($table,$condition){
  $condition_keys=array_keys($condition);
  for($i=0;$i<count($condition_keys);$i++)
    $condition_str=$condition_str.",".$condition_keys[i]."="."'".$condition[$condition_keys[i]]."'";
  $condition_str=substr($condition_str,1);
  db_query("DELETE FROM ".$table."WHERE ".$condition_str.";");
}

# SQL UPDATE
function db_edit($table,$data,$condition){
  $data_keys=array_keys($data);
  for($i=0;$i<count($data_keys);$i++)
    $data_str=$data_str.",".$data_keys[i]."="."'".$data[$data_keys[i]]."'";
  $data_str=substr($data_str,1);
  $condition_keys=array_keys($condition);
  for($i=0;$i<count($condition_keys);$i++)
    $condition_str=$condition_str.",".$condition_keys[i]."="."'".$condition[$condition_keys[i]]."'";
  $condition_str=substr($condition_str,1);
  db_query("UPDATE ".$table." SET ".$data_str." WHERE ".$condition_str);
}

# Fetch book details from isbn
function get_book_details($isbn){
  return file_get_contents('https://www.googleapis.com/books/v1/volumes?q='.$isbn.'+isbn');
}
?>
