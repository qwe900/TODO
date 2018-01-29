<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  include("dbconnect.php");
  if(empty($_POST['date'])) {
   $date = date("Y-m-d H:i:s");
   
} else {
	$date = $_POST['date'];
}
  $q = "INSERT INTO todo (`todo`.`desc`, `todo`.`date`, `todo`.`done`) VALUES('".$_POST['desc']."', '".$date."', 0)";
  $x = mysqli_query($con, $q);

  if($x == 1) {
    header('Location: index.php');
  }
  else {
    /* TODO: Error report */
  }

  mysqli_close($con);
  ?>
</body>
</html>
