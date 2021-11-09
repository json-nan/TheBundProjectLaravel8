require("./bootstrap");

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { Lang } from "laravel-vue-lang";

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

const ActualLangPlugin = {
    install: (app, options) => {
        app.config.globalProperties.$actualLang = document
            .getElementsByTagName("html")[0]
            .getAttribute("lang");
    },
};

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(Lang)
            .use(ActualLangPlugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: "#4B5563" });
