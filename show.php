<?php
include('conn.php');

$sel = "Select * from tbl_profile";
$ex = $con->query($sel);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Document</title>
</head>
<body bgcolor="crimson">
<h3><center>Query</center></h3>
<form method="post">
<table align="center" border="1">
<tr>

<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th align="center" colspan="2">Action</th>
</tr>

<?php
while($rw=  $ex->fetch_object())
{
?>
<tr>

<td><?php echo $rw->name;?></td>
<td><?php echo $rw->email;?></td>
<td><?php echo $rw->sub;?></td>
<td><?php echo $rw->mesg;?></td>

<td><a href="www.gmail.com"><font color="white"><b>Email</b></font></td>

</tr>
<?php
}
?>
</table>
</form>
</body>
</html>