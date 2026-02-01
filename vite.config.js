import { defineConfig } from "vite";
import { viteStaticCopy } from "vite-plugin-static-copy";

export default defineConfig({
  base: "/backlit-frame/",
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
