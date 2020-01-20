<template>
    <div>
        <h1 class="block text-center text-gray-600 font-bold text-2xl uppercase mb-2">Todo list</h1>

        <div class="bg-white shadow-lg rounded p-5">
            <create-task />

            tasks
        </div>
    </div>
</template>

<script>
import CreateTask from './CreateTask'

export default {
    components: {
        CreateTask
    }
}
</script>
