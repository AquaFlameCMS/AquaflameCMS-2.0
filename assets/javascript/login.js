$(document).ready(function(){
    $("#loginSubmit").click(function(){
        var request = $.ajax({
            url: window.baseUrl + "index.php/ajax/takelogin",
            type: "POST",
            data: {username: $("#accountName").val(), password: $("#accountPassword").val()}
            });
            
        request.done(function(msg){
            if (msg == "")
            {
                window.location.reload();
            }
            else if (msg == "1")
            {
                alert("Wrong or non-existant username, please try again");
            }
            else if (msg == "2")
            {
                alert("Wrong password, the password, as well as the username, are case sensitive");
            }
        });
    });
    $("#logoutYes").click(function(){
        var request = $.ajax({
            url: window.baseUrl + "index.php/ajax/takelogout",
            type: "POST",});
            
        request.done(function(msg){
            alert("You have successfuly logged out!");
            window.location.reload();
        });
    });
});