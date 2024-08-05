import googlePng from "../../../assets/logos/google.png"

export default function UserRegister() {
    return (
        <div>
            <nav className="py-4">
                <div className="container">
                    <a className="navbar-brand fw-bold text-primary fs-4" href="/">Kribb</a>
                </div>
            </nav>
            <div className="d-flex align-items-center justify-content-center">
                <div className="col-md-6 col-lg-3 my-4 container">
                    <div className="mt-3">
                        <h1 className="fs-3 m-0 fw-bold">Create an Account</h1>
                        <p>Your crib is just a 1011011 away 🤩</p>
                    </div>

                    <form className="row g-1 animated-2 fadeIn">
                        <div className="mb-4">
                            <button className="btn btn-outline-dark border-1 w-100 rounded-3 py-2 fw-bold">
                            <img src={googlePng} alt="..."
                                    style={{ width: "19px", position: "relative", top: "-2px" }} /> &nbsp; Sign up with google
                            </button>
                        </div>

                        <div className="horizontal-line mb-3">
                            <hr />
                            <span className="text-in-between text-secondary fs-tiny">OR</span>
                            <hr />
                        </div>

                        <div className="mb-3">
                            <label className="fw-semibold" htmlFor="name">Full name</label>
                            <input type="text" name="name" className="form-control border rounded-3 py-2 shadow-0"
                                id="name" placeholder="John Doe" required />
                        </div>

                        <div className="mb-3">
                            <label className="fw-semibold" htmlFor="email">Email</label>
                            <input type="email" name="email" className="form-control border rounded-3 py-2 shadow-0"
                                id="email" placeholder="valid@email.com" required />
                        </div>

                        <div className="mb-3">
                            <label className="fw-semibold" htmlFor="password">Password</label>
                            <input type="password" name="password" className="form-control border rounded-3 py-2 shadow-0"
                                id="password" placeholder="********" required />
                        </div>

                        <div className="mb-2">
                            <label className="fw-semibold" htmlFor="password_confirmation">Confirm password</label>
                            <input type="password" name="password_confirmation"
                                className="form-control border rounded-3 py-2 shadow-0" id="password_confirmation"
                                placeholder="********" required />
                        </div>

                        <div className="text-start" style={{ fontSize: "12px" }}>
                            By signing up, you agree to Kribb's
                            <a href="#" className="fw-semibold text-decoration-none text-red">
                                Terms of Service</a> and
                            <a href="#" className="fw-semibold text-decoration-none text-red">Privacy Policy</a>.
                        </div>

                        <div className="col-12 mt-4">
                            <button type="submit" className="btn btn-primary rounded-3 fw-bold shadow-sm w-100 text-white py-2">
                                Register account
                            </button>
                        </div>
                    </form>
                    <div className="my-3 text-center">
                        <small>
                            Already registered?
                            <a href="{{ route('user.login') }}" className="fw-semibold text-decoration-none text-red">
                                Log In
                            </a>
                        </small>
                    </div>

                </div>
            </div>
        </div>
    )
}
