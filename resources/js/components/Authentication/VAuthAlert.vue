<template>
    <!-- Authentication Error Alert Component Start -->
        <div class="flex items-center px-3 py-3 bg-red-100 font-light text-red-700 border-l-4 border-red-500">
            <span class="text-red-700 pr-2">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <p class="text-sm">{{ text }}</p>
        </div>
    <!-- Authentication Error Alert Component End -->
</template>

<script>
export default {
    name: 'VAuthAlert',
    props: {
        text: String
    }
}
</script>
