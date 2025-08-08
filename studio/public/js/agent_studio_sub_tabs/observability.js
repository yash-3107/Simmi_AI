$(document).ready(function(){

  $('.tab-button').on('click', function(){
    $('.tab-button').attr('data-state', 'inactive').attr('aria-selected', false);
    $('.tab-content').hide();

    $(this).attr('data-state', 'active').attr('aria-selected', true);

    let url = $(this).attr('id') === "observability_wallet_usage" ?
      '/agent_studio/observability/observability_wallet_usage' : $(this).attr('id') === "observability_projects" ? 
      '/agent_studio/observability/observability_projects' : $(this).attr('id') === "obervability_key_credentials" ?
      '/agent_studio/observability/observability_key_credentials' : '/agent_studio/observability/observability_component_deployments';
    
    console.log("URL:", url);

    $.ajax({
      url: url,
      type: 'GET',
      success: function(res) {
        $('#observability_component_list').html(res);
      },
      error: function(xhr, status, error) {
        console.error("Error loading data:", error);
      }
    })
  })
})