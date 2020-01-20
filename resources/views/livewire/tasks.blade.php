<div class="p-4 pl-0 pb-0">
    @foreach($tasks as $task)
        <label class="flex items-center py-2 first:pt-0 last:pb-0" wire:click.prevent="toggleComplete({{ $task->id }})">
            <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5" {{ $task->completed ? 'checked' : '' }}>
            <span class="ml-2 text-lg text-gray-600 {{ $task->completed ? 'line-through' : '' }}">
                {{ $task->name }}
            </span>
        </label>
    @endforeach
</div>
