<div class="p-4 pl-0 pb-0">
    @foreach($incompleteTasks as $task)
        <label class="flex items-center py-2 first:pt-0 last:pb-0 cursor-pointer"
               wire:click.prevent="markAsComplete({{ $task->id }})"
        >
            <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5">
            <span class="ml-2 text-lg font-bold text-gray-600">
                {{ $task->name }}
            </span>
        </label>
    @endforeach

    <hr class="block my-4" />

    @foreach($completeTasks as $task)
        <label class="flex items-center py-2 first:pt-0 last:pb-0 cursor-pointer"
               wire:click.prevent="markAsIncomplete({{ $task->id }})"
        >
            <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5" checked>
            <span class="ml-2 text-lg text-gray-500 line-through">
            {{ $task->name }}
        </span>
        </label>
    @endforeach
</div>
