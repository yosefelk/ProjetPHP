
<?php
include 'core/init.php';
include 'includes/overall/header.php';?>
<h2>Annuler Ticket</h2>
<form action="" method="post">
		<ul>

		<li>
		PIN*:<br>
		<input type="text" name="pin" required placeholder="Enterr PIN...">
		</li>
		<li>
		<input type="submit" name="cancel" value="Proceed">
		</li>
		</ul>
</form>
<?php
if (isset($_POST['cancel'])) {
	$query = "SELECT * FROM passengers WHERE `pin` = '$_POST[pin]'";
    $result = mysql_query($query);


echo "Ticket has been cancelled!";
while($row = mysql_fetch_array($result)){ 
echo "&nbsp;<br> Dear&nbsp;";
echo '<b>';
echo $row['first_name'];
echo '</b>';
echo ($row['fare'] + $row['grand_fare']) -(($row['fare'] + $row['grand_fare'])*0.23);
echo '<br>';

}
mysql_query("DELETE FROM `passengers` WHERE `pin` = '$_POST[pin]'"); //or die(mysql_error());
	

	
	}
	?>

<?php include 'includes/overall/footer.php';?>