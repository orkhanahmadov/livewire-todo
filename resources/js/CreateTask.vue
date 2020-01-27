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
    data: () => ({
        task: ''
    }),

    methods: {
        async store() {
            await fetch('/tasks', {
                method: 'POST',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({task: this.task})
            })

            this.task = ''
            this.$emit('update-list')
        }
    }
}
</script>
