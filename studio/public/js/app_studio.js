$(document).ready(function () {

    
    $("#app_studio").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/overview",
            method: "GET",
            success: function (response) {
                console.log('in the parent currently!!');
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });
    $("#sidebar-menu-item-app-studio-overview").on("click", function (event) {
        console.log('here i am');
        
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/overview",
            method: "GET",
            success: function (response) {
                console.log('hi there!!');
                
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });
    $("#app_studio_apps").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/apps",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_deployments").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/deployments",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_observability").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/observability",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_manage_users").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/manage-users",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_file_manager").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/file-manager",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_audit_trail").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/audit-trail",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_key_vault").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/key-vault",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_support").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/support",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_subscription_plans").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/subscription-plans",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_billing").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/billing",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    $("#app_studio_faqs").on("click", function () {
        event.preventDefault();
        event.stopPropagation();
        $.ajax({
            url: "/studio/app/faqs",
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

});
