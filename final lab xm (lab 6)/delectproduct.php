
<form action="delect.php" method="post" >
    <fieldset>
        <legend>Delect Product</legend>
   
        <?php
$con = mysqli_connect('localhost:8082','root','','product_db');
if (isset($_POST['dl'])) {

$reciv = $_REQUEST['name'];
$dl = "SELECT * FROM `products` WHERE name=$reciv";
$result= mysqli_query($con,$dl);
while($row = mysqli_fetch_assoc($result)){
    echo "<pre>";
    $name=$row['name'];
            $bprice=$row['bprice'];
            $sprice=$row['sprice'];


             echo  $name  ;
            echo  $bprice  ;
             echo  $sprice  ;
             echo "</pre>";
}
}
?>
 <input type="submit" name="dl" value="Delect" >

 </fieldset>
</form>