<template>
    <div>
        <h1 class="block text-center text-gray-600 font-bold text-2xl uppercase mb-2">Todo list</h1>

        <div class="bg-white shadow-lg rounded p-5">
            <create-task />

            <div class="pt-4">
                tasks
<!--                <tasks />-->
            </div>
        </div>
    </div>
</template>

<script>
import CreateTask from './CreateTask'
import Tasks from './Tasks'

export default {
    components: {
        CreateTask,
        Tasks
    },

    data() {
        return {
            incompleteTasks: [],
            completeTasks: [],
        }
    },

    mounted() {
        this.fetchTasks()
    },

    methods: {
        async fetchTasks() {
            const { body } = await fetch('/tasks', {
                method: 'GET',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })

            console.log(body)
        }
    }
}
</script>
