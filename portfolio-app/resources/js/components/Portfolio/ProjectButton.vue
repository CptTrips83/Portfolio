<template>
    <a target="_blank" class="
            text-center
            text-black
            bg-[#5759F7]/75
            hover:bg-[#57F2F7]/75
            focus:ring-4
            focus:ring-[#57F2F7]/75
            font-medium
            rounded-lg
            text-m
            px-5
            py-2.5
            w-[100%]
            focus:z-10
            dark:bg-gray-500
            dark:hover:bg-gray-700
            focus:outline-none
            dark:focus:ring-gray-800
            dark:text-gray-400"
        :href=this.projectLink
    >{{ this.linkLabel }}</a>
</template>

<script>
export default {
    props: {
        'linkLabel' : String,
        'projectLink': String,
    },
};
</script>

<style scoped>

</style>
