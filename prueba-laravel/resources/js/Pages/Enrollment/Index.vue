<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

const desserts = ref([
  {
    id: '1',
    enrollment_date: '2026-01-15',
    status: 'Inscrito',
    final_average: '95',
    student_id: 3,
    course_id: 1,
  },
  {
    id: '2',
    enrollment_date: '2026-01-16',
    status: 'Inscrito',
    final_average: '90',
    student_id: 2,
    course_id: 2,
  },
  {
    id: '3',
    enrollment_date: '2026-01-17',
    status: 'Inscrito',
    final_average: '85',
    student_id: 3,
    course_id: 3,
  },
  {
    id: '4',
    enrollment_date: '2026-01-18',
    status: 'Inscrito',
    final_average: '80',
    student_id: 4,
    course_id: 4,
  },
  {
    id: '5',
    enrollment_date: '2026-01-19',
    status: 'Inscrito',
    final_average: '75',
    student_id: 5,
    course_id: 5,
  },
  {
    id: '6',
    enrollment_date: '2026-01-20',
    status: 'Inscrito',
    final_average: '70',
    student_id: 6,
    course_id: 6,
  },
  {
    id: '7',
    enrollment_date: '2026-01-21',
    status: 'Retirado',
    final_average: '65',
    student_id: 7,
    course_id: 7,
  },
  {
    id: '8',
    enrollment_date: '2026-01-22',
    status: 'Retirado',
    final_average: '60',
    student_id: 8,
    course_id: 8,
  },
  {
    id: '9',
    enrollment_date: '2026-01-23',
    status: 'Retirado',
    final_average: '55',
    student_id: 2,
    course_id: 9,
  },
  {
    id: '10',
    enrollment_date: '2026-01-24',
    status: 'Retirado',
    final_average: '50',
    student_id: 10,
    course_id: 10,
  },
])
</script>

<template>
  <AuthenticatedLayout>
    <v-row justify="center" class="my-4">
      <v-col cols="auto">
        <Link :href="route('enrollments.create')" class="text-decoration-none">
             <v-btn>
          CREAR Inscripcion
        </v-btn>
        </Link>
      </v-col>
    </v-row>

    <v-table density="compact">
      <thead>
        <tr>
          <th class="text-left">ID</th>
          <th class="text-left">Fecha de inscripcion</th>
          <th class="text-left">Estado</th>
          <th class="text-left">Promedio Final</th>
          <th class="text-left">ID Estudiante</th>
          <th class="text-left">ID Curso</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in desserts" :key="item.name">
          <td>{{ item.id }}</td>
          <td>{{ item.enrollment_date }}</td>
          <td>{{ item.status }}</td>
          <td>{{ item.final_average }}</td>
          <td>{{ item.student_id }}</td>
          <td>{{ item.course_id }}</td>
          <td>
          </td>
        </tr>
      </tbody>
    </v-table>
  </AuthenticatedLayout>
</template>
