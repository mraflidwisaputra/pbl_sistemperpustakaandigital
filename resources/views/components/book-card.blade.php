<div class="bg-white border border-gray-300 shadow-md rounded w-44 p-4">
    <img src="{{ asset('storage/' . $book->cover) }}"
         class="w-full h-48 object-cover mb-4">

    <h3 class="font-bold text-lg leading-tight">
        {{ $book->title }}
    </h3>

    <p class="text-gray-600">
        {{ $book->author }}
    </p>

    <div class="flex items-center gap-2 mt-2">
        <span class="text-yellow-400 text-xl">★</span>
        <span class="text-yellow-500 text-sm">{{ $book->rating }}</span>
        <span class="text-gray-500 text-sm">({{ $book->review_count }})</span>
    </div>

    <p class="text-green-500 mt-4">
        {{ $book->status }}
    </p>
</div>