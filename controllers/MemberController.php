<?php

if(isset($_GET['action'])){
     $action = $_GET['action'];
 }
 else{
     $action = '';
 }
 switch($action){
     case 'login':{
        
          if(isset($_POST['submit'])){
              $user_name = $_POST['uname'];
              $pass= $_POST['password'];
              $tbltenbang = "users where tendn = '$user_name' and matkhau = '$pass'";
              $data = $db->getAllData($tbltenbang); 
              if($data){
                header("Location: index.php?controller=member&action=admin");
  
              }else{
                  $thatbai = "thatbai";
              }
          }
          require_once('views/home/login.php');
          break;
      }
      case 'admin':{
          $tblusers = "users";
          $count_users = $db->getCount($tblusers); 
  
          $tbltheloai = "theloai";
          $count_theloai = $db->getCount($tbltheloai); 
  
          $tbltacgia = "tacgia";
          $count_tacgia = $db->getCount($tbltacgia);
          
          $tblbaiviet = "baiviet";
          $count_baiviet = $db->getCount($tblbaiviet); 
  
          require_once('views/admin/index.php');
          break;
      }
 }