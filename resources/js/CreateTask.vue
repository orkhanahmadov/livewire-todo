<template>
    <label class="block shadow-lg mb-5">
        <input class="form-input mt-1 block w-full bg-gray-100 py-3 text-gray-600"
               placeholder="New task..."
               v-model="task"
               @keydown.enter="store" />
    </label>
</template>

<script>
export default {
    data() {
        return {
            task: ''
        }
    },

    methods: {
        async store() {
            const response = await fetch('/tasks', {
                method: 'POST',
                body: JSON.stringify({task: this.task})
            })

            console.log(response)
        }
    }
}
</script>
