import 'hc-offcanvas-nav';
export default {
  init() {
    // JavaScript to be fired on all pages

    $('.navigation__wrapper').hcOffcanvasNav({
      width: 490,      
      levelOpen: 'expand',
      customToggle: $('.navigation__toggle'),
      levelTitles: true,
      levelTitleAsBack: true,
    });

    $('body').find('.nav-close').after('<a class="navigation__img" href="/"></a>')
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
