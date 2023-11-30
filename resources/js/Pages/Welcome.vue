<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import VuetifyLogo from '@/Components/VuetifyLogo.vue'
import { Head, Link } from '@inertiajs/vue3'

const props = defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  auth: Object,
})
</script>

<template>
  <Head title="Welcome" />
  <v-app class="bg-grey-lighten-4">
    <v-main>
      <v-container>
        <v-row align="center" justify="center" style="height: 100vh">
          <v-col cols="12" sm="12" md="10" lg="4">
            <v-card class="pa-3 rounded-lg elevation-8">
              <v-card-title class="text-center">
                <div class="d-flex justify-center mb-4">
                  <ApplicationLogo class="mr-1" style="height: 75" />
                  <VuetifyLogo class="ml-1" style="height: 75" />
                </div>
                <span class="text-h5">Laravel 10 + Inertia + Vuetify 3</span>
              </v-card-title>
              <v-card-text>
                <p class="text-body-2">Boilerplate para página de bienvenida con Laravel 10 + Inertia + Vue 3</p>
              </v-card-text>
              <v-card-actions class="justify-end">
                <div v-if="props.auth.user != null">
                  <Link href="/dashboard" as="div">
                    <v-btn color="primary">Inicio</v-btn>
                  </Link>
                </div>
                <div v-else>
                  <div class="d-flex">
                    <Link v-if="props.canRegister" href="/register" as="div" class="mr-2">
                      <v-btn variant="elevated" color="secondary">Registrarme</v-btn>
                    </Link>
                    <Link v-if="props.canLogin" href="/login" as="div">
                      <v-btn variant="elevated" color="primary">Ingresar</v-btn>
                    </Link>
                  </div>
                </div>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: 'WelcomePage',
}
</script>
