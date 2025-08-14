$(document).ready(function () {

    function loadSidebar(url, activeButton) {
        // Update active button styles
        $("#sidebar-logo-button-agent-studio, #sidebar-logo-button-app-studio, #sidebar-logo-button-core")
            .removeClass('bg-white');
        $(activeButton).addClass('bg-white');

        // AJAX load sidebar
        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                $("#sidebar-parent").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    // Click handlers
    $("#sidebar-logo-button-agent-studio").on("click", function () {
        loadSidebar("/agent_studio", "#sidebar-logo-button-agent-studio");
    });

    $("#sidebar-logo-button-app-studio").on("click", function () {
        loadSidebar("/app_studio1", "#sidebar-logo-button-app-studio");
    });

    $("#sidebar-logo-button-core").on("click", function () {
        loadSidebar("/sidebar_home", "#sidebar-logo-button-core");
    });

    // Auto-load sidebar based on current URL
    const path = window.location.pathname;

    if (path.includes("/agent/")) {
        loadSidebar("/agent_studio", "#sidebar-logo-button-agent-studio");
    } 
    else if (path.includes("/app")) {
        loadSidebar("/app_studio1", "#sidebar-logo-button-app-studio");
    } 
    else {
        loadSidebar("/sidebar_home", "#sidebar-logo-button-core");
    }
});
