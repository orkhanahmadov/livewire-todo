<div class="bg-white shadow rounded p-4">
    @foreach($tasks as $task)
        <label class="flex items-center py-2" wire:click="markAsComplete({{ $task->id }})">
            <input type="checkbox" class="form-checkbox" {{ $task->completed ? 'checked' : '' }}>
            <span class="ml-2 font-bold text-gray-600">{{ $task->name }}</span>
        </label>
    @endforeach
</div>
