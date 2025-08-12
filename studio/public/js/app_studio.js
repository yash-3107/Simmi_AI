$(document).ready(function () {
    $("#app_studio").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/overview",
            method: "GET",
            success: function (response) {
                console.log("in the parent currently!!");
                $("#parent-main").html(response);
                
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-app-studio-apps").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/apps",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
                $("#parent-main")
                    .find("script")
                    .each(function () {
                        const script = document.createElement("script");

                        if (this.src) {
                            // External script
                            script.src = this.src;
                        } else {
                            // Inline script
                            script.textContent = this.innerHTML;
                        }

                        document.head.appendChild(script);
                    });
                modal_popup();
                app_dropdown();
                app_modal_steps();
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-app-studio-app-deployments").on(
        "click",
        function (event) {
            event.preventDefault();
            event.stopPropagation();
            $.ajax({
                url: "/studio/app/deployments",
                method: "GET",
                success: function (response) {
                    $("#parent-main").html(response);
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                },
            });
        }
    );

    $("#sidebar-menu-item-app-studio-observability").on(
        "click",
        function (event) {
            event.preventDefault();
            event.stopPropagation();
            $.ajax({
                url: "/studio/app/observability",
                method: "GET",
                success: function (response) {
                    $("#parent-main").html(response);
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                },
            });
        }
    );

    $("#sidebar-menu-item-user-management").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/manage-users",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-file-manager").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/file-manager",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-audit-trail").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/audit-trail",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-key-vault").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/key-vault",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-support").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/support",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-subscription-plans").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/subscription-plans",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-billing").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        console.log("in billing");

        $.ajax({
            url: "/studio/app/billing",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-faqs").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/faqs",
            method: "GET",
            success: function (response) {
                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

    $("#sidebar-menu-item-app-studio-overview").on("click", function (event) {
        console.log("here i am");

        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/overview",
            method: "GET",
            success: function (response) {
                console.log("hi there!!");

                $("#parent-main").html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
});
