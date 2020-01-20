<label class="block bg-white shadow rounded p-4 mb-4">
    <span class="text-gray-600 font-bold uppercase text-sm">Create a new task</span>
    <input class="form-input mt-1 block w-full"
           placeholder="Do something..."
           wire:model="task"
           wire:keydown.enter="store" />
</label>
