<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentStudioComponentDeploymentController extends Controller
{
    public function deployed_components()
    {
        return view('components_for_agent_studio.component-deployment-deployed-components');
    }

    public function ready_to_deploy_components()
    {
        return view('components_for_agent_studio.component-deployment-ready-to-deploy-components');
    }
}
