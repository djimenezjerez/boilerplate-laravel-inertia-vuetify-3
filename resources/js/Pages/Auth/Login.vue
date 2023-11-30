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
  email: 'admin@test.com',
  password: 'admin',
  remember: false,
})
const showPassword = ref(false)

const submit = () => {
  form.post('/login', {
    onFinish: () => form.reset('password'),
  })
}
</script>
<script>
export default {
  name: 'LoginPage',
}
</script>

<template>
  <GuestLayout>
    <Head title="Log in" />
    <v-form @submit.prevent="submit">
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
      <div class="d-flex align-center justify-space-between flex-shrink-1">
        <v-checkbox v-model="form.remember" label="Recuérdame" density="compact" hide-details />
        <Link
          class="text-caption text-decoration-none text-blue"
          href="/forgot-password"
          rel="noopener noreferrer"
          target="_blank"
        >
          Olvidé mi contraseña
        </Link>
      </div>
      <v-btn :loading="form.processing" type="submit" block color="primary" class="mt-3">Ingresar</v-btn>
    </v-form>
    <v-card-text class="text-center">
      <Link class="text-blue text-decoration-none" href="/register">
        Registrarme
        <v-icon icon="mdi-chevron-right" />
      </Link>
    </v-card-text>
  </GuestLayout>
</template>
