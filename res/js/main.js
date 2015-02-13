function setHeights(){
  if($(window).width() > 992){
    var h = document.querySelector("#promos").offsetHeight;
    document.querySelector("#promos .seminar-section").style.height = h + "px";
    document.querySelector("#promos .promo-section").style.height = h + "px";
  } else {
    document.querySelector("#promos .seminar-section").style.height ="auto";
    document.querySelector("#promos .promo-section").style.height = "auto";
  }
}

$(window).resize(setHeights);

$(window).scroll(function(){
  if($(".navbar").offset().top>50){
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else{
    $(".navbar-fixed-top").removeClass("top-nav-collapse");}
  });
  
$('.bike').click(function(){
  $('#bikeModal').modal('show');
});
  
$(function(){
  $('.page-scroll a').bind('click',function(event){
    var $anchor=$(this);$('html, body').stop().animate({scrollTop:$($anchor.attr('href')).offset().top},1500,'jswing');
    event.preventDefault();
  });
  setHeights();
  $('#signupButton').click(function(){
    $('#signupButton').addClass('form-success');
    $('#signupButton>img').attr('src','res/img/icons/checkicon-white.png');
  });
});
