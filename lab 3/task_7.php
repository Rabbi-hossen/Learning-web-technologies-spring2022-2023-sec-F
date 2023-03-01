
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1">
             <tr>
                <td>
              
             <?php
                  for($i=1;$i<=3;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo "* ";
                    }
                    echo "<br>";
                  }


?>
  </td>

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


</body>
</html>

<?php



?>