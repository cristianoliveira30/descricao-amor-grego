import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'path'

export default defineConfig({
  plugins: [
    vue(),
    tailwindcss(),
  ],

  // Não expõe a pasta public como assets estáticos do Vite
  // (o PHP já serve tudo via WAMP)
  publicDir: false,

  build: {
    outDir: 'public/build',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: resolve(__dirname, 'resources/js/app.js'),
    },
  },

  server: {
    port: 5173,
    strictPort: true,
    cors: true,
  },

  resolve: {
    alias: {
      '@': resolve(__dirname, 'resources/js'),
    },
  },
})
