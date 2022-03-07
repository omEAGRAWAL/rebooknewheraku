<?php

# backend_main
# Created on : 2022 Feb 22


function new_request($data){
  $time=round(microtime(true) * 1000);
  $data['id']='REQ-'.$time.'-'.md5(serialize($data));
  db_insert("REQUESTS",$data);
}

function edit_request($data,$condition){
  db_update("REQUESTS",$data,$condition);
}

function get_request_list($data){
  
}

function read_request($data){
  
}

function new_campeign($data){
  $time=round(microtime(true) * 1000);
  $data['id']='CAMP-'.$time.'-'.md5(serialize($data));  
  db_insert("CAMPEIGNS",$data);
}

function edit_campeign($data,$condition){
  db_update("CAMPAIGNS"$data,$condition);
}

function get_campeign_list($data){
  
}

function read_campeign($data){
  
}

function new_user($data){
  $time=round(microtime(true) * 1000);
  $data['id']='USER-'.$time.'-'.md5(serialize($data)); 
  db_insert("USERS",$data);
}

function edit_user($data,$condition){
  db_update("USERS",$data,$condition);
}

function get_user_list($data){
  
}

function read_user($data){
  
}

function new_book($data){
  $time=round(microtime(true) * 1000);
  $data['id']='BOOK-'.$time.'-'.md5(serialize($data)); 
  db_insert("BOOKS",$data);
}

function edit_book($data,$condition){
  db_update("BOOKS",$data,$condition);
}

function get_user_book($data){
  
}

function read_book($data){
  
}
