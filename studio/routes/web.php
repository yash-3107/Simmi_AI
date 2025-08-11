<?php

use App\Http\Controllers\AppStudioController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\AgentStudioController;
use App\Http\Controllers\AgentStudioFlowDeploymentController;
use App\Http\Controllers\AgentStudioComponentDeploymentController;
use App\Http\Controllers\AgentStudioObservabilityController;
use App\Http\Controllers\AgentStudioProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//sidebar-main routes
Route::get('/app_studio1', [SidebarController::class, 'app_studio']);
Route::get('/agent_studio', [SidebarController::class, 'agent_studio']);
Route::get('/sidebar_home', [SidebarController::class, 'sidebar_home']);
//Agent Studio Module
Route::get('/studio/agent/overview', [AgentStudioController::class, 'overview']);
Route::get('/studio/agent/projects', [AgentStudioController::class, 'projects']);
Route::get('/studio/agent/components', [AgentStudioController::class, 'components']);
Route::get('/studio/agent/flow_deployment', [AgentStudioController::class, 'flow_deployment']);
Route::get('/studio/agent/component_deployment', [AgentStudioController::class, 'component_deployment']);
Route::get('/studio/agent/observability', [AgentStudioController::class, 'observability']);
Route::get('/studio/agent/manage_users', [AgentStudioController::class, 'manage_users']);
Route::get('/studio/agent/file_manager', [AgentStudioController::class, 'file_manager']);
Route::get('/studio/agent/audit_trail', [AgentStudioController::class, 'audit_trail']);
Route::get('/studio/agent/key_vault', [AgentStudioController::class, 'key_vault']);
Route::get('/studio/agent/support', [AgentStudioController::class, 'support']);
Route::get('/studio/agent/subscription_plans', [AgentStudioController::class, 'subscription_plans']);
Route::get('/studio/agent/billing', [AgentStudioController::class, 'billing']);
Route::get('/studio/agent/faqs', [AgentStudioController::class, 'faqs']);
Route::get('/agent_studio/flow_deployment/all_projects', [AgentStudioFlowDeploymentController::class, 'all_projects']);
Route::get('/agent_studio/flow_deployment/deployed_projects', [AgentStudioFlowDeploymentController::class, 'deployed_projects']);
Route::get('/agent_studio/component_deployment/ready_to_deploy_components', [AgentStudioComponentDeploymentController::class, 'ready_to_deploy_components']);
Route::get('/agent_studio/component_deployment/deployed_components', [AgentStudioComponentDeploymentController::class, 'deployed_components']);
Route::get('/agent_studio/observability/observability_wallet_usage', [AgentStudioObservabilityController::class, 'observability_wallet_usage']);
Route::get('/agent_studio/observability/observability_projects', [AgentStudioObservabilityController::class, 'observability_projects']);
Route::get('/agent_studio/observability/observability_key_credentials', [AgentStudioObservabilityController::class, 'observability_key_credentials']);
Route::get('/agent_studio/observability/observability_component_deployments', [AgentStudioObservabilityController::class, 'observability_component_deployments']);
Route::get('/agent_studio/observability/root_and_users', [AgentStudioObservabilityController::class, 'root_and_users']);
Route::get('/agent_studio/observability/company_summary', [AgentStudioObservabilityController::class, 'company_summary']);
Route::get('/agent_studio/projects/ai_flight_assistant_system', [AgentStudioProjectsController::class, 'ai_flight_assistant_system']);
Route::get('/agent_studio/projects/basic_chatbot', [AgentStudioProjectsController::class, 'basic_chatbot']);
Route::get('/agent_studio/projects/bhashini', [AgentStudioProjectsController::class, 'bhashini']);
Route::get('/agent_studio/projects/buyer_app_copilot', [AgentStudioProjectsController::class, 'buyer_app_copilot']);
Route::get('/agent_studio/projects/email_and_sms', [AgentStudioProjectsController::class, 'email_and_sms']);
Route::get('/agent_studio/projects/image_blog_and_qa_generator', [AgentStudioProjectsController::class, 'image_blog_and_qa_generator']);
Route::get('/agent_studio/projects/language_advanced_chatbot', [AgentStudioProjectsController::class, 'language_advanced_chatbot']);
Route::get('/agent_studio/projects/multi_agent', [AgentStudioProjectsController::class, 'multi_agent']);
Route::get('/agent_studio/projects/recruitment_agent', [AgentStudioProjectsController::class, 'recruitment_agent']);
Route::get('/agent_studio/projects/simple_research_assistant', [AgentStudioProjectsController::class, 'simple_research_assistant']);
Route::get('/agent_studio/projects/my_project', [AgentStudioProjectsController::class, 'my_project']);


//App studio module
Route::get('/studio/app/overview', [AppStudioController::class, 'overview']);
Route::get('/studio/app/overview', [AppStudioController::class, 'overview']);
Route::get('/studio/app/apps', [AppStudioController::class, 'apps']);
Route::get('/studio/app/deployments', [AppStudioController::class, 'deployments']);
Route::get('/studio/app/observability', [AppStudioController::class, 'observability']);
Route::get('/studio/app/manage-users', [AppStudioController::class, 'manageUsers']);
Route::get('/studio/app/file-manager', [AppStudioController::class, 'fileManager']);
Route::get('/studio/app/audit-trail', [AppStudioController::class, 'auditTrail']);
Route::get('/studio/app/key-vault', [AppStudioController::class, 'keyVault']);
Route::get('/studio/app/support', [AppStudioController::class, 'support']);
Route::get('/studio/app/subscription-plans', [AppStudioController::class, 'subscriptionPlans']);
Route::get('/studio/app/billing', [AppStudioController::class, 'billing']);
Route::get('/studio/app/faqs', [AppStudioController::class, 'faqs']);
