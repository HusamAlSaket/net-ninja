<x-layout>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <div class="grid-container">
        <div class="ninja-card">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">{{ $ninja->name }}</h2>
            <div class="ninja-details">
            <i class="fas fa-user-ninja text-4xl mb-4"></i> 
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

        <div class="dojo-info">
            <h3 class="text-xl font-semibold mb-2">Dojo Information</h3>
            <i class="fas fa-building text-4xl mb-4"></i>
            <p><strong class="font-semibold">Dojo name:</strong> {{ $ninja->dojo->name }}</p>
            <p><strong class="font-semibold">Dojo location:</strong> {{ $ninja->dojo->location }}</p>
            <p><strong class="font-semibold">About the Dojo:</strong> {{ $ninja->dojo->description }}</p>
        </div>
    </div>
</x-layout>
<style>
    /* Grid container with wider columns */
.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two equal-width columns */
    gap: 30px; /* Increased space between the items */
    max-width: 1600px; /* Increased max-width for the grid */
    margin: 0 auto; /* Center the grid horizontally */
    padding: 20px; /* Add padding to reduce white space */
}

/* Ninja card styling */
.ninja-card {
    background-color: white;
    padding: 30px; /* Increased padding */
    border-radius: 15px; /* Red border radius */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 2px solid red; /* Red border */
    height: auto; /* Make sure height adjusts automatically */
    min-height: 350px; /* Ensure enough height */
    filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1)); /* Subtle shadow */
}

.ninja-card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    filter: drop-shadow(0 8px 10px red); /* Stronger shadow on hover */
}

/* Dojo info styling */
.dojo-info {
    border: 2px dashed #ddd;
    padding: 30px; /* Increased padding */
    border-radius: 15px; /* Red border radius */
    background-color: white;
    border: 2px solid red; /* Red border */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: auto; /* Make sure height adjusts automatically */
    min-height: 350px; /* Ensure enough height */
     /* Subtle shadow */
}

.dojo-info:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    filter: drop-shadow(0 8px 10px red); /* Stronger shadow on hover */
}

</style>