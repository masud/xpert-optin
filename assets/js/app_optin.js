 (function ($) {
 	 $(document).ready(function (direction) {


 	 

$('.form-submit').waypoint(function() {

  // var notify = function(message) {
  //     var $message = $('<p style="display:none;">' + message + '</p>');

  //     $('.notifications').append($message);
  //     $message.slideDown(300, function() {
  //       window.setTimeout(function() {
  //         $message.slideUp(300, function() {
  //           $message.remove();
  //         });
  //       }, 2000);
  //     });
  //   };

    alert('You have scrolled to my waypoint.');
    //notify("Hello World");
}, {
    offset: '70%'
});


});
 })(jQuery);