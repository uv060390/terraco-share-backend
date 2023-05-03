<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
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

        .avatar.avatar-sm.avatar-circle {
            background: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <!-- Title -->
    <title>Add Customers | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css" />
    <link rel="stylesheet" href="./assets/vendor/quill/dist/quill.snow.css" />

    <!-- CSS Front Template -->

    <link rel="preload" href="./assets/css/theme.min.css" data-hs-appearance="default" as="style" />
    <link rel="preload" href="./assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style" />

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
    <script src="./assets/js/hs.theme-appearance.js"></script>

    <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

    <!-- ========== HEADER ========== -->

    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
        <div class="navbar-nav-wrap">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('admin.list') }}" aria-label="Front">
                <img class="navbar-brand-logo" src="./assets/images/logo-admin.png" alt="Logo"
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
                                    <a class="btn btn-soft-dark btn-xs rounded-pill" href="{{ route('admin.list') }}">
                                        Gulp <i class="bi-search ms-1"></i>
                                    </a>
                                    <a class="btn btn-soft-dark btn-xs rounded-pill" href="{{ route('admin.list') }}">
                                        Notification panel <i class="bi-search ms-1"></i>
                                    </a>
                                </div>

                                <div class="dropdown-divider"></div>

                                <span class="dropdown-header">Tutorials</span>

                                <a class="dropdown-item" href="{{ route('admin.list') }}">
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

                                <a class="dropdown-item" href="{{ route('admin.list') }}">
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

                                <a class="dropdown-item" href="{{ route('admin.list') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-xs avatar-circle"
                                                src="./assets/img/160x160/img10.jpg" alt="Image Description" />
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>Amanda Harvey
                                                <i class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Top endorsed"></i></span>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="{{ route('admin.list') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-xs avatar-circle"
                                                src="./assets/img/160x160/img3.jpg" alt="Image Description" />
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <span>David Harrison</span>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="{{ route('admin.list') }}">
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
                            <a class="card-footer text-center" href="{{ route('admin.list') }}">
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
                                <div class="avatar avatar-sm avatar-circle">D</div>
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
        <!-- Content -->
        <div class="content container-fluid">
            <!-- End Row -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Property List</h1>
                        <div class="d-flex gap-3">
                            <a href="/listing/create">
                                <button type="button" class="btn btn-primary d-flex align-items-center">
                                    Create List
                                </button>
                            </a>
                            <a href="/contact-us">
                                <button type="button" class="btn btn-primary d-flex align-items-center">
                                    Contact us list
                                </button>
                            </a>

                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <!-- Card -->
            <div class="card">
                <!-- Header -->

                <!-- End Header -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="realestate"
                        class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll" />
                                        <label class="form-check-label"> </label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th class="table-column-ps-0">Image</th>
                                <th>Name</th>
                                <th>Project</th>
                                <th>Developer</th>
                                <th>Super Built-up</th>
                                <th>Price</th>
                                <th>Booking Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td class="table-column-pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="datatableCheckAll1" />
                                            <label class="form-check-label" for="datatableCheckAll1"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-ps-0">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-lg"
                                                    src="{{ asset('storage/upload/listing/' . $data->featured_image) }}"
                                                    alt="Image Description" />
                                            </div>
                                        </a>
                                    </td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->project }}</td>
                                    <td>{{ $data->developer }}</td>
                                    <td>{{ $data->super_builtup_area }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->booking_date }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-white btn-sm" href="/listing/{{ $data->id }}">
                                                <i class="bi-pencil-fill me-1"></i>
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#welcomeMessageModal"
                                                class="btn btn-white btn-sm delete-listing"
                                                data-href="{{ route('admin.listing.delete', $data->id) }}"
                                                href="/listing/delete/{{ $data->id }}">
                                                <i class="bi-trash dropdown-item-icon"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
            </div>
            <!-- End Card -->
        </div>
    </main>

    <!-- Welcome Message Modal -->
    <form id="listing-form" action="{{ route('admin.listing.delete', $data->id) }}" method="POST">
        @csrf
        <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-close">
                        <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi-x-lg"></i>
                        </button>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="modal-body p-sm-5">
                        <div class="text-center">
                            <h4 class="h1">Do you want to delete this list ?</h4>
                        </div>
                        <div class="swal2-actions" style="display: flex">
                            <div class="swal2-loader"></div>
                            <button type="submit" class="swal2-confirm swal2-styled" aria-label=""
                                style="display: inline-block">
                                Delete
                            </button>
                            <button type="submit" class="swal2-cancel swal2-styled" aria-label=""
                                style="display: inline-block">
                                Cancel
                            </button>
                        </div>
                    </div>
                    <!-- End Body -->
                </div>
            </div>
        </div>
    </form>

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
                            <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description" />
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
                                                        src="./assets/svg/brands/excel-icon.svg"
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
                                                        src="./assets/svg/brands/word-icon.svg"
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
                            <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg"
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
                                            <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg"
                                                alt="Image Description" />
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg"
                                                alt="Image Description" />
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg"
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
                            <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg"
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
                            <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg"
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

    <!-- End Welcome Message Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
    <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

    <script src="./assets/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js"></script>
    <script src="./assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
    <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src="./assets/vendor/imask/dist/imask.min.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>


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
    <script type="text/javascript">
        // var table = $('#realestate').DataTable({
        //     responsive: true,
        //     ordering: true,
        //     serverSide: true,
        //     ajax: {
        //         url: '{{ route('admin.listing.datatables') }}',
        //         data: function(d) {}
        //     },
        //     columns: [{
        //             data: 'id',
        //             name: 'id',
        //             searchable: true,
        //         },
        //         {
        //             data: 'feature_image',
        //             name: 'feature_image',
        //             searchable: true,
        //         },
        //         {
        //             data: 'name',
        //             name: 'name',
        //             orderable: true
        //         },
        //         {
        //             data: 'project',
        //             name: 'project'
        //         },
        //         {
        //             data: 'developer',
        //             name: 'developer'
        //         },
        //         {
        //             data: 'super_builtup_area',
        //             name: 'super_builtup_area'
        //         },
        //         {
        //             data: 'price',
        //             name: 'price'
        //         },
        //         {
        //             data: 'booking_date',
        //             name: 'booking_date'
        //         },
        //         {
        //             data: 'action',
        //             searchable: false,
        //             orderable: false
        //         }

        //     ],
        //     language: {
        //         // processing: '">'
        //     },

        // });


        $(document).ready(function() {
            $('#status').change(function() {
                table.draw();
            });
            $(document).on("change", ".change-status", function() {
                table.draw();
            })

            $(document).on("click", ".delete-listing", function() {
                $("#listing-form").attr("action", $(this).attr('data-href'))
            })
        })

        $(document).on("click", ".nav-item", function() {
            $(".nav-link").removeClass("active");
            $("#status").val($(this).attr('data-value'));
            table.draw();
            $(this).children(".nav-link").addClass("active");
        })

        $(document).on("click", ".delete-lot", function() {
            let url = $(this).attr('data-href');
            Swal.fire({
                title: 'Are you want to Delete',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Delete',
                // denyButtonText: `Don't Delete`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                var form = $('#delete-form')[0]; // You need to use standard javascript object here
                var formData = new FormData(form);
                if (result.isConfirmed) {
                    $(".loader").show();
                    $.ajax({
                        url: url,
                        data: formData,
                        type: 'POST',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            $(".loader").hide();
                            Swal.fire(
                                'Success!',
                                'Data Saved Successfully!',
                                'success'
                            )
                            Swal.fire('Deleted!', '', 'success')
                            table.draw();
                        },

                        error: function() {
                            $(".loader").hide();
                        }

                    });
                } else if (result.isDenied) {
                    Swal.fire('Lot are not Deleted', '', 'info')
                }
            })
        });



        var typingTimer; //timer identifier
        var doneTypingInterval = 400; //time in ms, 5 seconds for example
        var $input = $('#datatableSearch');

        //on keyup, start the countdown
        $input.on('keyup', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);

        });

        //on keydown, clear the countdown 
        $input.on('keydown', function() {
            clearTimeout(typingTimer);
        });
        //user is "finished typing," do something
        function doneTyping() {
            table.search($input.val()).draw();
        }
        {{-- DATA TABLE ENDS --}}
    </script>

    <!-- End Style Switcher JS -->
</body>

</html>
