<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
@vite('resources/css/app.css', 'resources/js/app.js')
<body class="">
     <div class="w-64 bg-white p-4 flex items-center justify-between" x-data="{ sidebarOpen: true }">
    <div class="flex items-center space-x-3">
        <!-- Burger button -->
        <button @click="sidebarOpen = !sidebarOpen" class="focus:outline-none">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="6" x2="21" y2="6"/>
                <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
        </button>
        <span class="font-bold text-lg select-none">LOGO</span>
    </div>
    <div class="ml-auto">
        <img src="{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" class="h-10 w-10 rounded-full object-cover">
    </div>
</div>
    <div class="bg-gray-100 font-sans">
        <div class="flex h-screen">
            
           <aside class="w-64 bg-white p-4 flex shadow-md flex-col">

                <nav class="space-y-2">
                    <div class="text-gray-500 text-sm font-semibold uppercase mb-2">Main Menu</div>
                <a href="{{ route('dashboard') }}" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200 {{ request()->routeIs('dashboard') ? 'bg-gray-200' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Beranda
                </a>
                 <a href="{{ route('user.index') }}" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200 {{ request()->routeIs('user.index') ? 'bg-gray-200' : '' }}">
                    <svg width="20px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-j</title><path d="M402,168c-2.93,40.67-33.1,72-66,72s-63.12-31.32-66-72c-3-42.31,26.37-72,66-72S405,126.46,402,168Z" style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M336,304c-65.17,0-127.84,32.37-143.54,95.41-2.08,8.34,3.15,16.59,11.72,16.59H467.83c8.57,0,13.77-8.25,11.72-16.59C463.85,335.36,401.18,304,336,304Z" style="fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:32px"/><path d="M200,185.94C197.66,218.42,173.28,244,147,244S96.3,218.43,94,185.94C91.61,152.15,115.34,128,147,128S202.39,152.77,200,185.94Z" style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M206,306c-18.05-8.27-37.93-11.45-59-11.45-52,0-102.1,25.85-114.65,76.2C30.7,377.41,34.88,384,41.72,384H154" style="fill:none;stroke:#000000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"/></svg>
                    &nbsp;&nbsp; User
                </a>
                <a href="{{ route('category') }}" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200 {{ request()->routeIs('category') ? 'bg-gray-200' : '' }}">
                    <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        width="18px" viewBox="0 0 72 72" enable-background="new 0 0 72 72" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M60.5,21h-27c-4.687,0-8.5-3.813-8.5-8.5S28.813,4,33.5,4h27c4.687,0,8.5,3.813,8.5,8.5S65.187,21,60.5,21z M33.5,8
                                    c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5h27c2.481,0,4.5-2.019,4.5-4.5S62.981,8,60.5,8H33.5z"/>
                            </g>
                            <g>
                                <path d="M60.5,68h-27c-4.687,0-8.5-3.813-8.5-8.5s3.813-8.5,8.5-8.5h27c4.687,0,8.5,3.813,8.5,8.5S65.187,68,60.5,68z M33.5,55
                                    c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5h27c2.481,0,4.5-2.019,4.5-4.5S62.981,55,60.5,55H33.5z"/>
                            </g>
                            <g>
                                <path d="M60.5,45h-27c-4.687,0-8.5-3.813-8.5-8.5s3.813-8.5,8.5-8.5h27c4.687,0,8.5,3.813,8.5,8.5S65.187,45,60.5,45z M33.5,32
                                    c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5h27c2.481,0,4.5-2.019,4.5-4.5S62.981,32,60.5,32H33.5z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M12.5,21h-1C6.813,21,3,17.187,3,12.5S6.813,4,11.5,4h1c4.687,0,8.5,3.813,8.5,8.5S17.187,21,12.5,21z M11.5,8
                                    C9.019,8,7,10.019,7,12.5S9.019,17,11.5,17h1c2.481,0,4.5-2.019,4.5-4.5S14.981,8,12.5,8H11.5z"/>
                            </g>
                            <g>
                                <path d="M12.5,68h-1C6.813,68,3,64.187,3,59.5S6.813,51,11.5,51h1c4.687,0,8.5,3.813,8.5,8.5S17.187,68,12.5,68z M11.5,55
                                    C9.019,55,7,57.019,7,59.5S9.019,64,11.5,64h1c2.481,0,4.5-2.019,4.5-4.5S14.981,55,12.5,55H11.5z"/>
                            </g>
                            <g>
                                <path d="M12.5,45h-1C6.813,45,3,41.187,3,36.5S6.813,28,11.5,28h1c4.687,0,8.5,3.813,8.5,8.5S17.187,45,12.5,45z M11.5,32
                                    C9.019,32,7,34.019,7,36.5S9.019,41,11.5,41h1c2.481,0,4.5-2.019,4.5-4.5S14.981,32,12.5,32H11.5z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                    &nbsp;&nbsp;
                    Category
                </a>
                <a href="#" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0h-3m3 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2"></path></svg>
                    Inbox
                </a>
                <a href="#" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2"></path></svg>
                    Layanan
                </a>
                <a href="#" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    Permohonan Saya
                </a>
                <a href="#" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Survey Kepuasan
                </a>
                <a href="#" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Bursa Kerja
                </a>
                <a href="#" class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profile
                </a>
            </nav>
        </aside>
        
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Category</h1>
             
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">List</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Publish</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-500 uppercase tracking-wider">
                                    <a href="{{ route('category.create') }}">Add</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($category as $index => $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $category->firstItem() + $index  }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $item->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">{{ $item->is_publish == 1 ? 'Yes' : 'No' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('category.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                <form action="{{ route('category.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah kamu yakin ingin menghapus category {{ $item->name }}')">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                 <div class="mt-4">
            {{ $category->links() }}
                </div>
            </div>
        </main>
    </div>
</div>
    
</body>
</html>