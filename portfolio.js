/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
  $('.next').on('click', function(){
    var currentImg = $('.active');
    var nextImg = currentImg.next();

    if(nextImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      nextImg.addClass('active').css('z-index', 10);
    }
  });

  $('.prev').on('click', function(){
    var currentImg = $('.active');
    var prevImg = currentImg.prev();

    if(prevImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      prevImg.addClass('active').css('z-index', 10);
    }
  });
});
