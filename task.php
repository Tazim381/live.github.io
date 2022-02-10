<h1 align="center" style="text-shadow:1px 1px 0 #444;">Database Access</h1>
<h3 align="center" style=" background-color: lightblue;">Showing tables from cinema database using php html and css</h3>
<form action="" method="post">
	<div >
		<input  type="submit" name="viewmovie" value="VIEW MOVIE"><br>
		<input type="submit" name="viewperson" value="VIEW PERSON"><br>
		<input type="submit" name="viewrole" value="VIEW ROLE"><br>
		<input type="submit" name="viewall" value="VIEW ALL"><br>

    </div>
</form>

<?php
$link = mysqli_connect("localhost", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}
if(isset($_POST['viewmovie']))
{
$query = "SELECT * FROM movie";

$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}
if ($table) {	
?>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">

<table align="center"  class="w3-theme-l4" border="1px" style="width:50%">
<thead>
<tr>
<div >
 <th colspan="3" class="w3-text-blue">MOVIE</th>
 </div>
 </tr>

<tr>
	<th class="w3-text-blue">Movie Id</th>
	<th class="w3-text-yellow">Movie Title</th>
	<th class="w3-text-cyan">Release Year</th>  
	
</tr>

</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td class="w3-text-yellow"><?php echo($d_row["mid"]); ?></td>
        	<td class="w3-text-blue"><?php echo($d_row["mtitle"]); ?></td>
        	<td class="w3-text-lime"><?php echo($d_row["myear"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>

</html>
<?php
}

mysqli_close($link);
}

?>



<?php

$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}


if(isset($_POST['viewperson']))
{
$query = "SELECT * FROM person";

$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}


if ($table) {
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-blue.css">

<table align="center" class="w3-theme-l4" border="1px" style="width:50%">
<thead>
<tr>
<div >
 <th colspan="4" class="w3-text-Pale Red">PERSON DETAILS</th>
 </div>
 </tr>
<tr>
	<th class="w3-text-teal">Person Id</th>
	<th class="w3-text-yellow">Person name</th>
	<th class="w3-text-green">Person gender</th>    
    <th class="w3-text-pink">Person date of birth</th>    
</tr>
</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
		
        		<td class="w3-text-pink"><?php echo($d_row["pid"]); ?></td>
        	<td class="w3-text-orange"><?php echo($d_row["pname"]); ?></td>
        	<td class="w3-text-red"><?php echo($d_row["psex"]); ?></td>
        	<td class="w3-text-teal"><?php echo($d_row["pdob"]); ?></td>
		
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>

</html>
<?php
}

mysqli_close($link);
}

?>




<?php

$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['viewrole']))
{
$query = "SELECT * FROM role";

$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}

if ($table) {
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<table align="center"  border="1px" style="width:45%">
<thead>
<tr>
<div >
 <th colspan="4" class="w3-text-Indigo">ROLE DETAILS</th>
 </div>
 </tr>
<tr>
	<th class="w3-text-pink">Role id</th>
	<th class="w3-text-yellow">person id</th>
	<th class="w3-text-purple">part</th>        
</tr>
</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td class="w3-text-gray"><?php echo($d_row["mid"]); ?></td>
        	<td class="w3-text-red"><?php echo($d_row["pid"]); ?></td>
        	<td class="w3-text-cyan"><?php echo($d_row["part"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
</html>
<?php
}

mysqli_close($link);
}

?>
<?php
if(isset($_POST['viewall']))
{


$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM movie";
$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;	//add each row into the table array
}


if ($table) {	
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">

<table align="center"  class="w3-theme-l4" border="1px" style="width:30%">

<thead>

<tr>
<div >
 <th colspan="3" class="w3-text-blue">MOVIE</th>
 </div>
 </tr>

<tr>
	<th class="w3-text-blue">Movie Id</th>
	<th class="w3-text-yellow">Movie Title</th>
	<th class="w3-text-cyan">Release Year</th>  
	
</tr>

</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td class="w3-text-yellow"><?php echo($d_row["mid"]); ?></td>
        	<td class="w3-text-blue"><?php echo($d_row["mtitle"]); ?></td>
        	<td class="w3-text-lime"><?php echo($d_row["myear"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
<br>
<br>

</html>
<?php
}


$query2 = "SELECT * FROM person";

$result2 = mysqli_query( $link, $query2);

if (!$result2) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row2 = mysqli_fetch_assoc( $result2 ) ) {
	$table2[] = $row2;	//add each row into the table array
}


if ($table2) {	//Check if there are any rows to be displayed
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-blue.css">

<table align="center" class="w3-theme-l4" border="1px" style="width:30%">
<thead>
<tr>
<div >
 <th colspan="4" class="w3-text-Pale Red">PERSON DETAILS</th>
 </div>
 </tr>
<tr>
	<th class="w3-text-teal">Person Id</th>
	<th class="w3-text-yellow">Person name</th>
	<th class="w3-text-green">Person gender</th>    
    <th class="w3-text-pink">Person date of birth</th>    
</tr>
</thead>
<?php

	foreach($table2 as $d_row) {
	
		?>
		<tbody>
        <tr>
		
        		<td class="w3-text-pink"><?php echo($d_row["pid"]); ?></td>
        	<td class="w3-text-orange"><?php echo($d_row["pname"]); ?></td>
        	<td class="w3-text-red"><?php echo($d_row["psex"]); ?></td>
        	<td class="w3-text-teal"><?php echo($d_row["pdob"]); ?></td>
		
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
<br>
<br>

</html>
<?php
}

$query3 = "SELECT * FROM role";

$result3 = mysqli_query( $link, $query3);

if (!$result3) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
	$table3[] = $row3;	//add each row into the table array
}


if ($table3) {	//Check if there are any rows to be displayed
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<table align="center"  border="1px" style="width:25%">
<thead>
<tr>
<div >
 <th colspan="4" class="w3-text-Indigo">ROLE DETAILS</th>
 </div>
 </tr>
<tr>
	<th class="w3-text-pink">Role id</th>
	<th class="w3-text-yellow">person id</th>
	<th class="w3-text-purple">part</th>        
</tr>
</thead>
<?php

	foreach($table3 as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td class="w3-text-gray"><?php echo($d_row["mid"]); ?></td>
        	<td class="w3-text-red"><?php echo($d_row["pid"]); ?></td>
        	<td class="w3-text-cyan"><?php echo($d_row["part"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
</html>
<?php
}

mysqli_close($link);

}
?>