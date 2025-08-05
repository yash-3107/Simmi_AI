
<main class="flex-1 
px-6 pt-4" style="height:90vh !important;overflow: scroll; width:auto;">
    <div id="flow-deployment-index-container" class="space-y-3">
        <div id="flow-deployment-main-container">
            <div id="flow-deployment-header-container" class="flex items-center justify-between gap-10">
                <div class="space-y-2">
                    <div id="flow-deployment-header-container-display-text" class="text-muted-foreground text-sm">Deploy
                        and monitor your apps. Bring your agents/ copilots to the end user with scalable microservice
                        architecture</div>
                    <div>
                        <div id="flow-deployment-environment-dropdown"
                            class="flex flex-col gap-1.5 w-64 rounded-md font-medium">
                            <div
                                class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon MuiAutocomplete-hasPopupIcon w-64 rounded-md font-medium css-ofh9r">
                                <div class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-1nx4p1j">
                                    <div
                                        class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedEnd MuiAutocomplete-inputRoot css-segi59">
                                        <input aria-invalid="false" autocomplete="off"
                                            id="flow-deployment-environment-dropdown-autocomplete"
                                            placeholder="Select Environment" type="text"
                                            class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall MuiInputBase-inputAdornedEnd MuiAutocomplete-input MuiAutocomplete-inputFocused css-b52kj1"
                                            aria-autocomplete="list" aria-expanded="false" autocapitalize="none"
                                            spellcheck="false" role="combobox" value="Both UAT and Production">
                                        <div class="MuiAutocomplete-endAdornment css-mxlkbn"><button
                                                class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium MuiAutocomplete-clearIndicator css-edpqz1"
                                                tabindex="-1" type="button" aria-label="Clear" title="Clear"><svg
                                                    class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-1k33q06"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="CloseIcon">
                                                    <path
                                                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                    </path>
                                                </svg><span
                                                    class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium MuiAutocomplete-popupIndicator css-uge3vf"
                                                tabindex="-1" type="button" aria-label="Open" title="Open"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-chevron-down h-4 w-4" aria-hidden="true">
                                                    <path d="m6 9 6 6 6-6"></path>
                                                </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                                        </div>
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
                        class="rounded-lg bg-app-studio-background p-3 border-primary/50 border space-y-3 w-52">
                        <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-folder-git2 lucide-folder-git-2" aria-hidden="true"
                                data-testid="icon-FolderGit2" style="stroke-width: 1.5;">
                                <path
                                    d="M9 20H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H20a2 2 0 0 1 2 2v5">
                                </path>
                                <circle cx="13" cy="12" r="2"></circle>
                                <path d="M18 19c-2.8 0-5-2.2-5-5v8"></path>
                                <circle cx="20" cy="19" r="2"></circle>
                            </svg>
                            <div class="text-sm font-semibold">Total Applications</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-semibold">0</div>
                        </div>
                    </div>
                    <div id="-custom-card"
                        class="rounded-lg bg-app-studio-background p-3 border-primary/50 border space-y-3 w-52">
                        <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket"
                                aria-hidden="true" data-testid="icon-rocket" style="stroke-width: 1.5;">
                                <path
                                    d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                </path>
                                <path
                                    d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                </path>
                                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                            </svg>
                            <div class="text-sm font-semibold">Total Apps Deployed</div>
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
                        class="inline-flex items-center justify-center gap-3" tabindex="0" data-orientation="horizontal"
                        style="outline: none;"><button type="button" role="tab" aria-selected="true"
                            aria-controls="radix-:r12:-content-deployed-app" data-state="active"
                            id="radix-:r12:-trigger-deployed-app"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md py-1.5 text-sm text-muted-foreground font-medium transition-all focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-primary data-[state=active]:text-background px-6"
                            title="" tabindex="-1" data-orientation="horizontal"
                            data-radix-collection-item="">Deployed</button><button type="button" role="tab"
                            aria-selected="false" aria-controls="radix-:r12:-content-apps-to-deploy"
                            data-state="inactive" id="radix-:r12:-trigger-apps-to-deploy"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md py-1.5 text-sm text-muted-foreground font-medium transition-all focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-primary data-[state=active]:text-background px-6"
                            title="" tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Apps to
                            Deploy</button></div>
                    <div data-state="active" data-orientation="horizontal" role="tabpanel"
                        aria-labelledby="radix-:r12:-trigger-deployed-app" id="radix-:r12:-content-deployed-app"
                        tabindex="0"
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                        style="">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <h2 class="text-xl font-semibold">Deployed Apps</h2>
                                </div>
                                <div class="flex items-center gap-4"></div>
                            </div>
                            <div>
                                <div class="w-full flex items-center justify-center">
                                    <div
                                        class="grid grid-cols-1 lg:grid-cols-5 gap-10 max-w-5xl items-center justify-center">
                                        <div class="h-96 w-full flex justify-center col-span-2"><img
                                                src="https://vanij.adya.ai/assets/DeployedApps-BARQ1kq6.webp"
                                                alt="Start Deploying Your Apps" class="h-full w-full object-contain"
                                                draggable="false"></div>
                                        <div class="col-span-3 flex flex-col gap-y-12">
                                            <div class="flex flex-col gap-y-4">
                                                <h1 class="text-foreground font-semibold text-xl">Start Deploying Your
                                                    Apps</h1>
                                                <p class="text-sm text-foreground/50">You currently have no deployed
                                                    apps. Begin by deploying your first app and start managing your apps
                                                    efficiently. Get started now and bring your ideas to life!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
                        aria-labelledby="radix-:r12:-trigger-apps-to-deploy" hidden=""
                        id="radix-:r12:-content-apps-to-deploy" tabindex="0"
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>