<template>
    <AppLayout>
        <div class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6 order-lg-2">
                        <div class="hero-image">
                            <img :src="profileImage" alt="Developer illustration" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="hero-content">
                            <h1 class="display-3 fw-bold mb-4">Hello, I'm <span class="highlight">Hema Vasita</span></h1>
                            <h2 class="fs-3 mb-4">Software Developer</h2>
                            <p class="lead mb-4">
                                Building elegant solutions to complex problems with Laravel, Vue.js, and modern web
                                technologies.
                            </p>
                            <div class="hero-btns">
                                <Link :href="route('projects')" class="btn btn-primary btn-lg me-3">
                                View My Work
                                </Link>
                                <Link :href="route('contact')" class="btn btn-outline-primary btn-lg">
                                Get In Touch
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="featured-projects py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5">Featured Projects</h2>
                <div class="row g-4">
                    <div class="col-md-4" v-for="project in featuredProjects" :key="project.id">
                        <ProjectCard :project="project" />
                    </div>
                </div>
                <div class="text-center mt-5">
                    <Link :href="route('projects')" class="btn btn-outline-primary">View All Projects</Link>
                </div>
            </div>
        </section>

        <section class="skills-preview py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center mb-5">Top Skills</h2>
                <div class="row g-4">
                    <div class="col-md-2 col-sm-4 col-6" v-for="skill in topSkills" :key="skill.id">
                        <SkillCard :skill="skill" mini />
                    </div>
                </div>
                <div class="text-center mt-5">
                    <Link :href="route('skills')" class="btn btn-outline-primary">View All Skills</Link>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProjectCard from '@/Components/ProjectCard.vue';
import SkillCard from '@/Components/SkillCard.vue';
import profileImage from '@/assets/images/profile.gif';

defineProps({
    featuredProjects: Array,
    topSkills: Array
});
</script>

<style scoped>
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero-content {
    padding: 2rem 0;
}

.highlight {
    color: #9d4edd;
    position: relative;
    display: inline-block;
}

.dark-mode .highlight {
    color: #bd93f9;
}

.highlight::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 5px;
    bottom: 0;
    left: 0;
    background-color: #9d4edd;
    opacity: 0.3;
}

.dark-mode .highlight::after {
    background-color: #bd93f9;
}

.hero-btns {
    margin-top: 2rem;
}

.btn-primary {
    background-color: #9d4edd;
    border-color: #9d4edd;
}

.btn-primary:hover {
    background-color: #7b2cbf;
    border-color: #7b2cbf;
}

.btn-outline-primary {
    color: #9d4edd;
    border-color: #9d4edd;
}

.btn-outline-primary:hover {
    background-color: #9d4edd;
    color: white;
}

.dark-mode .btn-primary {
    background-color: #bd93f9;
    border-color: #bd93f9;
    color: #282a36;
}

.dark-mode .btn-primary:hover {
    background-color: #a68dfc;
    border-color: #a68dfc;
}

.dark-mode .btn-outline-primary {
    color: #bd93f9;
    border-color: #bd93f9;
}

.dark-mode .btn-outline-primary:hover {
    background-color: #bd93f9;
    color: #282a36;
}

.dark-mode .bg-light {
    background-color: #282a36 !important;
}

.section-title {
    position: relative;
    padding-bottom: 1rem;
    margin-bottom: 2rem;
}

.section-title::after {
    content: '';
    position: absolute;
    width: 80px;
    height: 3px;
    background-color: #9d4edd;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}

.dark-mode .section-title::after {
    background-color: #bd93f9;
}
</style>