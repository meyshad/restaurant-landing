/* eslint-env browser */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    // Menu Hamburger
    var hamburger = document.querySelector('.js-hamburger');
    var hamburgerMenu = function () {
      document.querySelector('.js-navs').classList.toggle('is-open');
    };
    if (hamburger) {
      hamburger.addEventListener('click', hamburgerMenu, false);
    }
    var cn = document.querySelectorAll('.js-navs a');

    function mobileNav() {
      cn.forEach(function (ancher) {
        ancher.addEventListener('click', function () {
          document.querySelector('.js-navs').classList.remove('is-open');
          document.querySelector('.c-hamburger__checkbox').checked = false;
        });
      });
    }
    window.addEventListener('click', mobileNav);
    
    // Menu Section Tabs
    var menuNav = document.querySelector('.js-menu-nav');
    var jsMenuItems = document.querySelectorAll('.js-menu-item');
    var menuContents = document.querySelectorAll('.js-menu-content');
    if (menuNav) {
      menuNav.addEventListener('click', changeMenu);
    }

    function changeMenu(e) {
      if (e.target.tagName === 'LI' || e.target.tagName === 'A') {
        var dataTab = e.target.getAttribute('data-tab');
        var tabClass = 'tab-' + dataTab;
        jsMenuItems.forEach(function(item) {
          var itemAttr = item.getAttribute('data-tab');
          item.classList.remove('is-active');

          if (itemAttr === dataTab) {
            item.classList.add('is-active');
          }
        });
        menuContents.forEach(function(content) {
          content.classList.remove('is-visible');
          var contentId = content.getAttribute('id');

          if (contentId === tabClass) {
            content.classList.add('is-visible');
          }
        });
      }
    }

    // Slider Popular Dishes
    let popularSlider = document.querySelector('.js-popular');
    let sliderCarousel = new window.Flickity(popularSlider, {
      prevNextButtons: false,
      wrapAround: true,
      pageDots: false,
      adaptiveHeight: true,
    });

    let flickityNext = document.querySelector('.js-popular_next');
    let flickityPrev = document.querySelector('.js-popular_prev');
    let flickityDots = document.querySelector('.js-popular_dots');

    flickityNext.addEventListener("click", function () {
      sliderCarousel.next();
    });
    flickityPrev.addEventListener("click", function () {
      sliderCarousel.previous();
    });

    function slideDots() {
      let foodDots = sliderCarousel.selectedIndex + 1;
      flickityDots.innerHTML = `<span class="c-popular-dishes__number-secondary"> ${foodDots} </span> / ${sliderCarousel.slides.length}`;
    }
    slideDots();
    sliderCarousel.on("select", slideDots);

    // gravity form setting
    gform.addFilter( 'gform_datepicker_options_pre_init', function( optionsObj, formId, fieldId ) {
      optionsObj.changeYear = false;
      optionsObj.minDate = 0;
      return optionsObj;
    });

    jQuery('<div class="quantity-button quantity-up"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.93585 6.41509H15.0642V9.0566H8.93585V16H6.1283V9.0566H0V6.41509H6.1283V0H8.93585V6.41509Z" fill="#909090"/></svg></div><div class="quantity-button quantity-down"><svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.4238 1.80838H0.423828V0H12.4238V1.80838Z" fill="#909090"/></svg></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });

  });
})();