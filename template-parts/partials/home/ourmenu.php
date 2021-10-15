    <section class="o-section c-section--ourmenu" id="menu">
      <div class="o-section__wrapper">
        <div class="c-ourmenu">
          <div class="c-section c-ourmenu__header u-mb-60">
            <h2 class="c-section__title c-ourmenu__title c-ourmenu__col">
              Our Menu
            </h2>
            <ul class="c-menuname c-ourmenu__col js-menu-nav">
              <?php
                $counter = 0;
                while (have_rows('restaurant_menus')): the_row();
                  if (get_row_layout() == 'restaurant_menu'):
                    $menu_name = get_sub_field('menu_name');
                    $data_tab = strtolower(preg_replace('/\s*/', '', $menu_name));
              ?>
              <li class="c-menuname__tab js-menu-item<?php if ($counter === 0): ?> is-active<?php endif; ?>" data-tab="<?php echo $data_tab; ?>"><?php echo $menu_name; ?></li>
              <?php
                  endif;
                  $counter++;
                endwhile;
              ?>
            </ul>
          </div>

          <?php
          $counter = 0;
          while (have_rows('restaurant_menus')): the_row();
            if (get_row_layout() == 'restaurant_menu'):
              $menu_name = get_sub_field('menu_name');
              $data_tab = strtolower(preg_replace('/\s*/', '', $menu_name));
              $menu_items = get_sub_field('menu_items');
          ?>
          <div class="c-section c-ourmenu__list js-menu-content<?php if ($counter === 0): ?> is-visible<?php endif; ?>" id="tab-<?php echo $data_tab ?>">
            <ul class="c-ourmenu-list__items">
              <?php
              foreach($menu_items as $item):
                $dish_title = $item['title'];
                $dish_price = $item['price'];
                $dish_desc = $item['description'];
              ?>
              <li class="c-ourmenu-list__item">
                <div class="c-ourmenu-col">
                  <h3 class="c-ourmenu__name"><?php echo $dish_title ?></h3>
                  <span class="c-ourmenu__description"><?php echo $dish_desc ?></span>
                </div>
                <span class="c-ourmenu-col c-ourmenu__price">$<?php echo $dish_price ?></span>
              </li>
              <?php
              endforeach;
              ?>
            </ul>
          </div>
          <?php
            endif;
            $counter++;
          endwhile;
          ?>
        </div>
      </div>
    </section>