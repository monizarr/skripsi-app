<script>
export default {
    props: {
        title: {
            type: String,
            required: true
        },
        value: {
            type: String,
            required: true
        },
        color: {
            type: String,
            required: false,
        },
    }
}
</script>

<template>
    <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 flex-1 ">
        <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center gap-4">
            <div>
                <slot />
            </div>
            <div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-200">{{ title }}</div>
                <div class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ value }}</div>
            </div>
        </div>
    </div>
</template>