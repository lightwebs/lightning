<?php
$site_logo = get_field('site_logo', 'option');
$site_logo_dark = get_field('site_logo_dark', 'option');
$right_menu_btn = get_field('right_menu_btn', 'option');
$walker = new Menu_Content;
?>

<nav id="site-navigation" class="flex items-center justify-between py-3 main-navigation">
    <div class="flex items-center mr-0 nav-left">
        <a class="flex flex-col items-start site-logo md:flex-shrink-0 logo-img" href="<?php echo home_url(); ?>">
            <div class="max-w-[140px] min-w-[140px]  md:max-w-[180px] md:min-w-[180px]">
                <?php echo image($site_logo, 'full', 'logo-light w-full'); ?>
                <?php echo image($site_logo_dark, 'full', 'logo-dark hidden w-full'); ?>
            </div>
        </a>
    </div>

    <!-- Desktop menu -->
    <div id="desktop-menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'container_class'   => 'desktop-menu-wrapper',
                'walker'         => $walker,
            )
        );
        ?>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu">
        <?php
        $mobile_walker = new Menu_Content;
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'container_class'   => 'mobile-menu-wrapper',
                'walker'         => $walker,
            )
        );
        ?>
    </div>

    <div class="flex items-center gap-4 nav-right">
        <?php if ($right_menu_btn) :
            btn_l_primary($right_menu_btn);
        endif; ?>

        <button id="main-menu-toggle" class="p-0 text-white btn nav-btn main-menu-toggle-btn lg:hidden" aria-label="<?php echo __('Toggla menyn', 'lightning'); ?>" title="<?php echo __('Toggla menyn', 'lightning'); ?>">
            <span id="burger-icon" class="text-4xl text-white material-icons-round">menu</span>
            <span id="burger-close" class="hidden text-4xl text-white material-icons-round">close</span>
        </button>
    </div>
</nav><!-- #site-navigation -->