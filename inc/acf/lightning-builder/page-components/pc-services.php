<?php
if ( get_row_layout() == 'services' && !s(get_row_layout())['hide_component'] ) :
    $prefix = get_row_layout();
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-services section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>
   
        <div class="container <?php echo s($prefix)['text_color']; ?>">
            <?php if (have_rows('services_rows')) : ?>
                <?php while (have_rows('services_rows')) : the_row() ?>
                    <?php $num_of_cols = count(get_sub_field('services_cols')); ?>

                    <div class="lg:py-6 py-3 gap-6 lg:gap-12 grid grid-cols-1 md:grid-cols-<?php echo $num_of_cols; ?>">
                        <?php if (have_rows('services_cols')) : ?>
                            <?php while (have_rows('services_cols')) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $link = get_sub_field('link'); ?>

                                        <h3><?php echo $title; ?></h3>
                                <div class="p-6 text-black bg-white md:p-8 lg:p-12 service-card">
                                    <div class="flex items-center justify-between pb-3 md:pb-4">
                                        <?php if ($link) : ?>
                                            <a class="flex items-center justify-center h-12 bg-purple-500 rounded-full min-w-[3rem] ml-3 hover:scale-110 transition duration-300" href="<?php echo $link['url']; ?>">
                                                <span class="text-white material-icons-round">north_east</span>
                                            <a class="flex items-center justify-center h-12 bg-purple-500 rounded-full min-w-[3rem] ml-3 hover:scale-110 transition duration-300" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']?>">
                                                <span class="text-3xl text-white material-icons-round">north_east</span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <p><?php echo $text; ?></p>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </section>
<?php endif; ?>