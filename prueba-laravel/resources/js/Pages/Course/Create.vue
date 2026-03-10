<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { ref } from 'vue'

const form = ref({
  name: '',
  codigo: '',
  descripcion: '',
  creditos: null,
  maestro_id: null,
  periodo_academico_id: null,
  capacidad: null,
  estado: 'activo'
})

const estados = ['activo', 'inactivo']
const docentes = [
  { id: 1, nombre: 'Abraham Sikaffy' },
  { id: 2, nombre: 'Mario Escobar' },
  { id: 3, nombre: 'Ledin Alvarado' },
]
const periodos = [
  { id: 1, nombre: '2026-I' },
  { id: 2, nombre: '2026-II' },
]
</script>

<template>
  <AuthenticatedLayout>
    <v-container>
      <h2 class="text-xl font-bold mb-4">Crear Curso</h2>

      <v-form>
        <v-text-field v-model="form.name" label="Nombre del curso" required />
        <v-text-field v-model="form.codigo" label="Código" required />
        <v-textarea v-model="form.descripcion" label="Descripción" />

        <v-text-field v-model="form.creditos" label="Créditos" type="number" />
        <v-text-field v-model="form.capacidad" label="Capacidad" type="number" />

       
        <v-select
          v-model="form.estado"
          :items="estados"
          label="Estado"
        />

    
        <v-select
          v-model="form.maestro_id"
          :items="docentes"
          item-title="nombre"
          item-value="id"
          label="Docente"
        />

       
        <v-select
          v-model="form.periodo_academico_id"
          :items="periodos"
          item-title="nombre"
          item-value="id"
          label="Periodo Académico"
        />

        <v-btn color="primary" class="mt-4">
          Guardar
        </v-btn>
      </v-form>
    </v-container>
  </AuthenticatedLayout>
</template>
