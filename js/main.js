   $ = jQuery.noConflict();
  $(document).ready(function(){
   

   $('#menu-button').sidr({
            name: 'sidr-right',
            side: 'right',
            source: '.nav-holder, .right-icon-menu'
        });

        $('body').click(function () {
            $.sidr('close', 'sidr-right');
        });
        $(window).resize(function () {
            $.sidr('close', 'sidr-right');
        });

        var config = {
            sensitivity: 10,
            interval: 5000,
            timeout: 50000
        };

        //         $('nav > ul > li').stop().hover(function () {
        //     $(this).children('ul.sub-menu').stop().slideDown(200);
        // }, function () {
        //     $(this).find('ul.sub-menu').stop().slideUp(200);
        // }, config);

        // $('nav > ul > li > ul > li').stop().hover(function () {
        //     $(this).children('ul.sub-menu').stop().slideDown(200);
        //     // $(this).addClass('active');
        // }, function () {
        //     $(this).find('ul.sub-menu').stop().slideUp(200);
        //     // $(this).removeClass('active');
        // }, config);


        
         // var div_numb = $('aside .col-md-12.col-sm-6').length;
           
         //   console.log(div_numb);

      (function(){
        var handler = $('.slider-home');
        if(!handler.length) {
          return;
        }
        handler.slick({
          dots: true,
          arrows: false,
          slidesToShow: 1,
          autoplay: true,
          fade: true,
          autoplaySpeed: 5000,

        });
      })(); 

      (function(){
        var handler = $('.slider-apartman-nav');
        if(!handler.length) {
          return;
        }
        handler.slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: true,
         fade: true,
         asNavFor: '.slider-apartman',
         responsive:[
          {
           breakpoint:1030,
           settings:{
             arrows:false
           }
          }

         ]
 
         });
      })(); 

            (function(){
        var handler = $('.slider-apartman');
        if(!handler.length) {
          return;
        }
        handler.slick({
          centerMode: true,
          centerPadding: '7px',
          slidesToShow: 6,
          autoplay:true,
          arrows:false,
          autoplaySpeed: 5000,
          asNavFor: '.slider-apartman-nav',
          focusOnSelect: true,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '7px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '7px',
                slidesToShow: 3
              }
            }
          ]

        });
      })(); 


//  $('.slider-apartman-nav').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: true,
//   fade: true,
//   asNavFor: '.slider-apartman',
//   responsive:[
//    {
//     breakpoint:1030,
//     settings:{
//       arrows:false
//     }
//    }

//   ]
// });

// $('.slider-apartman').slick({
//   centerMode: true,
//   centerPadding: '7px',
//   slidesToShow: 6,
//     autoplay:true,
//     arrows:false,
//   autoplaySpeed: 5000,
//   asNavFor: '.slider-apartman-nav',
//   focusOnSelect: true,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '7px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '7px',
//         slidesToShow: 3
//       }
//     }
//   ]
// });







        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('.top-menu-home').addClass("active");
                $('header #menu-button').addClass("active-menu-btn");

            } else {
                $('.top-menu-home').removeClass("active");
                $('header #menu-button').removeClass("active-menu-btn");

            }
        });
 



$('p:empty').remove(); 




            


});