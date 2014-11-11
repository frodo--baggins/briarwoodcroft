$(document).ready(function() {
	$("#search").keyup(function(event) {
		if(event.keyCode == 13) {
			$("#submit_search").click();
		};
	});
});