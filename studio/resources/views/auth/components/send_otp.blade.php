<div class="space-y-6"><button
    class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent disabled:!bg-transparent disabled:text-foreground/50 py-2 px-4 w-fit text-gray-600 hover:text-gray-900 -ml-2"
    type="button" id="login-otp-back-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
      stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4 mr-1" aria-hidden="true"
      data-testid="icon-arrow-left" style="stroke-width: 1.5;">
      <path d="m12 19-7-7 7-7"></path>
      <path d="M19 12H5"></path>
    </svg> Back</button>
  <div class="bg-card rounded-3xl p-6 border shadow-sm">
    <div class="space-y-6">
      <div class="flex flex-col space-y-2 text-center" style="opacity: 1; transform: none;">
        <h2 class="text-2xl font-semibold">Sign in to your account</h2>
        <p class="text-[15px] text-muted-foreground">Choose your preferred sign in method</p>
      </div>
      <form class="space-y-6" autocomplete="on" name="signinForm" id="signinForm">
        <div dir="ltr" data-orientation="horizontal" class="w-full">
          <div role="tablist" aria-orientation="horizontal"
            class="items-center justify-center rounded-lg bg-muted p-1 text-muted-foreground grid w-full grid-cols-2 h-full"
            tabindex="0" data-orientation="horizontal" style="outline: none;"><button type="button" role="tab"
              aria-selected="false" aria-controls="radix-:r0:-content-password" data-state="inactive"
              id="login-otp-password-tab"
              class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow py-2"
              tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-lock mr-2 h-4 w-4" aria-hidden="true" data-testid="icon-lock"
                style="stroke-width: 1.5;">
                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
              </svg>Password</button><button type="button" role="tab" aria-selected="true"
              aria-controls="radix-:r0:-content-otp" data-state="active" id="login-otp-otp-tab"
              class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow py-2"
              tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-message-square-code mr-2 h-4 w-4" aria-hidden="true"
                data-testid="icon-message-square-code" style="stroke-width: 1.5;">
                <path d="M10 7.5 8 10l2 2.5"></path>
                <path d="m14 7.5 2 2.5-2 2.5"></path>
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
              </svg>OTP</button></div>
          <div class="space-y-5 mt-5">
            <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
              aria-labelledby="radix-:r0:-trigger-password" hidden="" id="radix-:r0:-content-password" tabindex="0"
              class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 m-0">
            </div>
            <div data-state="active" data-orientation="horizontal" role="tabpanel"
              aria-labelledby="radix-:r0:-trigger-otp" id="radix-:r0:-content-otp" tabindex="0"
              class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 m-0"
              style="">
              <div class="space-y-5">
                <p class="text-sm text-center text-muted-foreground">Enter the verification code sent to <br>
                  m***0@gmail.com</p><noscript></noscript>
                <div data-input-otp-container="true"
                  class="flex items-center gap-2 has-[:disabled]:opacity-50 justify-center"
                  style="position: relative; cursor: text; user-select: none; pointer-events: none; --root-height: 52px;">
                  <div class="flex items-center gap-2">
                    <div
                      class="relative flex items-center justify-center border-y border-input text-sm shadow-sm transition-all rounded-[14px] w-[52px] h-[52px] border-[1.5px]"
                      id="login-otp-input-0"></div>
                    <div
                      class="relative flex items-center justify-center border-y border-input text-sm shadow-sm transition-all rounded-[14px] w-[52px] h-[52px] border-[1.5px]"
                      id="login-otp-input-1"></div>
                    <div
                      class="relative flex items-center justify-center border-y border-input text-sm shadow-sm transition-all rounded-[14px] w-[52px] h-[52px] border-[1.5px]"
                      id="login-otp-input-2"></div>
                    <div
                      class="relative flex items-center justify-center border-y border-input text-sm shadow-sm transition-all rounded-[14px] w-[52px] h-[52px] border-[1.5px]"
                      id="login-otp-input-3"></div>
                    <div
                      class="relative flex items-center justify-center border-y border-input text-sm shadow-sm transition-all rounded-[14px] w-[52px] h-[52px] border-[1.5px]"
                      id="login-otp-input-4"></div>
                    <div
                      class="relative flex items-center justify-center border-y border-input text-sm shadow-sm transition-all rounded-[14px] w-[52px] h-[52px] border-[1.5px]"
                      id="login-otp-input-5"></div>
                  </div>
                  <div style="position: absolute; inset: 0px; pointer-events: none;"><input autocomplete="one-time-code"
                      class="disabled:cursor-not-allowed gap-2" data-input-otp="true"
                      data-input-otp-placeholder-shown="true" inputmode="numeric" pattern="\d*" maxlength="6" value=""
                      style="position: absolute; inset: 0px; width: calc(100% + 40px); height: 100%; display: flex; text-align: left; opacity: 1; color: transparent; pointer-events: all; background: transparent; caret-color: transparent; border: 0px solid transparent; outline: transparent solid 0px; box-shadow: none; line-height: 1; letter-spacing: -0.5em; font-size: var(--root-height); font-family: monospace; font-variant-numeric: tabular-nums; clip-path: inset(0px 40px 0px 0px);"
                      data-input-otp-mss="0" data-input-otp-mse="0"></div>
                </div>
                <div class="flex flex-col gap-3">
                  <div class="flex justify-between items-center"><button
                      class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground disabled:!bg-transparent disabled:text-foreground/50 h-9 px-3 rounded-md text-sm text-muted-foreground"
                      type="button" id="login-otp-resend-button">Resend code</button><button
                      class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground disabled:!bg-transparent disabled:text-foreground/50 h-9 px-3 rounded-md text-muted-foreground text-sm"
                      type="button" id="login-otp-hide-show-button">Show Code</button></div>
                </div>
              </div>
            </div>
          </div><button
            class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-blue-600 hover:bg-blue-700 disabled:bg-blue-300 text-background transition-all duration-300 py-2 px-4 w-full h-[52px] text-[15px] rounded-[14px] mt-5"
            disabled="" type="submit" id="login-verify-code-submit-button">Verify Code<svg
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-right ml-2 h-5 w-5" aria-hidden="true" data-testid="icon-arrow-right"
              style="stroke-width: 1.5;">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg></button>
        </div>
      </form>
    </div>
  </div>
  <div class="flex flex-col gap-4">
    <p class="text-center text-sm text-muted-foreground">By continuing, you agree to our</p>
    <div class="flex items-center justify-center gap-6"><a
        class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors" href="/terms"
        data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-lock-keyhole h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
          aria-hidden="true" data-testid="icon-lock-keyhole" style="stroke-width: 1.5;">
          <circle cx="12" cy="16" r="1"></circle>
          <rect x="3" y="10" width="18" height="12" rx="2"></rect>
          <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
        </svg>Terms of Service</a>
      <div class="h-4 w-[1px] bg-border"></div><a
        class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors" href="/privacy"
        data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-shield h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
          aria-hidden="true" data-testid="icon-shield" style="stroke-width: 1.5;">
          <path
            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
          </path>
        </svg>Privacy Policy</a>
    </div>
  </div>
</div>