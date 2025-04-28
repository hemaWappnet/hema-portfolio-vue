<template>
    <AppLayout>
        <div class="projects-header py-5">
            <div class="container">
                <h1 class="text-center">My Projects</h1>
                <p class="lead text-center">A showcase of my recent work and technical expertise.</p>
            </div>
        </div>

        <div class="projects-filter mb-4">
            <div class="container">
                <div class="d-flex justify-content-center flex-wrap gap-2">
                    <button class="btn" :class="[activeFilter === 'all' ? 'btn-primary' : 'btn-outline-primary']"
                        @click="activeFilter = 'all'">
                        All
                    </button>
                    <button v-for="category in categories" :key="category" class="btn"
                        :class="[activeFilter === category ? 'btn-primary' : 'btn-outline-primary']"
                        @click="activeFilter = category">
                        {{ category }}
                    </button>
                </div>
            </div>
        </div>

        <div class="projects-grid py-5">
            <div class="container">
                <div class="row g-4">
                    <div v-for="project in filteredProjects" :key="project.id" class="col-lg-4 col-md-6">
                        <ProjectCard :project="project" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { ref, computed } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProjectCard from '@/Components/ProjectCard.vue';

const props = defineProps({
    projects: Array
});

const activeFilter = ref('all');

const categories = computed(() => {
    const uniqueCategories = new Set();
    props.projects.forEach(project => {
        if (project.category) {
            uniqueCategories.add(project.category);
        }
    });
    return Array.from(uniqueCategories);
});

const filteredProjects = computed(() => {
    if (activeFilter.value === 'all') {
        return props.projects;
    }
    return props.projects.filter(project => project.category === activeFilter.value);
});
</script>

<style scoped>
.projects-header {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 4rem 0;
    margin-bottom: 2rem;
}

.dark-mode .projects-header {
    background: linear-gradient(135deg, #bd93f9 0%, #6272a4 100%);
}

.projects-filter {
    margin: 2rem 0;
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
</style>