<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ $title ?? 'Kribb: Renting homes made easy and fast' }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-body-tertiary">
        <div class="container mb-5">
            <div class="d-flex align-items-center gap-2 pt-5 pb-3 mb-4">
                <div class="bg-secondary-subtle rounded-5" style="width: 60px; height: 60px"></div>
                <div class="lh-sm">
                    <h2 class="fw-bold mb-0">{{ Auth::user()->name }}</h2>
                    <p class="m-0">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <div class="d-flex gap-3 align-items-center pb-4 mx-auto"
                style="overflow-x: auto; white-space: nowrap; width: 100%; margin: 0; padding: 0;">
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2 position-relative"
                    style="width: max-content; ">
                    <div class="bg-primary-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue"
                            class="bi bi-app" viewBox="0 0 16 16">
                            <path
                                d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Home</h4>
                        <a href="{{ route('user.dashboard') }}"
                            class="stretched-link text-secondary text-decoration-none mb-0">Your
                            dashboard</a>
                    </div>
                </div>
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2 position-relative"
                    style="width: max-content; ">
                    <div class="bg-danger-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Saved/Favourites</h4>
                        <a href="{{ route('user.favourites') }}"
                            class="stretched-link text-secondary text-decoration-none mb-0">Find saved
                            listings</a>
                    </div>
                </div>
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2 position-relative"
                    style="width: max-content; ">
                    <div class="bg-warning-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Search</h4>
                        <a href="{{ route('user.search') }}"
                            class="stretched-link text-secondary text-decoration-none mb-0">Search
                            listings</a>
                    </div>
                </div>
                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2 position-relative"
                    style="width: max-content; ">
                    <div class="bg-body-secondary p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray"
                            class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                            <path
                                d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Latest</h4>
                        <a href="{{ route('user.latest') }}"
                            class="stretched-link text-secondary text-decoration-none mb-0">News updates
                            from Kribb
                        </a>
                    </div>
                </div>

                <div class="bg-white shadow-sm p-3 rounded-4 lh-sm d-flex align-items-center gap-2 position-relative"
                    style="width: max-content; ">
                    <div class="bg-success-subtle p-3 rounded-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="fs-5 mb-1">Profile</h4>
                        <a href="{{ route('user.profile') }}"
                            class="stretched-link text-secondary text-decoration-none mb-0">Manage your
                            account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $slot }}
    <x-typography.session />
    <hr class="py-5 invisible" />
</body>

</html>
