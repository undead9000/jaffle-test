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

$(document).on('click','.slicknav_btn',function(){
  if($(this).hasClass('slicknav_open')) {
    $('.slicknav-overlay').addClass('visible');
    $('.slicknav-buttons').addClass('visible');
  } else {
    $('.slicknav-overlay').removeClass('visible');
    $('.slicknav-buttons').removeClass('visible');
  }
});

$(document).on('click','.slicknav-overlay.visible, .slicknav-close', function(e){
  e.preventDefault();
  $('#menu-main-menu-first').slicknav('close');
  $('.slicknav-overlay').removeClass('visible');
  $('.slicknav-buttons').removeClass('visible');
});