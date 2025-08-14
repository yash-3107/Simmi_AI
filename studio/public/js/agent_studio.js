$(document).ready(function () {
  
    function loadPage(url, push = true) {
        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);

                // Only push to history when explicitly allowed
                if (push) {
                    history.pushState({ path: url }, '', url);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    // Save the current page as initial state
    if (!history.state) {
        history.replaceState({ path: window.location.pathname }, '', window.location.pathname);
    }

    // Attach click handlers dynamically
    const menuLinks = [
        { selector: "#agent_studio", url: "/studio/agent/overview" },
        { selector: "#sidebar-menu-item-agent-studio-overview", url: "/studio/agent/overview" },
        { selector: "#sidebar-menu-item-agent-studio-projects", url: "/studio/agent/projects" },
        { selector: "#sidebar-menu-item-agent-studio-components", url: "/studio/agent/components" },
        { selector: "#sidebar-menu-item-agent-studio-flow-deployment", url: "/studio/agent/flow_deployment" },
        { selector: "#sidebar-menu-item-agent-studio-comp-deployment", url: "/studio/agent/component_deployment" },
        { selector: "#sidebar-menu-item-agent-studio-observability", url: "/studio/agent/observability" },
        { selector: "#sidebar-menu-item-user-management", url: "/studio/agent/manage_users" },
        { selector: "#sidebar-menu-item-file-manager", url: "/studio/agent/file_manager" },
        { selector: "#sidebar-menu-item-audit-trail", url: "/studio/agent/audit_trail" },
        { selector: "#sidebar-menu-item-key-vault", url: "/studio/agent/key_vault" },
        { selector: "#sidebar-menu-item-support", url: "/studio/agent/support" },
        { selector: "#sidebar-menu-item-subscription-plans", url: "/studio/agent/subscription_plans" },
        { selector: "#sidebar-menu-item-billing", url: "/studio/agent/billing" },
        { selector: "#sidebar-menu-item-faqs", url: "/studio/agent/faqs" }
    ];

    menuLinks.forEach(link => {
        $(link.selector).on("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            loadPage(link.url, true);
        });
    });

    // Back/forward button handler
    window.addEventListener("popstate", function (event) {
        if (event.state && event.state.path) {
            loadPage(event.state.path, false);
        }
    });
});
