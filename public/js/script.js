$(document).ready(function() {
	// Login and Signup
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	 
	signInButton.addEventListener('click', () => {
	    container.classList.remove("right-panel-active");
	});
	 
	signUpButton.addEventListener('click', () => {
	    container.classList.add("right-panel-active");
	    $(".l_verify_error").css('display', 'none').text('');
		$(".l_email_error").css('display', 'none').text('');
		$(".l_password_error").css('display', 'none').text('');
		$(".l_email").css('border', '1px solid #fff');
		$(".l_password").css('border', '1px solid #fff');
	});

	// Login check
	function login_check(){
		$(".sk-wave").css('display', 'flex');
		$(".on").addClass('default-btn_2').find('span,i').css('display', 'none');
		$(".default-btn_2").removeClass('default-btn');
		$(".l_verify_error").css('display', 'none').text('');
		$(".l_email_error").css('display', 'none').text('');
		$(".l_password_error").css('display', 'none').text('');
		$(".l_email").css('border', '1px solid #fff');
		$(".l_password").css('border', '1px solid #fff');
		const send = {
			'email' : $('.l_email').val(),
			'password' : $('.l_password').val()
		}
		$.ajax({
			url: '/login_check',
			type: 'post',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: {send},
			success: function(data){
				if (data){
					if (data.success === true) window.location.href = 'http://localhost:8000/admin';    
					else if (data.success === false) window.location.href = 'http://localhost:8000/g_profile'; 
				}	
			},
			error: function (reject) {
				$(".default-btn_2").addClass('default-btn').find('span,i').css('display', 'inline-block');
				$(".sk-wave").css('display', 'none');
				$(".on").removeClass('default-btn_2');
                var response = $.parseJSON(reject.responseText);
                if (response.success === false)
	                if (reject.status === 400){
	                    $.each(response.errors, function (key, val) {
	                    	switch (key) {
	                    		case 'verify':
	                        		$(".l_" + key + "_error").css('display', 'flex').text(val[0]);
	                    			break;
	                    		case 'email':
	                        		$(".l_" + key + "_error").css('display', 'flex').text(val[0]);
	                        		$(".l_" + key).css('border', '1px solid red');
	                    			break;
	                    		case 'password':
	                        		$(".l_" + key + "_error").css('display', 'flex').text(val[0]);
	                        		$(".l_" + key).css('border', '1px solid red');
	                    			break;
	                    	}
	                    });
	                }
	            
            }
		})
	}

	$('.login').click(function() {
		login_check();
	});

	$('.sign-up-container').keydown(function(e) {
        if(e.key == 'Enter') {
            login_check();
        }
    });
	
});