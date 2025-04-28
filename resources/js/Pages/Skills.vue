<template>
    <AppLayout>
        <div class="skills-header py-5">
            <div class="container">
                <h1 class="text-center">My Skills</h1>
                <p class="lead text-center">A comprehensive overview of my technical abilities and expertise.</p>
            </div>
        </div>

        <div class="skills-content py-5">
            <div class="container">
                <div v-for="(skills, category) in skillsByCategory" :key="category" class="skills-category mb-5">
                    <h2 class="category-title mb-4">{{ category }}</h2>

                    <div class="row g-4">
                        <div v-for="skill in skills" :key="skill.id" class="col-lg-3 col-md-4 col-sm-6">
                            <SkillCard :skill="skill" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SkillCard from '@/Components/SkillCard.vue';

defineProps({
    skillsByCategory: Object
});
</script>

<style scoped>
.skills-header {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 4rem 0;
    margin-bottom: 2rem;
}

.dark-mode .skills-header {
    background: linear-gradient(135deg, #bd93f9 0%, #6272a4 100%);
}

.category-title {
    position: relative;
    padding-bottom: 1rem;
    margin-bottom: 2rem;
    color: #333;
    font-weight: 700;
}

.dark-mode .category-title {
    color: #f8f8f2;
}

.category-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background-color: #9d4edd;
}

.dark-mode .category-title::after {
    background-color: #bd93f9;
}
</style>