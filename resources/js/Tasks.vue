<template>
    <div>
        <h1 class="block text-center text-gray-600 font-bold text-2xl uppercase mb-2">Todo list</h1>

        <div class="bg-white shadow-lg rounded p-5">
            <create-task @update-list="fetchTasks()" />

            <div class="pt-4">
                <task-list :incomplete-tasks="incompleteTasks"
                           :complete-tasks="completeTasks"
                           @update-list="fetchTasks()"
                />
            </div>
        </div>
    </div>
</template>

<script>
import CreateTask from './CreateTask'
import TaskList from './TaskList'

export default {
    components: {
        CreateTask,
        TaskList
    },

    data: () => ({
        incompleteTasks: [],
        completeTasks: [],
    }),

    mounted() {
        this.fetchTasks()
    },

    methods: {
        async fetchTasks() {
            const response = await fetch('/tasks', {
                method: 'GET',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })

            const { incompleteTasks, completeTasks } = await response.json()

            this.incompleteTasks = incompleteTasks
            this.completeTasks = completeTasks
        }
    }
}
</script>
