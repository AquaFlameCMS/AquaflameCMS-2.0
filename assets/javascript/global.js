$(window).load(function() {
	$('.flexslider').flexslider({
		directionNav: false,
		controlNav: false
	});
});
$(document).ready(function(){
	$('#loginframe').modal({show: false});
});
$(document).ready(function(){
    $("#show-reply").click(function(){
        $(".new-post").show();
        $("#show-reply").hide();
    });   
    $("#submit-comment").click(function(){
        // ajax submit the comment to the server, add it, hide the field and show the Add reply button
        $("#show-reply").show();
        $(".new-post").hide();
    });
});