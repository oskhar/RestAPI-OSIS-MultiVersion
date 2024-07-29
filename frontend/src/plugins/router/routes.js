export const routes = [
  {
    path: "/",
    component: () => import("@/layouts/guest/guest-layout.vue"),
    children: [
      {
        path: "",
        component: () => import("@/pages/guest-home-page.vue"),
      },
    ],
  },
  {
    path: "/",
    component: () => import("@/layouts/default.vue"),
    children: [
      {
        path: "dashboard",
        component: () => import("@/pages/dashboard.vue"),
      },
      {
        path: "berita-acara",
        component: () => import("@/pages/berita-acara.vue"),
      },
      {
        path: "galeri",
        component: () => import("@/pages/galeri.vue"),
      },
      {
        path: "pemilihan-ketua",
        component: () => import("@/pages/pemilihan-ketua.vue"),
      },
      {
        path: "account-settings",
        component: () => import("@/pages/account-settings.vue"),
      },
      {
        path: "typography",
        component: () => import("@/pages/typography.vue"),
      },
      {
        path: "cards",
        component: () => import("@/pages/cards.vue"),
      },
      {
        path: "form-layouts",
        component: () => import("@/pages/form-layouts.vue"),
      },
    ],
  },
  {
    path: "/",
    component: () => import("@/layouts/blank.vue"),
    children: [
      {
        path: "login",
        component: () => import("@/pages/login.vue"),
      },
      {
        path: "register",
        component: () => import("@/pages/register.vue"),
      },
      {
        path: "/:pathMatch(.*)*",
        component: () => import("@/pages/[...error].vue"),
      },
    ],
  },
];
