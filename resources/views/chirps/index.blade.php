<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex flex-row justify-between mb-3">
            <h1 class="text-2xl font-bold mb-4">Chirps List</h1>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{ route('chirps.create') }}">Create Chirp</a>
            </button>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <ul>
                @foreach ($chirps as $chirp)
                    <li class="border-b border-gray-200 py-2">
                        <p class="text-gray-800">{{ $chirp->message }}</p>
                        <span class="text-gray-500 text-sm">Posted on: {{ $chirp->created_at->format('Y-m-d') }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
