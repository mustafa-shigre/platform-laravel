<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/font-awesome.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;700&family=Amiri:wght@400;700&family=Open+Sans:wght@400;700&family=Poppins:wght@200;500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        :root{
    --dark-color: #19283f;
    --second-color: #33d1cc;
    --red-color:#ff3150;
    --yellow-color:#ffc400;
    --color-num:#eff7fa;
}
body{
    font-family: 'Almarai', sans-serif;
    font-family: 'Amiri', serif;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Poppins', sans-serif;
    font-family: 'Roboto', sans-serif;

}
.main-title::after {
content:"";
width: 130px;
height: 2px;
background-color: var(--second-color);
position: absolute;
bottom: -10px;
left: 50%;
transform:translateX(-50%);
}
/* start navbar */
.navbar {
background-color: var(--dark-color);
}
.navbar .navbar-nav .nav-link {
    color: white;
}
.navbar .navbar-nav .nav-link.active,
.navbar .navbar-nav .nav-link:focus,
.navbar .navbar-nav .nav-link:hover{
    color: var(--second-color);
}
.navbar .search {
border-left:1px solid var(--second-color);
}
.navbar .search i{
    color: var(--second-color);
}
.navbar .navbar-toggler {
    color:white ;
    font-size: 25px;
    border-color: white;
}
.navbar .navbar-toggler:focus{
    box-shadow: none;
}
/* end navbar */
/* start landing */
.landing {
    background-color: var(--dark-color);
    min-height: calc(100vh - 70px);
}
.main-btn{
background-color: var(--red-color);
color: var(--yellow-color);
padding: 0.5rem 1rem;
}
.main-btn:hover{
    background-color: var(--second-color);
}
/* end landing */
/* start features */
.features .icon-holder {
    height: 200px;
}
.features .icon-holder i {
    left: 50%;
transform:translateX(-50%);
}
.features .number {
    font-size: 12rem;
    color: var(--color-num);
}
.features .icon{
    font-size: 4rem;
    color:var(--second-color) ;
}
.features .feat h4 {
    color: var(--yellow-color);
}
/* end features */
/* start ourwork */
.our-work {
    background-color: var(--color-num);
}
.our-work ul .active{
background-color: var(--red-color);
color: var(--yellow-color);
}
.our-work ul li{
    padding: 0.5rem 1rem;
    cursor: pointer;
}
.our-work ul li:not(.active):hover{
    color: var(--red-color);
}
.our-work .box {
    padding: 5px;
    overflow: hidden;
    position: relative;
}
.our-work .box::before {
    content: attr(data-work);
    position: absolute;
    background-color:#33d1cc99;
    width: calc(100% - 10px);
    height:calc(100% - 10px) ;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    color: white;
    transition: 0.5s;
    font-size: 1.5rem;
    transform: translateY(calc(100% + 5px));
}
.our-work .box:hover::before {
    transform:translateX(0);
}
/* end ourwork */
.stuff .desc{
max-width: 400px;
}
/* start team */
.our-team {
    background-color: var(--color-num);
}
.our-team h2{
    color: var(--yellow-color);
}
.our-team .box h4 {
    background-color: var(--second-color);
    color: white;
}
/* end team */
.project {
    background-color: var(--dark-color);
}
/* start subscribe */
.subscribe {
    background-color: var(--yellow-color);
}
.subscribe input[type="text" ] {
border: none;
border-bottom: 1px solid white;
}
.subscribe input[type="text" ]:focus {
    outline: none;
}
.subscribe ::placeholder{
    color: white;
}
.subscribe input[type="submit"]
{
    background-color: var(--dark-color);
    color: var(--yellow-color);
}
/* end subscribe */
/* footer */
.footer{
    background-color: var(--dark-color);
}
.footer .copy > span {
    color: var(--second-color);
}
.footer .copy div span {
    color: var(--yellow-color);
}

/* footer */

    </style>
    <title>Laravel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">

            <img src="{{ asset('image/logo.png') }}" alt="وصف الصورة">

            </a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
            </button> --}}
            {{-- <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link p-2  p-lg-3 " href="#">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link p-2  p-lg-3 " href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link p-2  p-lg-3 " href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link p-2  p-lg-3 " href="#">Contact</a>
                </li>

            </ul> --}}
            <div class="search ps-3 pe-3 d-none d-lg-block">
            <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        </div>
    </nav>
    <div class="landing d-flex justify-content-center align-items-center">
        <div class="text-center text-light">
        <h1 class="fs-1 fw-bold">education platform</h1>
        <p class="fs-6 text-white-50 mb-5">We make you the best</p>
        <a href="#" class="btn main-btn rounded-pill">get started</a>

        </div>
    </div>
    <div class="features text-center pb-5 pt-5">
        <div class="container">
        <div class="main-title mt-5 mb-5 position-relative">
            <img src="{{ asset('image/title.png') }}" alt="وصف الصورة" class="mb-4 m-auto">

            <h2 class="fs-1 fw-bold">we are good at</h2>
            <p class="text-black-50">some of these stuff under</p>

        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
            <div class="feat">
                <div class="icon-holder position-relative">
                <i class="fa-solid fa-1 position-absolute bottom-0 number"></i>
                <i class="fa-solid fa-pencil position-absolute bottom-0 icon"></i>
                </div>
                <h4 class="mb-3 mt-3 text-uppercase fw-bold fs-3">graphic design</h4>
                <p class="text-black-50 lh-lg fw-medium">art or profession of visual communication</p>
            </div>

            </div>
            <div class="col-md-6 col-lg-4">
            <div class="feat">
                <div class="icon-holder position-relative">
                <i class="fa-solid fa-2 position-absolute bottom-0 number"></i>
                <i class="fa-solid fa-tv position-absolute bottom-0 icon"></i>
                </div>
                <h4 class="mb-3 mt-3 text-uppercase fw-bold fs-3">web development</h4>
                <p class="text-black-50 lh-lg fw-medium">Web development is the act of building, creating, and maintaining websites</p>
            </div>

            </div>
            <div class="col-md-6 col-lg-4">
            <div class="feat">
                <div class="icon-holder position-relative">
                <i class="fa-solid fa-3 position-absolute bottom-0 number"></i>
                <i class="fa-solid fa-plug position-absolute bottom-0 icon"></i>
                </div>
                <h4 class="mb-3 mt-3 text-uppercase fw-bold fs-3">Artificial intelligence</h4>
                <p class="text-black-50 lh-lg fw-medium">Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think and act like humans.</p>
            </div>

            </div>
        </div>
        </div>
      </div>
      <div class="our-work text-center pt-5 pb-5">
        <div class="container">
          <div class="main-title mt-5 mb-5 position-relative">
            <img src="{{ asset('image/title.png') }}" alt="وصف الصورة" class="mb-4 m-auto">

            <h2 class="fs-3 fw-bold">We Make This</h2>
            <p class="text-black-50">PREPARE TO BE AMAZED</p>
          </div>
          <ul class="list-unstyled d-flex justify-content-center mt-5 mb-5 text-capitalize">
            <li class="active rounded-pill">all<li>
            <li>design</li>
            <li>code</li>
            <li>photo</li>
            <li>application</li>
          </ul>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box mb-3 bg-white" data-work="app">
                  <img src="image/work-01.jpg" class="img-fluid" alt="...">
                </div>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="box mb-3 bg-white" data-work="app">
                <img src="image/work-02.jpg" class="img-fluid" alt="...">
              </div>

          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="box mb-3 bg-white" data-work="app">
              <img src="image/work-03.jpg" class="img-fluid" alt="...">
            </div>

        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="box mb-3 bg-white" data-work="app">
            <img src="image/work-04.jpg" class="img-fluid" alt="...">
          </div>

      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="box mb-3 bg-white" data-work="app">
          <img src="image/work-05.jpg" class="img-fluid" alt="...">
        </div>

    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="box mb-3 bg-white" data-work="app">
        <img src="image/work-06.jpg" class="img-fluid" alt="...">
      </div>

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="box mb-3 bg-white" data-work="app">
      <img src="image/work-07.jpg" class="img-fluid" alt="...">
    </div>

</div>
<div class="col-lg-3 col-md-4 col-sm-6">
  <div class="box mb-3 bg-white" data-work="app">
    <img src="image/work-08.jpg" class="img-fluid" alt="...">
  </div>

</div>


          </div>
           <div class="mt-5">
            <a href="#" class="btn main-btn rounded-pill text-uppercase w-25">i want more</a>
          </div>
        </div>
      </div>
      <div class="stuff pt-5">
        <div class="container">
          <div class="main-title mt-5 mb-5 position-relative text-center">
            <img src="image/title.png" alt="" class="mb-4 m-auto">
            <h2 class="fs-3 fw-bold">we are good at</h2>
            <p class="text-black-50">some of these stuff </p>

          </div>
          <p class="text-black-50 text-center desc mb-5 m-auto">We have received many likes and motivation for these works I hope you like it</p>
          <div class="row align-item-center">
            <div class="col-lg-4 mb-5 text-center text-md-start">
              <div class="text">
              <h3 class="text-capitalize fw-bold fs-3">retina design</h3>
              <p class="text-black-50 fs-6">Retina Display Design refers to the creation of a web solution that will display correctly </p>
              <p class="text-black-50 fs-6">on a high-resolution screen, enhancing the overall user experience</p>
              <a href="#" class="btn main-btn rounded-pill text-uppercase">ORDER ME ONE</a>
            </div>
            </div>
            <div class="col-lg-8">
            <img src="IMAGE/laptop.png" class="img-fluid"/>
            </div>
          </div>
        </div>
      </div>
      <div class="our-team text-center pb-5 pt-5">
        <div class="container pb-5 pt-5">
        <h2 class="text-capitalize fw-bold fs-3">meet the team</h2>
        <p class="text-black-50 fw-bold">Our team is integrated with good experience and deals with programming with perfection and love</p>
        <div class="row pt-5">
          <div class="col-lg-3 col-md-4">
            <div class="box bg-white">
              <img src="image/work-04.jpg" class="img-fluid"/>
              <h4 class="p-4 fw-bolder fs-4">mustafa sh</h4>
              <blockquote class="text-black-50 p-4">full stack developer</blockquote>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="box bg-white">
              <img src="image/work-01.jpg" class="img-fluid"/>
              <h4 class="p-4 fw-bolder fs-4">mohammad kh</h4>
              <blockquote class="text-black-50 p-4">front end </blockquote>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="box bg-white">
              <img src="image/work-02.jpg" class="img-fluid"/>
              <h4 class="p-4 fw-bolder fs-4">alshafay</h4>
              <blockquote class="text-black-50 p-4">back end</blockquote>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="box bg-white">
              <img src="image/work-03.jpg" class="img-fluid"/>
              <h4 class="p-4 fw-bolder fs-4">ibrahem ak</h4>
              <blockquote class="text-black-50 p-4">cyber security</blockquote>
            </div>
          </div>
        </div>

      </div>

      </div>
      <div class="tecnology pt-5 pb-5 text-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
              <img class="img-fluid" src="image/tech-1 (1).png" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
              <img class="img-fluid" src="image/tech-1.png" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
              <img class="img-fluid" src="image/tech-2 (1).png" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
              <img class="img-fluid" src="image/tech-2.png" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
              <img class="img-fluid" src="image/tech-3.png" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
              <img class="img-fluid" src="image/tech-4.png" alt="">
            </div>
        </div>
      </div>
      </div>
      <div class="project text-center pt-5 pb-5 text-light">
        <h2 class="fs-3">Start Your Project Now
        </h2>
        <p class="text-white-50 mb-5">Leave your description and we start the engine.Don't worry,you can cancel anytime</p>
        <a href="#" class="btn main-btn rounded-pill text-uppercase mb-5 ">start project</a>
      </div>
      <div class="blog pb-5 pt-5">
        <div class="container">
        <div class="main-title text-center mt-5 mb-5 position-relative">
          <img src="image/title.png" alt="" class="mb-4 m-auto">
          <h2 class="fs-3">we are good at</h2>
          <p class="text-black-50">some of these stuff</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img src="image/blog-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <span class=" text-black-50">jan 17,2023</span>
                  <h5 class="card-title">Fast communication</h5>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img src="image/blog-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <span class=" text-black-50">jan 17,2023</span>
                  <h5 class="card-title">Trust and honesty</h5>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img src="image/blog-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <span class=" text-black-50">jan 17,2023</span>
                  <h5 class="card-title">Product Quality</h5>
                </div>
                </div>
            </div>

          </div>
          <div class="d-flex justify-content-center mt-5">
          <a href="#" class="btn main-btn rounded-pill text-uppercase mb-5">more stories</a>
        </div>
        </div>
      </div>
      <div class="subscribe pt-5 pb-5 text-center text-md-start">
        <div class="container">
          <form class="row align-items-center">
            <div class="col-md-6 col-lg-3">
              <div class="fw-bold fs-5 mb-3">Subscribe to our Newsletter:</div>
            </div>
            <div class="col-md-6 col-lg-7 mb-5">
              <input class="w-100 bg-transparent text-light p-2" type="text" placeholder="enter email address">
            </div>
            <div class="col-md-6 col-lg-2 mb-lg-5">
              <input type="submit" value="subscribe" class="btn rounded-pill">
            </div>
          </form>
        </div>
      </div>
      <div class="footer pt-5 pb-5 text-white-50 text-center text-md-start">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="info">
                <img class="mb-4" src="image/logo.png" alt="">
                <p class="mb-5">Thank you for checking out the entire site. We hope you like it.</p>
                <div class="copy">
                  created by <span>mustafa sheghri</span>
                  <div>&copy; 2023 - <span>bondi inc</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 mt-5">
              <div class="links">
                <h5 class="text-light">links</h5>
                <ul class="list-unstyled lh-lg">
                  <li>Home</li>
                  <li>Our Services</li>
                  <li>Portfolio</li>
                  <li>Testimonials</li>
                  <li>Support</li>
                  <li>Terms and Condition</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-2">
              <div class="links">
                <h5 class="text-light">About Us
                </h5>
                <ul class="list-unstyled">
                  <li>Sign In</li>
                  <li>Register</li>
                  <li>About Us
                  </li>
                  <li>Blog</li>
                  <li>Contact Us
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="contact">
                <h5 class="text-light">Contact Us
                </h5>
              <p class="lh-lg mt-3 mb-5">
              Get in touch with us via mail phone.We are waiting for your call or message
              </p>

             <a href="#" class="btn main-btn rounded-pill w-100">yabo23410@gmail.com</a>
             <ul class="d-flex mt-5 list-unstyled gap-3">
              <li>
                <a href="#" class="d-block text-light">
                  <i class="fa-brands fa-facebook fa-lg facebook rounded-pill p-2"></i>
                </a>
              </li>
              <li>
                <a href="#" class="d-block text-light">
                  <i class="fa-brands fa-twitter twitter fa-lg rounded-pill p-2"></i>
                </a>
              </li>
              <li>
                <a href="#" class="d-block text-light">
                  <i class="fa-brands fa-linkedin linkedin fa-lg rounded-pill p-2"></i>
                </a>
              </li>
              <li>
                <a href="#" class="d-block text-light">
                  <i class="fa-brands fa-youtube youtube fa-lg rounded-pill p-2"></i>
                </a>
              </li>
             </ul>
            </div>

          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
