<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chào các bạn</title>
</head>
<?php 
if (isset($_POST["ten"])){
   $ten = $_POST["ten"];
   $xuatten = "Chao ban ".$_POST["ten"];
}
?>
<body>
<form action="As1_Bai1.php" method="post" >
<table width="271" border="1">
<tr>
<td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
</tr>
<tr>
<td width="91">Họ tên bạn</td>
<td width="164">
<input type="text"  name="ten" id="chao3" value="<?php if(isset($ten)) echo $ten; ?>"/></td>
</tr>
<tr>
<td colspan="2">
<label align="center" valign="middle"><?php if(isset($xuatten)) echo $xuatten; ?></label></td>
</tr>
<tr>
<td colspan="2" align="center" valign="middle"><input type="submit" name="chao" 
id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>