<template>
    <AppLayout>
        <div class="about-header py-5">
            <div class="container">
                <h1 class="text-center">About Me</h1>
                <p class="lead text-center">Get to know me and my professional journey.</p>
            </div>
        </div>

        <div class="about-content py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="about-image">
                            <img :src="profileImage" alt="Developer Profile"
                                class="img-fluid rounded-circle shadow-lg" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-text">
                            <h2 class="section-title">Your Name</h2>
                            <h3 class="mb-4">Full Stack Developer</h3>

                            <p class="mb-4">
                                I'm a passionate full stack developer with expertise in Laravel, Vue.js, and modern web
                                development practices.
                                With over 5 years of professional experience, I've helped businesses transform their
                                ideas into elegant,
                                functional web applications.
                            </p>

                            <p class="mb-4">
                                My approach to development combines technical excellence with creative problem-solving.
                                I believe in
                                writing clean, maintainable code and creating intuitive user experiences that delight
                                users and meet business goals.
                            </p>

                            <div class="personal-info mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li><strong>Name:</strong> Your Name</li>
                                            <li><strong>Email:</strong> your.email@example.com</li>
                                            <li><strong>Location:</strong> Your City, Country</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li><strong>Experience:</strong> 5+ Years</li>
                                            <li><strong>Availability:</strong> Available for Freelance</li>
                                            <li><strong>Languages:</strong> English, Spanish</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="about-actions mt-4">
                                <a href="/downloads/resume.pdf" target="_blank" class="btn btn-primary me-3">
                                    <i class="bi bi-download me-2"></i> Download Resume
                                </a>
                                <Link :href="route('contact')" class="btn btn-outline-primary">
                                <i class="bi bi-envelope me-2"></i> Contact Me
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="experience-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Experience & Education</h2>

                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-badge">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Senior Full Stack Developer</h3>
                                <p class="text-muted">
                                    <i class="bi bi-building me-2"></i> Tech Company Inc.
                                    <span class="mx-2">|</span>
                                    <i class="bi bi-calendar me-2"></i> 2022 - Present
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Led development of multiple web applications using Laravel and Vue.js.
                                    Implemented modern CI/CD practices and improved application performance by 40%.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-badge">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="timeline-panel">
                            <h3>Web Developer</h3>
                            <p class="text-muted">
                                <i class="bi bi-building me-2"></i> Digital Solutions Co.
                                <span class="mx-2">|</span>
                                <i class="bi bi-calendar me-2"></i> 2020 - 2022
                            </p>
                            <p>
                                Developed and maintained client websites using Laravel and jQuery.
                                Collaborated with design team to implement responsive interfaces.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-badge">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <div class="timeline-panel">
                            <h3>Bachelor of Science in Computer Science</h3>
                            <p class="text-muted">
                                <i class="bi bi-building me-2"></i> University Name
                                <span class="mx-2">|</span>
                                <i class="bi bi-calendar me-2"></i> 2016 - 2020
                            </p>
                            <p>
                                Graduated with honors. Focused on web development and software engineering.
                                Completed senior project on real-time web applications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import profileImage from '@/assets/images/profile.gif';
</script>

<style scoped>
.about-header {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 4rem 0;
    margin-bottom: 2rem;
}

.dark-mode .about-header {
    background: linear-gradient(135deg, #bd93f9 0%, #6272a4 100%);
}

.about-image {
    position: relative;
    text-align: center;
}

.about-image img {
    width: 80%;
    border: 10px solid white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.dark-mode .about-image img {
    border-color: #2c2c44;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.section-title {
    position: relative;
    padding-bottom: 1rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background-color: #9d4edd;
}

.dark-mode .section-title::after {
    background-color: #bd93f9;
}

.personal-info {
    background-color: #f8f9fa;
    border-radius: 10px;
    padding: 1.5rem;
}

.dark-mode .personal-info {
    background-color: #2c2c44;
}

.dark-mode .bg-light {
    background-color: #282a36 !important;
}

.timeline {
    position: relative;
    margin-top: 3rem;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    margin-left: -1px;
    background-color: #e0e0e0;
}

.dark-mode .timeline::before {
    background-color: #4b4b6c;
}

.timeline-item {
    position: relative;
    margin-bottom: 2rem;
}

.timeline-badge {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50px;
    height: 50px;
    margin-left: -25px;
    border-radius: 50%;
    background-color: #9d4edd;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    z-index: 1;
}

.dark-mode .timeline-badge {
    background-color: #bd93f9;
    color: #282a36;
}

.timeline-panel {
    position: relative;
    width: calc(50% - 40px);
    margin-left: auto;
    padding: 1.5rem;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.timeline-item:nth-child(even) .timeline-panel {
    margin-left: 0;
    margin-right: auto;
}

.dark-mode .timeline-panel {
    background-color: #2c2c44;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.timeline-heading h3 {
    margin-top: 0;
    font-size: 1.25rem;
    font-weight: 600;
}

.timeline-body p {
    margin-bottom: 0;
}

@media (max-width: 767.98px) {
    .timeline::before {
        left: 40px;
    }

    .timeline-badge {
        left: 40px;
    }

    .timeline-panel {
        width: calc(100% - 80px);
        margin-left: 80px !important;
    }
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