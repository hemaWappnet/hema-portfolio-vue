<template>
    <div class="skill-card" :class="{ 'dark-mode': isDarkMode, 'skill-card-mini': mini }">
        <div class="skill-icon" v-if="skill.icon">
            <i :class="skill.icon"></i>
        </div>
        <div class="skill-content">
            <h3 class="skill-name">{{ skill.name }}</h3>
            <div class="skill-proficiency" v-if="!mini">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" :style="{ width: `${skill.proficiency}%` }"
                        :aria-valuenow="skill.proficiency" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="proficiency-level">{{ getProficiencyLevel(skill.proficiency) }}</span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { inject, computed } from 'vue';

const props = defineProps({
    skill: {
        type: Object,
        required: true
    },
    mini: {
        type: Boolean,
        default: false
    }
});

const darkMode = inject('darkMode', false);
const isDarkMode = computed(() => darkMode.value);

const getProficiencyLevel = (proficiency) => {
    if (proficiency >= 90) return 'Expert';
    if (proficiency >= 75) return 'Advanced';
    if (proficiency >= 50) return 'Intermediate';
    return 'Beginner';
};
</script>

<style scoped>
.skill-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    padding: 1.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    align-items: center;
    gap: 1rem;
    height: 100%;
}

.skill-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.dark-mode.skill-card {
    background-color: #2c2c44;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.skill-card-mini {
    padding: 1rem;
    flex-direction: column;
    text-align: center;
}

.skill-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(157, 78, 221, 0.1);
    color: #9d4edd;
    border-radius: 10px;
    font-size: 1.5rem;
}

.dark-mode .skill-icon {
    background-color: rgba(189, 147, 249, 0.2);
    color: #bd93f9;
}

.skill-card-mini .skill-icon {
    margin-bottom: 0.5rem;
    margin-left: auto;
    margin-right: auto;
}

.skill-content {
    flex-grow: 1;
}

.skill-name {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.skill-card-mini .skill-name {
    font-size: 0.9rem;
    margin-bottom: 0;
}

.skill-proficiency {
    margin-top: 0.75rem;
}

.progress {
    height: 8px;
    background-color: #f0f0f0;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.dark-mode .progress {
    background-color: #373747;
}

.progress-bar {
    background-color: #9d4edd;
    transition: width 1s ease;
}

.dark-mode .progress-bar {
    background-color: #bd93f9;
}

.proficiency-level {
    font-size: 0.75rem;
    color: #666;
    font-weight: 600;
    float: right;
}

.dark-mode .proficiency-level {
    color: #d1d1e0;
}
</style>