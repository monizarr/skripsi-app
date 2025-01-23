<script setup lang="ts">
import { ref, onMounted, watch } from 'vue'
import type { HTMLAttributes } from 'vue'
import { cn } from '@/lib/utils'
import { type AlertVariants, alertVariants } from '.'
import ShieldWarningIcon from '@/Components/Icons/ShieldWarningIcon.vue';

const props = defineProps<{
  class?: HTMLAttributes['class']
  variant?: AlertVariants['variant']
  show?: boolean
}>()

const isVisible = ref(props.show ?? false)

onMounted(() => {
  if (props.show) {
    isVisible.value = true
    setTimeout(() => {
      isVisible.value = false
    }, 5000) // 5 detik
  }
})

// Watcher untuk menangani perubahan props.show jika dinamis
watch(
  () => props.show,
  (newValue) => {
    if (newValue) {
      isVisible.value = true
      setTimeout(() => {
        isVisible.value = false
      }, 5000)
    }
  }
)

const closeAlert = () => {
  isVisible.value = false
}
</script>

<template>
  <div :class="cn(alertVariants({ variant }), props.class)" role="alert" v-if="isVisible"
    class="bg-white dark:bg-gray-800 bg-opacity-20 backdrop-blur-md dark:text-gray-200 shadow-sm">
    <ShieldWarningIcon :color="`#6b7280`" />
    <slot />
    <button @click="closeAlert" type="button" class="absolute top-0 right-0 p-2">
      <svg class="h-3 w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

  </div>
</template>
