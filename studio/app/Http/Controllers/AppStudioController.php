<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppStudioController extends Controller
{
    public function overview()
    {
        return view('components_for_app_studio.overview');
    }

    public function apps()
    {
        return view('components_for_app_studio.app');
    }

    public function deployments()
    {
        return view('components_for_app_studio.app_deployments');
    }

    public function observability()
    {
        return view('components_for_app_studio.observability');
    }

    public function manageUsers()
    {
        return view('components_for_app_studio.manage_users');
    }

    public function fileManager()
    {
        return view('components_for_app_studio.file_manager');
    }

    public function auditTrail()
    {
        return view('components_for_app_studio.audit_trails');
    }

    public function keyVault()
    {
        return view('components_for_app_studio.key_vault');
    }

    public function support()
    {
        return view('components_for_app_studio.support');
    }

    public function subscriptionPlans()
    {
        return view('components_for_app_studio.subscription_plans');
    }

    public function billing()
    {
        return view('components_for_app_studio.billings');
    }

    public function faqs()
    {
        return view('components_for_app_studio.faqs');
    }
}
