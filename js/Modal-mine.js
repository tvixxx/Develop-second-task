$(document).ready(function(){
    var butLink = $(".btn-link");
    var modalPopup = $(".modal-block").addClass("hide");
    var closeModalPopup = $(".close-modal-block");

    var modalSuccess = $(".modal-block-success");
    var butSend = $(".btn-send");
    var resetForm = $("#form-reset-login");
    var closeSuccessBtn = $(".close-modal-btn");

    var form = $(".login-form");
    var email = $("[id=email-id]")
    var closeEmailBtn = $(".close-modal-btn-email");
    var errorEmailBlock = $(".modal-block-error-email");

    butLink.click(function(event){
    	event.preventDefault();
    	modalPopup.show(400);
    });

    closeModalPopup.click(function(event){
    	event.preventDefault();
    	modalPopup.hide(400);
    })

	butSend.click(function(event){
        event.preventDefault();
            if ((email).val() === "") {
            errorEmailBlock.show(400);
            return;
            } else {
                event.preventDefault();
                $("#form-reset-login").get(0).reset();
                modalSuccess.animate({
                    'opacity' : 'show'
                    },200);
            };
    });

email.blur(function(){
            if(email.val().search(pattern) == 0){
                errorEmailBlock.show(400);
                } else {
                   event.preventDefault();
                $("#form-reset-login").get(0).reset();
                modalSuccess.animate({
                    'opacity' : 'show'
                    },200);
                }
            });

 	closeSuccessBtn.click(function(event){
 		event.preventDefault();
 			modalSuccess.hide(400);
    			modalPopup.hide(400);
    		});

	closeEmailBtn.click(function(event){
		event.preventDefault();
		errorEmailBlock.hide(400);
	});

});

