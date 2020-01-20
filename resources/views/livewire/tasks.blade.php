<div class="bg-white shadow rounded">
    <h2 class="bg-gray-200 px-4 py-3 rounded-t font-bold text-gray-600">Tasks</h2>

    <div class="p-4">
        @foreach($tasks as $task)
            <label class="flex items-center py-2" wire:click="toggleComplete({{ $task->id }})">
                <input type="checkbox" class="form-checkbox" {{ $task->completed ? 'checked' : '' }}>
                <span class="ml-2 font-bold text-gray-600 {{ $task->completed ? 'line-through' : '' }}">
                {{ $task->name }}
            </span>
            </label>
        @endforeach
    </div>
</div>
