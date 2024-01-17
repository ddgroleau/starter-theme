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
        <a href="/" class="relative z-[999] min-w-fit"><?php bloginfo( 'name' ); ?></a>
        <nav class="flex items-center">
            <div id="nav-items" class="faded-out-left fixed md:relative items-center md:flex">
                <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main-menu',  
                        'container_class' => 'pr-4 [&>ul]:flex [&>ul]:items-center [&>ul]:gap-12 [&>ul]:list-none'
                    ) ); 
                ?>
            </div>
            <button id="nav-toggle" class="relative h-12 w-12 md:hidden z-[999]" title="Toggle Nav"
                aria-label="Toggle Nav">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </nav>
    </header>