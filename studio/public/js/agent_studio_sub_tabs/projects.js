$(document).ready(function() {
    $("#card-0").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/ai_flight_assistant_system",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-1").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/basic_chatbot",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-2").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/bhashini",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-3").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/buyer_app_copilot",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-4").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/email_and_sms",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-5").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/image_blog_and_qa_generator",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-6").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/language_advanced_chatbot",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-7").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/multi_agent",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-8").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/recruitment_agent",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#card-9").on("click", function() {
       $.ajax({
          url: "/agent_studio/projects/simple_research_assistant",
          type: "GET",
          success: function(res) {
             $("#parent-main").html(res);
          }
       });
    })

    $("#all-projects-my-projects-grid-0-card-custom-card").on("click", function() {
      $.ajax({
         url: "/agent_studio/projects/my_project",
         type: "GET",
         success: function(res) {
            $("#parent-main").html(res);
         }
      });
   })
})