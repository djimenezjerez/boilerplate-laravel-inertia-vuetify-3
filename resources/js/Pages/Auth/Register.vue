<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'
import { ref } from 'vue'

defineProps({
  canResetPassword: {
    type: Boolean,
  },
  status: {
    type: String,
  },
})

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
})
const showPassword = ref(false)

const submit = () => {
  form.post('/register', {
    onFinish: () => form.reset('password', 'password_confirmation'),
  })
}
</script>
<script>
export default {
  name: 'RegisterPage',
}
</script>

<template>
  <GuestLayout>
    <Head title="Log in" />
    <v-form @submit.prevent="submit">
      <div class="text-subtitle-1 text-medium-emphasis">Nombre</div>
      <v-text-field
        v-model="form.name"
        type="text"
        variant="outlined"
        density="compact"
        placeholder="Nombre completo"
        prepend-inner-icon="mdi-account"
        :error-messages="form.errors.name"
      />
      <div class="text-subtitle-1 text-medium-emphasis">Email</div>
      <v-text-field
        v-model="form.email"
        type="email"
        variant="outlined"
        density="compact"
        placeholder="Dirección de correo electrónico"
        prepend-inner-icon="mdi-email-outline"
        :error-messages="form.errors.email"
      />
      <div class="text-subtitle-1 text-medium-emphasis">Contraseña</div>
      <v-text-field
        v-model="form.password"
        density="compact"
        variant="outlined"
        placeholder="Ingrese su contraseña"
        prepend-inner-icon="mdi-lock-outline"
        :append-inner-icon="showPassword ? 'mdi-eye-off' : 'mdi-eye'"
        :type="showPassword ? 'text' : 'password'"
        :error-messages="form.errors.password"
        @click:append-inner="showPassword = !showPassword"
      />
      <div class="text-subtitle-1 text-medium-emphasis">Confirmación de Contraseña</div>
      <v-text-field
        v-model="form.password_confirmation"
        density="compact"
        variant="outlined"
        placeholder="Repita su contraseña"
        prepend-inner-icon="mdi-lock-outline"
        :append-inner-icon="showPassword ? 'mdi-eye-off' : 'mdi-eye'"
        :type="showPassword ? 'text' : 'password'"
        :error-messages="form.errors.password_confirmation"
        @click:append-inner="showPassword = !showPassword"
      />
      <v-btn :loading="form.processing" type="submit" block color="primary" class="mt-3">Registrar</v-btn>
    </v-form>
    <v-card-text class="text-center">
      <Link class="text-blue text-decoration-none" href="/login"> Ya soy usuario </Link>
    </v-card-text>
  </GuestLayout>
</template>
