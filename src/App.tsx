import { Suspense } from 'react';
import './App.css'

import DefaultLoader from './shared/loaders/default-loader';
import DefaultLayout from './shared/layouts/default-layout';

import ErrorPage from './shared/errors/error-page';
import Welcome from './modules/guest/welcome';

import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import { userRoutes } from './modules/user/router';
import { vendorRoutes } from './modules/vendor/router';
import UserRegister from './modules/user/auth/user-register';
import VendorRegister from './modules/vendor/auth/vendor-register';

export default function App() {
  const router = createBrowserRouter([
    {
      path: "/",
      element: <DefaultLayout />,
      errorElement: <ErrorPage />,
      children: [
        { index: true, element: <Welcome /> },
        {
          path: "user/register",
          element: <UserRegister />
        },
        {
          path: "vendor/register",
          element: <VendorRegister />
        },
      ]
    },
    userRoutes,
    vendorRoutes,
  ])

  return (
    <Suspense fallback={<DefaultLoader />}>
      <RouterProvider router={router} />
    </Suspense>
  )
}
