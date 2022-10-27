<?php
if(isset($_POST["btnsubmit"]))
{
$type=$_POST["selectcat"];
echo $type;
$name=$_POST["txtname"];
$description=$_POST["txtdescription"];
$price=$_POST["txtprice"];
	$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
	if($type=='Beverages')
	{
		echo "true";
		$sql="INSERT INTO `beverages` (`number`, `name`, `description`, `price`) VALUES (NULL, '".$name."', '".$description."', '".$price."');";
		if(mysqli_query($con,$sql))
		{
			header('Location:Admin.php');
		}
		else
		{
			echo "Could not add the beverage.Please try again.";
		}
	}
	else
	{
		$sql="INSERT INTO `food` (`number`, `name`, `description`, `price`) VALUES (NULL, '".$name."', '".$description."', '".$price."');";
			if(mysqli_query($con,$sql))
		{
			header('Location:Admin.php');
		}
		else
		{
			echo "Could not add the food item.Please try again.";
		}
	}
}
?>