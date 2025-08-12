$(document).ready(function(){

  $('.tab-button').on('click', function(){
    $('.tab-button').attr('data-state', 'inactive').attr('aria-selected', false);
    $('.tab-content').hide();

    $(this).attr('data-state', 'active').attr('aria-selected', true);

    let url = $(this).attr('id') === "root_and_users" ?
      '/agent_studio/observability/root_and_users' : '/agent_studio/observability/company_summary';

    
    console.log("URL:", url);

    $.ajax({
      url: url,
      type: 'GET',
      success: function(res) {
        $('#observability_sub_component_list').html(res);
      },
      error: function(xhr, status, error) {
        console.error("Error loading data:", error);
      }
    })
  })
})