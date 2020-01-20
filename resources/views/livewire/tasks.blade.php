<div>
    <h1 class="block text-center text-gray-600 font-bold text-2xl uppercase mb-2">Todo list</h1>

    <div class="bg-white shadow-lg rounded p-5">
        @livewire('create-task')

        <div class="pt-4">
            @livewire('task-list')
        </div>
    </div>
</div>
