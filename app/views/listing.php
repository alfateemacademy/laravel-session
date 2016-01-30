<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listing</title>
</head>
<body>
	<h2>Listing Page</h2>

	<a href="<?php echo route('post.detail'); ?>">Detail</a>

	<form action="/post/save" method="post">
		<button class="btn btn-default" type="submit">Submit</button>
	</form>
</body>
</html>