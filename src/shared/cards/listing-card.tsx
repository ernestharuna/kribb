export default function ListingCard() {
    return (
        <div className="col mb-3">
            <div className="card h-100 border border-start rounded-4">
                <div className="px-2 pt-2">
                    <div className="mb-2" id="listing-card-img">
                        <div className="rounded-4 bg-secondary bg-gradient h-100 w-100 bg-secondary bg-gradient p-2">
                            <div className="text-end" title="Mark as favourite">
                                <div className="d-inline-block rounded-5 bg-white px-2 py-1 fw-semibold">
                                    <i className="bi bi-heart-fill text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="card-body mb-2 px-2 py-0">
                    <h3 className="card-title fs-5 fw-semibold m-0">
                        <a href="#" className="text-decoration-none text-dark">
                            3 bedroom duplex
                        </a>
                    </h3>
                    <div className="mb-2">
                        <p className="fs-tiny fw-normal m-0">
                            <small>Ebenezer Ayo</small>
                        </p>
                        <div className="text-warning fs-6">
                            <i className="bi bi-star-fill"></i>
                            <i className="bi bi-star-fill"></i>
                            <i className="bi bi-star-fill"></i>
                            <i className="bi bi-star-fill"></i>
                            <i className="bi bi-star-half"></i>
                            <span className="text-dark">
                                (4.8)
                            </span>
                        </div>
                    </div>
                </div>
                <div className="card-footer px-2 pt-0 border-0 bg-white rounded-4">
                    <div className="fs-6 pb-1">
                        <p className="mb-0 d-inline-block">
                            <span className="fw-semibold text-dark">
                                &#8358;30,000,000
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    )
}
