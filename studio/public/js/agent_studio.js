$(document).ready(function () {
  $("#agent_studio").on("click", function () {
      $.ajax({
          url: "/studio/agent/overview",
          method: "GET", // default is 'GET'
          success: function (response) {
              
              console.log("Success:", response);
              $('#parent-main').html(response);
          },
          error: function (xhr, status, error) {
              // handle errors
              console.error("Error:", error);
          },
      });
  });
});

$(document).ready(function () {
  $("#sidebar-menu-item-agent-studio-overview").on("click", function (event) {
    event.preventDefault(); 
    event.stopPropagation();
      $.ajax({
          url: "/studio/agent/overview",
          method: "GET", // default is 'GET'
          success: function (response) {
              
              console.log("Success:", response);
              $('#parent-main').html(response);
          },
          error: function (xhr, status, error) {
              // handle errors
              console.error("Error:", error);
          },
      });
  });
});



$(document).ready(function () {
    $("#sidebar-menu-item-agent-studio-projects").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
  
      $.ajax({
        url: "/studio/agent/projects",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-agent-studio-components").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/components",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-agent-studio-flow-deployment").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/flow_deployment",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-agent-studio-comp-deployment").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/component_deployment",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-agent-studio-observability").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/observability",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-user-management").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/manage_users",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-file-manager").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/file_manager",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-audit-trail").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/audit_trail",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-key-vault").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/key_vault",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-support").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/support",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-subscription-plans").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/subscription_plans",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-billing").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/billing",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });

  $(document).ready(function () {
    $("#sidebar-menu-item-faqs").on("click", function (event) {
      event.preventDefault(); 
      event.stopPropagation();
      $.ajax({
        url: "/studio/agent/faqs",
        method: "GET",
        success: function (response) {
          console.log("Success:", response);
          $('#parent-main').html(response);
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });
    });
  });
  
