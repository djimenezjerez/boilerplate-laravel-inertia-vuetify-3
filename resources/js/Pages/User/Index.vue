<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Breadcrumbs from '@/Components/Breadcrumbs.vue'
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>
  <Head title="User" />
  <AuthenticatedLayout>
    <div class="mb-5">
      <h5 class="text-h5 font-weight-bold">User</h5>
      <Breadcrumbs :items="breadcrumbs" class="pa-0 mt-1" />
    </div>
    <v-card class="pa-4">
      <div class="d-flex flex-wrap align-center">
        <v-text-field
          v-model="search"
          label="Search"
          variant="underlined"
          prepend-inner-icon="mdi-magnify"
          hide-details
          clearable
          single-line
        />
        <v-spacer />
        <Link href="/user/create" as="div">
          <v-btn color="primary">Create</v-btn>
        </Link>
      </div>
      <v-data-table-server
        :items="data.data"
        :items-length="data.total"
        :headers="headers"
        :search="search"
        class="elevation-0"
        :loading="isLoadingTable"
        :items-per-page-options="paginationOptions"
        @update:options="loadItems"
      >
        <template #[`item.action`]="{ item }">
          <Link :href="`/user/${item.id}/edit`" as="button">
            <v-icon color="warning" icon="mdi-pencil" size="small" />
          </Link>
          <v-icon class="ml-2" color="error" icon="mdi-delete" size="small" @click="deleteItem(item)" />
        </template>
      </v-data-table-server>
    </v-card>
    <v-row justify="center">
      <v-dialog v-model="deleteDialog" persistent width="auto">
        <v-card>
          <v-card-text>¿Seguro que desea remover el registro?</v-card-text>
          <v-card-actions>
            <v-spacer />
            <v-btn color="error" text @click="deleteDialog = false">Cancelar</v-btn>
            <v-btn color="primary" :loading="isLoading" text @click="submitDelete">Confirmar</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-row>
  </AuthenticatedLayout>
</template>

<script>
export default {
  name: 'UserIndex',
  props: {
    data: {
      type: Object,
    },
    paginationOptions: {
      type: Array,
    },
  },
  data() {
    return {
      headers: [
        { title: 'Name', key: 'name' },
        { title: 'Email', key: 'email' },
        { title: 'Created At', key: 'createdAt' },
        { title: 'Action', key: 'action', sortable: false },
      ],
      breadcrumbs: [
        {
          title: 'Inicio',
          disabled: false,
          href: '/dashboard',
        },
        {
          title: 'Users',
          disabled: true,
        },
      ],
      isLoadingTable: false,
      search: null,
      deleteDialog: false,
      isLoading: false,
      deleteId: null,
    }
  },
  methods: {
    loadItems({ page, itemsPerPage, sortBy, search }) {
      this.isLoadingTable = true
      var params = {
        page: page,
        limit: itemsPerPage,
        sort: sortBy[0],
      }
      if (search) {
        params.search = search
      }
      this.$inertia.get('/user', params, {
        preserveState: true,
        preserveScroll: true,
        onSuccess: () => {
          this.isLoadingTable = false
        },
      })
    },
    deleteItem(item) {
      this.deleteId = item.id
      this.deleteDialog = true
    },
    submitDelete() {
      this.isLoading = true
      this.$inertia.delete(`/user/${this.deleteId}`, {
        preserveState: true,
        preserveScroll: true,
        onSuccess: () => {
          this.isLoading = false
          this.deleteDialog = false
        },
      })
    },
  },
}
</script>
