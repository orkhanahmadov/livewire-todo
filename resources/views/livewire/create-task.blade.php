<label class="block shadow-lg mb-5">
    <input class="form-input mt-1 block w-full bg-gray-100"
           placeholder="New task..."
           wire:model="task"
           wire:keydown.enter="store" />
</label>
