<x-app>
    <style>
        .horizontal-line {
            display: flex;
            align-items: center;
        }

        .horizontal-line hr {
            flex-grow: 1;
            height: 1px;
            border: none;
            background-color: #000;
            /* Change this to adjust the line color */
        }

        .text-in-between {
            margin: 0 10px;
            /* Adjust spacing as needed */
        }
    </style>

    <nav class="py-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="/">Kribb</a>
        </div>
    </nav>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-lg-3 my-4 container">
            <div class="mt-3">
                <h1 class="fs-3 m-0 fw-bold">Create an Account</h1>
                <p>Your crib is just a 1011011 away 🤩</p>
            </div>

            <form method="POST" action="{{ route('user.register.request') }}" class="row g-1 animated-2 fadeIn">
                @csrf
                <div class="mb-4">
                    <button class="btn btn-outline-dark border-1 w-100 rounded-3 py-2 fw-bold">
                        <img src="{{ asset('images/google.png') }}" alt="..."
                            style="width: 19px; position:relative; top:-2px;" /> &nbsp; Sign up with google
                    </button>
                </div>

                <div class="horizontal-line mb-3">
                    <hr>
                    <span class="text-in-between text-secondary fs-tiny">OR</span>
                    <hr>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold" for="name">Full name</label>
                    <input type="text" name="name" class="form-control border rounded-3 py-2 shadow-0"
                        id="name" placeholder="John Doe" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold" for="email">Email</label>
                    <input type="email" name="email" class="form-control border rounded-3 py-2 shadow-0"
                        id="email" placeholder="valid@email.com" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold" for="password">Password</label>
                    <input type="password" name="password" class="form-control border rounded-3 py-2 shadow-0"
                        id="password" placeholder="********" value="{{ old('password') }}" required>
                </div>

                <div class="mb-2">
                    <label class="fw-semibold" for="password_confirmation">Confirm password</label>
                    <input type="password" name="password_confirmation"
                        class="form-control border rounded-3 py-2 shadow-0" id="password_confirmation"
                        placeholder="********" value="{{ old('password_confirmation') }}" required>
                </div>

                {{-- Form errors --}}
                <div class="animated-2 fadeIn mb-3">
                    @error('name')
                        <x-typography.form-error :message="$message" />
                    @enderror
                    @error('last_name')
                        <x-typography.form-error :message="$message" />
                    @enderror
                    @error('email')
                        <x-typography.form-error :message="$message" />
                    @enderror
                    @error('password')
                        <x-typography.form-error :message="$message" />
                    @enderror
                </div>

                <div class="text-start" style="font-size: 12px">
                    By signing up, you agree to Kribb's
                    <a href="#" class="fw-semibold text-decoration-none text-red">
                        Terms of Service</a> and
                    <a href="#" class="fw-semibold text-decoration-none text-red">Privacy Policy</a>.
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary rounded-3 fw-bold shadow-sm w-100 text-white py-2">
                        Register account
                    </button>
                </div>
            </form>
            <div class="my-3 text-center">
                <small>
                    Already registered?
                    <a href="{{ route('user.login') }}" class="fw-semibold text-decoration-none text-red">
                        Log In
                    </a>
                </small>
            </div>

        </div>
    </div>
</x-app>
