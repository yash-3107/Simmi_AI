<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentStudioProjectsController extends Controller
{
    public function ai_flight_assistant_system()
    {
        return view('components_for_agent_studio.projects_sub_pages.ai_flight_assistant_system');
    }

    public function basic_chatbot()
    {
        return view('components_for_agent_studio.projects_sub_pages.basic_chatbot');
    }

    public function bhashini()
    {
        return view('components_for_agent_studio.projects_sub_pages.bhashini');
    }

    public function buyer_app_copilot()
    {
        return view('components_for_agent_studio.projects_sub_pages.buyer_app_copilot');
    }

    public function email_and_sms()
    {
        return view('components_for_agent_studio.projects_sub_pages.email_and_sms');
    }

    public function image_blog_and_qa_generator()
    {
        return view('components_for_agent_studio.projects_sub_pages.image_blog_and_qa_generator');
    }

    public function language_advanced_chatbot()
    {
        return view('components_for_agent_studio.projects_sub_pages.language_advanced_chatbot');
    }

    public function multi_agent()
    {
        return view('components_for_agent_studio.projects_sub_pages.multi_agent');
    }

    public function recruitment_agent()
    {
        return view('components_for_agent_studio.projects_sub_pages.recruitment_agent');
    }

    public function simple_research_assistant()
    {
        return view('components_for_agent_studio.projects_sub_pages.simple_research_assistant');
    }
}
