<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentStudioObservabilityController extends Controller
{
    public function observability_wallet_usage()
    {
        return view('components_for_agent_studio.observability-wallet-usage');
    }

    public function observability_projects()
    {
        return view('components_for_agent_studio.observability-projects');
    }

    public function observability_key_credentials()
    {
        return view('components_for_agent_studio.observability-key-credentials');
    }

    public function observability_component_deployments()
    {
        return view('components_for_agent_studio.observability-component-deployments');
    }

    public function root_and_users()
    {
        return view('components_for_agent_studio.observability-root-and-users');
    }

    public function company_summary()
    {
        return view('components_for_agent_studio.observability-company-summary');
    }
}
