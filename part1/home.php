<?php
      $username= $_POST["user_name"];
      $pass= $_POST["pass_w"];
      $error= "";
      $success= "";
      if (isset($_POST["submit"])) {
          if ($username==$_GET["username"]) {
              if ($pass==$_GET["pass"]) {
                  $error="";
                  $success="Welcome!!!";
                  header('Location:safe.php');
              } else {
                  $error="invalid-password!!";
                  $success="";
              }
          } else {
              $error="invalid-username!!";
              $success="";
          }
      }
      
      ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HAPPY-REGISTER</title>
    </head>
    <body>
        <div class="div1" >
            <header><h1>REGISTER:</h1></header><br>
        <div class="div3">
   Your-name: <?php echo $_GET["name"]?>
   <br>
    your-username:<?php echo $_GET["username"]?>
   <br>
    Your-email: <?php echo $_GET["em"]?>
   <br>
    Your-PN:<?php echo $_GET["PN"]?>
    <br>
    Your-BD: <?php echo $_GET["BD"]?>
   <br>
</div>
    <form method="GET" action="">
    FULL-name:<input type="text" name="name" value="" required>
    <br>
    Username:<input type="text" name="username" value="" required>
    <br>
    PASSWORD:<input type="password" name="pass" value="" required>
    <br>
    Confirm-Password:<input type="password" name="cf" value="" required>
    <br>
    Email:<input type="text" name="em" value="" required>
    <br>
    PHONE:<input type="number" name="PN" value="" required>
    <br>
     Date-Of_Birth:<input type="date" name="BD" value="" required>
    <br>
    Social-Security-Number:<input type="number" name="SSN" value="" required>
    <br>
    <input type="submit" name="submit" value="submit">
    </form>
    <br>
   
        </div>
        <div class="div2">
        <header><h1>LOGIN:</h1></header><br>

<p><?php echo $error;?></p><p><?php echo $success;?></p><br>
            <form method="POST" action="">
            Username:<input type="text" name="user_name" value="" required>
            <br>
             PASSWORD:<input type="password" name="pass_w" value="" required>
             <br>
             <input type="submit" name="submit" value="submit" id="submit">

           </form>
        </div>


    </body>
    </html>
    <?php
    function pre_r($array){
      echo'<pre>';
      print_r($array);
      echo '</pre>';



    }
    
    
    ?>