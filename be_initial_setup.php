# Intial_setup
# Created on : 2022 Feb 22

# Edit log YYYY/MM/DD : Editor_Name : Edit details

# 2022/02/22 : Vyasdev : Initial setup functon (Need changes)

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Rebook admin interface</title>
    
  </head>
  
  <body>
    <div id="web_terminal"></div>
  </body>
</html>

<?php

ob_start();
session_start();

$logged_in=false;

require "be_dependencies.php";

function intial_setup(){
  
  $db_queries = [
    
    "CREATE TABLE IF NOT EXISTS USERS (
         ID              CHARACTER VARYING(255) PRIMARY KEY, 
         USER_ID         CHARACTER VARYING(255) NOT NULL UNIQUE, 
         ENCRYPTION_KEY  CHARACTER VARYING(255) NOT NULL, 
         PW_HASH         CHARACTER VARYING(255) NOT NULL, 
         EMAIL           CHARACTER VARYING(255) NOT NULL, 
         PHONE           CHARACTER VARYING(15) NOT NULL, 
         NAME            CHARACTER VARYING(255) NOT NULL, 
         ADDRESS_L1      CHARACTER VARYING(255) NOT NULL, 
         ADDRESS_L2      CHARACTER VARYING(255), 
         PIN_CODE        CHARACTER VARYING(7) NOT NULL, 
         ACCOUNT_TYPE    CHARACTER VARYING(15) NOT NULL, 
         CREATED_ON      DATE NOT NULL, 
         LAST_ACTIVE     DATE NOT NULL
     );" , 
    
    "CREATE TABLE IF NOT EXISTS BOOKS (
         ID              CHARACTER VARYING(255) PRIMARY KEY, 
         NAME            CHARACTER VARYING(255) NOT NULL, 
         CATEGORY        CHARACTER VARYING(255) NOT NULL, 
         LOCATION        CHARACTER VARYING(255) NOT NULL, 
         RECIEVED_DATE   DATE NOT NULL, 
         ISBN            CHARACTER VARYING(15), 
         AUTHOR          CHARACTER VARYING(255)
     );" , 
    
    "CREATE TABLE IF NOT EXISTS REQUESTS (
         ID              CHARACTER VARYING(255) PRIMARY KEY, 
         DATETIME        TIMESTAMP WITH TIME ZONE NOT NULL, 
         REQUESTEE_NAME  CHARACTER VARYING(255) NOT NULL, 
         ADDRESS_L1      CHARACTER VARYING(255) NOT NULL, 
         ADDRESS_L2      CHARACTER VARYING(255), 
         PIN_CODE        CHARACTER VARYING(7) NOT NULL, 
         CATEGORY        CHARACTER VARYING(255) NOT NULL, 
         SUBJECT         CHARACTER VARYING(255) NOT NULL
     );"
    
  ];
  
  db_query($db_queries);
  
}

?>
