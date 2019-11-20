import ProfilePage from "./pages/ProfilePage/ProfilePage";

const routes = [
    {path: '/profile', component: ProfilePage},
    {path: '*', redirect: '/profile'}
];

export default routes;
