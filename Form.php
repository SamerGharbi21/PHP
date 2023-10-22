<form action="form.php" , method="POST"> 
  Name : <input type="text" name="user" >
  <br>
  Last : <input type="text" name="luser" >
<br>
  <input type="submit">
</form>

<?php 


echo $_REQUEST["user"];
echo $_REQUEST["luser"];






?>