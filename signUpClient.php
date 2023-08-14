
<!DOCTYPE html>
<html lang="en">

<!-- </html>data-theme="light"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css"> <!-- Include the navbar CSS -->
    <link rel="icon" href="images/search-employee-8969.png" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="styles1.css"> -->
    <title>Urban Workers</title>
</head>

<body>

    <div class="nav">
        <div class="navbar">
            <div class="navbar-start">
                <a href="index.html" class="btn btn-ghost normal-case text-xl">Urban Workers</a>
            </div>
        </div>
    </div>
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-bold text-4xl text-gray-900">Registration Form</h2>
                <p class="text-gray-500 mb-6" </p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-900">
                            <p class="font-medium text-lg">Personal Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <form action="">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5 font-semibold text-gray-600 mb-1">
                                        <label for="full_name">Full Name</label>
                                        <input type="text" name="full_name" id="full_name"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="md:col-span-5 font-semibold text-gray-600 mb-1">
                                        <label for="email">Email Address</label>
                                        <input type="text" name="email" id="email"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-100" value=""
                                            placeholder="email@domain.com" />
                                    </div>


                                    <div class="md:col-span-5 font-semibold text-gray-600 mb-1">
                                        <label for="address">Address / Street</label>
                                        <input type="text" name="address" id="address"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="" />
                                    </div>


                                    <div class="md:col-span-3 font-semibold text-gray-600 mb-1">
                                        <label for="city">City name</label>
                                        <select name="city" id="city"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-100">
                                            <option value="city1">City 1</option>
                                            <option value="city2">City 2</option>
                                            <option value="city3">City 3</option>
                                            <!-- Add more options here -->
                                        </select>
                                    </div>
                                    <div class="md:col-span-2 font-semibold text-gray-600 mb-1">
                                        <label for="num">Contact No.</label>
                                        <input type="" name="" id="number"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="+880" />
                                    </div>

                                    <div class="md:col-span-3 font-semibold text-gray-600">
                                        <label for="email">Password</label>
                                        <input type="text" name="email" id="email"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-100" value=""
                                            placeholder="" />
                                    </div>

                                    <div class="md:col-span-3 font-semibold text-gray-600">
                                        <label for="email">Confirm Password</label>
                                        <input type="text" name="email" id="email"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-100" value=""
                                            placeholder="" />
                                    </div>
                                </div>


                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>



</body>