<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Breadcrumbs from '@/Components/Breadcrumbs.vue'
import { Head, Link, useForm, router } from '@inertiajs/vue3'
const form = useForm({
  name: null,
  email: null,
  phone: null,
  gender: null,
  address: null,
})

const submit = () => {
  form.post('/role', {
    onSuccess: () => {
      router.visit('/role')
    },
  })
}
</script>

<template>
  <Head title="Registrar Rol" />
  <AuthenticatedLayout>
    <div class="mb-5">
      <h5 class="text-h5 font-weight-bold">Registrar Rol</h5>
      <Breadcrumbs :items="breadcrumbs" class="pa-0 mt-1" />
    </div>
    <v-card>
      <v-form @submit.prevent="submit">
        <v-card-text>
          <v-row>
            <v-col cols="12" sm="12" md="6">
              <v-text-field v-model="form.name" label="Name" variant="underlined" :error-messages="form.errors.name" />
            </v-col>
          </v-row>
          <v-row dense>
            <v-col cols="12">
              <div class="text-subtitle-1 text-medium-emphasis">Permisos</div>
            </v-col>
            <v-col cols="12">
              <v-tabs v-model="form.module" bg-color="primary">
                <v-tab v-for="item in modules.data" :key="item.id" value="one">{{ item.displayName }}</v-tab>
              </v-tabs>
              <v-window v-model="form.module">
                <v-window-item value="one"> One </v-window-item>
              </v-window>
            </v-col>
          </v-row>
        </v-card-text>
        <v-card-actions>
          <v-spacer />
          <Link href="/people" as="div">
            <v-btn text>Cancelar</v-btn>
          </Link>
          <v-btn type="submit" color="primary">Registrar</v-btn>
        </v-card-actions>
      </v-form>
    </v-card>
  </AuthenticatedLayout>
</template>

<script>
export default {
  name: 'RoleCreate',
  props: {
    modules: {
      type: Object,
    },
  },
  data() {
    return {
      breadcrumbs: [
        {
          title: 'Lista',
          disabled: false,
          href: '/role',
        },
        {
          title: 'Registro',
          disabled: true,
        },
      ],
    }
  },
}
</script>
