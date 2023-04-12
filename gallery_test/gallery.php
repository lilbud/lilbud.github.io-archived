<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Example</title>
		<link href="css/grid.css" rel="stylesheet">
		<link href="css/lightbox.min.css" rel="stylesheet" />
	</head>

	<body>
		<main class="grid">
			<?php
				$files = glob("assets/covers/*.{jpg,png,gif}", GLOB_BRACE);
				foreach ($files as $file) {
					if ($file !== "." && $file !== "..") {
						echo "<a href='$file' data-lightbox='image-1'><img src='$file' width='500'></a>";
					}
				}
			?>
		</main>
		<?php require '_includes/lightbox.php'; ?>
	</body>
</html>