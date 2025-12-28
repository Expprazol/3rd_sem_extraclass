<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my project</title>
     <script src="https://cdn.tailwindcss.com">
    </script>
     <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
    />
</head>
<body>
<div class="flex bg-gradient-to-r from-blue-600 to-blue-800 text-white text-white py-4 px-12 justify-between">
        <h1 class="font-bold"> space </h1>
        <nav class="flex gap-4">
            <a href="">home</a>
            <a href="">about</a>
            <a href="" class="">
                <div class="relative">
                     service
                     <div class="absolute hidden group-hover:block left-0 top-6 grid bg-white shadow-lg text-black w-32">
                        <a class="p-2 block text-center hover:bg-gray-100" href="">Services 1</a>
                        <a class="p-2 block text-center hover:bg-gray-100" href="">Services 2</a>
                      <a class="p-2 block text-center hover:bg-gray-100" href="">Services 3</a>
                     </div>
                </div>
               </a>
            <a href="">contact</a>
            <a href="login.html">login</a>
        </nav>
    </div>