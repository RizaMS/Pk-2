<!DOCTYPE html> 
<html>
<body>
<?php
$id = $_GET["id"];
$firstname=$_GET["firstname"];
$lastname=$_GET["lastname"];
$email=$_GET["email"];
?>
<form action="update.php" method="post">
id:<input type="text" name="id" value=<?php echo $id ?>><br>
First name: <input type="type" name="firstname" value=<?php echo $firstname ?>><br>
Last name: <input type="type" name="lastname" value=<?php echo $lastname ?>><br>
E-mail: <input type="type" name="email" value=<?php echo $email ?>><br>
<input type="submit">
</form>

</body>
</html>