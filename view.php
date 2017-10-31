<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "compl";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysqli_select_db($connection,$dbname) or die('database selection problem');
?>

    <?php
	$sql="SELECT * FROM uploads";
	$result_set=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
		<td><?php echo $row['date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
   