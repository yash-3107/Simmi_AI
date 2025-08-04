<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentStudioController extends Controller
{
    public function overview()
    {
        return view('components_for_agent_studio.overview');
    }

    public function projects()
    {
        return view('components_for_agent_studio.projects');
    }

    public function components()
    {
        return view('components_for_agent_studio.components');
    }

    public function flow_deployment()
    {
        return view('components_for_agent_studio.flow-deployment');
    }

    public function component_deployment()
    {
        return view('components_for_agent_studio.component-deployment');
    }

    public function observability()
    {
        return view('components_for_agent_studio.observability');
    }

    public function manage_users()
    {
        return view('components_for_agent_studio.manage-users');
    }

    public function file_manager()
    {
        return view('components_for_agent_studio.file-manager');
    }

    public function audit_trail()
    {
        return view('components_for_agent_studio.audit-trail');
    }

    public function key_vault()
    {
        return view('components_for_agent_studio.key-vault');
    }

    public function support()
    {
        return view('components_for_agent_studio.support');
    }

    public function subscription_plans()
    {
        return view('components_for_agent_studio.subscription-plans');
    }

    public function billing()
    {
        return view('components_for_agent_studio.billing');
    }

    public function faqs()
    {
        return view('components_for_agent_studio.faqs');
    }
}
