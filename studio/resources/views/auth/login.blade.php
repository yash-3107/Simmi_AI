<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="auth/login.css">
  <link rel="stylesheet" href="auth/send_otp.css">
  <style type="text/css">
    :root {
      --toastify-color-light: #fff;
      --toastify-color-dark: #121212;
      --toastify-color-info: #3498db;
      --toastify-color-success: #07bc0c;
      --toastify-color-warning: #f1c40f;
      --toastify-color-error: hsl(6, 78%, 57%);
      --toastify-color-transparent: rgba(255, 255, 255, .7);
      --toastify-icon-color-info: var(--toastify-color-info);
      --toastify-icon-color-success: var(--toastify-color-success);
      --toastify-icon-color-warning: var(--toastify-color-warning);
      --toastify-icon-color-error: var(--toastify-color-error);
      --toastify-container-width: fit-content;
      --toastify-toast-width: 320px;
      --toastify-toast-offset: 16px;
      --toastify-toast-top: max(var(--toastify-toast-offset), env(safe-area-inset-top));
      --toastify-toast-right: max(var(--toastify-toast-offset), env(safe-area-inset-right));
      --toastify-toast-left: max(var(--toastify-toast-offset), env(safe-area-inset-left));
      --toastify-toast-bottom: max(var(--toastify-toast-offset), env(safe-area-inset-bottom));
      --toastify-toast-background: #fff;
      --toastify-toast-padding: 14px;
      --toastify-toast-min-height: 64px;
      --toastify-toast-max-height: 800px;
      --toastify-toast-bd-radius: 6px;
      --toastify-toast-shadow: 0px 4px 12px rgba(0, 0, 0, .1);
      --toastify-font-family: sans-serif;
      --toastify-z-index: 9999;
      --toastify-text-color-light: #757575;
      --toastify-text-color-dark: #fff;
      --toastify-text-color-info: #fff;
      --toastify-text-color-success: #fff;
      --toastify-text-color-warning: #fff;
      --toastify-text-color-error: #fff;
      --toastify-spinner-color: #616161;
      --toastify-spinner-color-empty-area: #e0e0e0;
      --toastify-color-progress-light: linear-gradient(to right, #4cd964, #5ac8fa, #007aff, #34aadc, #5856d6, #ff2d55);
      --toastify-color-progress-dark: #bb86fc;
      --toastify-color-progress-info: var(--toastify-color-info);
      --toastify-color-progress-success: var(--toastify-color-success);
      --toastify-color-progress-warning: var(--toastify-color-warning);
      --toastify-color-progress-error: var(--toastify-color-error);
      --toastify-color-progress-bgo: .2
    }

    .Toastify__toast-container {
      z-index: var(--toastify-z-index);
      -webkit-transform: translate3d(0, 0, var(--toastify-z-index));
      position: fixed;
      width: var(--toastify-container-width);
      box-sizing: border-box;
      color: #fff;
      display: flex;
      flex-direction: column
    }

    .Toastify__toast-container--top-left {
      top: var(--toastify-toast-top);
      left: var(--toastify-toast-left)
    }

    .Toastify__toast-container--top-center {
      top: var(--toastify-toast-top);
      left: 50%;
      transform: translate(-50%);
      align-items: center
    }

    .Toastify__toast-container--top-right {
      top: var(--toastify-toast-top);
      right: var(--toastify-toast-right);
      align-items: end
    }

    .Toastify__toast-container--bottom-left {
      bottom: var(--toastify-toast-bottom);
      left: var(--toastify-toast-left)
    }

    .Toastify__toast-container--bottom-center {
      bottom: var(--toastify-toast-bottom);
      left: 50%;
      transform: translate(-50%);
      align-items: center
    }

    .Toastify__toast-container--bottom-right {
      bottom: var(--toastify-toast-bottom);
      right: var(--toastify-toast-right);
      align-items: end
    }

    .Toastify__toast {
      --y: 0;
      position: relative;
      touch-action: none;
      width: var(--toastify-toast-width);
      min-height: var(--toastify-toast-min-height);
      box-sizing: border-box;
      margin-bottom: 1rem;
      padding: var(--toastify-toast-padding);
      border-radius: var(--toastify-toast-bd-radius);
      box-shadow: var(--toastify-toast-shadow);
      max-height: var(--toastify-toast-max-height);
      font-family: var(--toastify-font-family);
      z-index: 0;
      display: flex;
      flex: 1 auto;
      align-items: center;
      word-break: break-word
    }

    @media only screen and (max-width: 480px) {
      .Toastify__toast-container {
        width: 100vw;
        left: env(safe-area-inset-left);
        margin: 0
      }

      .Toastify__toast-container--top-left,
      .Toastify__toast-container--top-center,
      .Toastify__toast-container--top-right {
        top: env(safe-area-inset-top);
        transform: translate(0)
      }

      .Toastify__toast-container--bottom-left,
      .Toastify__toast-container--bottom-center,
      .Toastify__toast-container--bottom-right {
        bottom: env(safe-area-inset-bottom);
        transform: translate(0)
      }

      .Toastify__toast-container--rtl {
        right: env(safe-area-inset-right);
        left: initial
      }

      .Toastify__toast {
        --toastify-toast-width: 100%;
        margin-bottom: 0;
        border-radius: 0
      }
    }

    .Toastify__toast-container[data-stacked=true] {
      width: var(--toastify-toast-width)
    }

    .Toastify__toast--stacked {
      position: absolute;
      width: 100%;
      transform: translate3d(0, var(--y), 0) scale(var(--s));
      transition: transform .3s
    }

    .Toastify__toast--stacked[data-collapsed] .Toastify__toast-body,
    .Toastify__toast--stacked[data-collapsed] .Toastify__close-button {
      transition: opacity .1s
    }

    .Toastify__toast--stacked[data-collapsed=false] {
      overflow: visible
    }

    .Toastify__toast--stacked[data-collapsed=true]:not(:last-child)>* {
      opacity: 0
    }

    .Toastify__toast--stacked:after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      height: calc(var(--g) * 1px);
      bottom: 100%
    }

    .Toastify__toast--stacked[data-pos=top] {
      top: 0
    }

    .Toastify__toast--stacked[data-pos=bot] {
      bottom: 0
    }

    .Toastify__toast--stacked[data-pos=bot].Toastify__toast--stacked:before {
      transform-origin: top
    }

    .Toastify__toast--stacked[data-pos=top].Toastify__toast--stacked:before {
      transform-origin: bottom
    }

    .Toastify__toast--stacked:before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 100%;
      transform: scaleY(3);
      z-index: -1
    }

    .Toastify__toast--rtl {
      direction: rtl
    }

    .Toastify__toast--close-on-click {
      cursor: pointer
    }

    .Toastify__toast-icon {
      margin-inline-end: 10px;
      width: 22px;
      flex-shrink: 0;
      display: flex
    }

    .Toastify--animate {
      animation-fill-mode: both;
      animation-duration: .5s
    }

    .Toastify--animate-icon {
      animation-fill-mode: both;
      animation-duration: .3s
    }

    .Toastify__toast-theme--dark {
      background: var(--toastify-color-dark);
      color: var(--toastify-text-color-dark)
    }

    .Toastify__toast-theme--light,
    .Toastify__toast-theme--colored.Toastify__toast--default {
      background: var(--toastify-color-light);
      color: var(--toastify-text-color-light)
    }

    .Toastify__toast-theme--colored.Toastify__toast--info {
      color: var(--toastify-text-color-info);
      background: var(--toastify-color-info)
    }

    .Toastify__toast-theme--colored.Toastify__toast--success {
      color: var(--toastify-text-color-success);
      background: var(--toastify-color-success)
    }

    .Toastify__toast-theme--colored.Toastify__toast--warning {
      color: var(--toastify-text-color-warning);
      background: var(--toastify-color-warning)
    }

    .Toastify__toast-theme--colored.Toastify__toast--error {
      color: var(--toastify-text-color-error);
      background: var(--toastify-color-error)
    }

    .Toastify__progress-bar-theme--light {
      background: var(--toastify-color-progress-light)
    }

    .Toastify__progress-bar-theme--dark {
      background: var(--toastify-color-progress-dark)
    }

    .Toastify__progress-bar--info {
      background: var(--toastify-color-progress-info)
    }

    .Toastify__progress-bar--success {
      background: var(--toastify-color-progress-success)
    }

    .Toastify__progress-bar--warning {
      background: var(--toastify-color-progress-warning)
    }

    .Toastify__progress-bar--error {
      background: var(--toastify-color-progress-error)
    }

    .Toastify__progress-bar-theme--colored.Toastify__progress-bar--info,
    .Toastify__progress-bar-theme--colored.Toastify__progress-bar--success,
    .Toastify__progress-bar-theme--colored.Toastify__progress-bar--warning,
    .Toastify__progress-bar-theme--colored.Toastify__progress-bar--error {
      background: var(--toastify-color-transparent)
    }

    .Toastify__close-button {
      color: #fff;
      position: absolute;
      top: 6px;
      right: 6px;
      background: transparent;
      outline: none;
      border: none;
      padding: 0;
      cursor: pointer;
      opacity: .7;
      transition: .3s ease;
      z-index: 1
    }

    .Toastify__toast--rtl .Toastify__close-button {
      left: 6px;
      right: unset
    }

    .Toastify__close-button--light {
      color: #000;
      opacity: .3
    }

    .Toastify__close-button>svg {
      fill: currentColor;
      height: 16px;
      width: 14px
    }

    .Toastify__close-button:hover,
    .Toastify__close-button:focus {
      opacity: 1
    }

    @keyframes Toastify__trackProgress {
      0% {
        transform: scaleX(1)
      }

      to {
        transform: scaleX(0)
      }
    }

    .Toastify__progress-bar {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      opacity: .7;
      transform-origin: left
    }

    .Toastify__progress-bar--animated {
      animation: Toastify__trackProgress linear 1 forwards
    }

    .Toastify__progress-bar--controlled {
      transition: transform .2s
    }

    .Toastify__progress-bar--rtl {
      right: 0;
      left: initial;
      transform-origin: right;
      border-bottom-left-radius: initial
    }

    .Toastify__progress-bar--wrp {
      position: absolute;
      overflow: hidden;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5px;
      border-bottom-left-radius: var(--toastify-toast-bd-radius);
      border-bottom-right-radius: var(--toastify-toast-bd-radius)
    }

    .Toastify__progress-bar--wrp[data-hidden=true] {
      opacity: 0
    }

    .Toastify__progress-bar--bg {
      opacity: var(--toastify-color-progress-bgo);
      width: 100%;
      height: 100%
    }

    .Toastify__spinner {
      width: 20px;
      height: 20px;
      box-sizing: border-box;
      border: 2px solid;
      border-radius: 100%;
      border-color: var(--toastify-spinner-color-empty-area);
      border-right-color: var(--toastify-spinner-color);
      animation: Toastify__spin .65s linear infinite
    }

    @keyframes Toastify__bounceInRight {

      0%,
      60%,
      75%,
      90%,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: translate3d(3000px, 0, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(-25px, 0, 0)
      }

      75% {
        transform: translate3d(10px, 0, 0)
      }

      90% {
        transform: translate3d(-5px, 0, 0)
      }

      to {
        transform: none
      }
    }

    @keyframes Toastify__bounceOutRight {
      20% {
        opacity: 1;
        transform: translate3d(-20px, var(--y), 0)
      }

      to {
        opacity: 0;
        transform: translate3d(2000px, var(--y), 0)
      }
    }

    @keyframes Toastify__bounceInLeft {

      0%,
      60%,
      75%,
      90%,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: translate3d(-3000px, 0, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(25px, 0, 0)
      }

      75% {
        transform: translate3d(-10px, 0, 0)
      }

      90% {
        transform: translate3d(5px, 0, 0)
      }

      to {
        transform: none
      }
    }

    @keyframes Toastify__bounceOutLeft {
      20% {
        opacity: 1;
        transform: translate3d(20px, var(--y), 0)
      }

      to {
        opacity: 0;
        transform: translate3d(-2000px, var(--y), 0)
      }
    }

    @keyframes Toastify__bounceInUp {

      0%,
      60%,
      75%,
      90%,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: translate3d(0, 3000px, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(0, -20px, 0)
      }

      75% {
        transform: translate3d(0, 10px, 0)
      }

      90% {
        transform: translate3d(0, -5px, 0)
      }

      to {
        transform: translateZ(0)
      }
    }

    @keyframes Toastify__bounceOutUp {
      20% {
        transform: translate3d(0, calc(var(--y) - 10px), 0)
      }

      40%,
      45% {
        opacity: 1;
        transform: translate3d(0, calc(var(--y) + 20px), 0)
      }

      to {
        opacity: 0;
        transform: translate3d(0, -2000px, 0)
      }
    }

    @keyframes Toastify__bounceInDown {

      0%,
      60%,
      75%,
      90%,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: translate3d(0, -3000px, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(0, 25px, 0)
      }

      75% {
        transform: translate3d(0, -10px, 0)
      }

      90% {
        transform: translate3d(0, 5px, 0)
      }

      to {
        transform: none
      }
    }

    @keyframes Toastify__bounceOutDown {
      20% {
        transform: translate3d(0, calc(var(--y) - 10px), 0)
      }

      40%,
      45% {
        opacity: 1;
        transform: translate3d(0, calc(var(--y) + 20px), 0)
      }

      to {
        opacity: 0;
        transform: translate3d(0, 2000px, 0)
      }
    }

    .Toastify__bounce-enter--top-left,
    .Toastify__bounce-enter--bottom-left {
      animation-name: Toastify__bounceInLeft
    }

    .Toastify__bounce-enter--top-right,
    .Toastify__bounce-enter--bottom-right {
      animation-name: Toastify__bounceInRight
    }

    .Toastify__bounce-enter--top-center {
      animation-name: Toastify__bounceInDown
    }

    .Toastify__bounce-enter--bottom-center {
      animation-name: Toastify__bounceInUp
    }

    .Toastify__bounce-exit--top-left,
    .Toastify__bounce-exit--bottom-left {
      animation-name: Toastify__bounceOutLeft
    }

    .Toastify__bounce-exit--top-right,
    .Toastify__bounce-exit--bottom-right {
      animation-name: Toastify__bounceOutRight
    }

    .Toastify__bounce-exit--top-center {
      animation-name: Toastify__bounceOutUp
    }

    .Toastify__bounce-exit--bottom-center {
      animation-name: Toastify__bounceOutDown
    }

    @keyframes Toastify__zoomIn {
      0% {
        opacity: 0;
        transform: scale3d(.3, .3, .3)
      }

      50% {
        opacity: 1
      }
    }

    @keyframes Toastify__zoomOut {
      0% {
        opacity: 1
      }

      50% {
        opacity: 0;
        transform: translate3d(0, var(--y), 0) scale3d(.3, .3, .3)
      }

      to {
        opacity: 0
      }
    }

    .Toastify__zoom-enter {
      animation-name: Toastify__zoomIn
    }

    .Toastify__zoom-exit {
      animation-name: Toastify__zoomOut
    }

    @keyframes Toastify__flipIn {
      0% {
        transform: perspective(400px) rotateX(90deg);
        animation-timing-function: ease-in;
        opacity: 0
      }

      40% {
        transform: perspective(400px) rotateX(-20deg);
        animation-timing-function: ease-in
      }

      60% {
        transform: perspective(400px) rotateX(10deg);
        opacity: 1
      }

      80% {
        transform: perspective(400px) rotateX(-5deg)
      }

      to {
        transform: perspective(400px)
      }
    }

    @keyframes Toastify__flipOut {
      0% {
        transform: translate3d(0, var(--y), 0) perspective(400px)
      }

      30% {
        transform: translate3d(0, var(--y), 0) perspective(400px) rotateX(-20deg);
        opacity: 1
      }

      to {
        transform: translate3d(0, var(--y), 0) perspective(400px) rotateX(90deg);
        opacity: 0
      }
    }

    .Toastify__flip-enter {
      animation-name: Toastify__flipIn
    }

    .Toastify__flip-exit {
      animation-name: Toastify__flipOut
    }

    @keyframes Toastify__slideInRight {
      0% {
        transform: translate3d(110%, 0, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, var(--y), 0)
      }
    }

    @keyframes Toastify__slideInLeft {
      0% {
        transform: translate3d(-110%, 0, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, var(--y), 0)
      }
    }

    @keyframes Toastify__slideInUp {
      0% {
        transform: translate3d(0, 110%, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, var(--y), 0)
      }
    }

    @keyframes Toastify__slideInDown {
      0% {
        transform: translate3d(0, -110%, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, var(--y), 0)
      }
    }

    @keyframes Toastify__slideOutRight {
      0% {
        transform: translate3d(0, var(--y), 0)
      }

      to {
        visibility: hidden;
        transform: translate3d(110%, var(--y), 0)
      }
    }

    @keyframes Toastify__slideOutLeft {
      0% {
        transform: translate3d(0, var(--y), 0)
      }

      to {
        visibility: hidden;
        transform: translate3d(-110%, var(--y), 0)
      }
    }

    @keyframes Toastify__slideOutDown {
      0% {
        transform: translate3d(0, var(--y), 0)
      }

      to {
        visibility: hidden;
        transform: translate3d(0, 500px, 0)
      }
    }

    @keyframes Toastify__slideOutUp {
      0% {
        transform: translate3d(0, var(--y), 0)
      }

      to {
        visibility: hidden;
        transform: translate3d(0, -500px, 0)
      }
    }

    .Toastify__slide-enter--top-left,
    .Toastify__slide-enter--bottom-left {
      animation-name: Toastify__slideInLeft
    }

    .Toastify__slide-enter--top-right,
    .Toastify__slide-enter--bottom-right {
      animation-name: Toastify__slideInRight
    }

    .Toastify__slide-enter--top-center {
      animation-name: Toastify__slideInDown
    }

    .Toastify__slide-enter--bottom-center {
      animation-name: Toastify__slideInUp
    }

    .Toastify__slide-exit--top-left,
    .Toastify__slide-exit--bottom-left {
      animation-name: Toastify__slideOutLeft;
      animation-timing-function: ease-in;
      animation-duration: .3s
    }

    .Toastify__slide-exit--top-right,
    .Toastify__slide-exit--bottom-right {
      animation-name: Toastify__slideOutRight;
      animation-timing-function: ease-in;
      animation-duration: .3s
    }

    .Toastify__slide-exit--top-center {
      animation-name: Toastify__slideOutUp;
      animation-timing-function: ease-in;
      animation-duration: .3s
    }

    .Toastify__slide-exit--bottom-center {
      animation-name: Toastify__slideOutDown;
      animation-timing-function: ease-in;
      animation-duration: .3s
    }

    @keyframes Toastify__spin {
      0% {
        transform: rotate(0)
      }

      to {
        transform: rotate(360deg)
      }
    }
  </style>
  <meta charset="utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Adya">

  <!-- Favicon and apple touch icon configurations -->
  <link rel="apple-touch-icon" sizes="180x180"
    href="data:image/png;base64,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">
  <link rel="icon" type="image/png" sizes="32x32"
    href="data:image/png;base64,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">
  <link rel="icon" type="image/png" sizes="16x16"
    href="data:image/png;base64,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">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
  <title>ADYA</title>
  <script type="module" crossorigin="" src="./assets/index-B__FPxCl.js"></script>
  <link rel="modulepreload" crossorigin="" href="./assets/lucide-icons-D3oDXm4R.js">
  <link rel="stylesheet" crossorigin="" href="./assets/index-BM0a5d4U.css">
  <link rel="modulepreload" as="script" crossorigin="" href="https://vanij.adya.ai/assets/lazyIconImports-C1Lb5j6F.js">
  <style type="text/css">
    [data-vaul-drawer] {
      touch-action: none;
      will-change: transform;
      transition: transform .5s cubic-bezier(.32, .72, 0, 1);
      animation-duration: .5s;
      animation-timing-function: cubic-bezier(0.32, 0.72, 0, 1)
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=bottom][data-state=open] {
      animation-name: slideFromBottom
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=bottom][data-state=closed] {
      animation-name: slideToBottom
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=top][data-state=open] {
      animation-name: slideFromTop
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=top][data-state=closed] {
      animation-name: slideToTop
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=left][data-state=open] {
      animation-name: slideFromLeft
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=left][data-state=closed] {
      animation-name: slideToLeft
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=right][data-state=open] {
      animation-name: slideFromRight
    }

    [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=right][data-state=closed] {
      animation-name: slideToRight
    }

    [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=bottom] {
      transform: translate3d(0, var(--initial-transform, 100%), 0)
    }

    [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=top] {
      transform: translate3d(0, calc(var(--initial-transform, 100%) * -1), 0)
    }

    [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=left] {
      transform: translate3d(calc(var(--initial-transform, 100%) * -1), 0, 0)
    }

    [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=right] {
      transform: translate3d(var(--initial-transform, 100%), 0, 0)
    }

    [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=top] {
      transform: translate3d(0, var(--snap-point-height, 0), 0)
    }

    [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=bottom] {
      transform: translate3d(0, var(--snap-point-height, 0), 0)
    }

    [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=left] {
      transform: translate3d(var(--snap-point-height, 0), 0, 0)
    }

    [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=right] {
      transform: translate3d(var(--snap-point-height, 0), 0, 0)
    }

    [data-vaul-overlay][data-vaul-snap-points=false] {
      animation-duration: .5s;
      animation-timing-function: cubic-bezier(0.32, 0.72, 0, 1)
    }

    [data-vaul-overlay][data-vaul-snap-points=false][data-state=open] {
      animation-name: fadeIn
    }

    [data-vaul-overlay][data-state=closed] {
      animation-name: fadeOut
    }

    [data-vaul-animate=false] {
      animation: none !important
    }

    [data-vaul-overlay][data-vaul-snap-points=true] {
      opacity: 0;
      transition: opacity .5s cubic-bezier(.32, .72, 0, 1)
    }

    [data-vaul-overlay][data-vaul-snap-points=true] {
      opacity: 1
    }

    [data-vaul-drawer]:not([data-vaul-custom-container=true])::after {
      content: '';
      position: absolute;
      background: inherit;
      background-color: inherit
    }

    [data-vaul-drawer][data-vaul-drawer-direction=top]::after {
      top: initial;
      bottom: 100%;
      left: 0;
      right: 0;
      height: 200%
    }

    [data-vaul-drawer][data-vaul-drawer-direction=bottom]::after {
      top: 100%;
      bottom: initial;
      left: 0;
      right: 0;
      height: 200%
    }

    [data-vaul-drawer][data-vaul-drawer-direction=left]::after {
      left: initial;
      right: 100%;
      top: 0;
      bottom: 0;
      width: 200%
    }

    [data-vaul-drawer][data-vaul-drawer-direction=right]::after {
      left: 100%;
      right: initial;
      top: 0;
      bottom: 0;
      width: 200%
    }

    [data-vaul-overlay][data-vaul-snap-points=true]:not([data-vaul-snap-points-overlay=true]):not([data-state=closed]) {
      opacity: 0
    }

    [data-vaul-overlay][data-vaul-snap-points-overlay=true] {
      opacity: 1
    }

    [data-vaul-handle] {
      display: block;
      position: relative;
      opacity: .7;
      background: #e2e2e4;
      margin-left: auto;
      margin-right: auto;
      height: 5px;
      width: 32px;
      border-radius: 1rem;
      touch-action: pan-y
    }

    [data-vaul-handle]:active,
    [data-vaul-handle]:hover {
      opacity: 1
    }

    [data-vaul-handle-hitarea] {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: max(100%, 2.75rem);
      height: max(100%, 2.75rem);
      touch-action: inherit
    }

    @media (hover:hover) and (pointer:fine) {
      [data-vaul-drawer] {
        user-select: none
      }
    }

    /* @media (pointer:fine) {
      [data-vaul-handle-hitarea]: {
        width: 100%;
        height: 100%
      }
    } */

    @keyframes fadeIn {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }

    @keyframes fadeOut {
      to {
        opacity: 0
      }
    }

    @keyframes slideFromBottom {
      from {
        transform: translate3d(0, var(--initial-transform, 100%), 0)
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    @keyframes slideToBottom {
      to {
        transform: translate3d(0, var(--initial-transform, 100%), 0)
      }
    }

    @keyframes slideFromTop {
      from {
        transform: translate3d(0, calc(var(--initial-transform, 100%) * -1), 0)
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    @keyframes slideToTop {
      to {
        transform: translate3d(0, calc(var(--initial-transform, 100%) * -1), 0)
      }
    }

    @keyframes slideFromLeft {
      from {
        transform: translate3d(calc(var(--initial-transform, 100%) * -1), 0, 0)
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    @keyframes slideToLeft {
      to {
        transform: translate3d(calc(var(--initial-transform, 100%) * -1), 0, 0)
      }
    }

    @keyframes slideFromRight {
      from {
        transform: translate3d(var(--initial-transform, 100%), 0, 0)
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    @keyframes slideToRight {
      to {
        transform: translate3d(var(--initial-transform, 100%), 0, 0)
      }
    }
  </style>
</head>

<body id="body" data-module="">
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root">
    <div class="relative min-h-screen items-center justify-center grid grid-cols-1 lg:grid-cols-2">
      <div class="relative hidden h-full flex-col p-10 text-foreground lg:flex dark:border-r" id="login-background"
        style="opacity: 1; transform: none;"><img
          src="data:image/svg+xml,%3csvg%20width='705'%20height='820'%20viewBox='0%200%20705%20820'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cg%20clip-path='url(%23clip0_5926_3494)'%3e%3crect%20width='705'%20height='820'%20fill='%23FAFAFA'/%3e%3cg%20opacity='0.6'%20filter='url(%23filter0_f_5926_3494)'%3e%3cellipse%20cx='777.487'%20cy='39.7789'%20rx='326.289'%20ry='334.743'%20transform='rotate(53.2079%20777.487%2039.7789)'%20fill='url(%23paint0_linear_5926_3494)'/%3e%3c/g%3e%3cg%20opacity='0.6'%20filter='url(%23filter1_f_5926_3494)'%3e%3cellipse%20cx='94.8556'%20cy='1050.67'%20rx='524.926'%20ry='509.311'%20transform='rotate(41.9256%2094.8556%201050.67)'%20fill='url(%23paint1_linear_5926_3494)'/%3e%3c/g%3e%3cg%20filter='url(%23filter2_f_5926_3494)'%3e%3ccircle%20cx='67'%20cy='805'%20r='316'%20fill='url(%23paint2_linear_5926_3494)'/%3e%3c/g%3e%3cg%20opacity='0.6'%20filter='url(%23filter3_f_5926_3494)'%3e%3cellipse%20cy='281.5'%20rx='208'%20ry='209.5'%20fill='%2392BDFF'/%3e%3c/g%3e%3cg%20opacity='0.3'%20filter='url(%23filter4_f_5926_3494)'%3e%3cellipse%20cx='603'%20cy='846'%20rx='203'%20ry='199'%20fill='%230066FF'/%3e%3c/g%3e%3crect%20x='704'%20width='736'%20height='900'%20fill='white'/%3e%3c/g%3e%3cdefs%3e%3cfilter%20id='filter0_f_5926_3494'%20x='385.728'%20y='-349.586'%20width='783.518'%20height='778.727'%20filterUnits='userSpaceOnUse'%20color-interpolation-filters='sRGB'%3e%3cfeFlood%20flood-opacity='0'%20result='BackgroundImageFix'/%3e%3cfeBlend%20mode='normal'%20in='SourceGraphic'%20in2='BackgroundImageFix'%20result='shape'/%3e%3cfeGaussianBlur%20stdDeviation='30'%20result='effect1_foregroundBlur_5926_3494'/%3e%3c/filter%3e%3cfilter%20id='filter1_f_5926_3494'%20x='-623.164'%20y='334.328'%20width='1436.04'%20height='1432.69'%20filterUnits='userSpaceOnUse'%20color-interpolation-filters='sRGB'%3e%3cfeFlood%20flood-opacity='0'%20result='BackgroundImageFix'/%3e%3cfeBlend%20mode='normal'%20in='SourceGraphic'%20in2='BackgroundImageFix'%20result='shape'/%3e%3cfeGaussianBlur%20stdDeviation='100'%20result='effect1_foregroundBlur_5926_3494'/%3e%3c/filter%3e%3cfilter%20id='filter2_f_5926_3494'%20x='-389'%20y='349'%20width='912'%20height='912'%20filterUnits='userSpaceOnUse'%20color-interpolation-filters='sRGB'%3e%3cfeFlood%20flood-opacity='0'%20result='BackgroundImageFix'/%3e%3cfeBlend%20mode='normal'%20in='SourceGraphic'%20in2='BackgroundImageFix'%20result='shape'/%3e%3cfeGaussianBlur%20stdDeviation='70'%20result='effect1_foregroundBlur_5926_3494'/%3e%3c/filter%3e%3cfilter%20id='filter3_f_5926_3494'%20x='-408'%20y='-128'%20width='816'%20height='819'%20filterUnits='userSpaceOnUse'%20color-interpolation-filters='sRGB'%3e%3cfeFlood%20flood-opacity='0'%20result='BackgroundImageFix'/%3e%3cfeBlend%20mode='normal'%20in='SourceGraphic'%20in2='BackgroundImageFix'%20result='shape'/%3e%3cfeGaussianBlur%20stdDeviation='100'%20result='effect1_foregroundBlur_5926_3494'/%3e%3c/filter%3e%3cfilter%20id='filter4_f_5926_3494'%20x='180'%20y='427'%20width='846'%20height='838'%20filterUnits='userSpaceOnUse'%20color-interpolation-filters='sRGB'%3e%3cfeFlood%20flood-opacity='0'%20result='BackgroundImageFix'/%3e%3cfeBlend%20mode='normal'%20in='SourceGraphic'%20in2='BackgroundImageFix'%20result='shape'/%3e%3cfeGaussianBlur%20stdDeviation='110'%20result='effect1_foregroundBlur_5926_3494'/%3e%3c/filter%3e%3clinearGradient%20id='paint0_linear_5926_3494'%20x1='830.018'%20y1='-293.095'%20x2='670.031'%20y2='547.578'%20gradientUnits='userSpaceOnUse'%3e%3cstop%20stop-color='%23D6E108'/%3e%3cstop%20offset='1'%20stop-color='%23FFF761'%20stop-opacity='0'/%3e%3c/linearGradient%3e%3clinearGradient%20id='paint1_linear_5926_3494'%20x1='94.8556'%20y1='541.361'%20x2='68.9859'%20y2='1263.94'%20gradientUnits='userSpaceOnUse'%3e%3cstop%20stop-color='%23FC42E6'/%3e%3cstop%20offset='1'%20stop-color='%230427B0'%20stop-opacity='0'/%3e%3c/linearGradient%3e%3clinearGradient%20id='paint2_linear_5926_3494'%20x1='67'%20y1='489'%20x2='50.4585'%20y2='937.288'%20gradientUnits='userSpaceOnUse'%3e%3cstop%20stop-color='white'/%3e%3cstop%20offset='1'%20stop-color='white'%20stop-opacity='0'/%3e%3c/linearGradient%3e%3cclipPath%20id='clip0_5926_3494'%3e%3crect%20width='705'%20height='820'%20fill='white'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e"
          alt="Login Background" class="w-full h-full absolute inset-0 object-cover object-center">
        <div class="relative z-20 flex items-center text-lg font-medium text-gray-900"><img
            src="https://vanij.adya.ai/assets/AdyaColorLogo-Bz3hhCx6.png" alt="Adya Logo" class="h-10"></div>
        <div class="relative z-20 mt-auto max-w-xl" style="opacity: 1; transform: none;">
          <blockquote class="space-y-6">
            <div class="flex flex-col gap-4">
              <div class="flex items-center gap-4">
                <div class="h-1 w-12 bg-gray-400 rounded-full"></div>
                <p class="text-sm font-medium text-gray-700">TRUSTED BY TEAMS</p>
              </div>
              <p class="text-2xl font-light leading-relaxed text-gray-900">"Simmi.AI brings the best of AI technology
                and
                research, empowering enterprises to scale without vendor lock-in, while retaining sovereignty over
                their
                AI."</p>
            </div>
            <footer class="text-sm">
              <div class="font-medium text-gray-900">Shayak Mazumder</div>
              <div class="text-gray-600">Founder, Adya</div>
            </footer>
          </blockquote>
        </div>
      </div>

      <div class="lg:p-8 relative flex items-center bg-background" id="login-CustomForm"
        style="opacity: 1; transform: none;">

        <div class="mx-auto flex sm:max-w-[28rem] w-full flex-col justify-center space-y-4 relative"
          id="login-container">


          

          <!-- loader -->
          <div id="loader" style="display:none; text-align:center;">
            <div style="display: flex; flex-direction: column; align-items: center;">
              <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="40">
              <p style="margin-top: 10px;">Sending Otp...</p>
            </div>
          </div>

          <div class="space-y-6">
            <div class="bg-card rounded-3xl p-6 ">
              <div class="space-y-6">
                <div class="flex flex-col space-y-3 text-center mb-2" style="opacity: 1; transform: none;">
                  <div class="mb-2 mx-auto"><img src="https://vanij.adya.ai/assets/AdyaColorLogo-Bz3hhCx6.png"
                      alt="Adya Logo" class="h-16 w-16 object-contain" title="Adya"></div>
                  <h1 class="text-3xl font-semibold tracking-tight">Welcome to Simmi.AI</h1>
                  <p class="text-[15px] text-muted-foreground">Enter your Mobile Number to sign in to your account</p>
                </div>
                <form class="space-y-6" autocomplete="on" name="loginForm" id="loginForm">
                  <div class="space-y-4">
                    <div class="relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-phone absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-muted-foreground/50"
                        aria-hidden="true" data-testid="icon-phone" style="stroke-width: 1.5;">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 
                          19.79 19.79 0 0 1-8.63-3.07 
                          19.5 19.5 0 0 1-6-6 
                          19.79 19.79 0 0 1-3.07-8.67 
                          A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 
                          12.84 12.84 0 0 0 .7 2.81 
                          2 2 0 0 1-.45 2.11l-1.27 1.27
                          a16 16 0 0 0 6 6l1.27-1.27
                          a2 2 0 0 1 2.11-.45 
                          12.84 12.84 0 0 0 2.81.7 
                          A2 2 0 0 1 22 16.92z">
                        </path>
                      </svg>

                      <input type="number"
                        class="flex w-full border-input px-3 py-1 shadow-sm transition-colors 
                              file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground 
                              placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-ring 
                              disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-[52px] 
                              pl-14 pr-4 text-[15px] rounded-[14px] border-[1.5px] bg-background 
                              dark:bg-background focus-visible:ring-1 focus-visible:ring-offset-0"
                        placeholder="Enter Your Mobile Number" autocomplete="phone" 
                        name="phone" id="phone" required>
                    </div>

                    <button
                      class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-blue-600 hover:bg-blue-700 disabled:bg-blue-300 text-background transition-all duration-300 py-2 px-4 w-full h-[52px] text-[15px] rounded-[14px]"
                      type="button" id="send_otp_button">Continue<svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-5 w-5"
                        aria-hidden="true" data-testid="icon-arrow-right" style="stroke-width: 1.5;">
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
                  class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors"
                  href="/terms" data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-lock-keyhole h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
                    aria-hidden="true" data-testid="icon-lock-keyhole" style="stroke-width: 1.5;">
                    <circle cx="12" cy="16" r="1"></circle>
                    <rect x="3" y="10" width="18" height="12" rx="2"></rect>
                    <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
                  </svg>Terms of Service</a>
                <div class="h-4 w-[1px] bg-border"></div><a
                  class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors"
                  href="/privacy" data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-shield h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
                    aria-hidden="true" data-testid="icon-shield" style="stroke-width: 1.5;">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                  </svg>Privacy Policy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="Toastify" aria-live="polite" aria-atomic="false" aria-relevant="additions text"
      aria-label="Notifications Alt+T"></section>
  </div>



  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    $(document).ready(function(){

      $(document).on("click", "#send_otp_button", function(){
        var mobile = $("#phone").val();

        if(mobile == ""){
          alert("Please enter mobile number");
          return;
        }

        $("#loader").show();

        $.ajax({
          url: "/send_otp",   // backend route to send OTP
          method: "POST",
          data: { mobile: mobile,
            _token: "{{ csrf_token() }}"
           },
          success: function(response){

            setTimeout(()=>{
              $("#loader").hide();

              $("#login-container").html(`
                <div class="space-y-6"><button
                    class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100  [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent disabled:!bg-transparent disabled:text-foreground/50 py-2 px-4 w-fit text-gray-600 hover:text-gray-900 -ml-2"
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
                              aria-labelledby="radix-:r0:-trigger-password" hidden="" id="radix-:r0:-content-password"
                              tabindex="0"
                              class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 m-0">
                            </div>
                            <div data-state="active" data-orientation="horizontal" role="tabpanel"
                              aria-labelledby="radix-:r0:-trigger-otp" id="radix-:r0:-content-otp" tabindex="0"
                              class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 m-0"
                              style="">
                              <div class="space-y-5">
                                <p class="text-sm text-center text-muted-foreground">Enter the verification code sent to <br>
                                  your mobile number</p><noscript></noscript>
                              <div data-input-otp-container="true"
                                class="flex items-center gap-2 has-[:disabled]:opacity-50 justify-center"
                                style="position: relative; cursor: text; user-select: none; --root-height: 52px;">

                                
                              <div class="flex items-center gap-2">
                                <input type="text" maxlength="1"
                                  class="text-center text-lg font-medium border border-input shadow-sm transition-all 
                                        rounded-[14px] w-[52px] h-[52px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                  id="login-otp-input-0" />

                                <input type="text" maxlength="1"
                                  class="text-center text-lg font-medium border border-input shadow-sm transition-all 
                                        rounded-[14px] w-[52px] h-[52px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                  id="login-otp-input-1" />

                                <input type="text" maxlength="1"
                                  class="text-center text-lg font-medium border border-input shadow-sm transition-all 
                                        rounded-[14px] w-[52px] h-[52px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                  id="login-otp-input-2" />

                                <input type="text" maxlength="1"
                                  class="text-center text-lg font-medium border border-input shadow-sm transition-all 
                                        rounded-[14px] w-[52px] h-[52px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                  id="login-otp-input-3" />

                                <input type="text" maxlength="1"
                                  class="text-center text-lg font-medium border border-input shadow-sm transition-all 
                                        rounded-[14px] w-[52px] h-[52px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                  id="login-otp-input-4" />

                                <input type="text" maxlength="1"
                                  class="text-center text-lg font-medium border border-input shadow-sm transition-all 
                                        rounded-[14px] w-[52px] h-[52px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                                  id="login-otp-input-5" />
                              </div>
                            </div>


                                  <div style="position: absolute; inset: 0px; pointer-events: none;"><input
                                      autocomplete="one-time-code" class="disabled:cursor-not-allowed gap-2"
                                      data-input-otp="true" data-input-otp-placeholder-shown="true" inputmode="numeric"
                                      pattern="\d*" maxlength="6" value=""
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
                        class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors"
                        href="/terms" data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-lock-keyhole h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
                          aria-hidden="true" data-testid="icon-lock-keyhole" style="stroke-width: 1.5;">
                          <circle cx="12" cy="16" r="1"></circle>
                          <rect x="3" y="10" width="18" height="12" rx="2"></rect>
                          <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
                        </svg>Terms of Service</a>
                      <div class="h-4 w-[1px] bg-border"></div><a
                        class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors"
                        href="/privacy" data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-shield h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
                          aria-hidden="true" data-testid="icon-shield" style="stroke-width: 1.5;">
                          <path
                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                          </path>
                        </svg>Privacy Policy</a>
                    </div>
                  </div>
                </div>
            `);
            }, 2000)
          },
          error: function(){
            $("#loader").hide();
            alert("Something went wrong. Please try again.");
          }
        });
      });

      $(document).on('click', '#login-otp-back-button', function() {
        console.log("you clicked back button!!!");

        $("#login-container").html(`<div id="loader" style="display:none; text-align:center;">
            <div style="display: flex; flex-direction: column; align-items: center;">
              <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="40">
              <p style="margin-top: 10px;">Sending Otp...</p>
            </div>
          </div>
        <div class="space-y-6">
            <div class="bg-card rounded-3xl p-6 ">
              <div class="space-y-6">
                <div class="flex flex-col space-y-3 text-center mb-2" style="opacity: 1; transform: none;">
                  <div class="mb-2 mx-auto"><img src="https://vanij.adya.ai/assets/AdyaColorLogo-Bz3hhCx6.png"
                      alt="Adya Logo" class="h-16 w-16 object-contain" title="Adya"></div>
                  <h1 class="text-3xl font-semibold tracking-tight">Welcome to Simmi.AI</h1>
                  <p class="text-[15px] text-muted-foreground">Enter your Mobile Number to sign in to your account</p>
                </div>
                <form class="space-y-6" autocomplete="on" name="loginForm" id="loginForm">
                  <div class="space-y-4">
                    <div class="relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-phone absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-muted-foreground/50"
                        aria-hidden="true" data-testid="icon-phone" style="stroke-width: 1.5;">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 
           19.79 19.79 0 0 1-8.63-3.07 
           19.5 19.5 0 0 1-6-6 
           19.79 19.79 0 0 1-3.07-8.67 
           A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 
           12.84 12.84 0 0 0 .7 2.81 
           2 2 0 0 1-.45 2.11l-1.27 1.27
           a16 16 0 0 0 6 6l1.27-1.27
           a2 2 0 0 1 2.11-.45 
           12.84 12.84 0 0 0 2.81.7 
           A2 2 0 0 1 22 16.92z" />
                      </svg>
                      <input type="number"
                        class="flex w-full border-input px-3 py-1 shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-[52px] pl-11 pr-4 text-[15px] rounded-[14px] border-[1.5px] bg-background dark:bg-background focus-visible:ring-1 focus-visible:ring-offset-0"
                        placeholder="Enter Your Mobile Number" autocomplete="phone" name="phone" id="phone" required=""
                        value="">
                    </div>
                    <button
                      class="noflow nopan nodelete nodrag inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-100 disabled:disabled-state [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-blue-600 hover:bg-blue-700 disabled:bg-blue-300 text-background transition-all duration-300 py-2 px-4 w-full h-[52px] text-[15px] rounded-[14px]"
                      type="button" id="send_otp_button">Continue<svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-5 w-5"
                        aria-hidden="true" data-testid="icon-arrow-right" style="stroke-width: 1.5;">
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
                  class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors"
                  href="/terms" data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-lock-keyhole h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
                    aria-hidden="true" data-testid="icon-lock-keyhole" style="stroke-width: 1.5;">
                    <circle cx="12" cy="16" r="1"></circle>
                    <rect x="3" y="10" width="18" height="12" rx="2"></rect>
                    <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
                  </svg>Terms of Service</a>
                <div class="h-4 w-[1px] bg-border"></div><a
                  class="group flex items-center gap-2 text-sm font-medium hover:text-primary transition-colors"
                  href="/privacy" data-discover="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-shield h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors"
                    aria-hidden="true" data-testid="icon-shield" style="stroke-width: 1.5;">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                  </svg>Privacy Policy</a>
              </div>
            </div>
          </div>`);
      });


    });

  </script>

</body>

</html>