<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="imagex/png" href="./img/icons8-dev-16_1_.ico">

    <script>
        document.documentElement.className += ' js';
    </script>
    <title>Dev. José Paulo Froes</title>
</head>

<body>

<header class="header container">
    <div class="header-logo">
        <h1>{Dev.JF}</h1>
    </div>
    <nav class="fonte-2-20">

        <ul class="header-menu">
        <?php
	$args = array(
		'menu' => 'principal',
		'theme_location' => 'menu-principal',
		'container' => false,
        
	);
	wp_nav_menu( $args );
?>
            <li><a href="https://github.com/jfroes"><img src="<?php echo get_site_url();?>/wp-content/uploads/2024/03/github.png" alt="Github Logo"></a></li>
            <li><a href="https://www.linkedin.com/in/josepaulofroes/"><img src="<?php echo get_site_url();?>/wp-content/uploads/2024/03/linkedin.png" alt="linkedin Logo"></a></li>
            <li> <span><img class="botao" src="<?php echo get_site_url();?>/wp-content/uploads/2024/03/moon-svgrepo-com.png" alt=""></span></li>
        </ul>

    </nav>

</header>