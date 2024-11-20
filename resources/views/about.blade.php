<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">About Us</h1>
        
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Our Story</h2>
            <p class="text-gray-600 leading-relaxed">
                We began our journey with a vision to provide exceptional services. Established with a passion for excellence, our team has been dedicated to serving our customers with top-notch solutions and building long-lasting relationships.
            </p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Mission</h2>
            <p class="text-gray-600 leading-relaxed">
                Our mission is to empower individuals and businesses by providing innovative solutions that drive success. We believe in maintaining the highest standards and delivering services that bring value to our clients and the community.
            </p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Vision</h2>
            <p class="text-gray-600 leading-relaxed">
                Our vision is to become a global leader in our field, recognized for our commitment to excellence, integrity, and social responsibility. We aim to inspire change and make a positive impact in the world.
            </p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Core Values</h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-600">
                <li>Integrity and honesty in every interaction</li>
                <li>Commitment to quality and excellence</li>
                <li>Customer-first approach</li>
                <li>Innovation and continuous improvement</li>
            </ul>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">MyWebsite</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-300 underline">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Services</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white text-blue-900 p-10 rounded-lg shadow-lg w-4/5 lg:w-2/3">
            <h1 class="text-4xl font-bold mb-6">About Us</h1>
            <p class="text-lg mb-4">
                Welcome to the About page of our website! We are dedicated to providing the best services for our customers, 
                and we take pride in our work. Our team is made up of skilled professionals with years of experience in various fields.
            </p>
            <p class="text-lg mb-4">
                Our mission is to deliver top-quality solutions while maintaining a customer-first approach. Feel free to browse 
                through our website and discover more about what we offer.
            </p>
            <p class="text-lg">
                If you have any questions, don’t hesitate to <a href="#" class="text-blue-500 underline hover:text-blue-700">contact us</a>. 
                We’re always here to help!
            </p>
        </div>
    </div>
</body>
</html>
