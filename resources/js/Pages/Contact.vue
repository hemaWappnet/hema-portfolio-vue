<template>
    <AppLayout>
        <div class="contact-header py-5">
            <div class="container">
                <h1 class="text-center">Get In Touch</h1>
                <p class="lead text-center">Have a question or want to work together? Feel free to contact me.</p>
            </div>
        </div>

        <div class="contact-content py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="contact-info">
                            <h2 class="section-title">Contact Information</h2>
                            <p class="mb-4">
                                I'm always open to new opportunities, interesting projects, and meeting new people.
                                Feel free to reach out using any of the methods below.
                            </p>

                            <div class="contact-methods">
                                <div class="contact-method">
                                    <div class="contact-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h3>Email</h3>
                                        <p>mdvasita@gmail.com</p>
                                    </div>
                                </div>

                                <div class="contact-method">
                                    <div class="contact-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h3>Location</h3>
                                        <p>Ahmedabad, Gujarat, India</p>
                                    </div>
                                </div>

                                <!-- Phone removed as not provided -->
                            </div>

                            <div class="social-links mt-4">
                                <h3 class="mb-3">Connect With Me</h3>
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
                            <h2 class="section-title">Send Me a Message</h2>
                            <p class="mb-4">
                                Have a project in mind or just want to say hello? Fill out the form below, and I'll get
                                back to you as soon as possible.
                            </p>

                            <ContactForm />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-section">
            <div class="ratio ratio-21x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.29918865065!2d72.41492971537376!3d23.020158084113362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1746520753642!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ContactForm from '@/Components/ContactForm.vue';
</script>

<style scoped>
.contact-header {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 4rem 0;
    margin-bottom: 2rem;
}

.dark-mode .contact-header {
    background: linear-gradient(135deg, #bd93f9 0%, #6272a4 100%);
}

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
</style>