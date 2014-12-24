
$(function() {

 
// setTimeout(function () {
		
  var homeCorosal = $('#homeCorosal');
      homeCorosal.owlCarousel({
        loop: true,
          autoplay: true,
        //margin:20,
        //smartSpeed:2000,
        responsive: {
          0: {
            items: 1
          }
        }
      });


    var backgroundImg = $('#backgroundImg');

    homeCorosal.on('change.owl.carousel', function (event) {
        //backgroundImg.fadeTo( "slow", 0 );
        if (event.namespace && event.property.name === 'position') {
            var target = (event.relatedTarget.relative(event.property.value, true))+1;
            //backgroundImg.style.backgroundImage="url(img/"+target+"a.jpg)";
            backgroundImg.fadeOut(function(){
                backgroundImg.css("background-image","url(img/"+target+"a.jpg)");
                backgroundImg.fadeIn()
            });

            //backgroundImg.show();
            //backgroundImg.html('<img src="img/'+target+'a.jpg" />');
            //backgroundImg.addClass('animated fadeIn');
        }

    });


});
