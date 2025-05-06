<template>
    <div class="project-card" :class="{ 'dark-mode': isDarkMode }">
        <div class="project-image">
            <img :src="imageUrl ?? placeholderUrl" :loading="lazy" :alt="project.title" @error="handleImageError" />
            <div class="project-overlay">
                <div class="project-links">
                    <a v-if="project.demo_url" :href="project.demo_url" target="_blank"
                        class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-display me-1"></i> Live Demo
                    </a>
                    <a v-if="project.github_url" :href="project.github_url" target="_blank"
                        class="btn btn-outline-light btn-sm">
                        <i class="bi bi-github me-1"></i> Code
                    </a>
                </div>
            </div>
        </div>
        <div class="project-content">
            <div class="project-category">{{ project.category }}</div>
            <h3 class="project-title">{{ project.title }}</h3>
            <p class="project-description">{{ project.description }}</p>
            <div class="project-tech">
                <span v-for="(tech, index) in project.technologies" :key="index" class="tech-badge">
                    {{ tech }}
                </span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { inject, computed, ref } from 'vue';

const props = defineProps({
    project: {
        type: Object,
        required: true
    },
    placeholderUrl: {
        type: String,
        required: true
    }
});

const darkMode = inject('darkMode', false);
const isDarkMode = computed(() => darkMode.value);

// Create a ref to hold the image source
const imageUrl = ref(props.project.image_url_full);

// Function to handle image loading errors
const handleImageError = () => {
    imageUrl.value = props.placeholderUrl;
};
</script>

<style scoped>
.project-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: white;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.dark-mode.project-card {
    background-color: #2c2c44;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.project-image {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
    /* 16:9 aspect ratio */
}

.project-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.project-card:hover .project-image img {
    transform: scale(1.05);
}

.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.project-card:hover .project-overlay {
    opacity: 1;
}

.project-links {
    display: flex;
    gap: 10px;
}

.project-content {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.project-category {
    color: #9d4edd;
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
}

.dark-mode .project-category {
    color: #bd93f9;
}

.project-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.project-description {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 1rem;
    flex-grow: 1;
}

.dark-mode .project-description {
    color: #d1d1e0;
}

.project-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-top: auto;
}

.tech-badge {
    background-color: rgba(157, 78, 221, 0.1);
    color: #9d4edd;
    padding: 0.25rem 0.5rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.dark-mode .tech-badge {
    background-color: rgba(189, 147, 249, 0.2);
    color: #bd93f9;
}
</style>