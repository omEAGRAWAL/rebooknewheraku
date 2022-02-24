<?php

# backend_main
# Created on : 2022 Feb 22

# Change log YYYY/MM/DD : Contributor : Changes details
# 2022/02/22 : Vyasdev : Created the file


function new_request($data){
  $time=round(microtime(true) * 1000);
  $id='REQ-'.$time.'-'.rand().md5(serialize($data));
  
  db_insert("REQUESTS",$data);
}

function edit_request($data){
  
}

function get_request_list($data){
  
}

function read_request($data){
  
}

function new_campeign($data){
  $time=round(microtime(true) * 1000);
  $id='CAMP-'.$time.'-'.rand().md5(serialize($data));
  
  $data["ID"]=$id;
  
  db_insert("CAMPEIGNS",$data);
}

function edit_campeign($data){
  
}

function get_campeign_list($data){
  
}

function read_campeign($data){
  
}

function new_user($data){
  $time=round(microtime(true) * 1000);
  $id='USER-'.$time.'-'.rand().md5(serialize($data));
  
  db_insert("USERS",$data);
}

function edit_user($data){
  
}

function get_user_list($data){
  
}

function read_user($data){
  
}

function new_book($data){
  $time=round(microtime(true) * 1000);
  $id='BOOK-'.$time.'-'.rand().md5(serialize($data));
  
  db_insert("BOOKS",$data);
}

function edit_book($data){
  
}

function get_user_book($data){
  
}

function read_book($data){
  
}
