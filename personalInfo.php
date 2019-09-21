<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
    </head>
    <body>

        <h1 style=" color:brown ; margin:30px; margin-left: 30%">-- Personal Information --</h1>
        
        
        
      
        <table class="container" border="1" cellspacing="2" cellpadding="2"> 
      <tr > 
          <th> <font face="Arial">User ID</font> </th> 
                    <th> <font face="Arial">Password </font> </th> 
          <th> <font face="Arial">First Name</font> </th> 
          <th> <font face="Arial"> Last Name</font> </th>   
          <th> <font face="Arial"> Gender  </font> </th> 
           <th> <font face="Arial">Country   </font> </th> 
          <th> <font face="Arial">User Rating </font> </th> 
           <th> <font face="Arial">Email ID </font> </th> 
          <th> <font face="Arial">Date Of Birth</font> </th> 

      </tr>
      
      <?php
      session_start();
       include_once 'dbConnection.php';
       $conn=new dbConnection();
//      $result = $conn->show($userid, $password);
//        $conn=new mysqli("localhost", "root", "", "unionSqlInjection");
       
       
                $userId =   $_SESSION['var1'];
                $password =$_SESSION['var2']  ;
               $result = $conn->show($userId, $password);

       
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
   
          $field1name = $row["userid"];
        $field2name = $row["password"];
        $field3name = $row["fname"];
        $field4name = $row["lname"];
        $field5name = $row["gender"]; 
         $field6name = $row["country"]; 
         $field7name = $row["user-rating"]; 
         $field8name = $row["emailid"]; 
         $field9name = $row["dtob"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 

              </tr>';
      
    }
//    $result->free();
}
        ?>
    </body>
</html>