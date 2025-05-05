<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        :class="{ 'navbar-scrolled': isScrolled, 'dark-mode': darkMode }">
        <div class="container">
            <Link :href="route('home')" class="navbar-brand">
            <span class="brand-text">Dev<span class="highlight">Portfolio</span></span>
            </Link>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <Link :href="route('home')" class="nav-link" :class="{ 'active': route().current('home') }">Home
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link :href="route('about')" class="nav-link" :class="{ 'active': route().current('about') }">
                        About</Link>
                    </li>
                    <li class="nav-item">
                        <Link :href="route('projects')" class="nav-link"
                            :class="{ 'active': route().current('projects') }">Projects</Link>
                    </li>
                    <li class="nav-item">
                        <Link :href="route('skills')" class="nav-link" :class="{ 'active': route().current('skills') }">
                        Skills</Link>
                    </li>
                    <li class="nav-item">
                        <Link :href="route('contact')" class="nav-link"
                            :class="{ 'active': route().current('contact') }">Contact</Link>
                    </li>
                </ul>
                <div class="dark-toggle-wrapper ms-lg-3 mt-3 mt-lg-0">
                    <DarkModeToggle :modelValue="darkMode" @update:modelValue="$emit('toggle-dark-mode')" />
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';
import DarkModeToggle from './DarkModeToggle.vue';

const props = defineProps({
    darkMode: {
        type: Boolean,
        default: false
    }
});

defineEmits(['toggle-dark-mode']);

const isScrolled = ref(false);

const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial check
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.navbar {
    transition: all 0.3s ease;
    padding: 1rem 0;
}

.navbar-dark {
    background-color: transparent;
}

.navbar.navbar-scrolled {
    background-color: rgba(26, 26, 46, 0.95);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    padding: 0.5rem 0;
}

.dark-mode.navbar.navbar-scrolled {
    background-color: rgba(40, 42, 54, 0.95);
}

.navbar-brand {
    font-weight: 700;
    font-size: 1.75rem;
}

.brand-text {
    position: relative;
}

.highlight {
    color: #9d4edd;
}

.dark-mode .highlight {
    color: #bd93f9;
}

.navbar .nav-link {
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: color 0.3s ease;
    position: relative;
    color: #bd93f9;
}

.dark-mode .navbar .nav-link {
    color: #9d4edd;
}

.navbar .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #9d4edd;
    transition: width 0.3s ease, left 0.3s ease;
}

.dark-mode .navbar .nav-link::after {
    background-color: #bd93f9;
}

.navbar .nav-link:hover::after,
.navbar .nav-link.active::after {
    width: 90%;
    left: 5px;
}

.navbar .nav-link:hover,
.navbar .nav-link.active {
    color: #9d4edd;
}

.navbar .nav-link:hover,
.navbar .nav-link.active {
    color: #9d4edd;
}

.dark-mode .navbar .nav-link:hover,
.dark-mode .navbar .nav-link.active {
    color: #bd93f9;
}

@media (max-width: 991.98px) {
    .navbar-collapse {
        background-color: rgba(26, 26, 46, 0.95);
        margin: 0 -1rem;
        padding: 1rem;
        border-radius: 0 0 10px 10px;
    }

    .dark-mode .navbar-collapse {
        background-color: rgba(40, 42, 54, 0.95);
    }
}

.dark-toggle-wrapper {
    display: flex;
    align-items: center;
}
</style>