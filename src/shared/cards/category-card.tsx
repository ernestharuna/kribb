export default function CategoryCard() {
    return (
        <div className="col mb-3">
            <div className="card h-100 border-0 rounded-4">
                <div className="">
                    <div className="mb-2" id="course-card-img">
                        <div className="rounded-4 bg-secondary bg-gradient h-100 w-100 bg-secondary bg-gradient p-2 ">
                            <div className="d-flex align-items-center justify-content-between">
                                <small className="d-inline-block rounded-5 text-white px-2 fw-semibold">
                                    House category
                                </small>
                                <small className="d-inline-block rounded-5 bg-light text-dark px-2 fw-semibold">
                                    123
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}