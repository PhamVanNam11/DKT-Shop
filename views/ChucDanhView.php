<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chuc Danh</title>
	<meta charset="utf-8">
</head>
<body>
	<fieldset style="width: 500px;margin: auto;">
		<legend>Danh sách chức danh</legend>
		<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
			<tr>
				<th>Tên chức danh</th>
			</tr>
			<?php foreach($data as $rows) :?>
			<tr>
				<td><?php echo $rows->tenchucdanh; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</fieldset>
</body>
</html>