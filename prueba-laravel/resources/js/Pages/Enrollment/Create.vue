<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  enrollment_date: '',
  estado: 'activo',
  final_average: null,
  student_id: null,
  course_id: null,
})


const estados = ['Inscrito', 'Retirado', 'Finalizado']

const estudiantes = [
  { id: 1, nombre: 'Juanito' },
  { id: 2, nombre: 'María' },
  { id: 3, nombre: 'Carlos Gonzalez' },
]

const cursos = [
  { id: 1, nombre: 'Programación Web' },
  { id: 2, nombre: 'Redes de Computadoras' },
  { id: 3, nombre: 'Física I' },
]


const submit = () => {
  form.post(route('enrollments.store'))
}
</script>

<template>
  <AuthenticatedLayout>
    <v-container>
      <h2 class="text-xl font-bold mb-4">Crear Inscripción</h2>

      <v-form @submit.prevent="submit">
    
        <v-text-field
          v-model="form.enrollment_date"
          label="Fecha de inscripción"
          type="date"
          required
        />

        <v-select
          v-model="form.estado"
          :items="estados"
          label="Estado"
          required
        />

    
        <v-text-field
          v-model="form.final_average"
          label="Promedio Final"
          type="number"
        />

    
        <v-select
          v-model="form.student_id"
          :items="estudiantes"
          item-title="nombre"
          item-value="id"
          label="Estudiante"
          required
        />

        <v-select
          v-model="form.course_id"
          :items="cursos"
          item-title="nombre"
          item-value="id"
          label="Curso"
          required
        />

        <v-btn type="submit" color="primary" class="mt-4">
          Guardar
        </v-btn>
      </v-form>
    </v-container>
  </AuthenticatedLayout>
</template>
