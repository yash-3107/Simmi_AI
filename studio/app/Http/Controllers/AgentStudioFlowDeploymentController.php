<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentStudioFlowDeploymentController extends Controller
{
    public function all_projects()
    {

        return view('components_for_agent_studio.flow-deployment-all-projects');
    }

    public function deployed_projects()
    {
        return view('components_for_agent_studio.flow-deployment-deployed-projects');
    }
}
