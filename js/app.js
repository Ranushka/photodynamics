
$(function() {

 
// setTimeout(function () {
		
  var homeCorosal = $('#homeCorosal');
      homeCorosal.owlCarousel({
        loop: true,
        //center: true,
        //margin:20,
        //smartSpeed:2000,
        responsive: {
          0: {
            items: 1
          }
        }
        // onTranslated : callback
      });

// homeCorosal.owlCarousel({
//     onDragged: callback
// });
// function callback(event) {
//     ...
// }

      	// $('.owl-stage .active').eq(0).click(function() {
      	// 	homeCorosal.trigger('next.owl.carousel');
      	// })
      	// $('.owl-stage .active').eq(3).click(function() {
      	// 	homeCorosal.trigger('prev.owl.carousel');
      	// })



      	// $(homeCorosal).on('click', '.owl-stage .active:eq(0)', function () {
      	// 	homeCorosal.trigger('prev.owl.carousel');
      	// })
      	// $(homeCorosal).on('click', '.owl-stage .active:eq(2)', function () {
      	// 	homeCorosal.trigger('next.owl.carousel');
      	// })
    var backgroundImg = $('#backgroundImg');

      	homeCorosal.on('change.owl.carousel', function (event) {

            if (event.namespace && event.property.name === 'position') {
                var target = (event.relatedTarget.relative(event.property.value, true))+1;
                //backgroundImg.style.backgroundImage="url(img/"+target+"a.jpg)";
                backgroundImg.css("background-image","url(img/"+target+"a.jpg)")
            }

      	});


});
