<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="<?= BASEURL ?>">PHP MVC</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL ?>/home/index">Home</a>
			</li>
			<li class="nav-item">
                <a class="nav-link" href="<?= BASEURL ?>/mahasiswa/index">Mahasiswa</a>
			</li>
			<li class="nav-item">
                <a class="nav-link" href="<?= BASEURL ?>/about/index">About</a>
			</li>
		</ul>
	</div>
</nav>
