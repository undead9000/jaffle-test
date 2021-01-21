// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

$('.navigation__toggle').on('click', function(e){
  e.preventDefault();
  $('body').addClass('hidden');
  $('.main-menu').addClass('show');
});

$('.main-menu__close, .overlay').on('click', function(e){
  e.preventDefault();
  $('body').removeClass('hidden');
  $('.main-menu').removeClass('show');
});

$('.first-menu > li.menu-item-has-children > a').on('click', function(e){
  e.preventDefault();
  let submenu = $(this).next('.sub-menu');
  if(submenu.hasClass('show')) {
    $(this).removeClass('opened');
    submenu.removeClass('show');
  } else {
    $(this).addClass('opened');
    submenu.addClass('show');
  }
})