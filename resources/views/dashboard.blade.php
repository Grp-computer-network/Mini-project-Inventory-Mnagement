<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">    
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white">
        <nav class="mt-6">
        <h1 class="text-lg font-semibold px-6 py-4">Dashboard</h1>
            <ul>
                <li class="py-2 px-4 hover:bg-gray-700">
                <a href="#" class="block flex items-center">
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H14V7C14 7.53043 13.7893 8.03914 13.4142 8.41421C13.0391 8.78929 12.5304 9 12 9H2C1.46957 9 0.960859 8.78929 0.585786 8.41421C0.210714 8.03914 0 7.53043 0 7V0ZM5 3C5 2.73478 5.10536 2.48043 5.29289 2.29289C5.48043 2.10536 5.73478 2 6 2H8C8.26522 2 8.51957 2.10536 8.70711 2.29289C8.89464 2.48043 9 2.73478 9 3C9 3.26522 8.89464 3.51957 8.70711 3.70711C8.51957 3.89464 8.26522 4 8 4H6C5.73478 4 5.48043 3.89464 5.29289 3.70711C5.10536 3.51957 5 3.26522 5 3Z" fill="#808080"/>
                </svg>
                <span class="ml-2">Product Brief</span>
                </a>
                </li>
                <li class="py-2 px-4 hover:bg-gray-700">
                <a href="#" class="block flex items-center">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 1C2.73478 1 2.48043 1.10536 2.29289 1.29289C2.10536 1.48043 2 1.73478 2 2C2 2.26522 2.10536 2.51957 2.29289 2.70711C2.48043 2.89464 2.73478 3 3 3H4.22L4.525 4.222C4.52803 4.23607 4.53136 4.25007 4.535 4.264L5.893 9.694L5 10.586C3.74 11.846 4.632 14 6.414 14H15C15.2652 14 15.5196 13.8946 15.7071 13.7071C15.8946 13.5196 16 13.2652 16 13C16 12.7348 15.8946 12.4804 15.7071 12.2929C15.5196 12.1054 15.2652 12 15 12H6.414L7.414 11H14C14.1857 10.9999 14.3676 10.9481 14.5255 10.8504C14.6834 10.7528 14.811 10.6131 14.894 10.447L17.894 4.447C17.9702 4.29458 18.0061 4.12522 17.9985 3.95501C17.9908 3.78479 17.9398 3.61935 17.8502 3.47439C17.7606 3.32944 17.6355 3.20977 17.4867 3.12674C17.3379 3.04372 17.1704 3.00009 17 3H6.28L5.97 1.757C5.91583 1.54075 5.79095 1.34881 5.61521 1.21166C5.43946 1.0745 5.22293 1.00001 5 1H3ZM16 16.5C16 16.8978 15.842 17.2794 15.5607 17.5607C15.2794 17.842 14.8978 18 14.5 18C14.1022 18 13.7206 17.842 13.4393 17.5607C13.158 17.2794 13 16.8978 13 16.5C13 16.1022 13.158 15.7206 13.4393 15.4393C13.7206 15.158 14.1022 15 14.5 15C14.8978 15 15.2794 15.158 15.5607 15.4393C15.842 15.7206 16 16.1022 16 16.5ZM6.5 18C6.89782 18 7.27936 17.842 7.56066 17.5607C7.84196 17.2794 8 16.8978 8 16.5C8 16.1022 7.84196 15.7206 7.56066 15.4393C7.27936 15.158 6.89782 15 6.5 15C6.10218 15 5.72064 15.158 5.43934 15.4393C5.15804 15.7206 5 16.1022 5 16.5C5 16.8978 5.15804 17.2794 5.43934 17.5607C5.72064 17.842 6.10218 18 6.5 18Z" fill="#808080"/>
                </svg>
                <span class="ml-2">Purchase</span>
               </a>
                </li>
                 <li class="py-2 px-4 hover:bg-gray-700">
                 <a href="#" class="block flex items-center">
                 <!-- Paste your SVG code here -->
                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13 7H21M21 7V15M21 7L13 15L9 11L3 17" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
               <span class="ml-2">Product Brief</span>
               </a>
</li>

                <li class="py-2 px-4 hover:bg-gray-700">
                <a href="#" class="block flex items-center">
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 8C0 7.73478 0.105357 7.48043 0.292893 7.29289C0.48043 7.10536 0.734784 7 1 7H3C3.26522 7 3.51957 7.10536 3.70711 7.29289C3.89464 7.48043 4 7.73478 4 8V13C4 13.2652 3.89464 13.5196 3.70711 13.7071C3.51957 13.8946 3.26522 14 3 14H1C0.734784 14 0.48043 13.8946 0.292893 13.7071C0.105357 13.5196 0 13.2652 0 13V8ZM6 4C6 3.73478 6.10536 3.48043 6.29289 3.29289C6.48043 3.10536 6.73478 3 7 3H9C9.26522 3 9.51957 3.10536 9.70711 3.29289C9.89464 3.48043 10 3.73478 10 4V13C10 13.2652 9.89464 13.5196 9.70711 13.7071C9.51957 13.8946 9.26522 14 9 14H7C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13V4ZM12 1C12 0.734784 12.1054 0.48043 12.2929 0.292893C12.4804 0.105357 12.7348 0 13 0H15C15.2652 0 15.5196 0.105357 15.7071 0.292893C15.8946 0.48043 16 0.734784 16 1V13C16 13.2652 15.8946 13.5196 15.7071 13.7071C15.5196 13.8946 15.2652 14 15 14H13C12.7348 14 12.4804 13.8946 12.2929 13.7071C12.1054 13.5196 12 13.2652 12 13V1Z" fill="#808080"/>
                </svg>
                <span class="ml-2">Data Report</span>
               </a>
                </li>
                <li class="mt-6 border-t border-gray-700 pt-4">
                 <h1 class="text-lg font-semibold px-6 py-4">Stock Management</h1>
                    <ul>
                        <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block flex items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM11 7C11 6.73478 10.8946 6.48043 10.7071 6.29289C10.5196 6.10536 10.2652 6 10 6C9.73478 6 9.48043 6.10536 9.29289 6.29289C9.10536 6.48043 9 6.73478 9 7V9H7C6.73478 9 6.48043 9.10536 6.29289 9.29289C6.10536 9.48043 6 9.73478 6 10C6 10.2652 6.10536 10.5196 6.29289 10.7071C6.48043 10.8946 6.73478 11 7 11H9V13C9 13.2652 9.10536 13.5196 9.29289 13.7071C9.48043 13.8946 9.73478 14 10 14C10.2652 14 10.5196 13.8946 10.7071 13.7071C10.8946 13.5196 11 13.2652 11 13V11H13C13.2652 11 13.5196 10.8946 13.7071 10.7071C13.8946 10.5196 14 10.2652 14 10C14 9.73478 13.8946 9.48043 13.7071 9.29289C13.5196 9.10536 13.2652 9 13 9H11V7Z" fill="#808080"/>
                        </svg>
                        <span class="ml-2">Add New Stock</span>
                        </a>
                        </li>
                        <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block flex items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.414 2.586C17.0389 2.21106 16.5303 2.00043 16 2.00043C15.4697 2.00043 14.9611 2.21106 14.586 2.586L7 10.172V13H9.828L17.414 5.414C17.7889 5.03894 17.9996 4.53033 17.9996 4C17.9996 3.46967 17.7889 2.96106 17.414 2.586Z" fill="#808080"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 5.46957 2.21071 4.96086 2.58579 4.58579C2.96086 4.21071 3.46957 4 4 4H8C8.26522 4 8.51957 4.10536 8.70711 4.29289C8.89464 4.48043 9 4.73478 9 5C9 5.26522 8.89464 5.51957 8.70711 5.70711C8.51957 5.89464 8.26522 6 8 6H4V16H14V12C14 11.7348 14.1054 11.4804 14.2929 11.2929C14.4804 11.1054 14.7348 11 15 11C15.2652 11 15.5196 11.1054 15.7071 11.2929C15.8946 11.4804 16 11.7348 16 12V16C16 16.5304 15.7893 17.0391 15.4142 17.4142C15.0391 17.7893 14.5304 18 14 18H4C3.46957 18 2.96086 17.7893 2.58579 17.4142C2.21071 17.0391 2 16.5304 2 16V6Z" fill="#808080"/>
                        </svg>
                        <span class="ml-2">Update an Existing Stock</span>
                        </a>
                        </li>
                        <li class="py-2 px-4 hover:bg-gray-700">
                        <a href="#" class="block flex items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2C8.81434 2.0001 8.63237 2.05188 8.47447 2.14955C8.31658 2.24722 8.18899 2.38692 8.106 2.553L7.382 4H4C3.73478 4 3.48043 4.10536 3.29289 4.29289C3.10536 4.48043 3 4.73478 3 5C3 5.26522 3.10536 5.51957 3.29289 5.70711C3.48043 5.89464 3.73478 6 4 6V16C4 16.5304 4.21071 17.0391 4.58579 17.4142C4.96086 17.7893 5.46957 18 6 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V6C16.2652 6 16.5196 5.89464 16.7071 5.70711C16.8946 5.51957 17 5.26522 17 5C17 4.73478 16.8946 4.48043 16.7071 4.29289C16.5196 4.10536 16.2652 4 16 4H12.618L11.894 2.553C11.811 2.38692 11.6834 2.24722 11.5255 2.14955C11.3676 2.05188 11.1857 2.0001 11 2H9ZM7 8C7 7.73478 7.10536 7.48043 7.29289 7.29289C7.48043 7.10536 7.73478 7 8 7C8.26522 7 8.51957 7.10536 8.70711 7.29289C8.89464 7.48043 9 7.73478 9 8V14C9 14.2652 8.89464 14.5196 8.70711 14.7071C8.51957 14.8946 8.26522 15 8 15C7.73478 15 7.48043 14.8946 7.29289 14.7071C7.10536 14.5196 7 14.2652 7 14V8ZM12 7C11.7348 7 11.4804 7.10536 11.2929 7.29289C11.1054 7.48043 11 7.73478 11 8V14C11 14.2652 11.1054 14.5196 11.2929 14.7071C11.4804 14.8946 11.7348 15 12 15C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V8C13 7.73478 12.8946 7.48043 12.7071 7.29289C12.5196 7.10536 12.2652 7 12 7Z" fill="#808080"/>
                        </svg>
                        <span class="ml-2">Remove a Stock</span>
                        </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Top Bar -->
        <header class="flex items-center justify-between bg-blue-800 text-white p-4">
            <div class="text-xl font-semibold">Welcome User-Name</div>
           
        </header>

        <!-- Search & Stock Flow -->
        <main class="p-6 bg-white flex-grow">
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="Search here"
                    class="w-full max-w-md px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>
            <h2 class="text-lg font-semibold mb-4">Stock Flow Analysis</h2>
            <div class="grid grid-cols-2 gap-6">
                <div class="text-center">
                    <div class="text-gray-700">Demand Stock</div>
                    <hr class="border-t border-gray-300 my-2">
                </div>
                <div class="text-center">
                    <div class="text-gray-700">Incoming Stock</div>
                    <hr class="border-t border-gray-300 my-2">
                </div>
                <div class="text-center">
                    <div class="text-gray-700">Dead Stock</div>
                    <hr class="border-t border-gray-300 my-2">
                </div>
                <div class="text-center">
                    <div class="text-red-600 font-semibold">Low Stock</div>
                    <hr class="border-t border-gray-300 my-2">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-blue-800 text-white p-4 flex justify-between">
            <div>Locate Us</div>
            <div>Contact Us</div>
        </footer>
    </div>
</div>
</x-app-layout>
</body>
</html>
