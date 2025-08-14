$(document).ready(function () {

    function loadPage(url, push = true) {
        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                $('#parent-main').html(response);

                // Only push state if explicitly allowed AND it's different
                if (push && (!history.state || history.state.path !== url)) {
                    history.pushState({ path: url }, '', url);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    }

    // Save initial state if not set
    if (!history.state) {
        history.replaceState({ path: window.location.pathname }, '', window.location.pathname);
    }

    // Menu link definitions
    const menuLinks = [
        { selector: "#card-0", url: "/agent_studio/projects/ai_flight_assistant_system" },
        { selector: "#card-1", url: "/agent_studio/projects/basic_chatbot" },
        { selector: "#card-2", url: "/agent_studio/projects/bhashini" },
        { selector: "#card-3", url: "/agent_studio/projects/buyer_app_copilot" },
        { selector: "#card-4", url: "/agent_studio/projects/email_and_sms" },
        { selector: "#card-5", url: "/agent_studio/projects/image_blog_and_qa_generator" },
        { selector: "#card-6", url: "/agent_studio/projects/language_advanced_chatbot" },
        { selector: "#card-7", url: "/agent_studio/projects/multi_agent" },
        { selector: "#card-8", url: "/agent_studio/projects/recruitment_agent" },
        { selector: "#card-9", url: "/agent_studio/projects/simple_research_assistant" },
        { selector: "#all-projects-my-projects-grid-0-card-custom-card", url: "/agent_studio/projects/my_project" }
    ];

    // Attach click handlers
    menuLinks.forEach(link => {
        $(link.selector).on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            loadPage(link.url, true);
        });
    });

    // Back/forward button handler
    window.addEventListener("popstate", function (event) {
        if (event.state && event.state.path) {
            loadPage(event.state.path, false); // NEVER push state here
        }
    });

});
