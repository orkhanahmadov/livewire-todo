<div class="bg-white shadow rounded p-4">
    @foreach($tasks as $task)
        <div class="block text-gray-600 py-1 font-bold">{{ $task }}</div>
    @endforeach
</div>
