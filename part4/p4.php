<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musical array</title>
</head>
<body>
    <?php
    
    $music = array (
        $musical=array("oklahoma","the music man","south pacific"),
        $drama=array("Lawrence of Arabia","To Kill a Mockingbird","Casablanca"),
        $mysteries=array("The Maltese Falcon","Rear Window","North by Northwest"),
        
      );

      for ($row = 0; $row < 3; $row++) {
          if ($row==0) {
              
              echo "<p><b>Musical: </b></p>";
              echo "<ul>";
          }else if($row==1){
            echo "<p><b>Drama: </b></p>";
            echo "<ul>";
          }else{
            echo "<p><b>Mysterious: </b></p>";
            echo "<ul>";
          }
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$music[$row][$col]."</li>";
          
        }
        echo "</ul>";
      }
  
      
    
    ?>
    
</body>
</html>