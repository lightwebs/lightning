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
?>

<nav id="site-navigation" class="flex items-center py-2 main-navigation md:py-4">
    <div class="flex items-center nav-left">
        <a class="site-logo flex flex-col items-start <?= $logo_img ? 'logo-img' : 'logo-text'; ?>" href="<?= home_url(); ?>">

            <?php if ($logo_img) : ?>
                <div class="max-w-[100px] sm:max-w-[160px] xl:max-w-[220]">
                    <?= image($site_logo, 'full', 'logo dark:hidden'); ?>
                    <?= image($site_logo_dark, 'full', 'logo hidden dark:block'); ?>
                </div>
            <?php elseif ($logo_text) : ?>
                <h2 class="mb-1 text-black rotatex-0 h3 dark:text-white"><?= $site_logo_text; ?></h2>
                <h3 class="mb-0 text-black small dark:text-white"><?= $site_logo_slogan; ?></h3>
            <?php endif; ?>
        </a>

        <?php
        $walker = new Menu_content;
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'container_id'   => 'main-menu',
                'container_class' => 'absolute min-w-full bg-white sm:min-w-[320px] lg:relative right-0 top-full bg-slate-100 dark:bg-slate-700 p-4 hidden lg:block',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'flex flex-col w-full lg:flex-row lg:items-center lg:ml-8 md:gap-x-8',
                'walker'         => $walker,
            )
        );
        ?>
    </div>


    <button class="ml-auto search-toggle btn nav-btn" aria-label="<?= __('Toggla sök', 'torplyktan'); ?>" title="<?= __('Sök', 'torplyktan'); ?>">
        <span class="text-black pointer-events-none material-icons-round dark:text-white ">search</span>
    </button>
    <?php get_template_part('components/component', 'search'); ?>

    <div class="flex items-center nav-right">
        <?php /*
        <button class="inline-flex items-center p-2 ml-2 rounded-full toggle-dark-mode"
                aria-label="<?= __('Toggla dark mode', 'lightning'); ?>">
            <span class="text-black pointer-events-none material-icons-round dark-mode dark:text-white">dark_mode</span>
        </button>
        */ ?>

        <button id="main-menu-toggle" class="ml-2 btn nav-btn main-menu-toggle-btn lg:hidden" aria-label="<?= __('Toggla menyn', 'lightning'); ?>" title="<?= __('Toggla menyn', 'lightning'); ?>">
            <?= __('Meny', 'lightning'); ?>
        </button>
    </div>
</nav><!-- #site-navigation -->