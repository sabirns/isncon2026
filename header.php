<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pageTitle; ?> | ISNCON 2026 — 55th Annual Conference</title>
	<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-title" content="ISNCON 2026" />
	<link rel="manifest" href="images/site.webmanifest" />
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;600;700&family=Space+Mono:ital@0;1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css?v=1.0.24">
</head>

<body>
	<div class="cursor" id="cursor"></div>
	<div class="cursor-ring" id="cursorRing"></div>

	<nav class="nav">
		<div class="nav-logo"><a href="index.php"><img src="images/logo.svg" alt="ISNCON" /></a>
		</div>
		<div class="nav-toggle" onclick="toggleMenu()">
			<span></span><span></span><span></span>
		</div>
		<div class="nav-menu">
			<ul class="nav-links">
				<li><a href="index.php" <?php echo $currentPage == 'home' ? 'class="active"' : ''; ?>>Home</a></li>
				<li><a href="about.php" <?php echo $currentPage == 'about' ? 'class="active"' : ''; ?>>About</a></li>
				<li><a href="schedule.php" <?php echo $currentPage == 'schedule' ? 'class="active"' : ''; ?>>Schedule</a></li>
				<li><a href="faculty.php" <?php echo $currentPage == 'faculty' ? 'class="active"' : ''; ?>>Faculty</a></li>
				<li><a href="registration.php" <?php echo $currentPage == 'registration' ? 'class="active"' : ''; ?>>Registration</a></li>
				<li><a href="contact.php" <?php echo $currentPage == 'contact' ? 'class="active"' : ''; ?>>Contact</a></li>
			</ul>
			<div class="nav-buttons">
				<a href="registration.php" class="nav-cta nav-cta-secondary">Submit Abstract</a>
				<a href="registration.php" class="nav-cta">Register Now</a>
			</div>
		</div>
	</nav>
