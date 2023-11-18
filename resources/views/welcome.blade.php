<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex h-screen justify-center items-center bg-black">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="#">
                <h5 class="text-2xl mb-10 text-center font-medium text-gray-900 dark:text-white">Check Your BMI</h5>
                <div class="text-center">
                    <label for="age" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Age</label>
                    <input type="number" name="age" id="age" placeholder="Enter Age" class="bg-gray-50 border mb-2 border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 w-40 text-center p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div class="flex justify-between text-center">
                    <div>
                        <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height (cm)</label>
                        <input type="number" name="height" id="height" placeholder="Enter Height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-32 text-center p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight (kg)</label>
                        <input type="number" name="weight" id="weight" placeholder="Enter Weight" class="bg-gray-50 border text-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-32 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="w-32 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg mt-6 text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Calculate BMI</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
