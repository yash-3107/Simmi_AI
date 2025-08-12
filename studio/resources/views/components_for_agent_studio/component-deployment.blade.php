<link rel="stylesheet" href="{{asset('/agent_studio_css/component-deployment-deployed-components.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/component-deployment-ready-to-deploy-components.css')}}">
<main class="flex-1 
px-6 pt-4" style="height:90vh !important;overflow: scroll; width: 80vw;">
  <div id="flow-deployment-index-container" class="space-y-3">
    <div class="flex text-2xl gap-3 items-center" id="components-index-breadcrumbs-container"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-box w-5 h-5"
        aria-hidden="true" data-testid="icon-box" style="stroke-width: 1.5;">
        <path
          d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z">
        </path>
        <path d="m3.3 7 8.7 5 8.7-5"></path>
        <path d="M12 22V12"></path>
      </svg>
      <nav class="MuiTypography-root MuiTypography-body1 MuiBreadcrumbs-root text-lg css-o3d33y"
        id="components-index-breadcrumbs">
        <ol class="MuiBreadcrumbs-ol css-nhb8h9">
          <li class="MuiBreadcrumbs-li">
            <div class="text-foreground capitalize max-w-96 truncate" id="components-index-breadcrumbs-0">Component
              deployment</div>
          </li>
        </ol>
      </nav>
    </div>
    <div id="component-deployment-main-container">
      <div id="component-deployment-header-container" class="flex items-center justify-between gap-10">
        <div class="space-y-2">
          <div id="component-deployment-header-container-display-text" class="text-muted-foreground text-sm">Deploy and
            monitor your components. Build scalable applications with reusable components and microservice architecture
          </div>
        </div>
      </div>
      <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-3"></div>
      <div>
        <div dir="ltr" data-orientation="horizontal" class="space-y-4">
          <div role="tablist" aria-orientation="horizontal"
            class="inline-flex h-9 items-center justify-center rounded-lg bg-muted p-1 text-muted-foreground"
            tabindex="0" data-orientation="horizontal" style="outline: none;"><button type="button" role="tab"
              aria-selected="true" aria-controls="radix-:ra:-content-deployed" data-state="active"
              id="deployed_components"
              class="inline-flex tab-button items-center justify-center whitespace-nowrap rounded-md py-1 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow px-6"
              tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Deployed</button><button
              type="button" role="tab" aria-selected="false" aria-controls="radix-:ra:-content-ready-to-deploy"
              data-state="inactive" id="ready_to_deploy_components"
              class="inline-flex items-center tab-button justify-center whitespace-nowrap rounded-md py-1 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow px-6"
              tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Ready to Deploy</button></div>
          <div id="component_list">
            <div class="space-y-4">
              <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold">Deployed Components</h2>
                <div class="flex items-center gap-4"></div>
              </div>
              <div>
                <div class="w-full flex items-center justify-center">
                  <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 max-w-5xl items-center justify-center">
                    <div class="h-96 w-full flex justify-center col-span-2"><img
                        src="https://vanij.adya.ai/assets/DeployedComponents-C_XGgCoD.webp"
                        alt="Let's Start by Deploying Your First Component" class="h-full w-full object-contain"
                        draggable="false"></div>
                    <div class="col-span-3 flex flex-col gap-y-12">
                      <div class="flex flex-col gap-y-4">
                        <h1 class="text-foreground font-semibold text-xl">Let's Start by Deploying Your First Component
                        </h1>
                        <p class="text-sm text-foreground/50">You currently have no deployed components. Begin by
                          deploying your first component to make it available in this environment.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
          aria-labelledby="radix-:ra:-trigger-ready-to-deploy" hidden="" id="radix-:ra:-content-ready-to-deploy"
          tabindex="0"
          class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<script src="js/agent_studio_sub_tabs/component_deployment.js"></script>