<template>
    <!-- Form Input Component Start -->
        <div :id="id + '-input'" class="block py-3 font-light text-base antialiased">
        <label :for="id" class="block pb-2 text-sm text-gray-700 tracking-wider">{{ label }}</label>
        <input :type="type" :name="name" :id="id" :value="value" class="block w-full px-4 py-2 border bg-gray-100 font-light text-sm" :placeholder="placeholder" />

        <slot></slot>

        </div>
    <!-- Form Input Component End -->
</template>

<script>
    export default {
        name: 'VInput',
        props: {
            id: String,
            type: String,
            label: String,
            name: String,
            placeholder: String,
            value: String
        }
    }
</script>
