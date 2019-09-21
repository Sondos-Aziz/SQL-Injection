<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style type="text/css">
            body{margin: 30px}
            :invalid {
                border-color: #e88;
                -webkit-box-shadow: 0 0 5px rgba(255, 0, 0, .8);
                -moz-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
                -o-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
                -ms-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
                box-shadow:0 0 5px rgba(255, 0, 0, .8);}:required 
            {border-color: #88a;-webkit-box-shadow: 0 0 5px rgba(0, 0, 255, .5)
                 ;-moz-box-shadow: 0 0 5px rgba(0, 0, 255, .5);-o-box-shadow: 0 0 5px rgba(0, 0, 255, .5);-ms-box-shadow: 0 0 5px rgba(0, 0, 255, .5);box-shadow: 0 0 5px rgba(0, 0, 255, .5);}form {width:300px;margin: 20px auto;}input {font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;border:1px solid #ccc;font-size:20px;width:300px;min-height:30px;display:block;margin-bottom:15px;margin-top:5px;outline: none;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;-ms-border-radius:5px;border-radius:5px;}input[type=submit] {background:#066923;padding:10px;color: #fff;}</style>
        
        
        
    </head>
    <body>
        <div style="text-align: center;
            font-size: 20px">
            <form action="index.php" method="POST">
          User Id:<input type="text" name="userId" value="" /><br>
          Password:<input type="password" name="password" value="" /><br>
          <input type="submit" value="OK" />
         
            </form>        
        </div>
        
        <?php
        // put your code here
        /* @var $_POST type */
        $userId =  $_POST['userId'];
        $password = $_POST['password'];
        include_once 'dbConnection.php';
        $conn=new dbConnection();
        if($conn->verifyUser($userId, $password)){
                echo 'sucess';
            header ("Location:personalInfo.php");
        }  else {
        echo "ERROR ....";}
        ?>
    </body>
</html>