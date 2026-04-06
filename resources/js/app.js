import '../css/app.css'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js'

createInertiaApp({
  // Resolve os componentes de página em resources/js/Pages/
  resolve(name) {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    const page = pages[`./Pages/${name}.vue`]
    if (!page) throw new Error(`Página Inertia não encontrada: ./Pages/${name}.vue`)
    return page
  },

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)   // disponibiliza route() globalmente
      .mount(el)
  },

  // Título dinâmico da aba, ex: "Home | Fundamento"
  title: title => title ? `${title} | Fundamento` : 'Fundamento',
})
