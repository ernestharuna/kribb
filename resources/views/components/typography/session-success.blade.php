@if (session('success'))
    <!-- An unexamined life is not worth living. - Socrates -->
    <div class="border border-success rounded-3 text-success shadow bg-success-subtle" id="flash-message">
        <div class="d-flex justify-content-between align-items-center border-bottom px-2 py-1">
            <div class="me-5 fs-6">
                <div class="fw-bold">Success <i class="bi bi-check-circle-fill text-success"></i></div>
                <div>
                    {{ session('success') }}
                </div>
            </div>
            <div class="ms-4">
                <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close"
                    id="dismiss-button" style="position: relative; top: 2px"></button>
            </div>
        </div>
    </div>
@endif
