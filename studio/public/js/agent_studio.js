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
          modal_popup();
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
  



  // --- Function to make the newly loaded form interactive ---
// This function sets up all the event listeners for the modal's content.
// function setupInteractiveModal() {
//   const parentContainer = $("#app-studio-parent-main");
//   $('#team-members-app-studio-app').hide();
//   // --- Logic for App Template Dropdown ---
//   // Use a wrapper ID to handle clicks on the input or the arrow.
//   parentContainer.on('click', '#my-apps-create-app-template-autocomplete-wrapper', function() {
//       const container = $(this);
      
//       // If dropdown already exists, remove it and do nothing else.
//       if (container.find('.autocomplete-dropdown').length > 0) {
//           container.find('.autocomplete-dropdown').remove();
//           return;
//       }

//       // Create and show the dropdown
//       const dropdown = $('<div class="autocomplete-dropdown"></div>');
//       const options = ['ReactJS', 'NextJS'];

//       options.forEach(optionText => {
//           const item = $('<div class="autocomplete-item"></div>').text(optionText);
//           item.on('click', function(event) {
//               event.stopPropagation(); // Prevents the document-level click handler from firing
//               container.find('input').val(optionText); // Set the input value
//               dropdown.remove(); // Close the dropdown
//           });
//           dropdown.append(item);
//       });
//       container.append(dropdown);
//   });

//   // --- Logic for Radio Card Selection (Agent Approach & Privacy) ---
//   parentContainer.on('click', 'label[id$="-card"]', function() {
//       const clickedCard = $(this);
//       if (clickedCard.attr('id') == 'my-apps-create-app-access-type-private-to-members-card'){
//           $('#team-members-app-studio-app').show();
//           console.log('clicked any card!!!!!!');
          
//       }
//       else{
//           $('#team-members-app-studio-app').hide();
//       }
//       const radioGroup = clickedCard.closest('[role="radiogroup"]');

//       // De-select all cards in the same group and remove the 'is-selected' class
//       radioGroup.find('label').removeClass('border-primary bg-primary/10 is-selected').addClass('border-gray-200');
      
//       // Select the clicked card and add the 'is-selected' class (which shows the icon via CSS)
//       clickedCard.addClass('border-primary bg-primary/10 is-selected').removeClass('border-gray-200');
      
//       // Ensure the underlying radio input is checked for form submission
//       clickedCard.find('input[type="radio"]').prop('checked', true);
//   });

//   // --- Close dropdown if clicking anywhere else on the page ---
//   $(document).on('click', function(event) {
//       if (!$(event.target).closest('#my-apps-create-app-template-autocomplete-wrapper').length) {
//           $('.autocomplete-dropdown').remove();
//       }
//   });
// }


// --- Function to hide the modal and initialize it ---
// This is the main function you call after your AJAX call succeeds.
function modal_popup() {
  const modal = $('#parent-main .MuiModal-root');
  if (modal.length) {
      modal.hide();
      // After hiding the modal, set up all its interactive elements.
      // setupInteractiveModal();
  } else {
      console.warn("modal_popup() was called, but no modal was found.");
  }
}

