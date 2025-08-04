$(document).ready(function () {
    $("#sidebar-logo-button-agent-studio").on("click", function (event) {
        $("#sidebar-logo-button-agent-studio").addClass('bg-white');
        $("#sidebar-logo-button-app-studio").removeClass('bg-white');
        $("#sidebar-logo-button-core").removeClass('bg-white');
        $.ajax({
            url: "/agent_studio",
            method: "GET",
            success: function (response) {
                console.log("in the parent currently!!");
                $("#sidebar-parent").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
    $("#sidebar-logo-button-app-studio").on("click", function (event) {
        $("#sidebar-logo-button-agent-studio").removeClass('bg-white');
        $("#sidebar-logo-button-app-studio").addClass('bg-white');
        $("#sidebar-logo-button-core").removeClass('bg-white');
        $.ajax({
            url: "/app_studio1",
            method: "GET",
            success: function (response) {
                console.log("in the parent currently!!");
                $("#sidebar-parent").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
    $("#sidebar-logo-button-core").on("click", function (event) {
        $("#sidebar-logo-button-agent-studio").removeClass('bg-white');
        $("#sidebar-logo-button-app-studio").removeClass('bg-white');
        $("#sidebar-logo-button-core").addClass('bg-white');
        $.ajax({
            url: "/sidebar_home",
            method: "GET",
            success: function (response) {
                console.log("in the parent currently!!");
                $("#sidebar-parent").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
});
