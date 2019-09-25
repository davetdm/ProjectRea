<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>
<?php
 
  <?php foreach($products  as $product){ ?>
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Name </td>
    <td width="329"><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>Color </td>
    <td><input type="text" name="text" value="<?php echo $row->color; ?>"/></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="number" value="<?php echo $row->price; ?>"/></td>
  </tr>
  <tr>
    <td width="230">Picture</td>
    <td width="329"><input type="image" name="picture" value="<?php echo $row->Picture; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update"/></td>
  </tr>
</table>
	</form>
	<?php } ?>



<?php require_once "templates/footer.php"; ?>