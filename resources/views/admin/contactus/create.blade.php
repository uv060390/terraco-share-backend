<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <style>
        .navbar-vertical-aside-show-xl .navbar:not(.navbar-vertical-aside) .navbar-brand {
            display: block !important;
        }

        .navbar-brand-logo {
            width: 60%;
        }

        .page-header {
            padding-bottom: 12px !important;
            margin-bottom: 20px !important;
            border: none !important;
        }

        .col-sm.mb-2.mb-sm-0 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .btn-check:focus+.btn-white,
        .btn-white:focus,
        .btn-white:hover {
            color: #677787 !important;
        }

        .navbar-vertical-aside-show-xl .main {
            padding-left: 0rem !important;
        }

        .navbar-vertical-aside-show-xl .navbar:not(.navbar-vertical) {
            margin-left: 0rem !important;
        }

        .avatar.avatar-sm.avatar-circle {
            background: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #7066e0;
            color: #fff;
            font-size: 1em;
            margin: 0.3125em;
            padding: 0.625em 1.1em;
            transition: box-shadow 0.1s;
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
            font-weight: 500;
        }

        .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #6e7881;
            color: #fff;
            font-size: 1em;
            margin: 0.3125em;
            padding: 0.625em 1.1em;
            transition: box-shadow 0.1s;
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
            font-weight: 500;
        }

        .swal2-actions {
            width: 100%;
            justify-content: center;
            margin-top: 40px;
        }
    </style>

    <!-- Title -->
    <title>Add Customers | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href=".././assets/vendor/bootstrap-icons/font/bootstrap-icons.css" />

    <link rel="stylesheet" href=".././assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css" />
    <link rel="stylesheet" href=".././assets/vendor/quill/dist/quill.snow.css" />

    <!-- CSS Front Template -->

    <link rel="preload" href=".././assets/css/theme.min.css" data-hs-appearance="default" as="style" />
    <link rel="preload" href=".././assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style" />

    <style data-hs-appearance-onload-styles>
        * {
            transition: unset !important;
        }

        body {
            opacity: 0;
        }
    </style>

    <script>
        window.hs_config = {
            autopath: "@@autopath",
            deleteLine: "hs-builder:delete",
            "deleteLine:build": "hs-builder:build-delete",
            "deleteLine:dist": "hs-builder:dist-delete",
            previewMode: false,
            startPath: "/index.html",
            vars: {
                themeFont: "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
                version: "?v=1.0",
            },
            layoutBuilder: {
                extend: {
                    switcherSupport: true
                },
                header: {
                    layoutMode: "default",
                    containerMode: "container-fluid"
                },
                sidebarLayout: "default",
            },
            themeAppearance: {
                layoutSkin: "default",
                sidebarSkin: "default",
                styles: {
                    colors: {
                        primary: "#377dff",
                        transparent: "transparent",
                        white: "#fff",
                        dark: "132144",
                        gray: {
                            100: "#f9fafc",
                            900: "#1e2022"
                        },
                    },
                    font: "Inter",
                },
            },
            languageDirection: {
                lang: "en"
            },
            skipFilesFromBundle: {
                dist: [
                    "assets/js/hs.theme-appearance.js",
                    "assets/js/hs.theme-appearance-charts.js",
                    "assets/js/demo.js",
                ],
                build: [
                    "assets/css/theme.css",
                    "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js",
                    "assets/js/demo.js",
                    "assets/css/theme-dark.css",
                    "assets/css/docs.css",
                    "assets/vendor/icon-set/style.css",
                    "assets/js/hs.theme-appearance.js",
                    "assets/js/hs.theme-appearance-charts.js",
                    "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js",
                    "assets/js/demo.js",
                ],
            },
            minifyCSSFiles: ["assets/css/theme.css", "assets/css/theme-dark.css"],
            copyDependencies: {
                dist: {
                    "*assets/js/theme-custom.js": ""
                },
                build: {
                    "*assets/js/theme-custom.js": "",
                    "node_modules/bootstrap-icons/font/*fonts/**": "assets/css",
                },
            },
            buildFolder: "",
            replacePathsToCDN: {},
            directoryNames: {
                src: "./src",
                dist: "./dist",
                build: "./build"
            },
            fileNames: {
                dist: {
                    js: "theme.min.js",
                    css: "theme.min.css"
                },
                build: {
                    css: "theme.min.css",
                    js: "theme.min.js",
                    vendorCSS: "vendor.min.css",
                    vendorJS: "vendor.min.js",
                },
            },
            fileTypes: "jpg|png|svg|mp4|webm|ogv|json",
        };
        window.hs_config.gulpRGBA = (p1) => {
            const options = p1.split(",");
            const hex = options[0].toString();
            const transparent = options[1].toString();

            var c;
            if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                c = hex.substring(1).split("");
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = "0x" + c.join("");
                return (
                    "rgba(" + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(",") +
                    "," +
                    transparent +
                    ")"
                );
            }
            throw new Error("Bad Hex");
        };
        window.hs_config.gulpDarken = (p1) => {
            const options = p1.split(",");

            let col = options[0].toString();
            let amt = -parseInt(options[1]);
            var usePound = false;

            if (col[0] == "#") {
                col = col.slice(1);
                usePound = true;
            }
            var num = parseInt(col, 16);
            var r = (num >> 16) + amt;
            if (r > 255) {
                r = 255;
            } else if (r < 0) {
                r = 0;
            }
            var b = ((num >> 8) & 0x00ff) + amt;
            if (b > 255) {
                b = 255;
            } else if (b < 0) {
                b = 0;
            }
            var g = (num & 0x0000ff) + amt;
            if (g > 255) {
                g = 255;
            } else if (g < 0) {
                g = 0;
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16);
        };
        window.hs_config.gulpLighten = (p1) => {
            const options = p1.split(",");

            let col = options[0].toString();
            let amt = parseInt(options[1]);
            var usePound = false;

            if (col[0] == "#") {
                col = col.slice(1);
                usePound = true;
            }
            var num = parseInt(col, 16);
            var r = (num >> 16) + amt;
            if (r > 255) {
                r = 255;
            } else if (r < 0) {
                r = 0;
            }
            var b = ((num >> 8) & 0x00ff) + amt;
            if (b > 255) {
                b = 255;
            } else if (b < 0) {
                b = 0;
            }
            var g = (num & 0x0000ff) + amt;
            if (g > 255) {
                g = 255;
            } else if (g < 0) {
                g = 0;
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16);
        };
    </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
    <script src=".././assets/js/hs.theme-appearance.js"></script>

    <script src=".././assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

    <!-- ========== HEADER ========== -->

    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
        <div class="navbar-nav-wrap">
            <!-- Logo -->
            <a class="navbar-brand" href="{{route('admin.list')}}" aria-label="Front">
                <img class="navbar-brand-logo" src=".././assets/images/logo-admin.png" alt="Logo"
                    data-hs-theme-appearance="default" />

            </a>
            <!-- End Logo -->

            <div class="navbar-nav-wrap-content-start">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                    <i class="bi-arrow-bar-left navbar-toggler-short-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                    <i class="bi-arrow-bar-right navbar-toggler-full-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
                </button>

                <!-- End Navbar Vertical Toggle -->

                <!-- Search Form -->
                <div class="dropdown ms-2">
                    <!-- Input Group -->

                    <!-- End Input Group -->

                    <!-- Card Search Content -->
                    <div id="searchDropdownMenu"
                        class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                        <div class="card">
                            <!-- Body -->
                            <div class="card-body-height">
                                <div class="d-lg-none">
                                    <div class="input-group input-group-merge navbar-input-group mb-5">
                                        <div class="input-group-prepend input-group-text">
                                            <i class="bi-search"></i>
                                        </div>

                                        <input type="search" class="form-control" placeholder="Search in front"
                                            aria-label="Search in front" />
                                        <a class="input-group-append input-group-text" href="javascript:;">
                                            <i class="bi-x-lg"></i>
                                        </a>
                                    </div>
                                </div>

                                <span class="dropdown-header">Recent searches</span>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a class="btn btn-soft-dark btn-xs rounded-pill" href="{{route('admin.list')}}">
                                        Gulp <i class="bi-search ms-1"></i>
                                    </a>
                                    <a class="btn btn-soft-dark btn-xs rounded-pill" href="{{route('admin.list')}}">
                                        Notification panel <i class="bi-search ms-1"></i>
                                    </a>
                                </div>

                                <div class="dropdown-divider"></div>

                                <span class="dropdown-header">Tutorials</span>

                                <a class="dropdown-item" href="{{route('admin.list')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="icon icon-soft-dark icon-xs icon-circle">
                                                <i class="bi-sliders"></i>
                                            </span>
                                        </div>

                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>How to set up Gulp?</span>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="{{route('admin.list')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="icon icon-soft-dark icon-xs icon-circle">
                                                <i class="bi-paint-bucket"></i>
                                            </span>
                                        </div>

                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>How to change theme color?</span>
                                        </div>
                                    </div>
                                </a>

                                <div class="dropdown-divider"></div>

                                <span class="dropdown-header">Members</span>

                                <a class="dropdown-item" href="{{route('admin.list')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-xs avatar-circle"
                                                src=".././assets/img/160x160/img10.jpg" alt="Image Description" />
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>Amanda Harvey
                                                <i class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Top endorsed"></i></span>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="{{route('admin.list')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-xs avatar-circle"
                                                src=".././assets/img/160x160/img3.jpg" alt="Image Description" />
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>David Harrison</span>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="{{route('admin.list')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                                                <span class="avatar-initials">A</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>Anne Richard</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <a class="card-footer text-center" href="{{route('admin.list')}}">
                                See all results <i class="bi-chevron-right small"></i>
                            </a>
                            <!-- End Footer -->
                        </div>
                    </div>
                    <!-- End Card Search Content -->
                </div>

                <!-- End Search Form -->
            </div>

            <div class="navbar-nav-wrap-content-end">
                <!-- Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Account -->
                        <div class="dropdown">
                            <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                                data-bs-dropdown-animation>
                                <div class="avatar avatar-sm avatar-circle">
                                    D
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                                aria-labelledby="accountNavbarDropdown" style="width: 16rem">



                                <a class="dropdown-item" href="#">Sign out</a>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                </ul>
                <!-- End Navbar -->
            </div>
        </div>
    </header>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->


    <main id="content" role="main" class="main">
        <form id="listing-form" action="{{ route('admin.contactus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <h1 class="page-header-title">Create contact</h1>
                            <button type="submit" class="btn btn-primary d-flex align-items-center">
                                Submit
                            </button>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Page Header -->


                <div class="row">
                    <!-- <div class="col-lg-4 mb-3 mb-lg-0">
              <h4>Account information</h4>
            </div> -->

                    <div class="col-lg-12">
                        <!-- Card -->
                        <div class="card">
                            <!-- Body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                id="name" />
                                        </div>
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-sm-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                id="email" required/>
                                        </div>
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Col -->
                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone"
                                                id="phone" />
                                        </div>
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-sm-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="listing_id" class="form-label">listing Id</label>
                                            <input type="text" class="form-control" name="listing_id"
                                                id="listing_id" />
                                        </div>
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Col -->
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="message" class="form-label">Message</label>
                                            <input type="text" class="form-control" name="message"
                                                id="message" />
                                        </div>
                                        <!-- End Form -->
                                    </div>
                                    
                                 
                                    <!-- End Col -->
                                </div>
                                        
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Col -->
                                </div>

                                <!-- <div class="input-group-append">
                          <div class="tom-select-custom tom-select-custom-end">
                            <select
                              class="js-select form-select"
                              autocomplete="off"
                              name="phoneSelect"
                              data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "8rem"
                                }'
                            >
                              <option value="Mobile" selected>Mobile</option>
                              <option value="Home">Home</option>
                              <option value="Work">Work</option>
                              <option value="Fax">Fax</option>
                              <option value="Direct">Direct</option>
                            </select>
                          </div>
                        </div> -->
                            </div>

                            <!-- Container For Input Field -->
                            <div id="addPhoneFieldContainer"></div>

                            <!-- <a href="javascript:;" class="js-create-field form-link">
                        <i class="bi-plus"></i> Add phone
                      </a> -->
                        </div>
                        <!-- End Form -->

                        <!-- Add Phone Input Field -->
                        <div id="addAddressFieldTemplate" style="display: none">
                            <div class="input-group-add-field">
                                <input type="text" class="form-control" data-name="addressLine"
                                    placeholder="Your address" aria-label="Your address" />

                                <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                                    <i class="bi-x"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End Add Phone Input Field -->

                        <!-- Add Phone Input Field -->
                        <!-- <div
                      id="addPhoneFieldTemplate"
                      class="input-group-add-field"
                      style="display: none"
                    > -->
                        <!-- <div class="input-group">
                        <input
                          type="text"
                          class="js-input-mask form-control"
                          data-name="additionlPhone"
                          placeholder="+x(xxx)xxx-xx-xx"
                          aria-label="+x(xxx)xxx-xx-xx"
                          data-hs-mask-options='{
                               "mask": "+0(000)000-00-00"
                             }'
                        /> -->

                        <!-- <div class="input-group-append">
                          <div class="tom-select-custom tom-select-custom-end">
                            <select
                              class="js-select-dynamic form-select"
                              autocomplete="off"
                              data-name="phoneSelect"
                              data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "8rem"
                                }'
                            >
                              <option value="Mobile" selected>Mobile</option>
                              <option value="Home">Home</option>
                              <option value="Work">Work</option>
                              <option value="Fax">Fax</option>
                              <option value="Direct">Direct</option>
                            </select>
                          </div>
                        </div> -->
                    </div>

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                        <i class="bi-x"></i>
                    </a>
                </div>
                <!-- End Add Phone Input Field -->

                <!-- Form Check -->

            </div>
        </form>
        <!-- Content -->
        <!-- Body -->
        </div>
        <!-- End Card -->
        </div>
        </div>
        <!-- End Row -->


        <!-- End Row -->
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts"
        aria-labelledby="offcanvasKeyboardShortcutsLabel">
        <div class="offcanvas-header">
            <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">
                Keyboard shortcuts
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
                <div class="list-group-item">
                    <h5 class="mb-1">Formatting</h5>
                </div>
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="fw-semibold">Bold</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">b</kbd>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <em>italic</em>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">i</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <u>Underline</u>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">u</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <s>Strikethrough</s>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Alt</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">s</kbd>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="small">Small text</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">s</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <mark>Highlight</mark>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">e</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>

            <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
                <div class="list-group-item">
                    <h5 class="mb-1">Insert</h5>
                </div>
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Mention person <a href="#">(@Brian)</a></span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">@</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">+</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <a href="#">#hashtag</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">#hashtag</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Date</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">/date</kbd>
                            <kbd class="d-inline-block mb-1">Space</kbd>
                            <kbd class="d-inline-block mb-1">/datetime</kbd>
                            <kbd class="d-inline-block mb-1">/datetime</kbd>
                            <kbd class="d-inline-block mb-1">Space</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Time</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">/time</kbd>
                            <kbd class="d-inline-block mb-1">Space</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Note box</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">/note</kbd>
                            <kbd class="d-inline-block mb-1">Enter</kbd>
                            <kbd class="d-inline-block mb-1">/note red</kbd>
                            <kbd class="d-inline-block mb-1">/note red</kbd>
                            <kbd class="d-inline-block mb-1">Enter</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>

            <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
                <div class="list-group-item">
                    <h5 class="mb-1">Editing</h5>
                </div>
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Find and replace</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">r</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Find next</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">n</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Find previous</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">p</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Indent</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Tab</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Un-indent</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Tab</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Move line up</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Move line down</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Add a comment</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Alt</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">m</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Undo</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">z</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Redo</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">y</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>

            <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
                <div class="list-group-item">
                    <h5 class="mb-1">Application</h5>
                </div>
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Create new doc</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Alt</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">n</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Present</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">p</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Share</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">s</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Search docs</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">o</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>

                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span>Keyboard shortcuts</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-7 text-end">
                            <kbd class="d-inline-block mb-1">Ctrl</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">Shift</kbd>
                            <span class="text-muted small">+</span>
                            <kbd class="d-inline-block mb-1">/</kbd>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream"
        aria-labelledby="offcanvasActivityStreamLabel">
        <div class="offcanvas-header">
            <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Step -->
            <ul class="step step-icon-sm step-avatar-sm">
                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <div class="step-avatar">
                            <img class="step-avatar" src=".././assets/img/160x160/img9.jpg"
                                alt="Image Description" />
                        </div>

                        <div class="step-content">
                            <h5 class="mb-1">Iana Robinson</h5>

                            <p class="fs-5 mb-1">
                                Added 2 files to task
                                <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                                    Fd-7</a>
                            </p>

                            <ul class="list-group list-group-sm">
                                <!-- List Item -->
                                <li class="list-group-item list-group-item-light">
                                    <div class="row gx-1">
                                        <div class="col-6">
                                            <!-- Media -->
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="avatar avatar-xs"
                                                        src=".././assets/svg/brands/excel-icon.svg"
                                                        alt="Image Description" />
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <span class="d-block fs-6 text-dark text-truncate"
                                                        title="weekly-reports.xls">weekly-reports.xls</span>
                                                    <span class="d-block small text-muted">12kb</span>
                                                </div>
                                            </div>
                                            <!-- End Media -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-6">
                                            <!-- Media -->
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="avatar avatar-xs"
                                                        src=".././assets/svg/brands/word-icon.svg"
                                                        alt="Image Description" />
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <span class="d-block fs-6 text-dark text-truncate"
                                                        title="weekly-reports.xls">weekly-reports.xls</span>
                                                    <span class="d-block small text-muted">4kb</span>
                                                </div>
                                            </div>
                                            <!-- End Media -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </li>
                                <!-- End List Item -->
                            </ul>

                            <span class="small text-muted text-uppercase">Now</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-dark">B</span>

                        <div class="step-content">
                            <h5 class="mb-1">Bob Dean</h5>

                            <p class="fs-5 mb-1">
                                Marked
                                <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                                    Fr-6</a>
                                as
                                <span class="badge bg-soft-success text-success rounded-pill"><span
                                        class="legend-indicator bg-success"></span>"Completed"</span>
                            </p>

                            <span class="small text-muted text-uppercase">Today</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <div class="step-avatar">
                            <img class="step-avatar-img" src=".././assets/img/160x160/img3.jpg"
                                alt="Image Description" />
                        </div>

                        <div class="step-content">
                            <h5 class="h5 mb-1">Crane</h5>

                            <p class="fs-5 mb-1">
                                Added 5 card to <a href="#">Payments</a>
                            </p>

                            <ul class="list-group list-group-sm">
                                <li class="list-group-item list-group-item-light">
                                    <div class="row gx-1">
                                        <div class="col">
                                            <img class="img-fluid rounded" src=".././assets/svg/components/card-1.svg"
                                                alt="Image Description" />
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded" src=".././assets/svg/components/card-2.svg"
                                                alt="Image Description" />
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded" src=".././assets/svg/components/card-3.svg"
                                                alt="Image Description" />
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="text-center">
                                                <a href="#">+2</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <span class="small text-muted text-uppercase">May 12</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-info">D</span>

                        <div class="step-content">
                            <h5 class="mb-1">David Lidell</h5>

                            <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

                            <span class="small text-muted text-uppercase">May 15</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <div class="step-avatar">
                            <img class="step-avatar-img" src=".././assets/img/160x160/img7.jpg"
                                alt="Image Description" />
                        </div>

                        <div class="step-content">
                            <h5 class="mb-1">Rachel King</h5>

                            <p class="fs-5 mb-1">
                                Marked
                                <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                                    Fr-3</a>
                                as
                                <span class="badge bg-soft-success text-success rounded-pill"><span
                                        class="legend-indicator bg-success"></span>"Completed"</span>
                            </p>

                            <span class="small text-muted text-uppercase">Apr 29</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <div class="step-avatar">
                            <img class="step-avatar-img" src=".././assets/img/160x160/img5.jpg"
                                alt="Image Description" />
                        </div>

                        <div class="step-content">
                            <h5 class="mb-1">Finch Hoot</h5>

                            <p class="fs-5 mb-1">
                                Earned a "Top endorsed"
                                <i class="bi-patch-check-fill text-primary"></i> badge
                            </p>

                            <span class="small text-muted text-uppercase">Apr 06</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">
                            <i class="bi-person-fill"></i>
                        </span>

                        <div class="step-content">
                            <h5 class="mb-1">Project status updated</h5>

                            <p class="fs-5 mb-1">
                                Marked
                                <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                                    Fr-3</a>
                                as
                                <span class="badge bg-soft-primary text-primary rounded-pill"><span
                                        class="legend-indicator bg-primary"></span>"In
                                    progress"</span>
                            </p>

                            <span class="small text-muted text-uppercase">Feb 10</span>
                        </div>
                    </div>
                </li>
                <!-- End Step Item -->
            </ul>
            <!-- End Step -->

            <div class="d-grid">
                <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-close">
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body p-sm-5">
                    <div class="text-center">
                        <div class="w-75 w-sm-50 mx-auto mb-4">
                            <img class="img-fluid" src=".././assets/svg/illustrations/oc-collaboration.svg"
                                alt="Image Description" data-hs-theme-appearance="default" />
                            <img class="img-fluid" src=".././assets/svg/illustrations-light/oc-collaboration.svg"
                                alt="Image Description" data-hs-theme-appearance="dark" />
                        </div>

                        <h4 class="h1">Welcome to Front</h4>

                        <p>We're happy to see you in our community.</p>
                    </div>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="modal-footer d-block text-center py-sm-5">
                    <small class="text-cap text-muted">Trusted by the world's best teams</small>

                    <div class="w-85 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img class="img-fluid" src=".././assets/svg/brands/gitlab-gray.svg"
                                    alt="Image Description" />
                            </div>
                            <div class="col">
                                <img class="img-fluid" src=".././assets/svg/brands/fitbit-gray.svg"
                                    alt="Image Description" />
                            </div>
                            <div class="col">
                                <img class="img-fluid" src=".././assets/svg/brands/flow-xo-gray.svg"
                                    alt="Image Description" />
                            </div>
                            <div class="col">
                                <img class="img-fluid" src=".././assets/svg/brands/layar-gray.svg"
                                    alt="Image Description" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>

    <!-- End Welcome Message Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src=".././assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src=".././assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src=".././assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src=".././assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
    <script src=".././assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

    <script src=".././assets/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js"></script>
    <script src=".././assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
    <script src=".././assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src=".././assets/vendor/imask/dist/imask.min.js"></script>

    <!-- JS Front -->
    <script src=".././assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            window.onload = function() {
                // INITIALIZATION OF NAVBAR VERTICAL ASIDE
                // =======================================================
                new HSSideNav(".js-navbar-vertical-aside").init();

                // INITIALIZATION OF FORM SEARCH
                // =======================================================
                new HSFormSearch(".js-form-search");

                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init();

                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init(".js-select");

                // INITIALIZATION OF ADD FIELD
                // =======================================================
                new HSAddField(".js-add-field", {
                    addedField: (field) => {
                        HSCore.components.HSTomSelect.init(
                            field.querySelector(".js-select-dynamic")
                        );
                        HSCore.components.HSMask.init(
                            field.querySelector(".js-input-mask")
                        );
                    },
                });

                // INITIALIZATION OF INPUT MASK
                // =======================================================
                HSCore.components.HSMask.init(".js-input-mask");
            };
        })();
    </script>

    <!-- Style Switcher JS -->

    <script>
        (function() {
            // STYLE SWITCHER
            // =======================================================
            const $dropdownBtn = document.getElementById("selectThemeDropdown"); // Dropdowon trigger
            const $variants = document.querySelectorAll(
                `[aria-labelledby="selectThemeDropdown"] [data-icon]`
            ); // All items of the dropdown

            // Function to set active style in the dorpdown menu and set icon for dropdown trigger
            const setActiveStyle = function() {
                $variants.forEach(($item) => {
                    if (
                        $item.getAttribute("data-value") ===
                        HSThemeAppearance.getOriginalAppearance()
                    ) {
                        $dropdownBtn.innerHTML = `<i class="${$item.getAttribute(
              "data-icon"
            )}" />`;
                        return $item.classList.add("active");
                    }

                    $item.classList.remove("active");
                });
            };

            // Add a click event to all items of the dropdown to set the style
            $variants.forEach(function($item) {
                $item.addEventListener("click", function() {
                    HSThemeAppearance.setAppearance($item.getAttribute("data-value"));
                });
            });

            // Call the setActiveStyle on load page
            setActiveStyle();

            // Add event listener on change style to call the setActiveStyle function
            window.addEventListener("on-hs-appearance-change", function() {
                setActiveStyle();
            });
        })();
    </script>

    <!-- End Style Switcher JS -->


    
</body>

</html>
