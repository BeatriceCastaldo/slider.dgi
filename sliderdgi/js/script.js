/*$(function(){

    var ticker = function(){

       ticker_timeout = setTimeout(function(){

        $('#slidermio li:first').animate( {marginLeft: '-25%'}, 450, function(){

          $(this).detach().appendTo('ul#slidermio').attr('style', ''); 

        });

        ticker();

      }, 2500);   
    };


    $('#slidermio').hover(function() { 

        $('#slidermio').stop();

        clearTimeout(ticker_timeout);   

    }, function() {

        ticker();
    });

    ticker();

  });*/

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active", "");
  }

  if (slides.length > 0) { 
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
}

