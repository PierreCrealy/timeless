<template>
    <button
        type="submit"
        :class="['text-white custom-button fontSegoeUI font-size-24px']"
        :disabled="disabled"
        :aria-disabled="disabled"
    >
    <span>
        <slot name="texte"></slot>
    </span>
    </button>
</template>

<script setup lang="ts">

defineProps<{
    disabled?: boolean;
}>();
</script>