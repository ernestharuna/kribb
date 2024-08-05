import ErrorPage from "../../shared/errors/error-page";
import VendorLayout from "../../shared/layouts/vendor-layout";

export const vendorRoutes =
{
    path: "/vendor",
    element: <VendorLayout />,
    errorElement: <ErrorPage />,
    children: [
        {
            errorElement: <ErrorPage />,
            children: [
                { index: true, element: "vendor" }
            ]
        }
    ]
}