<x-layouts.user>
    <div class="container">
        <h2 class="fs-4 mb-4 fw-bold text-dark">
            Profile information
        </h2>
        <form action="#" class="col-md-6 col-12">
            <div class="mb-3">
                <label class="fw-semibold" for="name">Full name</label>
                <input type="text" name="name" class="form-control border rounded-3 py-2 shadow-0" id="name"
                    placeholder="John Doe" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold" for="email">Email</label>
                <input type="email" name="email" class="form-control border rounded-3 py-2 shadow-0" id="email"
                    placeholder="valid@email.com" value="{{ old('email') }}" required>
            </div>
            <button class="btn btn-dark text-white fw-semibold px-3">Update profile</button>
        </form>

        <hr class="my-4 invisible" />

        <form action="#" class="col-md-6 col-12">
            <div class="mb-3">
                <label class="fw-semibold" for="email">Your city</label>
                <input type="email" name="email" class="form-control border rounded-3 py-2 shadow-0" id="email"
                    placeholder="valid@email.com" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold" for="email">Home size</label>
                <input type="email" name="email" class="form-control border rounded-3 py-2 shadow-0" id="email"
                    placeholder="valid@email.com" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold" for="email">Your Budget</label>
                <input type="email" name="email" class="form-control border rounded-3 py-2 shadow-0" id="email"
                    placeholder="valid@email.com" value="{{ old('email') }}" required>
            </div>

            <button class="btn btn-dark text-white fw-semibold px-3">Update preference</button>

        </form>
    </div>

    <hr class="py-3 invisible" />

    <div class="container">
        <h2 class="fs-4 mb-4 fw-bold text-dark">
            Account management
        </h2>
        <form action="#" class="col-md-6 col-12">
            <div class="mb-3">
                <label class="fw-semibold" for="password">Password</label>
                <input type="password" name="name" class="form-control border rounded-3 py-2 shadow-0" id="password"
                    placeholder="******" required>
            </div>
            <div class="mb-3">
                <label class="fw-semibold" for="password">Confirm password</label>
                <input type="password" name="name" class="form-control border rounded-3 py-2 shadow-0" id="password"
                    placeholder="******" required>
            </div>
            <button class="btn btn-dark text-white fw-semibold px-3 me-3">Update password</button>
            <a href="{{ route('user.logout') }}" class="btn btn-danger text-white fw-light px-3">Log out</a>
        </form>
    </div>
</x-layouts.user>
