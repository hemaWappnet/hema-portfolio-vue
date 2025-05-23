<template>
    <div class="contact-form-wrapper">
        <form @submit.prevent="submitForm" class="contact-form">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" v-model="form.name"
                    :class="{ 'is-invalid': errors?.name }" required>
                <div v-if="errors?.name" class="invalid-feedback">{{ errors?.name }}</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" v-model="form.email"
                    :class="{ 'is-invalid': errors?.email }" required>
                <div v-if="errors?.email" class="invalid-feedback">{{ errors?.email }}</div>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" v-model="form.subject"
                    :class="{ 'is-invalid': errors?.subject }" required>
                <div v-if="errors?.subject" class="invalid-feedback">{{ errors?.subject }}</div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" v-model="form.message"
                    :class="{ 'is-invalid': errors?.message }" required></textarea>
                <div v-if="errors?.message" class="invalid-feedback">{{ errors?.message }}</div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary" :disabled="processing">
                    <span v-if="processing" class="spinner-border spinner-border-sm me-2" role="status"
                        aria-hidden="true"></span>
                    {{ processing ? 'Sending...' : 'Send Message' }}
                </button>
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
    max-width: 600px;
    margin: 0 auto;
}

:deep(.dark-mode) .contact-form-wrapper {
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

:deep(.dark-mode) .form-control {
    background-color: #373747;
    border-color: #3c3c5a;
    color: #f1f1f1;
}

:deep(.dark-mode) .form-control:focus {
    border-color: #bd93f9;
    box-shadow: 0 0 0 0.25rem rgba(189, 147, 249, 0.25);
}

:deep(.dark-mode) .form-label {
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

:deep(.dark-mode) .btn-primary {
    background-color: #bd93f9;
    border-color: #bd93f9;
    color: #282a36;
}

:deep(.dark-mode) .btn-primary:hover {
    background-color: #a68dfc;
    border-color: #a68dfc;
}
</style>