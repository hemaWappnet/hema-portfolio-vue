<template>
    <AppLayout>
        <div class="contact-header py-5">
            <div class="container">
                <h1 class="text-center">Let's Connect!</h1>
                <p class="lead text-center">Got a project in mind, a burning question, or just want to say hello?
                    I'd love to hear from you. Drop me a line!</p>
            </div>
        </div>

        <div class="contact-content py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="contact-info">
                            <h2 class="section-title">Get In Touch Directly</h2>
                            <p class="mb-4">
                                Feel free to reach out with any queries, ideas, or just to say hello!
                                I'll do my best to respond within 24 hours.
                            </p>

                            <div class="quick-contact-options">
                                <h3>Quick Inquiries:</h3>
                                <button @click="sendSpecificEmail('collaboration')">Collaboration Ideas</button>
                                <button @click="sendSpecificEmail('support')">General Support</button>
                            </div>

                            <div class="contact-methods">
                                <div class="contact-method">
                                    <div class="contact-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h3>Email</h3>
                                        <p>{{ $page.props.dev?.email }}</p>
                                    </div>
                                </div>

                                <div class="contact-method">
                                    <div class="contact-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h3>Location</h3>
                                        <p>{{ $page.props.dev?.location }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="social-links mt-4">
                                <h3 class="mb-3">Connect With Me Online</h3>
                                <div class="social-icons">
                                    <a href="https://github.com/yourusername" target="_blank" class="social-icon">
                                        <i class="bi bi-github"></i>
                                    </a>
                                    <a href="https://linkedin.com/in/yourusername" target="_blank" class="social-icon">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="https://twitter.com/yourusername" target="_blank" class="social-icon">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                    <a href="https://dev.to/yourusername" target="_blank" class="social-icon">
                                        <i class="bi bi-code-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form-container">
                            <h2 class="section-title">Send Me a Detailed Message</h2>
                            <ContactForm />
                        </div>
                    </div>
                </div>

                <div class="why-contact-me mt-5">
                    <h2 class="section-title">Why Reach Out?</h2>
                    <p>I'm always open to discussing:</p>
                    <ul>
                        <li>Exciting new project collaborations</li>
                        <li>Freelance opportunities</li>
                        <li>Speaking engagements</li>
                        <li>Sharing ideas and insights</li>
                        <li>Answering your questions about my work</li>
                    </ul>
                    <p>Let's see how we can work together!</p>
                </div>
            </div>
        </div>

        <div class="map-section">
            <div class="ratio ratio-21x9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.29918865065!2d72.41492971537376!3d23.020158084113362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1746520753642!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="Google Maps"></iframe>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ContactForm from '@/Components/ContactForm.vue';
import { ref } from 'vue';
import { usePage } from '@inertiajs/vue3';

const devEmail = usePage().props.dev?.email

const sendSpecificEmail = (type) => {
    let subject = '';
    if (type === 'collaboration') {
        subject = `Collaboration Inquiry from Portfolio`;
    } else if (type === 'support') {
        subject = `General Support Question from Portfolio`;
    }
    window.location.href = `mailto:${devEmail}?subject=${encodeURIComponent(subject)}`;
};
</script>

<style scoped>
.section-title {
    position: relative;
    padding-bottom: 1rem;
    margin-bottom: 1.5rem;
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

.contact-info {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    height: 100%;
}

.dark-mode .contact-info {
    background-color: #2c2c44;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    margin-top: 2rem;
}

.contact-method {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.contact-icon {
    width: 50px;
    height: 50px;
    background-color: rgba(157, 78, 221, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: #9d4edd;
    flex-shrink: 0;
}

.dark-mode .contact-icon {
    background-color: rgba(189, 147, 249, 0.2);
    color: #bd93f9;
}

.contact-text h3 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.contact-text p {
    margin-bottom: 0;
    color: #666;
}

.dark-mode .contact-text p {
    color: #d1d1e0;
}

.social-icons {
    display: flex;
    gap: 1rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(157, 78, 221, 0.1);
    color: #9d4edd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.social-icon:hover {
    background-color: #9d4edd;
    color: white;
    transform: translateY(-5px);
}

.dark-mode .social-icon {
    background-color: rgba(189, 147, 249, 0.2);
    color: #bd93f9;
}

.dark-mode .social-icon:hover {
    background-color: #bd93f9;
    color: #282a36;
}

.map-section {
    margin-top: 4rem;
}

.contact-header {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 4rem 0;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
}

.dark-mode .contact-header {
    background: linear-gradient(135deg, #bd93f9 0%, #6272a4 100%);
}

.contact-method {
    transition: transform 0.2s ease-in-out;
}

.contact-method:hover {
    transform: translateY(-3px);
}

.quick-contact-options h3 {
    font-size: 1rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #333;
}

.dark-mode .quick-contact-options h3 {
    color: #f1f1f1;
}

.quick-contact-options button {
    padding: 0.5rem 1rem;
    margin-right: 0.5rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    font-weight: 500;
}

.quick-contact-options button:nth-child(2) {
    background-color: rgba(157, 78, 221, 0.1);
    color: #9d4edd;
    border-color: #9d4edd;
}

.quick-contact-options button:nth-child(2):hover {
    background-color: #9d4edd;
    color: white;
    border-color: #9d4edd;
}

.dark-mode .quick-contact-options button:nth-child(2) {
    background-color: rgba(189, 147, 249, 0.2);
    color: #bd93f9;
    border-color: #bd93f9;
}

.dark-mode .quick-contact-options button:nth-child(2):hover {
    background-color: #bd93f9;
    color: #282a36;
    border-color: #bd93f9;
}

.quick-contact-options button:nth-child(3) {
    background-color: rgba(29, 161, 242, 0.1);
    color: #1da1f2;
    border-color: #1da1f2;
}

.quick-contact-options button:nth-child(3):hover {
    background-color: #1da1f2;
    color: white;
    border-color: #1da1f2;
}

.dark-mode .quick-contact-options button:nth-child(3) {
    background-color: rgba(29, 161, 242, 0.2);
    color: #0d8bd9;
    border-color: #0d8bd9;
}

.dark-mode .quick-contact-options button:nth-child(3):hover {
    background-color: #0d8bd9;
    color: #282a36;
    border-color: #0d8bd9;
}

.why-contact-me {
    padding: 2rem;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    color: #333;
}

.dark-mode .why-contact-me {
    background-color: #2c2c44;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    color: #d1d1e0;
}

.why-contact-me ul {
    padding-left: 1.5rem;
    margin-bottom: 1rem;
    color: #555;
}

.dark-mode .why-contact-me ul {
    color: #d1d1e0;
}

.why-contact-me li {
    margin-bottom: 0.5rem;
    color: #555;
}

.dark-mode .why-contact-me li {
    color: #d1d1e0;
}

@media (min-width: 992px) {
    .contact-content .row {
        display: flex;
        align-items: stretch;
    }
}
</style>