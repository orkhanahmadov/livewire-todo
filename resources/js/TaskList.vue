<template>
    <div>
        <h2 v-if="incompleteTasks.length === 0"
            class="block text-center text-gray-600 font-bold text-lg pb-3"
        >Good job! 🤙 You completed all tasks!</h2>

        <div v-else>
            <div v-for="task in incompleteTasks"
                 :key="task.id"
                 class="flex items-center justify-between py-2 first:pt-0 last:pb-0"
            >
                <label class="flex items-center cursor-pointer w-full"
                       @prevent="markAsComplete(task.id)"
                >
                    <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5">

                    <span class="block ml-2 text-lg text-gray-600">{{ task.name }}</span>
                </label>

                <button class="ml-2 bg-gray-500 text-white text-sm rounded px-1"
                        type="button"
                        @click="delete(task.id)"
                >Delete</button>
            </div>
        </div>

        <hr v-if="completeTasks.length > 0" class="block my-4" />

        <div v-for="task in completeTasks"
             :key="task.id"
             class="flex items-center justify-between py-2 first:pt-0 last:pb-0">
            <label class="flex items-center cursor-pointer w-full"
                   @click="markAsIncomplete(task.id)"
            >
                <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5" checked>

                <div class="flex items-center justify-between w-full">
                    <span class="block ml-2 text-lg text-gray-600 line-through">{{ task.name }}</span>

                    <span class="inline-block text-sm text-gray-500">{{ task.formatted_completed_at }}</span>
                </div>
            </label>


            <button class="ml-2 bg-gray-500 text-white text-sm rounded px-1"
                    type="button"
                    @click="delete(task.id)"
            >Delete</button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        incompleteTasks: {
            type: Array,
            required: true
        },
        completeTasks: {
            type: Array,
            required: true
        }
    },

    methods: {
        markAsComplete(taskId) {
            this.sendRequest(`/tasks/${taskId}/completed`, 'POST')
        },
        markAsIncomplete(taskId) {
            this.sendRequest(`/tasks/${taskId}/completed`, 'DELETE')
        },
        delete(taskId) {
            this.sendRequest(`/tasks/${taskId}`, 'DELETE')
        },
        async sendRequest(url, method) {
            await fetch(url, {
                method: method,
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
        }
    }
}
</script>
