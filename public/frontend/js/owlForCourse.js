

  $(document).ready(function(){
    $(".one-slide").owlCarousel({
        nav:false,
        items:1,
        loop:true,
        center:true,
        autoplay:true,
        autoplayTimeout:3000,
        dots:false,
       
    });
  });

  

  const nextIcon = '<img class="for-nav-img" src="../frontend/img/course/right-arrow.png" alt="next">';
  const prevIcon ='<img class="for-nav-img" src="../frontend/img/course/arrow.png" alt="prev">';

$(document).ready(function () {
  
  $(".two-slide").owlCarousel({
    nav: false,
    navText: [prevIcon, nextIcon],
    items: 1,
    // loop:true,
    center: true,
    // autoplay:true,
    // autoplayTimeout:3000,
    dots: false,
  });
});
