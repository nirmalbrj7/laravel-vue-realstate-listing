<template>
    <div class="border border-gray-200 dark:border-gray-800 rounded-md shadow-sm dark:text-gray-300 p-2">
        <div class="text-gray-500 font-medium mb-1">
            <slot name="header"/>
        </div>
        <slot/>
    </div>
</template>
