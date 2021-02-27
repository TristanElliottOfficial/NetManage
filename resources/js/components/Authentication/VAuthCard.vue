<template>
    <!-- Authentication Card Component Start -->
        <div class="bg-white shadow px-8 py-6">
            <h1 class="text-3xl font-light text-gray-700">{{ title }}</h1>
            <slot></slot>
        </div>
    <!-- Authentication Card Component End -->
</template>

<script>
export default {
    name: 'VAuthCard',
    props: {
        title: String
    }
}
</script>
