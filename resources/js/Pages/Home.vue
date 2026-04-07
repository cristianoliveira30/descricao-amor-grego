<template>
  <div class="min-h-screen relative overflow-hidden transition-colors duration-500" :class="themeClasses.bg">

    <!-- Background animado com gradientes alternantes -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
      <div class="blob blob-1" :class="themeClasses.blob1"></div>
      <div class="blob blob-2" :class="themeClasses.blob2"></div>
      <div class="blob blob-3" :class="themeClasses.blob3"></div>
    </div>

    <!-- Toggle tema -->
    <button
      @click="toggleTheme"
      class="fixed top-4 right-4 z-50 w-10 h-10 flex items-center justify-center rounded-full border backdrop-blur-md transition-all duration-300 cursor-pointer"
      :class="themeClasses.toggle"
      :title="isDark ? 'Tema claro' : 'Tema escuro'"
    >
      <!-- Sol -->
      <svg v-if="isDark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-13.66l-.71.71M4.05 19.95l-.71.71M21 12h-1M4 12H3m16.66 7.66l-.71-.71M4.05 4.05l-.71-.71M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
      </svg>
      <!-- Lua -->
      <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
      </svg>
    </button>

    <!-- ═══════════ MENU (lista de tipos) ═══════════ -->
    <Transition name="page">
      <div v-if="!selectedTipo" key="menu">

        <!-- HERO -->
        <section class="flex flex-col items-center justify-center text-center px-6 py-24">
          <h1
            class="text-5xl md:text-6xl font-bold mb-6 leading-tight animate-fade-in"
            :class="themeClasses.title"
          >
            {{ title }}
          </h1>

          <p class="max-w-2xl text-lg leading-relaxed animate-fade-in-delay" :class="themeClasses.subtitle">
            O amor pode ser compreendido de diferentes formas.
            Explore suas manifestações e entenda como cada uma influencia
            as relações humanas.
          </p>
        </section>

        <!-- CARDS -->
        <section class="px-6 pb-24 max-w-6xl mx-auto">
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
              v-for="(tipo, key, index) in amor"
              :key="key"
              @click="openTipo(key)"
              class="group relative backdrop-blur-xl border rounded-2xl p-6 cursor-pointer
                     transition-all duration-500 ease-out
                     hover:scale-105 hover:shadow-2xl animate-card-in"
              :class="[getCardClasses(key), themeClasses.card]"
              :style="{ animationDelay: `${index * 120}ms` }"
            >
              <!-- Glow dinâmico -->
              <div
                class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-15 transition-opacity duration-500"
                :class="getGlow(key)"
              ></div>

              <div class="relative z-10 flex flex-col h-full">
                <h2 class="text-2xl font-semibold mb-2" :class="themeClasses.cardTitle">
                  {{ tipo.tipo }}
                </h2>

                <p class="text-sm mb-4 transition-all duration-300 group-hover:-translate-y-1" :class="themeClasses.cardText">
                  {{ tipo.slogan }}
                </p>

                <span
                  class="mt-auto text-xs font-serif italic tracking-[0.18em] uppercase transition-all duration-300 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100"
                  :class="themeClasses.cardCta"
                >
                  Explorar →
                </span>
              </div>
            </div>
          </div>
        </section>

      </div>
    </Transition>

    <!-- ═══════════ DETALHE (página inteira) ═══════════ -->
    <Transition name="page">
      <div v-if="selectedTipo" key="detail" class="min-h-screen">

        <!-- Botão voltar -->
        <button
          @click="goBack"
          class="fixed top-4 left-4 z-50 flex items-center gap-2 px-4 py-2 rounded-full border backdrop-blur-md transition-all duration-300 cursor-pointer hover:scale-105"
          :class="themeClasses.backBtn"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
          <span class="text-sm font-medium">Voltar</span>
        </button>

        <div class="max-w-3xl mx-auto px-6 py-20 animate-fade-in" v-if="selectedData">

          <!-- Faixa colorida decorativa -->
          <div class="h-1 w-24 rounded-full mb-8" :class="getAccentBg(selectedTipo)"></div>

          <h1 class="text-4xl md:text-5xl font-bold mb-3" :class="themeClasses.title">
            {{ selectedData.tipo }}
          </h1>

          <p class="text-lg italic mb-10" :class="themeClasses.subtitle">
            {{ selectedData.slogan }}
          </p>

          <!-- Descrição -->
          <div
            class="prose max-w-none leading-relaxed mb-10 text-base"
            :class="themeClasses.prose"
            v-html="selectedData.descricao"
          ></div>

          <!-- Expressão -->
          <div v-if="selectedData.expressao" class="mb-10">
            <h3 class="text-xl font-semibold mb-3" :class="themeClasses.title">Expressão</h3>
            <div class="leading-relaxed text-sm" :class="themeClasses.body" v-html="selectedData.expressao"></div>
          </div>

          <!-- Características / Virtudes / Riscos -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div v-if="selectedData.caracteristicas" class="rounded-xl border p-5" :class="themeClasses.infoCard">
              <h4 class="text-sm font-semibold mb-3 uppercase tracking-wider" :class="themeClasses.infoLabel">Características</h4>
              <ul class="space-y-1.5">
                <li v-for="c in selectedData.caracteristicas" :key="c" class="text-sm" :class="themeClasses.body">• {{ c }}</li>
              </ul>
            </div>
            <div v-if="selectedData.virtudes" class="rounded-xl border p-5" :class="themeClasses.infoCard">
              <h4 class="text-sm font-semibold mb-3 uppercase tracking-wider" :class="themeClasses.infoLabel">Virtudes</h4>
              <ul class="space-y-1.5">
                <li v-for="v in selectedData.virtudes" :key="v" class="text-sm" :class="themeClasses.body">• {{ v }}</li>
              </ul>
            </div>
            <div v-if="selectedData.riscos" class="rounded-xl border p-5" :class="themeClasses.infoCard">
              <h4 class="text-sm font-semibold mb-3 uppercase tracking-wider" :class="themeClasses.infoLabel">Riscos</h4>
              <ul class="space-y-1.5">
                <li v-for="r in selectedData.riscos" :key="r" class="text-sm" :class="themeClasses.body">• {{ r }}</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </Transition>

  </div>
</template>

<script setup>
import { ref, computed, nextTick } from 'vue'

const props = defineProps({
  title: String,
  amor: Object
})

/* ── Tema ── */
const isDark = ref(false)

const toggleTheme = () => {
  isDark.value = !isDark.value
}

const themeClasses = computed(() => {
  if (isDark.value) {
    return {
      bg: 'bg-gray-900 text-white',
      title: 'text-white',
      subtitle: 'text-gray-400',
      body: 'text-gray-300',
      prose: 'prose-invert text-gray-300',
      card: 'bg-slate-800 border-white/10 hover:bg-slate-700',
      cardTitle: 'text-white',
      cardText: 'text-gray-300 group-hover:text-gray-200',
      cardCta: 'text-gray-500',
      toggle: 'bg-gray-800/60 border-white/20 text-yellow-300 hover:bg-gray-700/60',
      backBtn: 'bg-gray-800/60 border-white/20 text-white hover:bg-gray-700/80',
      blob1: 'bg-purple-500/10',
      blob2: 'bg-pink-500/10',
      blob3: 'bg-blue-500/10',
      infoCard: 'border-slate-700 bg-slate-800',
      infoLabel: 'text-gray-400',
    }
  }
  return {
    bg: 'bg-slate-400 text-gray-900',
    title: 'text-gray-900',
    subtitle: 'text-gray-800',
    body: 'text-gray-800',
    prose: 'prose-gray text-gray-800',
    card: 'bg-slate-200/50 border-gray-200 hover:bg-slate-100 shadow-sm',
    cardTitle: 'text-gray-900',
    cardText: 'text-gray-800 group-hover:text-gray-700',
    cardCta: 'text-gray-400',
    toggle: 'bg-white/80 border-gray-300 text-gray-600 hover:bg-gray-100',
    backBtn: 'bg-white/80 border-gray-300 text-gray-700 hover:bg-gray-100',
    blob1: 'bg-purple-300/30',
    blob2: 'bg-pink-300/30',
    blob3: 'bg-blue-300/30',
    infoCard: 'border-gray-200 bg-gray-50',
    infoLabel: 'text-gray-800',
  }
})

/* ── Navegação interna ── */
const selectedTipo = ref(null)

const selectedData = computed(() => {
  if (!selectedTipo.value || !props.amor) return null
  return props.amor[selectedTipo.value]
})

const openTipo = (tipo) => {
  selectedTipo.value = tipo
  nextTick(() => window.scrollTo({ top: 0, behavior: 'smooth' }))
}

const goBack = () => {
  selectedTipo.value = null
  nextTick(() => window.scrollTo({ top: 0, behavior: 'smooth' }))
}

/* ── Helpers visuais ── */
const getGlow = (tipo) => {
  const map = {
    eros: 'bg-gradient-to-br from-pink-800 to-red-800',
    philia: 'bg-gradient-to-br from-blue-800 to-cyan-800',
    storge: 'bg-gradient-to-br from-green-800 to-emerald-800',
    agape: 'bg-gradient-to-br from-purple-800 to-indigo-800',
  }
  return map[tipo] || 'bg-white'
}

const getCardClasses = (tipo) => {
  const map = isDark.value
    ? {
        eros: 'hover:shadow-pink-900/30',
        philia: 'hover:shadow-blue-900/30',
        storge: 'hover:shadow-green-900/30',
        agape: 'hover:shadow-purple-900/30',
      }
    : {
        eros: 'hover:shadow-pink-400/70',
        philia: 'hover:shadow-sky-400/70',
        storge: 'hover:shadow-emerald-400/70',
        agape: 'hover:shadow-violet-400/70',
      }
  return map[tipo] || ''
}

const getAccentBg = (tipo) => {
  const map = {
    eros: 'bg-gradient-to-r from-pink-800 to-red-800',
    philia: 'bg-gradient-to-r from-blue-800 to-cyan-800',
    storge: 'bg-gradient-to-r from-green-800 to-emerald-800',
    agape: 'bg-gradient-to-r from-purple-800 to-indigo-800',
  }
  return map[tipo] || 'bg-gray-400'
}
</script>

<style scoped>
/* ── Blobs animados (fundo) ── */
.blob {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

.blob-1 {
  width: 600px;
  height: 600px;
  top: -10%;
  left: -10%;
  animation: drift1 8s infinite alternate;
}

.blob-2 {
  width: 500px;
  height: 500px;
  bottom: -5%;
  right: -5%;
  animation: drift2 10s infinite alternate;
}

.blob-3 {
  width: 400px;
  height: 400px;
  top: 40%;
  left: 50%;
  animation: drift3 12s infinite alternate;
}

@keyframes drift1 {
  from { transform: translate(0, 0) scale(1); }
  to   { transform: translate(80px, 60px) scale(1.15); }
}

@keyframes drift2 {
  from { transform: translate(0, 0) scale(1); }
  to   { transform: translate(-70px, -50px) scale(1.1); }
}

@keyframes drift3 {
  from { transform: translate(0, 0) scale(1); }
  to   { transform: translate(-40px, 40px) scale(1.2); }
}

/* ── Animação de entrada ── */
.animate-fade-in {
  animation: fadeIn 0.8s ease-out both;
}

.animate-fade-in-delay {
  animation: fadeIn 0.8s ease-out 0.2s both;
}

.animate-card-in {
  animation: cardIn 0.6s ease-out both;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(12px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes cardIn {
  from { opacity: 0; transform: translateY(20px) scale(0.97); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}

/* ── Transição de página (menu ↔ detalhe) ── */
.page-enter-active {
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.page-leave-active {
  transition: all 0.25s ease-in;
  position: absolute;
  width: 100%;
}

.page-enter-from {
  opacity: 0;
  transform: translateY(24px);
}

.page-leave-to {
  opacity: 0;
  transform: translateY(-16px);
}
</style>