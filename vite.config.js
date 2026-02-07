import { defineConfig } from "vite";
import { viteStaticCopy } from "vite-plugin-static-copy";
import { resolve } from "path";

export default defineConfig({
  base: "/backlit-frame/",

  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, "index.html"),
        catalog: resolve(__dirname, "catalog.html"),
      },
    },
  },

  plugins: [
    viteStaticCopy({
      targets: [
        {
          src: "src/partials",
          dest: "",
        },
      ],
    }),
  ],
});
