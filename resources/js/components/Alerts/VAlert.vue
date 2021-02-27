<template>
    <div>
    <!-- Authentication Error Alert Component Start -->
        <div class="flex items-center px-3 py-3 font-light text-red-700 bg-red-100 border-l-4 border-red-500">
            <span class="pr-2 text-red-700 animate-bounce">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <p class="text-sm">Error Message</p>
        </div>
    <!-- Authentication Error Alert Component End -->
    <!-- Authentication Success Alert Component Start -->
        <div class="flex items-center px-3 py-3 font-light text-green-700 bg-green-100 border-l-4 border-green-500">
            <span class="pr-2 text-green-700 animate-bounce">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <p class="text-sm">Success Message</p>
        </div>
    <!-- Authentication Success Alert Component End -->
    </div>
</template>

<script>
export default {
    name: 'VAlert'
}
</script>
