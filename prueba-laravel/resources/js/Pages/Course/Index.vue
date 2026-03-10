<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

const desserts = ref([
  {
    id: '1',
    name: 'Gestion de Proyectos de Software',
    codigo: 'FZ001',
    descripcion: 'Curso de gestión de proyectos de software',
    creditos: 3,
    maestro_id: 1,
    periodo_academico_id: 1,
    capacidad: 20,
    estado: 'activo'
  },
  {
    id: '2',
    name: 'Programación Web',
    codigo: 'IC001',
    descripcion: 'Curso de programación web',
    creditos: 4,
    maestro_id: 2,
    periodo_academico_id: 1,
    capacidad: 25,
    estado: 'activo'
  },
  {
    id: '3',
    name: 'Análisis y Diseño de Sistemas',
    codigo: 'EC001',
    descripcion: 'Curso de análisis y diseño de sistemas',
    creditos: 3,
    maestro_id: 3,
    periodo_academico_id: 1,
    capacidad: 15
  },
  {
    id: '4',
    name: 'Redes de Computadoras',
    codigo: 'CP001',
    descripcion: 'Curso de redes de computadoras',
    creditos: 3,
    maestro_id: 4,
    periodo_academico_id: 1,
    capacidad: 20
  },
  {
    id: '5',
    name: 'Programación Orientada a Objetos',
    codigo: 'GB001',
    descripcion: 'Curso de programación orientada a objetos',
    creditos: 3,
    maestro_id: 5,
    periodo_academico_id: 1,
    capacidad: 15
  },
  {
    id: '6',
    name: 'Física I',
    codigo: 'JB001',
    descripcion: 'Curso de física I',
    creditos: 1,
    maestro_id: 6,
    periodo_academico_id: 1,
    capacidad: 10
  },
  {
    id: '7',
    name: 'Matematicas Discretas',
    codigo: 'LP001',
    descripcion: 'Curso de matemáticas discretas',
    creditos: 1,
    maestro_id: 7,
    periodo_academico_id: 1,
    capacidad: 10
  },
  {
    id: '8',
    name: 'Sistemas Operativos',
    codigo: 'HW001',
    descripcion: 'Curso de sistemas operativos',
    creditos: 2,
    maestro_id: 8,
    periodo_academico_id: 1,
    capacidad: 15
  },
  {
    id: '9',
    name: 'Calculos III',
    codigo: 'DN001',
    descripcion: 'Curso de cálculos III',
    creditos: 2,
    maestro_id: 9,
    periodo_academico_id: 1,
    capacidad: 15
  },
  {
    id: '10',
    name: 'Pastelería',
    codigo: 'KT001',
    descripcion: 'Curso de pastelería',
    creditos: 1,
    maestro_id: 10,
    periodo_academico_id: 1,
    capacidad: 10
  },
])
</script>

<template>
  <AuthenticatedLayout>
    <v-row justify="center" class="my-4">
      <v-col cols="auto">
        <Link :href="route('courses.create')" class="text-decoration-none">
             <v-btn>
          CREAR CURSO
        </v-btn>
        </Link>
      </v-col>
    </v-row>

    <v-table density="compact">
      <thead>
        <tr>
          <th class="text-left">ID</th>
          <th class="text-left">Nombre</th>
          <th class="text-left">Codigo</th>
          <th class="text-left">Descripcion</th>
          <th class="text-left">Creditos</th>
          <th class="text-left">ID Maestro</th>
          <th class="text-left">ID Periodo Academico</th>
          <th class="text-left">Capacidad</th>
          <th class="text-left">Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in desserts" :key="item.name">
          <td>{{ item.id }}</td>
          <td>{{ item.name }}</td>
          <td>{{ item.codigo }}</td>
          <td>{{ item.descripcion }}</td>
          <td>{{ item.creditos }}</td>
          <td>{{ item.maestro_id }}</td>
          <td>{{ item.periodo_academico_id }}</td>
          <td>{{ item.capacidad }}</td>
          <td>
            <span
              class="px-2 py-1 text-white text-sm rounded"
              :class="item.estado === 'activo'? 'bg-green-500' : 'bg-red-500'"
            >
              {{ item.estado }}
            </span>
          </td>
        </tr>
      </tbody>
    </v-table>
  </AuthenticatedLayout>
</template>
