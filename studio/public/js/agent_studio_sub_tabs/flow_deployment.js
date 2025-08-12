$(document).ready(function() {
  $('.tab-button').on('click', function() {
    // Remove active state from all buttons
    $('.tab-button').attr('data-state', 'inactive').attr('aria-selected', 'false');

    // Hide all tab contents
    $('.tab-content').hide();

    // Add active state to clicked button
    $(this).attr('data-state', 'active').attr('aria-selected', 'true');

    // Determine which tab is clicked
    let url = $(this).attr('id') === "deployed_projects" ?
      "/agent_studio/flow_deployment/deployed_projects" :
      "/agent_studio/flow_deployment/all_projects";

    $.ajax({
      url: url,
      type: 'GET',
      success: function(res) {
        $('#flow-deployment-projects-list-container').html(res);
      },
      error: function(xhr, status, error) {
        console.error("Error loading data:", error);
      }
    });
  });
});


$(document).ready(function () {
  $('#flow-deployment-environment-dropdown-autocomplete').on('change', function () {
    const value = $(this).val();
    const $container = $('#badge-container');
    $container.empty(); // Clear existing badge(s)

    if (value === 'uat') {
      $container.append(`
        <div class="inline-flex items-center rounded-md px-2.5 py-0.5 text-xs font-semibold transition-colors bg-green-100 text-green-700 border border-green-200">
          UAT
        </div>
      `);
    } else if (value === 'production') {
      $container.append(`
        <div class="inline-flex items-center rounded-md px-2.5 py-0.5 text-xs font-semibold transition-colors bg-green-100 text-green-700 border border-green-200">
          PRODUCTION
        </div>
      `);
    }
    // No badge for 'both'
  });
});



