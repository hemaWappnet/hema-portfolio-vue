<template>
    <button @click="toggleDarkMode" class="dark-mode-toggle" :class="{ 'dark': modelValue }"
        aria-label="Toggle dark mode">
        <div class="icon-container">
            <i class="bi bi-sun-fill sun-icon"></i>
            <i class="bi bi-moon-fill moon-icon"></i>
        </div>
    </button>
</template>

<script setup>
const props = defineProps({
    modelValue: {
        type: Boolean,
        required: true
    }
});

const emit = defineEmits(['update:modelValue']);

const toggleDarkMode = () => {
    emit('update:modelValue', !props.modelValue);
};
</script>

<style scoped>
.dark-mode-toggle {
    width: 50px;
    height: 24px;
    border-radius: 12px;
    background-color: #9d4edd;
    position: relative;
    cursor: pointer;
    border: none;
    outline: none;
    padding: 0;
    transition: background-color 0.3s ease;
    overflow: hidden;
}

.dark-mode-toggle.dark {
    background-color: #bd93f9;
}

.icon-container {
    position: absolute;
    display: flex;
    width: 200%;
    top: 0;
    height: 100%;
    transition: transform 0.3s ease;
    transform: translateX(0);
}

.dark-mode-toggle.dark .icon-container {
    transform: translateX(-50%);
}

.sun-icon,
.moon-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50%;
    height: 100%;
    font-size: 16px;
}

.sun-icon {
    color: #fff36d;
}

.moon-icon {
    color: #ffffff;
}
</style>