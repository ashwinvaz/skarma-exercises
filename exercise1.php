<!DOCTYPE html>
<html>
<head>
<title>Skarma Exercise 1</title>
<link rel="stylesheet" type="text/css" href="css/styles3.css">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-cookie.js"></script>
<script>
$(document).ready(function() {
	$("#bt-invert").click(function() {
	    $("body").css("background","#0000ff");
	    $("#logo").addClass("inverted");
		$.cookie('inverted', true);
	});
	if($.cookie('inverted') == 'true'){
	    $('#bt-invert').click();
	} //else {
    //$('#bt-invert').click();
	//}
});
</script>
</head>
<body>
	<div id="logo">
		<img src="images/skarma-white-300x300.png">
	</div>
	<div id="bt-invert" class="button">
		<a href="#">Invert</a>
	</div>
</body>
</html>