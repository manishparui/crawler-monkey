<!DOCTYPE html>
<html>
<head>
	<title>Crawler Monkey - A Web Graph product.</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
</head>
<body>
	<?php require_once("./v/template/header.php"); ?>
	<main class="container mt-3 mb-3">
		<div class="row mt-5">
			<div class="col-2"></div>
			<div class="col-12 col-lg-8">
				<?php require_once("./v/template/input-box.php"); ?>
			</div>
			<div class="col-2"></div>
		</div>

		<div class="row mt-3">
			<div class="col-12 col-lg-4 p-4">
				<div class="border border-dark rounded h-100">
					<h5 class="p-2 w-100 bg-dark text-light text-center rounded">How To</h5>
					<p class="p-3">
						<b>Step 1:</b> Enter your site url [without https:// or http:// or trailing slash].
						<br><b>Step 2:</b> Select https:// or http:// from dopdown.
						<br><b>Step 3:</b> Click on Start button.
						<br><b>Step 4:</b> Download your sitemap from generated download button.
						<br><b>Note:</b> Sitemap generation process can take a while according to your website size.
						The download button will visiable only after sitemap generated.
					</p>
				</div>
			</div>

			<div class="col-12 col-lg-4 p-4">
				<div class="border border-dark rounded h-100">
					<h5 class="p-2 w-100 bg-dark text-light text-center rounded">Why This Tool</h5>
					<p class="p-3">
						<i class="fas fa-angle-right"></i> Free for all.
						<br><i class="fas fa-angle-right"></i> Can support unlimited number of pages.
						<br><i class="fas fa-angle-right"></i> No registration required.
						<br><i class="fas fa-angle-right"></i> Easy to use.
						<br><i class="fas fa-angle-right"></i> Actully crawl like google web crawler.
					</p>
				</div>
			</div>

			<div class="col-12 col-lg-4 p-4">
				<div class="border border-dark rounded h-100">
					<h5 class="p-2 w-100 bg-dark text-light text-center rounded">PHP Script</h5>
					<span class="badge badge-danger position-absolute" style="margin: -37px 0 0 10px; margi">PRO</span>
					<p class="p-3">
						<i class="fas fa-angle-right"></i> Installable on your server.
						<br><i class="fas fa-angle-right"></i> Just One time setup required.
						<br><i class="fas fa-angle-right"></i> After its initial setup it will generate sitemap periodically on its own.
						<br><i class="fas fa-angle-right"></i> Advanced option can be configured as per your requirement.
						<br><i class="fas fa-angle-right"></i> Can also be used through command line interface.
						<br><i class="fas fa-angle-right"></i> To get this script reach us at <a href="mailto:manishparui8@gmail.com">manishparui8@gmail.com</a>
					</p>
				</div>
			</div>

		</div>
	</main>


	<script type="text/javascript" src="./v/resource/js/ajax/generate-sitemap.js"></script>
</body>
</html>