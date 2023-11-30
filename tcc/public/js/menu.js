//menu lateral
$(document).ready(function(){

    $('.sub-btn').click(function(){
      $(this).next('.sub-menu').slideToggle();
      $(this).find('.dropdown').toggleClass('rotate');
    });

    $(document).ready(function(){
        $('.menu-btn').click(function(){
        $('.side-bar').toggleClass('active');
    });
});

  });



