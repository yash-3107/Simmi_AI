<link rel="stylesheet" href="{{asset('/agent_studio_css/flow-deployment-all-projects.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/flow-deployment-deployed-projects.css')}}">
<main class="flex-1 
px-6 pt-4" style="height:90vh !important;overflow: scroll;">
  <div id="flow-deployment-index-container" class="space-y-3">
    <div class="flex text-2xl gap-3 items-center" id="components-index-breadcrumbs-container"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-workflow w-5 h-5"
        aria-hidden="true" data-testid="icon-workflow" style="stroke-width: 1.5;">
        <rect width="8" height="8" x="3" y="3" rx="2"></rect>
        <path d="M7 11v4a2 2 0 0 0 2 2h4"></path>
        <rect width="8" height="8" x="13" y="13" rx="2"></rect>
      </svg>
      <nav class="MuiTypography-root MuiTypography-body1 MuiBreadcrumbs-root text-lg css-o3d33y"
        id="components-index-breadcrumbs">
        <ol class="MuiBreadcrumbs-ol css-nhb8h9">
          <li class="MuiBreadcrumbs-li">
            <div class="text-foreground capitalize max-w-96 truncate" id="components-index-breadcrumbs-0">Flow
              deployment</div>
          </li>
        </ol>
      </nav>
    </div>
    <div id="flow-deployment-main-container">
      <div id="flow-deployment-header-container" class="flex items-center justify-between gap-10">
        <div class="space-y-2">
          <div id="flow-deployment-header-container-display-text" class="text-muted-foreground text-sm">Deploy and
            monitor your flows. Bring your agents/ copilots to the end user with scalable microservice architecture
          </div>
          <div>
            <div id="flow-deployment-environment-dropdown" class="flex flex-col gap-1.5 w-64 rounded-md font-medium">
              <div
                class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon MuiAutocomplete-hasPopupIcon w-64 rounded-md font-medium css-ofh9r">
                <div class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-1nx4p1j">
                  <div
                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedEnd MuiAutocomplete-inputRoot css-segi59">
                    <select id="flow-deployment-environment-dropdown-autocomplete" name="environment"
                      class="mui-style-select">
                      <option value="both">Both UAT and Production</option>
                      <option value="production">Production</option>
                      <option value="uat">UAT</option>
                    </select>

                    <div class="MuiAutocomplete-endAdornment css-mxlkbn"></div>
                    <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                      <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex items-center justify-between gap-4">
          <div id="-custom-card"
            class="rounded-lg bg-agent-studio-background p-3 border-primary/50 border space-y-3 w-52">
            <div class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-folder-git2 lucide-folder-git-2  w-5 h-5"
                aria-hidden="true" data-testid="icon-FolderGit2" style="stroke-width: 1.5;">
                <path
                  d="M9 20H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H20a2 2 0 0 1 2 2v5">
                </path>
                <circle cx="13" cy="12" r="2"></circle>
                <path d="M18 19c-2.8 0-5-2.2-5-5v8"></path>
                <circle cx="20" cy="19" r="2"></circle>
              </svg>
              <div class="text-sm font-semibold">Total Projects</div>
            </div>
            <div class="flex items-center justify-between">
              <div class="text-xl font-semibold">1</div>
            </div>
          </div>
          <div id="-custom-card"
            class="rounded-lg bg-agent-studio-background p-3 border-primary/50 border space-y-3 w-52">
            <div class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-workflow  w-5 h-5" aria-hidden="true"
                data-testid="icon-workflow" style="stroke-width: 1.5;">
                <rect width="8" height="8" x="3" y="3" rx="2"></rect>
                <path d="M7 11v4a2 2 0 0 0 2 2h4"></path>
                <rect width="8" height="8" x="13" y="13" rx="2"></rect>
              </svg>
              <div class="text-sm font-semibold">Total Flows</div>
            </div>
            <div class="flex items-center justify-between">
              <div class="text-xl font-semibold">1</div>
            </div>
          </div>
          <div id="-custom-card"
            class="rounded-lg bg-agent-studio-background p-3 border-primary/50 border space-y-3 w-52">
            <div class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-rocket  w-5 h-5" aria-hidden="true"
                data-testid="icon-rocket" style="stroke-width: 1.5;">
                <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                </path>
                <path
                  d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                </path>
                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
              </svg>
              <div class="text-sm font-semibold">Total Flows Deployed</div>
            </div>
            <div class="flex items-center justify-between">
              <div class="text-xl font-semibold">0</div>
            </div>
          </div>
        </div>
      </div>
      <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full my-5"></div>
      <div>
        <div dir="ltr" data-orientation="horizontal" class="space-y-4">
          <div role="tablist" aria-orientation="horizontal"
            class="inline-flex h-9 items-center justify-center rounded-lg bg-muted p-1 text-muted-foreground"
            tabindex="0" data-orientation="horizontal" style="outline: none;"><button type="button" role="tab"
              aria-selected="true" aria-controls="radix-:r3j:-content-deployed" data-state="active"
              id="deployed_projects"
              class="inline-flex items-center tab-button justify-center whitespace-nowrap rounded-md py-1 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow px-6"
              tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Deployed</button><button
              type="button" role="tab" aria-selected="false" aria-controls="radix-:r3j:-content-ready-to-deploy"
              data-state="inactive" id="all_projects"
              class="inline-flex items-center tab-button justify-center whitespace-nowrap rounded-md py-1 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow px-6"
              tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">All Projects</button></div>

          <div id="flow-deployment-projects-list-container">
            <div class="space-y-4">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                  <h2 id="flow-deployment-deployed-projects-list-title" class="text-xl font-semibold">Deployed projects
                  </h2>

                  <div id="badge-container" class="flex items-center gap-2"></div>
                </div>
                <div class="flex items-center gap-4"></div>
              </div>
              <div>
                <div class="w-full flex items-center justify-center">
                  <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 max-w-5xl items-center justify-center">
                    <div class="h-96 w-full flex justify-center col-span-2"><img
                        src="https://vanij.adya.ai/assets/FlowDeployment-7ZgvS6yK.webp"
                        alt="Let's Start by Deploying Your First Project" class="h-full w-full object-contain"
                        draggable="false"></div>
                    <div class="col-span-3 flex flex-col gap-y-12">
                      <div class="flex flex-col gap-y-4">
                        <h1 class="text-foreground font-semibold text-xl">Let's Start by Deploying Your First Project
                        </h1>
                        <p class="text-sm text-foreground/50">You currently have no deployed flows. Begin by deploying
                          your first flow to make it available in this environment.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
            aria-labelledby="radix-:r3j:-trigger-ready-to-deploy" hidden="" id="radix-:r3j:-content-ready-to-deploy"
            tabindex="0"
            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="{{ asset('js/agent_studio_sub_tabs/flow_deployment.js') }}"></script>