<?php
//conf.php nu este pe github 
include 'conf.php';



$linii = $_POST['linii'];
$asc = $_POST['asc'];

$query="select * from agenda order by id $asc limit $linii";
$result=mysqli_query($conn_mysql, $query) or die('nu am putut efectua query. eroare'.mysqli_error($conn_mysql, $query));

while ($var=mysqli_fetch_array($result)){
$id=$var['id'];
$nume=$var['nume'];
$tel=$var['tel'];
$email=$var['email'];

echo "id: ".$id." | nume: ".$nume." | tel: ".$tel." | email: ".$email."<br>";

}




?>