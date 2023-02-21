<div class="absolute left-0 right-0 hidden w-full max-w-5xl mx-auto site-search-wrapper top-[calc(100%+10px)]">
    <div id="site-search">
        <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
            <div class="relative flex items-center search-input-wrapper">
                <input type="search" class="py-3 md:!py-4 md:!px-6 pl-4 pr-3 !mb-0 main-search-input dark:text-white dark:border-white/10 dark:bg-[#1b2535]" autocomplete="off" data-search-id="post_search" type="text" placeholder="Sök, tryck på enter för fler resultat" value="<?php echo get_search_query(); ?>" name="s" title="Sök" />

                <button class="absolute p-0 material-icons-round right-2 dark:text-white">
                    search
                </button>
            </div>
        </form>
        <div class="close-search-result"></div>
    </div>
    <div class="hidden p-3 bg-white rounded-b shadow-md search-result-wrapper dark:bg-primary-900 dark:text-white sm:p-4 md:p-6">
        <div class="flex mb-3 text-xs align-baseline">
            <strong>Träffar: </strong>
            <span class="pl-3 post-count"></span>
        </div>
        <!-- <div id="search-latest-wrapper">Dina senaste sökningar: <div class="search-latest-items"></div></div> -->
        <ul class="search-result"></ul>
    </div>
</div>