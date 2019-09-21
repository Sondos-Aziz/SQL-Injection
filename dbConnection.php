<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author hp
 */
class dbConnection {
    //put your code here
    public $connection;
    
    public function __construct() {
      
        $this->connection= new mysqli("localhost", "root", "", "unionSqlInjection")
        or die("ERROR");
    }
    
    public function verifyUser($userid,$password) {
      $rs=  $this->connection->query(
     "SELECT * FROM user_details WHERE userid ='$userid' and password ='$password'  ");
      if(mysqli_num_rows($rs) != 0)
          return TRUE;
      else
          return FALSE;
//      $rs=  $this->connection->prepare(
//     "Select * from users where userName=? And "
//              . "password=?");
//      $rs->bind_param("ss", $userName,$password);
//      $rs->execute();
//      if($rs->fetch() !=0)
//          return TRUE;
//      else
//          return FALSE;
              
    }
}
