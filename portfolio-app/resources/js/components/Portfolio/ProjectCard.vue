<template>
    <div class="project-card">
        <h3 class="project-title">{{ projectTitle }}</h3>
        <p class="project-description">
            <slot>

            </slot>
        </p>
        <div class="flex flex-col items-center">
            <ProjectButton
                :project-link=projectLink
                linkLabel="Link zur Website"
            />
            <ProjectButton
                :project-link=projectRepoLink
                linkLabel="Link zum Repository"
            />
        </div>
    </div>
</template>

<script setup>
    import ProjectButton from "@/components/Portfolio/ProjectButton.vue";
</script>

<script>

export default {
    props: {
        projectTitle: {
            type: String,
            required: true
        },
        projectLink: {
            type: String,
            required: true
        },
        projectRepoLink: {
            type: String,
            required: true
        },
    },
};
</script>

<style scoped>

</style>
