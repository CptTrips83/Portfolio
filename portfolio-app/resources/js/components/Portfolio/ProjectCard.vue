<template>
    <div class="project-card">
        <h3 class="project-title">{{ this.projectTitle }}</h3>
        <p class="project-description">
            <slot>

            </slot>
        </p>
        <div class="flex flex-col items-center">
            <ProjectButton
                :project-link=this.projectLink
                linkLabel="Link zur Website"
            />
            <ProjectButton
                :project-link=this.projectRepoLink
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
        'projectTitle' : String,
        'projectLink' : String,
        'projectRepoLink' : String,
    }
};
</script>

<style scoped>

</style>
