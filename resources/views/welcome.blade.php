<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hyrulian Cookbook</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-ZeldaFont">

    <header class="bg-green-700 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">The Hyrulian Cookbook</h1>
            <p class="mt-2">Discover and share your favorite recipes from Hyrule!</p>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Display featured recipes or categories here -->
            <!-- Example Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Delicious Dish</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">View Recipe</a>
            </div>
        </section>
    </main>
</body>
</html>
