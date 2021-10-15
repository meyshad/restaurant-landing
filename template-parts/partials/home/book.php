    <section class="o-section c-section--book" id="book">
      <div class="c-book__body"<?php $background_book = get_field('background_book'); if( !empty( $background_book ) ): ?> style="background: linear-gradient(180deg, #000000 3.68%, rgba(0, 0, 0, 0.2) 72.66%), url(<?php echo esc_url($background_book['url']); ?>) no-repeat top center;"<?php endif; ?>>
        <div class="o-section__wrapper">
          <div class="row">
            <div class="col-lg-7 c-book__head">
              <h2 class="c-section__title c-book__title">
                <?php the_field('title_book'); ?>
              </h2>
              <p class="c-book__description">
                <?php the_field('description_book'); ?>
              </p>
            </div>
            <div class="col-lg-5">
              <div class="c-book__form">
                <?php echo do_shortcode( '[gravityform id="'.get_field('form_id').'" title="false" description="false" ajax="true"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>