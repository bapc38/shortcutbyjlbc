$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                },
                schoolname: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                name: {
                    required: "Come on, you have a name, don't you?",
                    minlength: "Your name must consist of at least 2 characters"
                },
                subject: {
                    required: "Please input a subject to know more about your inquiry",
                    minlength: "Your subject must consist of at least 4 characters"
                },
                number: {
                    required: "We need your contact number to contact you, silly!",
                    minlength: "Your number must consist of at least 5 characters"
                },
                email: {
                    required: "No email, no message. We'll also reach out to you using this!"
                },
                message: {
                    required: "Um...yea, you have to write something to send this form.",
                    minlength: "Thats all? Really?"
                },
                schoolname: {
                    required: "Please input your full School Name",
                    minlength: "Please input your full School Name"                    
                }              
            },
            // submitHandler: function(form) {
            //     $(form).ajaxSubmit({
            //         type:"POST",
            //         data: $(form).serialize(),
            //         url:"contact_process.php",
            //         success: function() {
            //             $('#contactForm :input').attr('disabled', 'disabled');
            //             $('#contactForm').fadeTo( "slow", 1, function() {
            //                 $(this).find(':input').attr('disabled', 'disabled');
            //                 $(this).find('label').css('cursor','default');
            //                 $('#success').fadeIn()
            //                 $('.modal').modal('hide');
		    //             	$('#success').modal('show');
            //             })
            //         },
            //         error: function() {
            //             $('#contactForm').fadeTo( "slow", 1, function() {
            //                 $('#error').fadeIn()
            //                 $('.modal').modal('hide');
		    //             	$('#error').modal('show');
            //             })
            //         }
            //     })
            // }
        })
    })
        
 })(jQuery)
})