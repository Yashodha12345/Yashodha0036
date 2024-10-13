<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-96 p-6 bg-white border border-blue-200 rounded-lg shadow-md">
        <div class="bg-blue-200 text-center py-2 rounded-t-lg">
            <h2 class="text-lg font-semibold text-white">Welcome Students, Let us know you</h2>
        </div>
        <form action="home.php" method="POST" class="mt-4">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
        <input class="w-full px-3 py-2 border border-blue-300 rounded" type="text" id="name" name="name">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
        <input class="w-full px-3 py-2 border border-blue-300 rounded" type="email" id="email" name="email">
    </div>
    <div class="flex justify-between">
        <button class="w-1/3 py-2 bg-white border border-blue-300 text-gray-700 font-semibold rounded hover:bg-blue-50" type="submit">Proceed</button>
        <button class="w-1/3 py-2 bg-white border border-blue-300 text-gray-700 font-semibold rounded hover:bg-blue-50" type="button">Cancel</button>
    </div>
</form>
    </div>
</body>
</html>