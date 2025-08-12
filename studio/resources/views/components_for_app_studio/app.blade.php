{{-- All CSS files and JS files linked to this component specifically --}}
<link rel="stylesheet" href="/app_studio_css/app-modal-popup.css">
<link rel="stylesheet" href="/app_studio_css/app-dropdown.css">
<script src="/js/app_studio_sub_tabs/app-modal-popup.js"></script>
<script src="/js/app_studio_sub_tabs/app-dropdown.js"></script>
<script src="/js/app_studio_sub_tabs/app-modal.js"></script>

{{-- Main content on clicking the app button in app studio --}}
<main class="flex-1 
px-6 pt-4" style="height:90vh !important;overflow: scroll; width: 80vw;">
  <div class="flex flex-col w-full">
    <div class="space-y-6">
      <div class="flex flex-col gap-y-6 w-full ">
        <div class="px-10 py-8 rounded-2xl w-full"
          style="background-image: url(&quot;https://vanij.adya.ai/assets/AppGradientBG2-DmxCex-m.svg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; background-color: rgb(255, 218, 185);">
          <div class="w-full space-y-6">
            <div class="flex justify-between items-center">
              <div class="space-y-2 max-w-lg">
                <h1 class="text-2xl font-bold" style="opacity: 1; transform: none;">Prebuilt Applications</h1>
                <p class="text-sm font-medium">Get started quickly with these prebuilt applications. Clone and customize
                  to fit your needs.</p>
              </div>
            </div>
            <div class="relative group"><button
                class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 dark:bg-gray-800/80 rounded-full p-2 shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white dark:hover:bg-gray-700"
                aria-label="Scroll left" style="transform: translate(-50%, -50%);"><svg
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-chevron-left w-5 h-5" aria-hidden="true" data-testid="icon-chevron-left"
                  style="stroke-width: 1.5;">
                  <path d="m15 18-6-6 6-6"></path>
                </svg></button><button
                class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 dark:bg-gray-800/80 rounded-full p-2 shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white dark:hover:bg-gray-700"
                aria-label="Scroll right" style="transform: translate(50%, -50%);"><svg
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-chevron-right w-5 h-5" aria-hidden="true" data-testid="icon-chevron-right"
                  style="stroke-width: 1.5;">
                  <path d="m9 18 6-6-6-6"></path>
                </svg></button>
              <div class="flex gap-4 overflow-x-auto scrollbar-hide p-2 pb-2"
                id="appstudio-prebuilt-applications-scroll-view" style="scrollbar-width: none; cursor: grab;">
                <div class="min-w-[280px] max-w-[280px] flex-shrink-0">
                  <div
                    class=" border border-orange-100 bg-white/50 backdrop-blur rounded-lg shadow-sm overflow-hidden h-full hover:shadow-md transition-shadow duration-200">
                    <div class="p-4 flex flex-col h-full">
                      <div class="flex-grow">
                        <div class="flex items-start justify-between">
                          <h3 class="text-lg text-shadow-lg font-semibold text-gray-900 dark:text-white mb-2 truncate"
                            title="Fly Easy">Fly Easy</h3>
                          <div class="menu-component"><button
                              class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall css-1j7qk7u"
                              tabindex="0" type="button" id="radix-:r3d:" aria-haspopup="menu" aria-expanded="false"
                              data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-ellipsis-vertical h-4 w-4" data-state="closed">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                              </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 line-clamp-3 mb-2"
                          title="User-friendly web app that lets you search, compare, and book flights instantly. Enjoy seamless booking, real-time updates, and exclusive travel deals all in one place.">
                          User-friendly web app that lets you search, compare, and book flights instantly. Enjoy
                          seamless booking, real-time updates, and exclusive travel deals all in one place.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="min-w-[280px] max-w-[280px] flex-shrink-0">
                  <div
                    class=" border border-orange-100 bg-white/50 backdrop-blur rounded-lg shadow-sm overflow-hidden h-full hover:shadow-md transition-shadow duration-200">
                    <div class="p-4 flex flex-col h-full">
                      <div class="flex-grow">
                        <div class="flex items-start justify-between">
                          <h3 class="text-lg text-shadow-lg font-semibold text-gray-900 dark:text-white mb-2 truncate"
                            title="Dev Portfolio">Dev Portfolio</h3>
                          <div class="menu-component"><button
                              class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall css-1j7qk7u"
                              tabindex="0" type="button" id="radix-:r3g:" aria-haspopup="menu" aria-expanded="false"
                              data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-ellipsis-vertical h-4 w-4" data-state="closed">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                              </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 line-clamp-3 mb-2"
                          title="Sleek portfolio website for developers to showcase their projects, skills, and experience. Built for performance and responsiveness, it's perfect for creating a strong online presence.">
                          Sleek portfolio website for developers to showcase their projects, skills, and experience.
                          Built for performance and responsiveness, it's perfect for creating a strong online presence.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="min-w-[280px] max-w-[280px] flex-shrink-0">
                  <div
                    class=" border border-orange-100 bg-white/50 backdrop-blur rounded-lg shadow-sm overflow-hidden h-full hover:shadow-md transition-shadow duration-200">
                    <div class="p-4 flex flex-col h-full">
                      <div class="flex-grow">
                        <div class="flex items-start justify-between">
                          <h3 class="text-lg text-shadow-lg font-semibold text-gray-900 dark:text-white mb-2 truncate"
                            title="E-com Buyer App Template">E-com Buyer App Template</h3>
                          <div class="menu-component"><button
                              class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall css-1j7qk7u"
                              tabindex="0" type="button" id="radix-:r3j:" aria-haspopup="menu" aria-expanded="false"
                              data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-ellipsis-vertical h-4 w-4" data-state="closed">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                              </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 line-clamp-3 mb-2"
                          title="Modern shopping application that allows users to browse products, add to cart, and make secure payments with ease. It offers personalized recommendations, order tracking, and a seamless buying experience.">
                          Modern shopping application that allows users to browse products, add to cart, and make secure
                          payments with ease. It offers personalized recommendations, order tracking, and a seamless
                          buying experience.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-5" id="appstudio-recent-applications-container">
        <div class="w-full flex space-y-5 justify-between items-center" id="appstudio-recent-applications-header">
          <div class="space-y-5 w-full">
            <h1 class="font-semibold min-w-max text-xl" id="appstudio-recent-applications-title">Recent Applications
            </h1>
            <div class="w-full flex items-center justify-between gap-5">
              <div class="flex gap-x-4"><span aria-label="" class=""><button
                    class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary-hover disabled:pointer-events-none disabled:bg-muted disabled:text-foreground/50 h-9 px-3 rounded-md"
                    type="button" id="appstudio-create-new-project-button">Create New Application</button></span>
                <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-search absolute left-4 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground/50"
                    aria-hidden="true">
                    <path d="m21 21-4.34-4.34"></path>
                    <circle cx="11" cy="11" r="8"></circle>
                  </svg><input
                    class="flex h-9 w-full border-input px-3 py-1 text-base shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10 rounded-xl border bg-background focus-visible:ring-primary min-w-64"
                    id="appstudio-recent-applications-search-bar-input" placeholder="Search..." value=""></div>
              </div>
              <div class="flex items-center gap-4">
                <div class="flex items-center gap-3">
                  <div class="relative flex item-center w-fit"
                    data-options='[{"text": "Active", "value": "active"}, {"text": "Archived", "value": "archived"}]'>
                    <div
                      class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-sizeSmall css-hbl6ho">
                      <div tabindex="0" role="combobox" aria-controls=":rh:" aria-expanded="false"
                        aria-haspopup="listbox"
                        class="MuiSelect-select MuiSelect-outlined MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall css-182didf">
                        <div class="flex items-center gap-2"><span
                            class="h-2 w-2 rounded-full bg-green-500"></span>Active</div>
                      </div><input aria-invalid="false" aria-hidden="true" tabindex="-1"
                        class="MuiSelect-nativeInput css-1k3x8v3" value="active"><svg
                        class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconOutlined css-1636szt"
                        focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                        <path d="M7 10l5 5 5-5z"></path>
                      </svg>
                      <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                        <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                      </fieldset>
                    </div>
                  </div>
                  <div class="relative flex items-center"
                    data-options='[{"text": "All Frameworks", "value": "all"}, {"text": "React", "value": "react"}, {"text": "Vue", "value": "vue"}]'>
                    <div
                      class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-sizeSmall css-1y39t6f">
                      <div tabindex="0" role="combobox" aria-controls=":r39:" aria-expanded="false"
                        aria-haspopup="listbox"
                        class="MuiSelect-select MuiSelect-outlined MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall css-182didf">
                        All Frameworks</div><input aria-invalid="false" aria-hidden="true" tabindex="-1"
                        class="MuiSelect-nativeInput css-1k3x8v3" value="all"><svg
                        class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconOutlined css-1636szt"
                        focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                        <path d="M7 10l5 5 5-5z"></path>
                      </svg>
                      <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                        <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                      </fieldset>
                    </div>
                  </div>
                  <div class="relative flex items-center"
                    data-options='[{"text": "All Apps", "value": "all"}, {"text": "My Apps", "value": "my_apps"}, {"text": "Shared Apps", "value": "shared"}]'>
                    <div
                      class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-sizeSmall css-hbl6ho">
                      <div tabindex="0" role="combobox" aria-controls=":r3a:" aria-expanded="false"
                        aria-haspopup="listbox"
                        class="MuiSelect-select MuiSelect-outlined MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall css-182didf">
                        All Apps</div><input aria-invalid="false" aria-hidden="true" tabindex="-1"
                        class="MuiSelect-nativeInput css-1k3x8v3" value="all"><svg
                        class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconOutlined css-1636szt"
                        focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                        <path d="M7 10l5 5 5-5z"></path>
                      </svg>
                      <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                        <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div class="h-6 w-px bg-gray-200 dark:bg-gray-700"></div>
                <div role="group" class="MuiToggleButtonGroup-root bg-background rounded-lg css-7rg7fp"
                  id="appstudios-recent-applications-toggle-group" aria-label="text alignment"><button
                    class="MuiButtonBase-root MuiToggleButtonGroup-grouped MuiToggleButtonGroup-groupedHorizontal MuiToggleButton-root Mui-selected MuiToggleButton-sizeSmall MuiToggleButton-standard rounded-l-lg MuiToggleButtonGroup-firstButton css-1hwqkh2"
                    tabindex="0" type="button" value="grid" aria-pressed="true"
                    id="appstudios-recent-applications-toggle-group-grid" aria-label="left aligned"
                    data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-layout-grid h-4 w-4" aria-hidden="true"
                      data-testid="icon-layout-grid" style="stroke-width: 1.5;">
                      <rect width="7" height="7" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                      <rect width="7" height="7" x="3" y="14" rx="1"></rect>
                    </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                    class="MuiButtonBase-root MuiToggleButtonGroup-grouped MuiToggleButtonGroup-groupedHorizontal MuiToggleButton-root MuiToggleButton-sizeSmall MuiToggleButton-standard rounded-r-lg MuiToggleButtonGroup-lastButton css-1hwqkh2"
                    tabindex="0" type="button" value="list" aria-pressed="false"
                    id="appstudios-recent-applications-toggle-group-list" aria-label="left aligned"
                    data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-table-of-contents h-4 w-4" aria-hidden="true"
                      data-testid="icon-table-of-contents" style="stroke-width: 1.5;">
                      <path d="M16 12H3"></path>
                      <path d="M16 18H3"></path>
                      <path d="M16 6H3"></path>
                      <path d="M21 12h.01"></path>
                      <path d="M21 18h.01"></path>
                      <path d="M21 6h.01"></path>
                    </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div class="mt-10">
            <div class="w-full flex items-center justify-center">
              <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 max-w-5xl items-center justify-center">
                <div class="h-96 w-full flex justify-center col-span-2"><img
                    src="https://vanij.adya.ai/assets/NotFound-C0brZ6HM.webp" alt="Oops! No Application Found"
                    class="h-full w-full object-contain" draggable="false"></div>
                <div class="col-span-3 flex flex-col gap-y-12">
                  <div class="flex flex-col gap-y-4">
                    <h1 class="text-foreground font-semibold text-xl">Oops! No Application Found</h1>
                    <p class="text-sm text-foreground/50">We couldn't find any applications that match "". Double-check
                      your search criteria, try different keywords, or remove any restrictive filters. If you're new,
                      start your first application today and turn your ideas into reality.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

{{-- Modal content -- wizard form --}}

<!-- Main Modal Wrapper -->
<div role="presentation" class="MuiModal-root css-1fv9ymj">
  <div aria-hidden="true" class="MuiBackdrop-root MuiModal-backdrop css-um19vb"
    style="opacity: 1; transition: opacity 500ms cubic-bezier(0.4, 0, 0.2, 1);"></div>
  <div tabindex="0" data-testid="sentinelStart"></div>
  <div class="w-2/3 h-fit MuiBox-root css-1s71n02" tabindex="-1">
    <div id="app-studio-parent-main">
      <div class="size-full flex flex-col max-h-[90vh] bg-white rounded-2xl">
        <!-- ================== HEADER AND STEPPER (Used from your first block) ================== -->
        <h2 class="text-2xl font-semibold border-b px-5 py-3 text-foreground flex gap-2 items-center">
          Create New Application
          <button class="MuiButtonBase-root MuiIconButton-root !text-xl !ml-auto !text-inherit" tabindex="0"
            type="button">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="w-4 h-4"
              height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z">
              </path>
            </svg>
          </button>
        </h2>
        <div class="flex justify-center w-full my-5">
          <div id="stepper-ui" class="w-full max-w-2xl">
            <!-- This stepper UI will be updated by JavaScript -->
            <div class="p-2 px-4 grid" style="grid-template-columns: repeat(2, 1fr);">
              <div id="stepper-step-1" class="flex items-center gap-x-2">
                <div class="flex gap-x-1 items-center">
                  <div
                    class="step-indicator w-10 h-10 flex items-center justify-center rounded-full font-medium bg-primary text-background">
                    01</div>
                  <span class="step-label ml-2 text-sm font-medium text-black font-medium">App Details</span>
                </div>
                <div
                  class="step-connector flex-1 h-[6px] min-w-[30px] mx-2 rounded bg-gradient-to-r from-primary to-transparent">
                </div>
              </div>
              <div id="stepper-step-2" class="flex items-center gap-x-2">
                <div class="flex gap-x-1 items-center">
                  <div
                    class="step-indicator w-10 h-10 flex items-center justify-center rounded-full font-medium border-2 border-gray-300 text-gray-500">
                    02</div>
                  <span class="step-label ml-2 text-sm font-medium text-gray-500">Model Details</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ================== FORM CONTENT AREA ================== -->
        <div class="w-full mx-auto mb-4 py-2 overflow-y-auto">
          <form id="wizard-form" class="w-full text-foreground">

            <!-- =========== STEP 1: APP DETAILS (Your exact content) =========== -->
            <div id="form-step-1" class="form-step active-step space-y-5">
              <!-- App Name -->
              <div class="flex items-center py-2 px-5"><label
                  class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-animated MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-animated w-4/12 text-foreground text-sm css-13maa2j"
                  for="appName">App Name<span class="text-red-500">*</span></label>
                <div class="w-2/3">
                  <div class="flex flex-col gap-1.5">
                    <div class="MuiFormControl-root MuiTextField-root w-full css-6ev3vj">
                      <div
                        class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedEnd css-1bn53lx">
                        <input aria-invalid="false" id="my-apps-create-app-name-textfield"
                          placeholder="Enter your app name" required="" type="text"
                          class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall MuiInputBase-inputAdornedEnd css-b52kj1"
                          value="">
                        <div
                          class="MuiInputAdornment-root MuiInputAdornment-positionEnd MuiInputAdornment-outlined MuiInputAdornment-sizeSmall flex text-sm text-[#9ca3af] css-1nvf7g0">
                          0 / 50</div>
                        <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                          <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- App Description -->
              <div class="flex items-center py-2 px-5"><label
                  class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-animated MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-animated w-4/12 text-foreground text-sm css-13maa2j">App
                  Description</label>
                <div class="MuiFormControl-root MuiTextField-root w-2/3 css-l76ov3">
                  <div
                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedEnd css-1bn53lx">
                    <input aria-invalid="false" id="my-apps-create-app-description-textfield"
                      placeholder="Enter your project description" type="text"
                      class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall MuiInputBase-inputAdornedEnd css-b52kj1"
                      value="">
                    <div
                      class="MuiInputAdornment-root MuiInputAdornment-positionEnd MuiInputAdornment-outlined MuiInputAdornment-sizeSmall flex text-sm text-[#9ca3af] css-1nvf7g0">
                      0 / 250</div>
                    <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                      <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                    </fieldset>
                  </div>
                </div>
              </div>
              <!-- App Template -->
              <div class="flex items-center py-2 px-5"><label class="w-4/12 text-foreground text-sm">App
                  Template</label>
                <div id="my-apps-create-app-template-autocomplete-wrapper" class="w-2/3 relative cursor-pointer"><input
                    id="my-apps-create-app-template-autocomplete" placeholder="Select App Template" type="text"
                    class="w-full border border-gray-300 rounded-md p-2 pr-10 pointer-events-none bg-white" readonly="">
                  <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none"><svg
                      class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg></div>
                </div>
              </div>
              <!-- Agent Approach -->
              <div class="flex items-center py-2 px-5"><label class="w-4/12 text-foreground text-sm">Agent
                  Approach</label>
                <div class="w-2/3">
                  <div role="radiogroup" class="grid grid-cols-2 gap-3 w-fit"><label
                      id="my-apps-create-single-agent-card"
                      class="relative border rounded-lg p-3 cursor-pointer transition-all hover:border-primary/50 border-primary bg-primary/10 is-selected">
                      <div class="radio-card-selected-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                        </svg></div>
                      <div class="flex items-start pointer-events-none"><input name="agent_approach" type="radio"
                          value="single" class="hidden" checked="">
                        <div class="ml-2">
                          <p class="font-medium text-sm">Single Agent</p>
                          <p class="text-gray-500 text-xs leading-tight">One AI agent handles all tasks</p>
                        </div>
                      </div>
                    </label><label id="my-apps-create-multi-agent-card"
                      class="relative border rounded-lg p-3 cursor-pointer transition-all hover:border-primary/50 border-gray-200">
                      <div class="radio-card-selected-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                        </svg></div>
                      <div class="flex items-start pointer-events-none"><input name="agent_approach" type="radio"
                          value="multi" class="hidden">
                        <div class="ml-2">
                          <p class="font-medium text-sm">Multi Agent</p>
                          <p class="text-xs text-gray-500 leading-tight">Multiple specialized AI agents collaborate</p>
                        </div>
                      </div>
                    </label></div>
                </div>
              </div>
              <!-- Privacy -->
              <div class="flex items-center py-2 px-5"><label class="w-4/12 text-foreground text-sm">Privacy</label>
                <div class="w-2/3">
                  <div role="radiogroup" class="grid grid-cols-3 gap-2 w-fit"><label
                      id="my-apps-create-app-access-type-public-card"
                      class="relative border rounded-lg p-2.5 cursor-pointer transition-all hover:border-primary/50 border-gray-200">
                      <div class="radio-card-selected-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                        </svg></div>
                      <div class="flex items-start pointer-events-none"><input name="privacy" type="radio"
                          value="public" class="hidden">
                        <div class="ml-1.5">
                          <p class="font-medium text-sm">Public access</p>
                          <p class="text-gray-500 text-xs leading-tight">Everyone can see</p>
                        </div>
                      </div>
                    </label><label id="my-apps-create-app-access-type-private-to-members-card"
                      class="relative border rounded-lg p-2.5 cursor-pointer transition-all hover:border-primary/50 border-primary bg-primary/10 is-selected">
                      <div class="radio-card-selected-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                        </svg></div>
                      <div class="flex items-start pointer-events-none"><input name="privacy" type="radio"
                          value="private-members" class="hidden" checked="">
                        <div class="ml-1.5">
                          <p class="font-medium text-sm">Team members</p>
                          <p class="text-xs text-gray-500 leading-tight">Only Selected members</p>
                        </div>
                      </div>
                    </label><label id="my-apps-create-app-access-type-private-to-you-card"
                      class="relative border rounded-lg p-2.5 cursor-pointer transition-all hover:border-primary/50 border-gray-200">
                      <div class="radio-card-selected-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                        </svg></div>
                      <div class="flex items-start pointer-events-none"><input name="privacy" type="radio"
                          value="private-you" class="hidden">
                        <div class="ml-1.5">
                          <p class="font-medium text-sm">Private to you</p>
                          <p class="text-xs text-gray-500 leading-tight">Only you can access</p>
                        </div>
                      </div>
                    </label></div>
                </div>
              </div>
              <!-- Team Members -->
              <div class=" flex items-center py-2 px-5" id="team-members-app-studio-app"><label
                  class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-animated MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-animated w-4/12 text-foreground text-sm css-13maa2j">Team
                  Members</label>
                <div class="flex items-center flex-wrap gap-2 w-2/3">
                  <div class="MuiAvatarGroup-root css-1mceequ"></div>
                  <div
                    class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault border-2 border-dashed bg-transparent border-gray-200 cursor-pointer text-foreground css-1llrwy8">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                      aria-hidden="true" viewBox="0 0 24 24" data-testid="AddIcon"
                      id="my-apps-create-app-access-type-add-team-members-button">
                      <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                    </svg>
                  </div>
                </div>
              </div>


            </div>

            <!-- =========== STEP 2: MODEL DETAILS (Your exact content) =========== -->
            <div id="form-step-2" class="form-step space-y-5">

              <!-- Select Provider -->
              <div class="flex items-center py-2 px-5">
                <label
                  class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-animated MuiFormLabel-colorPrimary w-1/3 text-foreground css-13maa2j">Select
                  Provider</label>

                <div class="relative flex item-center w-fit w-2/3"
                  data-options='[{"text": "Anthropic", "value": "anthropic"}, {"text": "OpenAI", "value": "openai"}, {"text": "Google", "value": "google"}]'>
                  <div
                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-sizeSmall css-hbl6ho w-full">
                    <div tabindex="0" role="combobox" aria-controls=":r47:" aria-expanded="false"
                      aria-haspopup="listbox"
                      class="MuiSelect-select MuiSelect-outlined MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputSizeSmall css-182didf w-full cursor-pointer">
                      <div class="flex items-center gap-2">Select Chat LLM Provider</div>
                    </div>
                    <input aria-invalid="false" aria-hidden="true" tabindex="-1"
                      class="MuiSelect-nativeInput css-1k3x8v3" value="">
                    <svg
                      class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconOutlined css-1636szt"
                      focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                      <path d="M7 10l5 5 5-5z"></path>
                    </svg>
                    <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                      <legend class="css-ihdtdm"><span class="notranslate">​</span></legend>
                    </fieldset>
                  </div>
                </div>
              </div>

            </div>
            {{-- shared buttons --}}
            <div class="w-full flex justify-end px-5 pt-4 border-t">
              <div class="flex gap-5">
                <!-- These two buttons are visible on Step 1 -->
                <button id="wizard-cancel-btn" type="button"
                  class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input hover:bg-input hover:text-accent-foreground disabled:pointer-events-none disabled:bg-muted disabled:text-foreground/50 px-10 py-2 rounded-xl">Cancel</button>
                <button id="wizard-next-btn" type="button"
                  class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary-hover disabled:pointer-events-none disabled:bg-muted disabled:text-foreground/50 px-10 py-2 rounded-xl">Next</button>

                <!-- These two buttons are HIDDEN on Step 1 -->
                <button id="wizard-back-btn" type="button"
                  class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input hover:bg-input hover:text-accent-foreground disabled:pointer-events-none disabled:bg-muted disabled:text-foreground/50 px-10 py-2 rounded-xl">Back</button>
                <button id="wizard-save-btn" type="submit"
                  class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-primary-hover disabled:pointer-events-none disabled:bg-muted disabled:text-foreground/50 px-10 py-2 rounded-xl bg-primary text-white">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div tabindex="0" data-testid="sentinelEnd"></div>
</div>