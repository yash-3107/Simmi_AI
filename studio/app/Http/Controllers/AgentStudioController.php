<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentStudioController extends Controller
{
    public function overview()
    {

        if (request()->ajax()) {
            // Return only the partial content for AJAX
            return view('components_for_agent_studio.overview')->render();
        }

        // On normal browser load, return the full parent blade with CSS included
        return view('index', [
            'content' => view('components_for_agent_studio.overview')
        ]);
    }

    public function projects()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.projects')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.projects')->render()
        ]);
    }

    public function components()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.components')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.components')->render()
        ]);
    }

    public function flow_deployment()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.flow-deployment')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.flow-deployment')->render()
        ]);
    }

    public function component_deployment()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.component-deployment')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.component-deployment')->render()
        ]);
    }

    public function observability()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.observability')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.observability')->render()
        ]);
    }

    public function manage_users()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.manage-users')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.manage-users')->render()
        ]);
    }

    public function file_manager()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.file-manager')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.file-manager')->render()
        ]);
    }

    public function audit_trail()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.audit-trail')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.audit-trail')->render()
        ]);
    }

    public function key_vault()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.key-vault')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.key-vault')->render()
        ]);
    }

    public function support()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.support')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.support')->render()
        ]);
    }

    public function subscription_plans()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.subscription-plans')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.subscription-plans')->render()
        ]);
    }

    public function billing()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.billing')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.billing')->render()
        ]);
    }

    public function faqs()
    {
        if (request()->ajax()) {
            return view('components_for_agent_studio.faqs')->render();
        }

        return view('index', [
            'content' => view('components_for_agent_studio.faqs')->render()
        ]);
    }
}
