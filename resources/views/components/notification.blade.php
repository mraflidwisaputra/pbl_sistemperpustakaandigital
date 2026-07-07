@if(session('success'))
    <div class="mb-4 flex items-start gap-2 rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-800">
        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-green-500"></span>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if(session('error'))
    <div class="mb-4 flex items-start gap-2 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-800">
        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-red-500"></span>
        <span>{{ session('error') }}</span>
    </div>
@endif

@if($errors->any())
    <div class="mb-4 flex items-start gap-2 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-800">
        <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-red-500"></span>
        <ul class="list-disc space-y-1 pl-4">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
