<main class="flex-1 overflow-auto px-6 pt-4" style="width: 75vw;">
    <div class="flex flex-col gap-4">
        <div class="flex items-center gap-3 pb-2 border-b border-border"><svg xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-6 h-6 text-foreground/80"
                aria-hidden="true">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                <circle cx="9" cy="7" r="4"></circle>
            </svg>
            <div class="text-2xl font-semibold text-foreground/80">Manage Users</div>
        </div>
        <div dir="ltr" data-orientation="horizontal" class="space-y-4">
            <div role="tablist" aria-orientation="horizontal"
                class="inline-flex h-9 items-center justify-center rounded-lg bg-muted p-1 text-muted-foreground"
                tabindex="0" data-orientation="horizontal" style="outline: none;"><button type="button" role="tab"
                    aria-selected="true" aria-controls="radix-:rb4:-content-users" data-state="active"
                    id="manage-users-users-tab"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md py-1 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow px-6"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Users</button><button
                    type="button" role="tab" aria-selected="false" aria-controls="radix-:rb4:-content-roles"
                    data-state="inactive" id="manage-users-roles-tab"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md py-1 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow px-6"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Roles</button></div>
            <div class="mt-2">
                <div class="w-full flex items-center justify-center relative" style="height: calc(-12rem + 100vh);">
                    <div class="absolute inset-0 bg-background/40 rounded-lg"></div>
                    <div class="flex flex-col gap-3 items-center text-center p-6 relative z-[1]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-lock h-12 w-12 text-muted-foreground" aria-hidden="true">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <p class="text-muted-foreground">Please do subscription to get access for this feature</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>