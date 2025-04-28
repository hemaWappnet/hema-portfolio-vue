<template>
    <div :class="['app-container', darkMode ? 'dark-mode' : 'light-mode']">
        <Loader v-if="isLoading" />

        <div v-else class="d-flex flex-column min-vh-100">
            <TheNavigation :darkMode="darkMode" @toggle-dark-mode="toggleDarkMode" />

            <main class="flex-grow-1">
                <slot />
            </main>

            <footer class="footer py-4 mt-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; {{ new Date().getFullYear() }} Your Name. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="social-links">
                                <a href="https://github.com/yourusername" target="_blank" class="social-link">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://linkedin.com/in/yourusername" target="_blank" class="social-link">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="https://twitter.com/yourusername" target="_blank" class="social-link">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, provide } from 'vue';
import { useCookies } from 'vue3-cookies';
import TheNavigation from '@/Components/TheNavigation.vue';
import Loader from '@/Components/Loader.vue';

const { cookies } = useCookies();
const isLoading = ref(true);
const darkMode = ref(true); // Default dark mode enabled for dark purple theme

provide('darkMode', darkMode);

const toggleDarkMode = () => {
    darkMode.value = !darkMode.value;
    cookies.set('darkMode', darkMode.value ? 'dark' : 'light', '30d');
};

onMounted(() => {
    // Check saved preference
    const savedMode = cookies.get('darkMode');
    if (savedMode) {
        darkMode.value = savedMode === 'dark';
    }

    // Simulate loading for a smooth experience
    setTimeout(() => {
        isLoading.value = false;
    }, 1500);
});
</script>

<style scoped>
.app-container {
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dark-mode {
    background-color: #1a1a2e;
    color: #f1f1f1;
}

.light-mode {
    background-color: #f8f9fa;
    color: #212529;
}

.footer {
    background-color: rgba(0, 0, 0, 0.1);
    padding: 1rem 0;
}

.social-links {
    display: flex;
    gap: 1rem;
    justify-content: flex-end;
}

.social-link {
    color: #9d4edd;
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #7b2cbf;
}

.dark-mode .social-link {
    color: #bd93f9;
}

.dark-mode .social-link:hover {
    color: #ff79c6;
}
</style>