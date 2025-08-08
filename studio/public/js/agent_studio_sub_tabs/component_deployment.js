$(document).ready(function(){

  $('.tab-button').on('click', function(){
    $('.tab-button').attr('data-state', 'inactive').attr('aria-selected', false);
    $('.tab-content').hide();

    $(this).attr('data-state', 'active').attr('aria-selected', true);

    let url = $(this).attr('id') === "deployed_components" ?
      "/agent_studio/component_deployment/deployed_components" :
      "/agent_studio/component_deployment/ready_to_deploy_components";

    $.ajax({
      url: url,
      type: 'GET',
      success: function(res) {
        $('#component_list').html(res);
      },
      error: function(xhr, status, error) {
        console.error("Error loading data:", error);
      }
    })
  })
})