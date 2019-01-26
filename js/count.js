

$(function() {
  let sectOneElm       = $('.section-one');
  var oTop             = $('.section-one').offset().top - window.innerHeight;
  console.log(oTop);
  $(window).scroll(function(){
    console.log('scrolled');
    var pTop = $('body').scrollTop();
    console.log( pTop + ' - ' + oTop );   //just for your debugging
    if( pTop > oTop ){
        start_count();
    }
  });
});


function start_count(){
  let sectOneCountElms = $('.section-one .count-animation');
  $(sectOneCountElms).each(function () {
    $(this).prop('Counter',0).animate({
      Counter: $(this).text()
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    });
  });
}