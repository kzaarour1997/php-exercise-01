
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stat calculator</title>
</head>
<body>
    <div class="num">
    <div class="num1">
        <header><h1>ENTER INFO HERE:</h1><header>
<form method="POST" action="">
    SALARY:<input type="number" name="salary" value="" required>
    <br>
    <input type="radio" id="monthly" name="wage" value="monthly">
  <label for="monthly">monthly</label><br>
  <input type="radio" id="yearly" name="wage" value="yearly">
  <label for="yearly">yearly</label><br>
    TAX_FREE_ALLOWANCE:<input type="" name="allowance" value="" required><br>
    <input type="submit" name="submit" value="submit">
</div>
<div class=num2>
    Your salary:<?php echo $p= $_POST["salary"]?><br>
    Your wage type:<?php echo $wage= $_POST["wage"]?><br>
   Your Tax-Free-Allownace: <?php echo  $aow= $_POST["allowance"]?><br>
       

</div>
<div class="num3">
<?php
      if (isset($_POST["submit"])) {
          if ($wage=="monthly") {
              $TS= $p*12;
              $TSM=$p;
              if ($TS<=10000) {
                  $tax=0;
                  $SSF=0;
                  $SSFM=0;
                  $taxm=0;
                  $SAD= $TS;
              } elseif ($TS>10000 && $TS<=25000) {
                  $tax=11;
                  $SSF=4;
                  $taxm=0.916;
                  $SSFM=0.33;
                  $SAD=(($tax+$SSF)/100)*$TS;
              } elseif ($TS>25000 && $TS<=50000) {
                  $tax=30;
                  $taxm=2.5;
                  $SSF=4;
                  $SSFM=0.33;
                  $SAD=(($tax+$SSF)/100)*$TS;
              } elseif ($TS>50000) {
                  $tax=45;
                  $taxm=3.75;
                  $SSF=4;
                  $SSFM=0.33;
                  $SAD=(($tax+$SSF)/100)*$TS;
              }
              $SAT=$SAD+$aow;
              $SATM=($SAT/12);
          } else {
            $TS= $p;
            $TSM=($p/12);
            if ($TS<=10000) {
                $tax=0;
                $SSF=0;
                $SSFM=0;
                $taxm=0;
                $SAD= $TS;
            } elseif ($TS>10000 && $TS<=25000) {
                $tax=11;
                $SSF=4;
                $taxm=0.916;
                $SSFM=0.33;
                $SAD=(($tax+$SSF)/100)*$TS;
            } elseif ($TS>25000 && $TS<=50000) {
                $tax=30;
                $taxm=2.5;
                $SSF=4;
                $SSFM=0.33;
                $SAD=(($tax+$SSF)/100)*$TS;
            } elseif ($TS>50000) {
                $tax=45;
                $taxm=3.75;
                $SSF=4;
                $SSFM=0.33;
                $SAD=(($tax+$SSF)/100)*$TS;
            }
            $SAT=$SAD+$aow;
            $SATM=($SAT/12);
          }
      }
      echo "<table border='0'width='300' cellspacing='0'>";
         echo "<tr>";
         echo "<td></td>";
         echo "<td >monthly</td>";
         echo "<td >yearly</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td width='300'>Total salary:</td>";
         echo "<td width='300'>$TSM$</td>";
         echo "<td width='300'> $TS$</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td width='300'>Tax amount:</td>";
         echo "<td width='300'>$taxm%</td>";
         echo "<td width='300'>$tax%</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td width='300'>Social security fee:</td>";
         echo "<td width='300'>$SSFM%</td>";
         echo "<td width='300'>$SSF%</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td width='300'>Salary after tax:</td>";
         echo "<td width='300'>$SATM$</td>";
         echo "<td width='300'>$SAT$</td>";
         echo "</tr>";
echo "</table>";

      
      ?>
</div>
    </div>
</body>
</html>