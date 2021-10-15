<?php if( have_rows('popular_dishes') ): ?>
    <section class="o-section c-section--popular-dishes" id="popular-dishes">
      <div class="o-section__wrapper">
        <div class="c-popular-dishes">
            <div class="c-popular-dishes__header">
              <h2 class="c-section__title c-popular-dishes__title c-popular-dishes__col">
                The Most Popular Dishes
              </h2>
              <div class="c-popular-dishes__arrows c-popular-dishes__col">
                <div class="c-popular-dishes__arrow-previous js-popular_prev">
                  <svg width="30" height="13" viewBox="0 0 30 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.22359 5.93606L6.06923 0.218059C6.36615 -0.0726864 6.84246 -0.0726864 7.13938 0.218059C7.43631 0.508805 7.43631 0.975209 7.13938 1.26596L2.58659 5.72406H28.493C28.9136 5.72406 29.2538 6.0572 29.2538 6.46909C29.2538 6.88098 28.9136 7.21413 28.493 7.21413H2.58659L7.13938 11.6601C7.43631 11.9509 7.43631 12.4173 7.13938 12.708C6.99092 12.8534 6.79916 12.9261 6.60122 12.9261C6.40327 12.9261 6.21151 12.8534 6.06304 12.708L0.217404 6.98395C-0.0733317 6.69927 -0.0733313 6.2268 0.22359 5.93606Z" fill="#FFFCFC"/>
                  </svg>                    
                </div>
                <div class="c-popular-dishes__number js-popular_dots"></div>
                <div class="c-popular-dishes__arrow-next js-popular_next">
                  <svg width="30" height="13" viewBox="0 0 30 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.2841 5.93606L23.4385 0.218059C23.1415 -0.0726864 22.6652 -0.0726864 22.3683 0.218059C22.0714 0.508805 22.0714 0.975209 22.3683 1.26596L26.9211 5.72406H1.01471C0.594068 5.72406 0.253845 6.0572 0.253845 6.46909C0.253845 6.88098 0.594068 7.21413 1.01471 7.21413H26.9211L22.3683 11.6601C22.0714 11.9509 22.0714 12.4173 22.3683 12.708C22.5168 12.8534 22.7085 12.9261 22.9065 12.9261C23.1044 12.9261 23.2962 12.8534 23.4446 12.708L29.2903 6.98395C29.581 6.69927 29.581 6.2268 29.2841 5.93606Z" fill="#FFFCFC"/>
                  </svg>                    
                </div>
              </div>
            </div>
            <div class="c-popular js-popular">
            <?php while( have_rows('popular_dishes') ): the_row(); ?>
              <div class="c-popular-dishes__items">
                <img class="c-popular-dishes__images" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
                <div class="c-popular-dishes__desciptions">
                  <h3 class="c-popular-dishes__item-title"><?php the_sub_field('title'); ?></h3>
                  <div class="c-popular-dishes__item-text">
                    <?php the_sub_field('description'); ?>
                  </div>
                  <div class="c-popular-dishes__item-price">
                    $<?php the_sub_field('price'); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            </div>
        </div>
      </div>
    </section>
<?php endif; ?>