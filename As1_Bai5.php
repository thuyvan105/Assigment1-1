<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
  <?php
      function ptbn ($b, $c){
        if ($b == 0 ){
            if ($c == 0){
                $nghiem = 'vo so nghiem';
            } else {
                $nghiem = 'vo nghiem';
            }
        } else {
            $nghiem = -$c/$b;
        }
        return $nghiem;
      }
    function ptbh ($a, $b, $c){
        if ($a == 0){
            if ($b== 0){
                $nghiem = 'vo so nghiem.';
            } else {
               $nghiem = ptbn($b,$c);
            }
        } else {
            $denta = $b*$b - 4*$a*$c;
            if ( $denta < 0) {
                $nghiem = 'vo nghiem';
        }
        if ($denta == 0 ){
            $nghiem = 'phuong trinh co hai nghiem kep x1 = x2 = '. -$b/2*$a.'.';
        } else {
            $nghiem = 'phuong trinh co hai nghiem phan biet x1 = '.(-$b+sqrt($denta))/2*$a.' , x2 ='.(-$b+sqrt($denta))/2*$a.'';
        }
    }
    return $nghiem;
}
 if (isset($_POST["a"]) AND isset($_POST["b"]) AND isset($_POST["c"])){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
   $kq = ptbh ($a, $b, $c);
 }
  
  ?>
<form action="As1_Bai5.php" method="post" >
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
<td width="83">Phương trình </td>
<td width="236">
<input name="a" type="text" value="<?php if(isset($a)) echo $a ?>" />
 X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" value="<?php if(isset($b)) echo $b ?>" />
 X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" value="<?php if(isset($c)) echo $c ?>"/>
 =0</td>
</tr>
<tr>
<td colspan="4">
 Nghiệm 
<label for="textfield2"></label>
<input name="textfield" type="text" id="textfield2" width="400" value="<?php if(isset($kq)) echo $kq ?>" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" 
id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>