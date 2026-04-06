<template>
  <div class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="bg-white shadow rounded-xl p-8 max-w-lg w-full">
      <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ title }}</h1>
      <p class="text-gray-500">Projeto Fundamento rodando com Vue 3 + Inertia.js + Tailwind CSS</p>
      <pre v-if="amor" class="mt-4 bg-gray-100 rounded p-4 text-sm text-gray-700 overflow-auto">{{ amor }}</pre>
    </div>
  </div>
</template>

<script setup>
defineProps({
  title: {
    type: String,
    default: 'Bem-vindo',
  },
  amor: {
    type: Object,
    default: null,
  },
})
</script>
