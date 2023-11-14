<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-green-800">Welcome to The Hyrulian Cookbook</h1>
            <p class="mt-2 text-gray-600">Discover and explore delicious recipes inspired by the world of Hyrule!</p>
        </div>

        <!-- Recipe Categories -->
        <div class="mt-8 flex justify-center space-x-4">
            <!-- Example Category Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold text-green-800">Main Courses</h2>
                <p class="mt-2 text-gray-600">Explore savory main course recipes.</p>
                <a href="" class="mt-4 text-green-600 hover:underline">View Recipes</a>
            </div>

            <!-- Add more category cards as needed -->
        </div>

        <!-- Featured Recipes -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-green-800">Featured Recipes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-6">
                <!-- Example Recipe Card -->
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-green-800">Delicious Dish</h3>
                    <p class="mt-2 text-gray-600">A mouth-watering description of the recipe.</p>
                    <a href="" class="mt-4 text-green-600 hover:underline">View Recipe</a>
                </div>

                <!-- Add more recipe cards as needed -->
            </div>
        </div>
    </div>
</x-app-layout>
