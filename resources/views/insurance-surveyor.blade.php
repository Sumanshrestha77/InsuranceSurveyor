<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insurance Surveyor</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Navigation -->
    <nav class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Left side: Logo and navigation links -->
            <div class="flex items-center">
                <a href="#" class="text-white font-bold text-lg">PrecisionAssure</a>
                <ul class="hidden md:flex space-x-4 ml-4">
                    <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Services</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
                </ul>
            </div>
            <!-- Right side: Login and Register links -->
            <div class="flex items-center">
                <a href="{{ route('login') }}" class="text-white hover:text-gray-300 mr-4">Login</a>
                <a href="{{ route('register') }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md">Register</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-1 bg-blue-300 bg-opacity-75">
        <div class="container mx-auto flex justify-center">
            <!-- Left Content -->
            <div class="w-1/2 p-10">
                <div class="text-left font-serif">
                    <p class="text-2xl">
                        Step into a realm where precision defines assurance and every detail matters. At PrecisionAssure Insurance Surveyors, we pride ourselves on our unwavering commitment to accuracy, integrity, and excellence in insurance surveying. With our seasoned team of professionals, we bring decades of collective experience to the table, ensuring that your insurance assessments are not just comprehensive but transformative.
                    </p>
                </div>
            </div>
            <!-- Right Content (Demo Picture) -->
            <div class="w-1/2 p-10">
                <img src="image/back.png" alt="Demo Picture" class="w-full h-auto">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Column 1 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">About Us</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-400">Company Overview</a></li>
                    <li><a href="#" class="hover:text-gray-400">Mission & Vision</a></li>
                    <li><a href="#" class="hover:text-gray-400">Our Team</a></li>
                </ul>
            </div>
            <!-- Column 2 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Services</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-400">Property Assessment</a></li>
                    <li><a href="#" class="hover:text-gray-400">Risk Analysis</a></li>
                    <li><a href="#" class="hover:text-gray-400">Claim Evaluation</a></li>
                </ul>
            </div>
            <!-- Column 3 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Resources</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-400">Blog</a></li>
                    <li><a href="#" class="hover:text-gray-400">FAQs</a></li>
                    <li><a href="#" class="hover:text-gray-400">Customer Support</a></li>
                </ul>
            </div>
            <!-- Column 4 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-400">Contact Information</a></li>
                    <li><a href="#" class="hover:text-gray-400">Request a Quote</a></li>
                    <li><a href="#" class="hover:text-gray-400">Location</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>