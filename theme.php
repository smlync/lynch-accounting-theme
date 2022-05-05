<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
		
	</head>
	
	<body>
		<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

        <header>
            <div class="w3-bar">
                <a id="logo-image" href="<?= $Wcms->url() ?>" class="w3-bar-item">
                    <img src="https://lynchaccounting.blob.core.windows.net/images/lynch_cpa_rgb.svg" alt="<?= $Wcms->get('config','siteTitle') ?>" />
                </a>
                <nav id="nav-text" class="w3-right w3-hide-small w3-hide-medium heavy-font">
                    <a href="/#about" class="w3-bar-item w3-button">About</a>
                    <a href="/#services" class="w3-bar-item w3-button">Services</a>
                    <a href="/blog" class="w3-bar-item w3-button">Updates</a>
                    <a href="/#contact" class="w3-bar-item w3-button">Contact us</a>
                </nav>
                <div class="w3-button w3-padding-16 w3-right w3-small w3-medium w3-hide-large w3-xxlarge" onclick="open_menu()" id="burger">☰</div>
            </div>
        </header>

		<main>
			<div id="wrapper">
				<!-- Main content for each page -->
				<?= $Wcms->page('content') ?>
			</div>
		</main>

		<footer class="wrapper style2">
            <div class="w3-bar">
                <a id="logo-image" href="/" class="w3-bar-item">
                    <img src="https://lynchaccounting.blob.core.windows.net/images/lynch_cpa_rgb.svg" alt="Lynch CPA Tax and Accounting Services" />
                </a>
                <nav id="nav-text" class="w3-right w3-hide-small w3-hide-medium heavy-font">
                    <a href="/#about" class="w3-bar-item w3-button">About</a>
                    <a href="/#services" class="w3-bar-item w3-button">Services</a>
                    <a href="/blog" class="w3-bar-item w3-button">Updates</a>
                    <a href="/#contact" class="w3-bar-item w3-button">Contact us</a>
                </nav>
            </div>
        </footer>

		<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>

        <script>
            // Script to open and close menu sidebar on mobile
            function open_menu() {
            document.getElementById("mobileMenu").style.display = "block";
            }
            
            function close_menu() {
            document.getElementById("mobileMenu").style.display = "none";
            }
        </script>

	</body>
</html>
