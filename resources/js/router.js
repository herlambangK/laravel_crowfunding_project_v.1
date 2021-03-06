import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Home.vue";
import Donations from "./views/Donations.vue";
import Campaigns from "./views/Campaigns.vue";
import DetailCampagin from "./views/DetailCampagin.vue";
import SocialLogin from "./views/Social.vue";

Vue.use(Router);

const router = new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            alias: "/home",
            component: Home
            // components: () => import("./views/Home.vue")
        },
        {
            path: "/donations",
            name: "donations",
            alias: "/donations",
            component: Donations
        },
        {
            path: "/campaigns",
            name: "campaigns",
            alias: "/campaigns",
            component: Campaigns
        },
        {
            path: "/campagin/:id",
            name: "campagin",
            alias: "/campagin",
            component: DetailCampagin
        },
        {
            path: "/auth/social/google/callback",
            name: "social",
            alias: "/social",
            component: SocialLogin
        },
        {
            path: "*",
            redirect: "/"
        }
    ]
});

export default router;
