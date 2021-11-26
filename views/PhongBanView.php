<?php 
	// set đường dẫn fileLayout
	$this->fileLayout = "Layout.php";
 ?>
<fieldset style="width: 500px;margin: auto;">
	<legend>Danh sách phòng ban</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		<tr>
			<th>Tên phòng ban</th>
		</tr>
		<?php foreach($data as $rows) :?>
		<tr>
			<td><?php echo$rows->tenphongban; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>