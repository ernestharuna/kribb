export default function DefaultLoader() {
    return (
        <div className="w-100 d-flex justify-content-center align-items-center z-3" style={{ height: "100dvh" }}>
            <div>
                <div className="spinner-grow text-primary" style={{ width: "3rem", height: "3rem" }} role="status">
                    <span className="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    )
}
