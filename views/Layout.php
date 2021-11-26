<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Layout</title>
</head>
<body>
	<div class="wrap">
		<header><h1>Header</h1></header>
		<aside><h1>left</h1></aside>
		<content><?php echo $this->view; ?></content>
		<footer><h1>footer</h1></footer>
	</div>
</body>
<style type="text/css">
	body,h1{padding: 0;margin: 0;}
	header,footer{height: 100px;background: red;}
	.wrap{width: 1000px;margin: auto;}
	aside{width: 250px;height: 400px;float: left;background: black;}
	content{width: 750px;height: 400px;float: left;background: yellow;}
	footer{clear: both;}
</style>
</html>