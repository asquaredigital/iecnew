
      $(document).ready(function() {
         // Contact Form Submission
         $('#contact-form').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            var form = $(this);
            var formData = form.serialize();

            // Send AJAX request
            $.ajax({
               type: 'POST',
               url: 'contact.php',
               data: formData,
               dataType: 'json',
               success: function(response) {
                  if (response.success) {
                     $('#response-message').html('<p class="success-message">' + response.message + '</p>');
                     form.trigger('reset');
                  } else {
                     $('#response-message').html('<p class="error-message">' + response.message + '</p>');
                  }
               },
               error: function() {
                  $('#response-message').html('<p class="error-message">An error occurred. Please try again later.</p>');
               }
            });
         });
      });

