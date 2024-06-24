<x-layouts.user>
    <div class="container">
        <h2 class="fs-4 mb-4 fw-bold text-dark">
            Your favourites
        </h2>
        <div class="d-md-flex align-items-center flex-wrap gap-3">
            <x-cards.listing-card />
            <x-cards.listing-card />
            <x-cards.listing-card />
            <x-cards.listing-card />
        </div>
    </div>

    <hr class="py-3 invisible" />

    <div class="container">
        <h2 class="fs-4 mb-4 fw-bold text-dark">
            Recently viewed
        </h2>
        <div class="row row-cols-2 row-cols-lg-5 g-3">
            <x-cards.secondary-listing />
            <x-cards.secondary-listing />
            <x-cards.secondary-listing />
            <x-cards.secondary-listing />
            <x-cards.secondary-listing />
        </div>
    </div>
</x-layouts.user>
