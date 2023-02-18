<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" >
<tr>
    <th>The array to declare</th>
    <th>Shapes to print</th>
</tr>
<tr>
<td>
    <table>
        
  
<?php
    // Declare the 2D array
    $array = array(
        array(1, 2, 3, 'A'),
        array(1, 2, 'B', 'C'),
        array(1, 'D', 'E', 'F')
    );

    // Print the array
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }
?>
</td>
<td>
<table border="1">
    <tr>
    

<td>
           <?php
                for($i=3;$i>=1;$i--){
                  for($j=1;$j<=$i;$j++){
                      echo $j." ";
                  }
                  echo "<br>";
                }
               

?>     </td>
           <td>
           <?php
           $letter = 'A';
                for($i=1;$i<=3;$i++){
                  for($j=1;$j<=$i;$j++){
                      echo $letter." ";
                      $letter++;
                  }
                  echo "<br>";
                }


?>
           </td>
    </tr>

</table>



</td>
</tr>
      




    </table>
    
</body>
</html>