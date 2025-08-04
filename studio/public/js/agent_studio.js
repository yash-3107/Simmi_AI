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
  $("#overview").on("click", function (event) {
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
    $("#projects").on("click", function (event) {
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
    $("#components").on("click", function (event) {
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
    $("#flow_deployment").on("click", function (event) {
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
    $("#component_deployment").on("click", function (event) {
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
    $("#observability").on("click", function (event) {
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
    $("#manage_users").on("click", function (event) {
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
    $("#file_manager").on("click", function (event) {
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
    $("#audit_trail").on("click", function (event) {
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
    $("#key_vault").on("click", function (event) {
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
    $("#support").on("click", function (event) {
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
    $("#subscription_plans").on("click", function (event) {
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
    $("#billing").on("click", function (event) {
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
    $("#faqs").on("click", function (event) {
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
  
