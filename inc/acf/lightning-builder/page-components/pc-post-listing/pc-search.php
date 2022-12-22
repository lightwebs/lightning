<?php if ($show_search) :
    // get one random post from post type
    $random_post = get_posts([
        'post_type' => $post_type,
        'posts_per_page' => 1,
        'orderby' => 'rand',
    ]);
    $random_post_title = $random_post[0]->post_title;
?>
    <div class="container pb-8">
        <div class="grid grid-cols-5">
            <div class="order-2 col-span-3 mb-4 md:order-1 md:mb-0">
                <label for="search"><?php echo __('Search', 'lightning'); ?></label>
                <div class="mt-3 search-field-wrapper">
                    <input type="search" class="py-3 pr-4 mb-0 search-input" data-search-id="<?php echo $post_type; ?>_search" placeholder="<?php echo __('E.g. ', 'lightning') . $random_post_title; ?>">

                    <button class="material-icons-round no-btn">
                        search
                    </button>
                </div>
            </div>

            <div class="order-1 col-span-1 mb-4 ml-auto md:order-2 md:mb-0">
                <button class="text-white rounded bg-purple-50"><?php echo __('Filtrera', 'lightning'); ?></button>
            </div>
        </div>
        <div class="flex">
            <?php foreach ($taxonomies as $tax) : ?>
                <div class="mb-4">
                    <label for="filter-<?php echo $tax; ?>"><?php echo $tax; ?></label>
                    <div class="mt-3 filters">
                        <?php $terms = get_terms($tax); ?>
                        <?php foreach ($terms as $term) :
                            $term_id = $term->term_id;
                            $term_name = $term->name; ?>

                            <input type="checkbox" class="absolute pc-filter filter left-[-1000000px]" name="filter" id="tag-<?php echo $term_id; ?>" data-tag-id="<?php echo $term_id; ?>" value="<?php echo $term_name; ?>">
                            <label class="inline-flex items-center mr-2 text-sm cursor-pointer md:mr-4 group" for="tag-<?php echo $term_id; ?>">
                                <span class="mr-1 transition-transform duration-300 material-icons-round group-hover:rotate-45">add</span>
                                <?php echo $term_name; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="mt-1 mb-0 md:mt-4"><strong>Search result: </strong> <span class="post-count"><?php echo $found_posts; ?></span> <button class="ml-3 btn-small pc-btn-reset pc-filter filter ms-md-24"><?php echo __('Reset', 'lightning'); ?></button></p>
    </div>
<?php endif; ?>