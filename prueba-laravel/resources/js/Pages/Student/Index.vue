<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link } from '@inertiajs/vue3'

defineProps({
    students: Array
})
</script>

<template>

<AuthenticatedLayout>

<Head title="Students" />

<div class="p-6">

<div class="flex justify-between items-center mb-6">
<h1 class="text-2xl font-bold">Lista de Estudiantes</h1>

<Link
href="/students/create"
class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
>
Crear Estudiante
</Link>

</div>

<div class="overflow-x-auto bg-white shadow-md rounded-lg">

<table class="min-w-full border border-gray-200">

<thead class="bg-gray-100">
<tr>
<th class="px-4 py-2 border">ID</th>
<th class="px-4 py-2 border">Código</th>
<th class="px-4 py-2 border">Nombre</th>
<th class="px-4 py-2 border">Email</th>
<th class="px-4 py-2 border">Semestre</th>
<th class="px-4 py-2 border">Estado</th>
<th class="px-4 py-2 border">Faculty</th>
</tr>
</thead>

<tbody>

<tr
v-for="student in students"
:key="student.id"
class="hover:bg-gray-50"
>

<td class="px-4 py-2 border">{{ student.id }}</td>
<td class="px-4 py-2 border">{{ student.student_code }}</td>
<td class="px-4 py-2 border">{{ student.name }}</td>
<td class="px-4 py-2 border">{{ student.email }}</td>
<td class="px-4 py-2 border">{{ student.semester }}</td>

<td class="px-4 py-2 border">
<span
class="px-2 py-1 text-white text-sm rounded"
:class="student.status === 'active' ? 'bg-green-500' : 'bg-red-500'"
>
{{ student.status }}
</span>
</td>

<td class="px-4 py-2 border">{{ student.faculty_id }}</td>

</tr>

</tbody>

</table>

</div>

</div>

</AuthenticatedLayout>

</template>