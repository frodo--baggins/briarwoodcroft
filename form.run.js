$(document).ready(function() {
var signup = $('.signUp').val().toString;
$('#submit').click(function() {
for(var i in signup) {
alert(signup[i]);
};
});
});