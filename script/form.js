$(document).ready(function () {

    //step1
    $('#btn_step1').click(function () {
        $('#step1').removeClass('active');
        $('#step2').addClass('active in');
    });
    $('#previous_btn_step1').click(function () {
        $('#step2').removeClass('active in');
        $('#step1').addClass('active in');
    });
    //end step1

    //step2
    $('#btn_step2').click(function () {
        var error_name = '';
        if ($.trim($('#name').val()).length == 0) {
            error_name = 'Name is required';
            $('#error_name').text(error_name);
            $('#name').addClass('has-error');
        } else {
            error_name = '';
            $('#error_name').text(error_name);
            $('#name').removeClass('has-error');
        }

        if (error_name != '') {
            return false;
        } else {
            $('#step2').removeClass('active');
            $('#step3').addClass('active in');
        }
    });
    $('#previous_btn_step2').click(function () {
        $('#step3').removeClass('active in');
        $('#step2').addClass('active in');
    });
    //end step2

    //step3
    $('#btn_step3').click(function () {
        var error_email = '';
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if ($.trim($('#email').val()).length == 0) {
            error_email = 'Email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        } else {
            if (!filter.test($('#email').val())) {
                error_email = 'Invalid Email';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            } else {
                error_email = '';
                $('#error_email').text(error_email);
                $('#email').removeClass('has-error');
            }
        }

        if (error_email != '') {
            return false;
        } else {
            $('#step3').removeClass('active');
            $('#step4').addClass('active in');
        }
    });
    $('#previous_btn_step3').click(function () {
        $('#step4').removeClass('active in');
        $('#step3').addClass('active in');
    });
    //end step3

    //step4
    $('#btn_step4').click(function () {
        var error_profession = '';
        var professionType = $("input[name='profession']:checked").val();

        if (!$("input[name='profession']:checked").val()) {
            error_profession = 'Profession is required';
            $('#error_profession').text(error_profession);
            $('#error_profession').addClass('has-error');
        } else {
            error_profession = '';
            $('#error_profession').text(error_profession);
            $('#error_profession').removeClass('has-error');
        }

        if (error_profession != '') {
            return false;
        } else {
            if (professionType === 'developer') {
                $('#step4').removeClass('active');
                $('#step5').addClass('active in');
            } else {
                $('#step4').removeClass('active');
                $('#step6').addClass('active in');
            }
        }
    });
    $('#previous_btn_step4').click(function () {
        $('#step5').removeClass('active in');
        $('#step4').addClass('active in');
    });
    //end step4

    //step5
    $('#btn_step5').click(function () {
        var error_language = '';
        if ($.trim($('#language').val()).length == 0) {
            error_language = 'Language is required';
            $('#error_language').text(error_language);
            $('#error_language').addClass('has-error');
        } else {
            error_language = '';
            $('#error_language').text(error_language);
            $('#error_language').removeClass('has-error');
        }

        if (error_language != '') {
            return false;
        } else {
            $('#step5').removeClass('active');
            $('#step7').addClass('active in');
        }
    });
    $('#previous_btn_step5').click(function () {
        $('#step6').removeClass('active in');
        $('#step4').addClass('active in');
    });
    //end step5

    //step6
    $('#btn_step6').click(function () {
        var error_design = '';
        if ($.trim($('#design').val()).length == 0) {
            error_design = 'Design is required';
            $('#error_design').text(error_design);
            $('#error_design').addClass('has-error');
        } else {
            error_design = '';
            $('#error_design').text(error_design);
            $('#error_design').removeClass('has-error');
        }

        if (error_design != '') {
            return false;
        } else {
            $('#step6').removeClass('active');
            $('#step7').addClass('active in');
        }
    });
    $('#previous_btn_step5_6').click(function () {
        $('#step7').removeClass('active in');
        var professionType = $("input[name='profession']:checked").val();
        if(professionType === 'developer'){
            $('#step5').addClass('active in');
        }else {
            $('#step6').addClass('active in');
        }
    });
    //end step6


    $('#btn_step7').click(function () {
        var error_experience = '';
        if ($.trim($('#experience').val()).length == 0) {
            error_experience = 'Experience is required';
            $('#error_experience').text(error_experience);
            $('#error_experience').addClass('has-error');
        } else {
            error_experience = '';
            $('#error_experience').text(error_experience);
            $('#error_experience').removeClass('has-error');
        }

        if (error_experience != '') {
            return false;
        } else {
            // $('#step6').removeClass('active');
            // $('#step7').addClass('active in');
            $(document).css('cursor', 'prgress');
            $("#register_form").submit();
        }
    });


    // $('#btn_contact_details').click(function () {
    //     var error_address = '';
    //     var error_mobile_no = '';
    //     var mobile_validation = /^\d{10}$/;
    //     if ($.trim($('#address').val()).length == 0) {
    //         error_address = 'Address is required';
    //         $('#error_address').text(error_address);
    //         $('#address').addClass('has-error');
    //     } else {
    //         error_address = '';
    //         $('#error_address').text(error_address);
    //         $('#address').removeClass('has-error');
    //     }
    //
    //     if ($.trim($('#mobile_no').val()).length == 0) {
    //         error_mobile_no = 'Mobile Number is required';
    //         $('#error_mobile_no').text(error_mobile_no);
    //         $('#mobile_no').addClass('has-error');
    //     } else {
    //         if (!mobile_validation.test($('#mobile_no').val())) {
    //             error_mobile_no = 'Invalid Mobile Number';
    //             $('#error_mobile_no').text(error_mobile_no);
    //             $('#mobile_no').addClass('has-error');
    //         } else {
    //             error_mobile_no = '';
    //             $('#error_mobile_no').text(error_mobile_no);
    //             $('#mobile_no').removeClass('has-error');
    //         }
    //     }
    //     if (error_address != '' || error_mobile_no != '') {
    //         return false;
    //     } else {
    //         $('#btn_contact_details').attr("disabled", "disabled");
    //         $(document).css('cursor', 'prgress');
    //         $("#register_form").submit();
    //     }
    //
    // });

});
