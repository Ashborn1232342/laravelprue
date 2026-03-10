<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link } from '@inertiajs/vue3'

defineProps({
    teachers: Array
})
</script>

<template>

<AuthenticatedLayout>

<Head title="Teachers" />

<div class="p-6">

<div class="flex justify-between items-center mb-6">

<h1 class="text-2xl font-bold">Lista de Profesores</h1>

<Link
href="/teachers/create"
class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
>
Crear Profesor
</Link>

</div>

<div class="overflow-x-auto bg-white shadow-md rounded-lg">

<table class="min-w-full border border-gray-200">

<thead class="bg-gray-100">
<tr>
<th class="px-4 py-2 border">ID</th>
<th class="px-4 py-2 border">Código</th>
<th class="px-4 py-2 border">Especialidad</th>
<th class="px-4 py-2 border">Fecha Contratación</th>
<th class="px-4 py-2 border">Estado</th>
</tr>
</thead>

<tbody>

<tr
v-for="teacher in teachers"
:key="teacher.id"
class="hover:bg-gray-50"
>

<td class="px-4 py-2 border">{{ teacher.id }}</td>
<td class="px-4 py-2 border">{{ teacher.employee_code }}</td>
<td class="px-4 py-2 border">{{ teacher.specialty }}</td>
<td class="px-4 py-2 border">{{ teacher.hire_date }}</td>

<td class="px-4 py-2 border">
<span
class="px-2 py-1 text-white text-sm rounded"
:class="teacher.status === 'active' ? 'bg-green-500' : 'bg-red-500'"
>
{{ teacher.status }}
</span>
</td>

</tr>

</tbody>

</table>

</div>

</div>

</AuthenticatedLayout>

</template>