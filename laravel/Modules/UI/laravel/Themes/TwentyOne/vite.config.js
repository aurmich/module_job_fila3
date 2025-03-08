import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
	build: {
		outDir: "./Resources/dist",
		emptyOutDir: false,
		manifest: true,
		rollupOptions: {
			output: {
				entryFileNames: `assets/[name].js`,
				chunkFileNames: `assets/[name].js`,
				assetFileNames: `assets/[name].[ext]`,
			},
		},
	},
	ssr: {
		noExternal: ["chart.js/**"],
	},
	plugins: [
		laravel({
			publicDirectory: "../../../public_html/",
			input: [__dirname + "/Resources/css/app.css", __dirname + "/Resources/js/app.js", __dirname + "/Resources/css/filament/admin/theme.css"],
			refresh: [...refreshPaths, "app/Livewire/**"],
		}),
	],
});
