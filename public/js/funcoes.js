(function(){
  var contact = function(){
    var init = function() {
      $('#form-contact #assunto').phoneBrazil();

      $('#form-contact').validate({
        rules : {
          name: "required",
          email: { required: true, email: true },
          phone: { required: true, minlength: 14 },
          mensagem: "required"
        },
        messages: {
          name: "*",
          email: { required: "*", email: "*" },
          assunto: { required: "*", minlength: "*" },
          mensagem: "*"
        },
        submitHandler: function(form) {
          var $form = $(form);

          var params = {
            name: $form.find('#name').val(),
            email: $form.find('#email').val(),
            phone: $form.find('#assunto').val(),
            message: $form.find('#msg').val()
          };

          $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: params,
            success: function( data ) {
              if(data == "true") {
                $form.find('.input input').val("");
                $form.find('.input textarea').val("");
                setMessage("Mission accomplished. <strong>"+ params.email +"</strong> was successfully added to list.", "success");
              } else {
                setMessage("Mission failed. <strong>"+ params.email +"</strong> not was added to list.", "error");
              }
            },
            error: function( data ) {
              setMessage("Mission failed in connection. Try again.", "error");
            }
          });

          return false;
        }
      });
    };

    var setMessage = function($message, $type) {
      $('.form-message').html($message).addClass($type);

      setTimeout(function(){
        $('.form-message').removeClass($type);
      }, 6000);
    };

    return {init: init};
  }();

  $(document).ready(contact.init);
})();


function toggleMenu() {
  var nav = document.getElementById('nav');
  if (nav.style.display != 'block') {
    nav.style.display = 'block';
  } else {
    nav.style.display = '';
  }
}

// Slideshow 1
$("#slider1").responsiveSlides({
  auto: false,
  maxwidth: 800,
  speed: 800,
  fx: "crossfade",
});