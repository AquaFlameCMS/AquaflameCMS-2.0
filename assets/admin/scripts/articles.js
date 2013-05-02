$(document).ready(function(){
    var page = 1;
    fetchPage(page);
});
function fetchPage(page)
{
    var request = $.ajax({
        url: "http://" + window.location.hostname + "/index.php/ajax/responseadminarticles",
        type: "POST",
        data: { page: page }
        });
    
    request.done(function(msg){
            $("#articlesTable").html(msg);
            bindPage();
        });
}
function bindPage()
{
    $(".number").bind("click",function(event){
         fetchPage(event.target.text);       
    });
}