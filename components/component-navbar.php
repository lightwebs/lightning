<?php
$site_logo_choice = get_field('site_logo_choice', 'option');
$logo_img = $site_logo_choice === 'logo';
$logo_text = $site_logo_choice === 'text';
$site_logo = get_field('site_logo', 'option');
$site_logo_dark = get_field('site_logo_dark', 'option');
$site_logo_text = get_field('site_logo_text', 'option');
$site_logo_slogan = get_field('site_logo_slogan', 'option');
$menu_modules_btn = get_field('menu_modules_btn', 'option');
$menu_login_btn = get_field('menu_login_btn', 'option');
$right_menu_btn = get_field('right_menu_btn', 'option');
?>

<nav id="site-navigation" class="flex items-center py-2 main-navigation md:py-4">
    <div class="flex items-center mr-4 nav-left">
        <a class="site-logo md:flex-shrink-0 flex flex-col items-start <?php echo $logo_img ? 'logo-img' : 'logo-text'; ?>" href="<?php echo home_url(); ?>">

            <?php if ($logo_img) : ?>

                <div class="max-w-[220px] md:max-w-[160px] xl:max-w-[220px]">
                    <?php echo image($site_logo, 'full', 'logo dark:hidden w-full'); ?>
                    <?php echo image($site_logo_dark, 'full', 'logo hidden dark:block w-full'); ?>
                </div>
            <?php elseif ($logo_text) : ?>
                <h2 class="mb-1 text-white rotatex-0 h3"><?php echo $site_logo_text; ?></h2>
                <h3 class="mb-0 text-white small"><?php echo $site_logo_slogan; ?></h3>
            <?php endif; ?>
        </a>

        <?php
        $walker = new Menu_content;
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'container_id'   => 'main-menu',
                'container_class' => 'absolute h-[calc(100vh-56px)] md:h-[calc(100vh-72px)] lg:h-auto lg:w-auto bg-purple-800 dark:bg-[#1b2535] lg:bg-transparent w-full lg:relative right-0 top-full p-4 hidden lg:block',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'flex flex-col w-full lg:flex-row lg:items-center lg:ml-8 md:gap-x-8 h-full lg:h-auto overflow-auto lg:overflow-visible',
                'walker'         => $walker,
            )
        );
        ?>
    </div>


    <div class="flex items-center gap-4 ml-auto nav-right">
        <?php if ($right_menu_btn) :
            btn_l_primary($right_menu_btn);
        endif; ?>


        <button class="search-toggle btn nav-btn" aria-label="<?php echo __('Toggla sök', 'torplyktan'); ?>" title="<?php echo __('Sök', 'torplyktan'); ?>">
            <span class="text-white pointer-events-none material-icons-round">search</span>
        </button>

        <?php get_template_part('components/component', 'search'); ?>


        <?php /* <button class="inline-flex items-center p-2 ml-2 rounded-full toggle-dark-mode" aria-label="<?php echo __('Toggla dark mode', 'lightning'); ?>">
            <span class="text-white pointer-events-none material-icons-round dark-mode">dark_mode</span>
        </button> */ ?>

        <button id="main-menu-toggle" class="ml-2 text-white btn nav-btn main-menu-toggle-btn lg:hidden" aria-label="<?php echo __('Toggla menyn', 'lightning'); ?>" title="<?php echo __('Toggla menyn', 'lightning'); ?>">
            <span class="text-white material-icons-round">menu</span>
        </button>
    </div>
</nav><!-- #site-navigation -->