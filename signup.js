$('document').ready(function(){
	var num_state = false;
	 var UID_state = false;
	 $('#phone').on('blur', function(){
	  var num = $('#phone').val();
	  if (num == '') {
		  num_state = false;
		  return;
	  }
	  $.ajax({
		url: 'signup.php',
		type: 'post',
		data: {
			'num_check' : 1,
			'num' : num,
		},
		success: function(response){
		  if (response == 'Phone number Already Exist' ) {
			  num_state = false;
			  $('#phone').parent().removeClass();
			  $('#phone').parent().addClass("form_error");
			  $('#phone').siblings("span").text('Sorry... phone number already taken');
		  }else if (response == 'Registration Successful') {
			  num_state = true;
			  $('#phone').parent().removeClass();
			  $('#phone').parent().addClass("form_success");
			  $('#phone').siblings("span").text('Number available');
		  }
		}
	  });
	 });	
	  /*$('#user').on('blur', function(){
		 var UID = $('#user').val();
		 if (UID == '') {
			 UID_state = false;
			 return;
		 }
		 $.ajax({
		  url: 'signup.php',
		  type: 'post',
		  data: {
			  'UID_check' : 1,
			  'UID' : UID,
		  },
		  success: function(response){
			  if (response == 'taken' ) {
			  email_state = false;
			  $('#email').parent().removeClass();
			  $('#email').parent().addClass("form_error");
			  $('#email').siblings("span").text('Sorry... Email already taken');
			  }else if (response == 'not_taken') {
				email_state = true;
				$('#email').parent().removeClass();
				$('#email').parent().addClass("form_success");
				$('#email').siblings("span").text('Email available');
			  }
		  }
		 });
	 });*/
	
	 $('#reg_btn').on('click', function(){
		 var num = $('#phone').val();
		 var UID = $('#user').val();
		var pwd = $('#pass').val();
		var pwd_repeat = $('#pass_repeat').val();
		 if (num_state == false || UID_state == false) {
		  $('#error_msg').text('Fill all fields in the form first');
		}else{
		  // proceed with form submission
		  $.ajax({
			  url: 'signup.php',
			  type: 'post',
			  data: {
				  'save' : 1,
				  'num' : num,
				  'UID' : UID,
				'pwd' : pwd,
				'pwd_repeat' : pwd_repeat,
			  },
			  success: function(response){
				  alert('user saved');
				  $('#phone').val('');
				  $('#user').val('');
				$('#pass').val('');
				$('#pass_repeat').val('');
			  }
		  });
		 }
	 });
	});