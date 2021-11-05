$(document).ready(function () {
//validation for phone number
$('#phone').on('input', function () {
var phone = $(this).val();
var validPhone = /^[6][0-9]{8}$/;
if (phone.length == 0) {
$('.phone-msg').addClass('invalid-msg').text("Phone number is required");
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!validPhone.test(phone)) {
$('.phone-msg').addClass('invalid-msg').text('only cameroon numbers are allowed');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else {
$('.phone-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
}
});
// valiadtion for Name
$('#user').on('input', function () {
var user = $(this).val();
var validUser = /^[a-zA-Z ]*$/;
if (user.length == 0) {
$('.UID-msg').addClass('invalid-msg').text("Name is required");
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!validUser.test(user)) {
$('.UID-msg').addClass('invalid-msg').text('only letters & Whitespace are allowed');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else {
$('.UID-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
}
});

// valiadtion for Password
$('#pass').on('input', function () {
var pass = $(this).val();
var pass_repeat = $('#pass_repeat').val();
var uppercasePassword = /(?=.*?[A-Z])/;
var lowercasePassword = /(?=.*?[a-z])/;
var digitPassword = /(?=.*?[0-9])/;
var spacesPassword = /^$|\s+/;
var symbolPassword = /(?=.*?[#?!@$%^&*-])/;
var minEightPassword = /.{8,}/;
if (pass.length == 0) {
$('.pass-msg').addClass('invalid-msg').text('Password is required');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!uppercasePassword.test(pass)) {
$('.pass-msg').addClass('invalid-msg').text('At least one Uppercase');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!lowercasePassword.test(pass)) {
$('.pass-msg').addClass('invalid-msg').text('At least one Lowercase');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!digitPassword.test(pass)) {
$('.pass-msg').addClass('invalid-msg').text('At least one digit');
$(this).addClass('invalid-input').removeClass('valid-input');
} else if (!symbolPassword.test(pass)) {
$('.pass-msg').addClass('invalid-msg').text('At least one special character');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (spacesPassword.test(pass)) {
$('.pass-msg').addClass('invalid-msg').text('Whitespaces are not allowed');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!minEightPassword.test(pass)) {
$('.pass-msg').addClass('invalid-msg').text('Minimum length 8');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if(pass_repeat.length>0) {
if(pass!=pass_repeat){
$('.pass_repeat-msg').addClass('invalid-msg').text('must be matched');
$('#pass_repeat').addClass('invalid-input').removeClass('valid-input');
}
else
{
$('.pass_repeat-msg').empty();
$('#pass_repeat').addClass('valid-input').removeClass('invalid-input');
}
$('#pass').addClass('valid-input').removeClass('invalid-input');
$('.pass-msg').empty();
} 
else {
$('.pass-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
}
});
// valiadtion for Confirm Password
$('#pass_repeat').on('input', function () {
var pass = $('#pass').val();
var pass_repeat = $(this).val();
if (pass_repeat.length == 0) {
$('.pass_repeat-msg').addClass('invalid-msg').text('Confirm password is required');
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if(pass_repeat != pass) {
$('.pass_repeat-msg').addClass('invalid-msg').text('must be matched');
$(this).addClass('invalid-input').removeClass('valid-input');
} 
else {
$('.pass_repeat-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
}
});
// validation to submit the form
$('#reg_btn').click(function(e){
    e.preventDefault();
   $('#signup_form').submit();
   });
});