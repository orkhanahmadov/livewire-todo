<div>
    @if(count($incompleteTasks) === 0)
        <h2 class="block text-center text-gray-600 font-bold text-lg pb-3">Good job! 🤙 You completed all tasks!</h2>
    @endif

    @foreach($incompleteTasks as $task)
        <div class="flex items-center justify-between py-2 first:pt-0 last:pb-0">
            <label class="flex items-center cursor-pointer w-full"
                   wire:click.prevent="markAsComplete({{ $task->id }})"
            >
                <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5">

                <span class="block ml-2 text-lg text-gray-600">{{ $task->name }}</span>
            </label>

            <button class="ml-2 bg-gray-500 text-white text-sm rounded px-1"
                    type="button"
                    wire:click="delete({{ $task->id }})"
            >Delete</button>
        </div>
    @endforeach

    @if(count($completeTasks) > 0)
        <hr class="block my-4" />
    @endif

    @foreach($completeTasks as $task)
        <div class="flex items-center justify-between py-2 first:pt-0 last:pb-0">
            <label class="flex items-center cursor-pointer w-full"
                   wire:click.prevent="markAsIncomplete({{ $task->id }})"
            >
                <input type="checkbox" class="form-checkbox bg-gray-100 w-5 h-5" checked>

                <div class="flex items-center justify-between w-full">
                    <span class="block ml-2 text-lg text-gray-600 line-through">{{ $task->name }}</span>

                    <span class="inline-block text-sm text-gray-500">{{ $task->formatted_completed_at }}</span>
                </div>
            </label>


            <button class="ml-2 bg-gray-500 text-white text-sm rounded px-1"
                    type="button"
                    wire:click="delete({{ $task->id }})"
            >Delete</button>
        </div>
    @endforeach
</div>
