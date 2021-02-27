<template>
    <button class="block w-full px-4 py-2 font-light transition duration-200 ease-in-out bg-blue-500 rounded-sm text-blue-50 hover:bg-blue-600 hover:text-blue-100 focus:outline-none focus:ring-2 ring-blue-600 ring-opacity-50">
    {{ text }}
    </button>
</template>

<script>
export default {
    name: 'VButton',
    props: {
        text: String
    }
}
</script>
