<x-app>
    <div class="bg-primary bg-gradient pb-5">
        <nav class="navbar navbar-expand-lg py-4">
            <div class="container">
                <a class="navbar-brand fw-bold text-warning" href="#">Kribb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 shadow-none rounded-5 bg-body-secondary border-0 fw-bolder"
                            type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-warning fw-bold px-4 rounded-5" type="submit"
                            style="width: max-content">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <header class="py-5 container-fluid">
            <div class="text-center">
                <h1 class='my-3 display-2 smooth-font text-white' style="font-weight: 800; letter-spacing: -1px;">
                    Home rentals made easy
                    {{-- <br class="d-none d-lg-block"> --}}
                </h1>
                <p class="mt-4 mb-5 fs-5 text-white">
                    Finding and renting homes got easier, <br class="d-none d-lg-block"> get connected with
                    trusted and verified agents across your city.
                </p>

                <div class="cta">
                    <a href="#"
                        class='text-decoration-none btn btn-light rounded-5 fw-bold px-5 py-2 shadow text-primary d-md-inline-block d-block'>
                        Get started <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="#"
                        class='fw-semibold rounded-5 px-4 py-2 text-decoration-none text-white text-center d-md-inline-block d-block ms-md-3 mt-3 mt-md-0'>
                        Hire a consultant <i class="bi bi-stars text-warning"></i>
                    </a>
                </div>
                <span src="{{ asset('images/owenabulb.png') }}" class="glow opacity-25">
                </span>

            </div>
        </header>

        <div class="my-5">
            <div class="container">
                <div class="row container mx-auto align-items-center rounded-4 p-4" style="background: #fff">
                    <div class="col-md-5 col-sm-12 mb-3">
                        <p class="fw-semibold mb-1 fs-5">Location</p>
                        <div>
                            <input type="text"
                                class="form-control custom-input border-0 shadow-sm w-100 d-block py-3" style=""
                                placeholder="Search your desired location" />
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 mb-3">
                        <p class="fw-semibold mb-1 fs-5">Your budget</p>
                        <div>
                            <input type="text"
                                class="form-control custom-input border-0 shadow-sm w-100 d-block py-3" style=""
                                placeholder="Your budget in Naira" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button class="btn btn-primary w-100 py-md-4 py-3 fw-bold">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="my-5">
        <div class="container mb-5">
            <h2 class="fs-4 mb-4 fw-bold text-dark">
                Browse homes within Abuja
            </h2>
            <div class="row row-cols-2 row-cols-lg-4 g-3">
                <x-cards.category-card />
                <x-cards.category-card />
                <x-cards.category-card />
                <x-cards.category-card />
            </div>
        </div>

        <div class="bg-body-tertiary py-4 mb-5">
            <div class="text-center">
                <h2 class="fs-1 fw-bolder">Find your next home <br class="d-block d-md-none" /> with ease</h2>
                <p class="text-secondary">
                    Trusted by 137 happy citizens
                </p>
            </div>

            <div class="d-flex gap-3 justify-content-md-center align-items-center pb-4 px-3 mx-auto"
                style="overflow-x: auto; white-space: nowrap; width: 100%; margin: 0; padding: 0;">
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2"
                    style="width: max-content; ">
                    <div class="bg-success-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green"
                            class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Trusted Agencies & Vendors</h4>
                        <p class="mb-0">Agencies and vendors are well reviewed constantly.</p>
                    </div>
                </div>
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2"
                    style="width: max-content; ">
                    <div class="bg-danger-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#D22200"
                            class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z" />
                            <path
                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Best offers via email</h4>
                        <p class="mb-0">Subscribe to our newsletter for tailored listings.</p>
                    </div>
                </div>
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2"
                    style="width: max-content; ">
                    <div class="bg-warning-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fbca5a"
                            class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Trusted Agencies & Vendors</h4>
                        <p class="mb-0">Agencies and vendors are well reviewed constantly.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="fs-4 mb-4 fw-bold text-dark">
                Hottest picks ✨
            </h2>
            <div class="d-md-flex align-items-center flex-wrap gap-3">
                <x-cards.listing-card />
                <x-cards.listing-card />
                <x-cards.listing-card />
                <x-cards.listing-card />
            </div>
            <div class="mt-4">
                <a href="#" class="btn btn-outline-primary px-4 py-3 rounded-5 fw-bold text-decoration-none">
                    Discover more <i class="bi bi-chevron-right ms-3"></i>
                </a>
            </div>
        </div>
    </main>

    <div class="container">
        <div class="rounded-5 p-md-5 p-4 bg-primary bg-gradient" style="margin: 5rem 0">
            <h3 class="display-3 fw-bold text-white mb-3">
                Subscribe to <br class="d-md-none d-block">Kribb
            </h3>
            <div>
                <p class="fs-5 lh-sm mb-5 text-white fw-semibold"">
                    Get instant email of all new listings personalised to your preferences
                </p>
            </div>

            <div class="cta">
                <a href="#"
                    class='text-decoration-none btn btn-light rounded-5 fw-bold px-5 py-2 shadow text-primary d-md-inline-block d-block'>
                    Get started <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#"
                    class='fw-bold rounded-5 px-4 py-2 text-white text-center text-decoration-none d-md-inline-block d-block ms-md-3 mt-3 mt-md-0'>
                    Start with courses <i class="ms-2 bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <footer class='bg-body-tertiary py-4' id="footer">
        <div class="container text-dark fs-6">
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <div>
                        {{-- <img src={{ asset('images/logo.png') }} alt="..." class="img-fluid" width="25"> --}}
                        <div class="d-inline-block fw-bold text-primary fs-4" style="position: relative; top: 3px">
                            Kribb
                        </div>
                    </div>

                </div>
                <p class="fs-6 mt-2">
                    <span class="fw-semibold text-theme">Easy, trusted rentals</span> <br>
                    Fostering global connections, leveraging experts <br> to empower learners through mentorship.
                </p>
            </div>
            <hr>
            <div class="mt-3 d-md-flex">
                <div class="p-2 flex-fill">
                    <h2 class='fs-6'>
                        SOCIALS
                    </h2>
                    <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank"
                        class='text-dark d-block text-decoration-none fw-light fs-6'>
                        Instagram <i class="bi bi-arrow-right-short"></i>
                    </a>

                    <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08" target="_blank"
                        class="text-dark d-block text-decoration-none fw-light fs-6">
                        X (formerly twitter) <i class="bi bi-arrow-right-short"></i>
                    </a>

                    <a href="https://www.facebook.com/owenahub?mibextid=ZbWKwL" target="_blank"
                        class="text-dark d-block text-decoration-none fw-light fs-6">
                        Facebook <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>

                <div class="p-2 flex-fill">
                    <h2 class='fs-6'>
                        CONTACT
                    </h2>
                    <a href="mailto:hello@kribb.com"
                        class="d-block text-decoration-none text-dark fs-6 fw-light">hello@kribb.com</a>
                    <a href="mailto:ebenezer@gmail.com"
                        class="d-block text-decoration-none text-dark fs-6 fw-light">ebenezer@kribb.com</a>
                    <a href="mailto:ernest@kribb.com"
                        class="d-block text-decoration-none text-dark fs-6 fw-light">ernest@kribb.com</a>
                </div>

                <div class="p-2 flex-fill">
                    <h2 class='fs-6'>
                        QUICK LINKS
                    </h2>
                    <a href="/articles" class="d-block text-decoration-none text-dark fs-6 fw-light">
                        Blog <i class="bi bi-arrow-right-short"></i>
                    </a>
                    <a href=#" class="d-block text-decoration-none text-dark fs-6 fw-light">
                        Register: <span class="text-theme fw-semibold">More benefits</span> <i
                            class="bi bi-arrow-right-short"></i>
                    </a>
                    <a href=#" class="d-block text-decoration-none text-dark fs-6 fw-light">
                        Consultants <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>

                <div class="p-2 flex-fill">
                    <h2 class='fs-6'>
                        COMMUNITIES
                    </h2>
                    <a href="https://linkedin.com/company/owenahub"
                        class="d-block text-decoration-none text-dark fs-6 fw-light">
                        LinkedIn Community <i class="bi bi-arrow-right-short"></i>
                    </a>

                    <a href="https://www.facebook.com/groups/896520008575738/?ref=share"
                        class="d-block text-decoration-none text-dark fs-6 fw-light">
                        Facebook Community <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>


            <div class="my-4 d-md-flex justify-content-between align-items-center">
                <p class="m-0 fs-6">
                    &copy; 2024, Kribb. All Rights Reserved.
                </p>
                <p class="m-0 fs-6">
                    <a href="#" class="text-dark text-decoration-none">
                        Privacy Policy
                    </a>
                    &middot;
                    <a href="#" class="text-dark text-decoration-none">
                        Terms of Service
                    </a>
                </p>
            </div>
        </div>
    </footer>

</x-app>
