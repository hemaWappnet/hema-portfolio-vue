<template>
    <div class="contact-form-wrapper">
        <form @submit.prevent="submitForm" class="contact-form">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" v-model="form.name"
                    :class="{ 'is-invalid': form.errors.name }" required>
                <div v-if="form.errors.name" class="invalid-feedback">{{ form.errors.name }}</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" v-model="form.email"
                    :class="{ 'is-invalid': form.errors.email }" required>
                <div v-if="form.errors.email" class="invalid-feedback">{{ form.errors.email }}</div>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject of Your Inquiry</label>
                <input type="text" class="form-control" id="subject" v-model="form.subject"
                    :class="{ 'is-invalid': form.errors.subject }" required>
                <div v-if="form.errors.subject" class="invalid-feedback">{{ form.errors.subject }}</div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" rows="5" v-model="form.message"
                    :class="{ 'is-invalid': form.errors.message }" required></textarea>
                <div v-if="form.errors.message" class="invalid-feedback">{{ form.errors.message }}</div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary" :disabled="processing">
                    <span v-if="processing" class="spinner-border spinner-border-sm me-2" output="status"
                        aria-hidden="true"></span>
                    {{ processing ? 'Sending...' : 'Send Message' }}
                </button>
                <div v-if="form.recentlySuccessful" class="mt-3 text-success">
                    Thank you for your message! I'll get back to you soon.
                </div>
            </div>
        </form>
    </div>
</template>

<script setup>
import { ref, inject } from 'vue';
import { useForm } from '@inertiajs/vue3';

const darkMode = inject('darkMode', false);

const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: ''
});

const processing = ref(false);

const submitForm = () => {
    processing.value = true;

    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            processing.value = false;
        },
        onError: () => {
            processing.value = false;
        }
    });
};
</script>

<style scoped>
.contact-form-wrapper {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin: 0 auto;
}

.dark-mode .contact-form-wrapper {
    background-color: #2c2c44;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.form-control {
    border-radius: 8px;
    padding: 0.75rem 1rem;
    border: 1px solid #e0e0e0;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    border-color: #9d4edd;
    box-shadow: 0 0 0 0.25rem rgba(157, 78, 221, 0.25);
}

.dark-mode .form-control {
    background-color: #373747;
    border-color: #3c3c5a;
    color: #f1f1f1;
}

.dark-mode .form-control:focus {
    border-color: #bd93f9;
    box-shadow: 0 0 0 0.25rem rgba(189, 147, 249, 0.25);
}

.dark-mode .form-label {
    color: #f1f1f1;
}

.btn-primary {
    background-color: #9d4edd;
    border-color: #9d4edd;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    border-radius: 8px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background-color: #7b2cbf;
    border-color: #7b2cbf;
    transform: translateY(-2px);
}

.btn-primary:active {
    transform: translateY(0);
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
</style>