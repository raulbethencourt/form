$(document).ready(function () {
    $(".icon").click(function () {
        $("#nav-buttons").css("display", "flex");
        $("#nav-buttons").css("flex-direction", "column");
        $(".nav-icons").css("display", "none");
        $("#nav-logo").css("display", "none");
        $("#nav-header").css("flex-direction", "column");
        $("#nav-header").css("padding", "20px 0");
        $("#nav a").css("display", "block");
        $("#nav a").css("padding", "5px 0");
        $("#fake-nav ul").css("flex-direction", "column");
        $(".icon").css("display", "none");
    });
});