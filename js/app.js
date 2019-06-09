$(".page-content > h2").html(function () {
    var text = $(this).text().trim().split(" ");
    var first = text.shift();
    return (text.length > 0 ? "<span class='first-word'>" + first + "</span> " : first) + text.join(" ");
});

$(".page-standard-content > h2").html(function () {
    var text = $(this).text().trim().split(" ");
    var first = text.shift();
    return (text.length > 0 ? "<span class='first-word'>" + first + "</span> " : first) + text.join(" ");
});

$('html').addClass('js');

$(document).ready(function() {
    setTimeout(
        function()
            {
            $("#loading").fadeOut();
        }, 500);
});