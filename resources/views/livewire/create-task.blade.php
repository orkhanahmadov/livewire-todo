<label class="block shadow-lg mb-5">
    <input class="form-input mt-1 block w-full bg-gray-100 py-3 text-gray-600"
           placeholder="New task..."
           wire:model.debounce.500ms="task"
           wire:keydown.enter="store" />
</label>
