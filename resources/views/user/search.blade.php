<x-layouts.user>
    <div class="container">
        <h2 class="fs-4 mb-3 fw-bold text-dark">
            Deep search
        </h2>

        <div class="row mb-5">
            <div class="col-12 col-md-6">
                <label for="user-search"
                    class="bg-body-tertiary d-flex align-items-center gap-3 ps-3 rounded-3 bordeer shadow-sm border-bottom">
                    <i class="bi bi-search fw-bold text-secondary fs-4"></i>
                    <input type="search" id="user-searach"
                        class="border-0 py-3 px-3 fs-5 fw-light bg-body-tertiary w-100" />
                </label>
            </div>
        </div>

        <div class="d-md-flex align-items-center flex-wrap gap-3">
            <x-cards.listing-card />
            <x-cards.listing-card />
            <x-cards.listing-card />
            <x-cards.listing-card />
        </div>

    </div>
</x-layouts.user>
