import ErrorPage from "../../shared/errors/error-page";
import UserLayout from "../../shared/layouts/user-layout";
import DefaultLoader from "../../shared/loaders/default-loader";

export const userRoutes = {
    path: "/user",
    element: <UserLayout />,
    errorElement: <ErrorPage />,
    children: [
        {
            errorElement: <ErrorPage />,
            children: [
                { index: true, element: <DefaultLoader/> }
            ]
        }
    ]
}