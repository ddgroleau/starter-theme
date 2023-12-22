<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body class="flex flex-col min-h-screen max-w-screen w-screen h-full overflow-x-hidden">
    <header id="header" class="flex justify-between items-center py-4 px-8">
        <a href="/" class="relative z-[999] max-w-fit"><?php bloginfo( 'name' ); ?></a>
        <nav class="flex items-center">
            <div id="nav-items" class="items-center hidden md:flex">
                <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main-menu',  
                        'container_class' => 'pr-4 [&>ul]:flex [&>ul]:items-center [&>ul]:gap-12 [&>ul]:list-none'
                    ) ); 
                ?>
            </div>
            <button id="nav-toggle" class="h-12 w-12 max-w-fit" aria-label="Toggle Mobile Menu"
                title="Toggle Mobile Menu">
                <img id="open-menu-icon" class="md:hidden h-full w-full relative z-[999]"
                    src="<?php echo get_template_directory_uri() . "/assets/images/hamburger-icon.svg" ?>"
                    alt="Open Mobile Menu Icon" />
                <img id="close-menu-icon" class="hidden md:hidden h-full w-full  relative z-[999]"
                    src="<?php echo get_template_directory_uri() . "/assets/images/close-icon.svg" ?>"
                    alt="Close Mobile Menu Icon" />
            </button>
        </nav>
    </header>