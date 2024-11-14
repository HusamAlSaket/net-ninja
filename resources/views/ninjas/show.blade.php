<x-layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-8">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">{{ $ninja->name }}</h2>
        <div class="bg-gray-100 p-4 rounded-lg border border-gray-300">
            <p class="text-lg font-medium text-gray-700 mb-2">
                <strong class="font-semibold">Skill level:</strong> {{ $ninja->skill }}
            </p>
            <p class="text-lg font-medium text-gray-700">
                <strong class="font-semibold">About me:</strong>
            </p>
            <p class="text-gray-600 mt-2 leading-relaxed">
                {{ $ninja->bio }}
            </p>
        </div>
    </div>
</x-layout>
