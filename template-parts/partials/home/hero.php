<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); ?>
        <div class="c-hero">
            <h1 class="c-hero__title"><?php the_sub_field('title'); ?></h1>
            <span class="c-hero__description"><?php the_sub_field('headline'); ?></span>
            <div class="c-hero__link">
            <?php 
            $primary = get_sub_field('primary_link');
            if( $primary ): 
                $primary_url = $primary['url'];
                $primary_title = $primary['title'];
                $primary_target = $primary['target'] ? $primary['target'] : '_self';
                ?>
                <a class="c-btn c-btn--primary" href="<?php echo esc_url( $primary_url ); ?>" target="<?php echo esc_attr( $primary_target ); ?>"><?php echo esc_html( $primary_title ); ?></a>
            <?php endif; ?>
            <?php 
            $secondary = get_sub_field('secondary_link');
            if( $secondary ): 
                $secondary_url = $secondary['url'];
                $secondary_title = $secondary['title'];
                $secondary_target = $secondary['target'] ? $secondary['target'] : '_self';
                ?>
                <a class="c-btn c-btn--secondary" href="<?php echo esc_url( $secondary_url ); ?>" target="<?php echo esc_attr( $secondary_target ); ?>"><?php echo esc_html( $secondary_title ); ?></a>
            <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>