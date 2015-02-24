function setHeights(){
  if($(window).width() > 992){
    var h = document.querySelector("#promos").offsetHeight;
    //document.querySelector("#promos .seminar-section").style.height = h + "px";
    //document.querySelector("#promos .promo-section").style.height = h + "px";
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
  loadBike($(this).attr('data-bike-id'));
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

function loadBike(id){
  var url = "mysql-admin/ajax-bike-info.php?id=" + id;
  var bikeData;
  $.ajax(url, {
    success: function(bike){
      console.log(bike);
      $('#bike-title').html(bike.name);
      $('#bike-img').attr('src', bike.image_url);
      if(bike.old_price != bike.sale_price && bike.old_price != null){
        $('#bike-price').html('<s>$'+bike.old_price+'</s> <span class="text-orange">$'+bike.sale_price+'</span>');
      } else {
        $('#bike-price').html('$'+bike.sale_price);
      }
      $('#bike-text').html(bike.text);
      $('#bike-form input[name="id"]').attr('value', bike.id);
      $('#bikeModal').modal('show');
    }
  });
}
