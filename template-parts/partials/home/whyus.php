    <section class="o-section c-section--whyus" id="why-us">
        <div class="o-section__wrapper">
            <div class="c-whyus">
                <div class="row c-whyus__row">
                    <div class="c-whyus__col col-12 col-lg-6">
                        <div class="mashqi">
                            <div class="c-section u-mb-60">
                                <h2 class="c-section__title">
                                    <?php the_field('title_whyus'); ?>
                                </h2>
                            </div>
                            <div class="s-text">
                                <?php the_field('description_whyus'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="c-whyus__col col-12 col-lg-6 c-whyus__img">
                    <?php
                    $whyusimg = get_field('image_whyus');
                    if( !empty( $whyusimg ) ): ?>
                        <img src="<?php echo esc_url($whyusimg['url']); ?>" alt="<?php echo esc_attr($whyusimg['alt']); ?>" />
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/why_image.jpg" alt>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>