
jQuery(document).ready(function($) {
"use strict";

    //Contact Form Validation With jQuery and AJAX
    $('form.contactForm').submit(function(){
      var f = $(this).find('.form-group'),
      ferror = false,
      // Regular expressions to check against input in email, postcode and phone fields
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i,
      postcodeExp = /^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/i,
      phoneExp = /^\d{11}$/;

        f.children('input').each(function(){ // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if( rule !== undefined ){
            var ierror=false; // error flag for current input
            var pos = rule.indexOf( ':', 0 );
            if( pos >= 0 ){
                var exp = rule.substr( pos+1, rule.length );
                rule = rule.substr(0, pos);
            }else{
                rule = rule.substr( pos+1, rule.length );
            }

            switch( rule ){
                case 'required':
                if( i.val()==='' ){ ferror=ierror=true; }
                break;

                case 'minlen':
                if( i.val().length<parseInt(exp) ){ ferror=ierror=true; }
                break;

                case 'email':
                if( !emailExp.test(i.val()) ){ ferror=ierror=true; }
                break;

                case 'phone':
                if( !phoneExp.test(i.val()) ){ ferror=ierror=true; }
                break;

                case 'postcode':
                if( !postcodeExp.test(i.val()) ){ ferror=ierror=true; }
                break;
            }
                i.next('.validation').html( ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' ) ).show('blind');
            }
        });
        if( ferror ) return false;
        else var str = $(this).serialize();
        // alert(str);
            $.ajax({
                type: "POST",
                url: "controllers/dbInsert.php",
                data: str,
                success: function(msg){
                   // alert(msg);
                    if(msg == 'OK') {
                        $("#contactForm").addClass("hidden");
                        $("#sendmessage").removeClass("hidden");
                        $("#sendmessage").addClass("show");
                        $("#errormessage").removeClass("show");
                        $("#thanksH2").html("Thank You!");
                        $("#thanksP").html("We have received your enquiry and someone from our team will contact you shortly with more information about your selection!");
                        console.log('Message sent');
                    }
                    else {
                        $("#sendmessage").removeClass("show");
                        $("#errormessage").addClass("show");
                        $('#errormessage').html(msg);
                        console.log('Message NOT sent');
                    }
                }
            });
        return false;
    });

});
