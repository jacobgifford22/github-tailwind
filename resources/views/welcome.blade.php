<!DOCTYPE html>
<html>

<head>
    <title>GitHub - Tailwind CSS Rebuild</title>
    <link rel="icon" class="js-site-favicon" type="image/svg+xml" href="https://github.githubassets.com/favicons/favicon.svg">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="text-gray-900 text-sm">
        <nav class="bg-gray-900 text-white px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-400">
                    <svg class="w-8 fill-current" aria-hidden="true" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>

                <div class="relative">
                    <input type="text" class="rounded bg-gray-700 placeholder-white w-72 px-3 py-1" placeholder="Search or jump to...">
                    <div class="absolute top-0 right-0 flex items-center h-full">
                        <div class="border border-gray-600 rounded text-xs text-gray-400 px-2 mr-2">/</div>
                    </div>
                </div>

                <ul class="flex items-center font-semibold space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Pull Requests</a></li>
                    <li><a href="#" class="hover:text-gray-400">Issues</a></li>
                    <li><a href="#" class="hover:text-gray-400">Marketplace</a></li>
                    <li><a href="#" class="hover:text-gray-400">Explore</a></li>
                </ul>
            </div>

            <div class="flex items-center space-x-4 text-white">
                <a href="#" class="relative hover:text-gray-400">
                    <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <div class="bg-blue-600 rounded-full w-2 h-2 absolute top-0 right-0"></div>
                </a>

                <a href="#" class="flex items-center hover:text-gray-400">
                    <svg class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <svg class="w-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>

                <a href="#" class="flex items-center hover:text-gray-400">
                    <img class="w-6 h-6 rounded-full" alt="avatar" src="https://avatars.githubusercontent.com/u/90434868?v=4">
                    <svg class="w-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
        </nav><!-- End nav -->

        <div class="repo-stats flex items-center justify-between bg-gray-50 px-8 py-4">
            <div class="flex">
                <svg class="w-4 fill-current text-gray-600" aria-hidden="true" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path>
                </svg>
                <div class="flex items-center text-xl ml-2">
                    <a href="#" class="text-blue-600 hover:underline">tailwindlabs</a>
                    <span class="ml-1">/</span>
                    <a href="#" class="text-blue-600 hover:underline font-semibold ml-1">tailwindcss</a>
                </div>
            </div>

            <div class="flex space-x-2">
                <div class="flex text-xs">
                    <button class="border border-gray-300 hover:bg-gray-50 rounded px-3 py-1 flex items-center space-x-1">
                        <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 w-4">
                            <path fill-rule="evenodd" d="M1.679 7.932c.412-.621 1.242-1.75 2.366-2.717C5.175 4.242 6.527 3.5 8 3.5c1.473 0 2.824.742 3.955 1.715 1.124.967 1.954 2.096 2.366 2.717a.119.119 0 010 .136c-.412.621-1.242 1.75-2.366 2.717C10.825 11.758 9.473 12.5 8 12.5c-1.473 0-2.824-.742-3.955-1.715C2.92 9.818 2.09 8.69 1.679 8.068a.119.119 0 010-.136zM8 2c-1.981 0-3.67.992-4.933 2.078C1.797 5.169.88 6.423.43 7.1a1.619 1.619 0 000 1.798c.45.678 1.367 1.932 2.637 3.024C4.329 13.008 6.019 14 8 14c1.981 0 3.67-.992 4.933-2.078 1.27-1.091 2.187-2.345 2.637-3.023a1.619 1.619 0 000-1.798c-.45-.678-1.367-1.932-2.637-3.023C11.671 2.992 9.981 2 8 2zm0 8a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                        <div class="font-semibold">Watch</div>
                        <div class="text-xs rounded-lg bg-gray-200 px-2 ml-1 font-semibold">568</div>
                        <svg class="w-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>

                <div class="flex text-xs">
                    <button class="border border-gray-300 hover:bg-gray-50 rounded px-3 py-1 flex items-center space-x-1">
                        <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 w-4">
                            <path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                        </svg>
                        <div class="font-semibold">Fork</div>
                        <div class="text-xs rounded-lg bg-gray-200 px-2 ml-1 font-semibold">2.8k</div>
                    </button>
                </div>

                <div class="flex text-xs">
                    <button class="border border-gray-300 hover:bg-gray-50 rounded rounded-r-none px-3 py-1 flex items-center space-x-1">
                        <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 w-4">
                            <path fill-rule="evenodd" d="M8 .25a.75.75 0 01.673.418l1.882 3.815 4.21.612a.75.75 0 01.416 1.279l-3.046 2.97.719 4.192a.75.75 0 01-1.088.791L8 12.347l-3.766 1.98a.75.75 0 01-1.088-.79l.72-4.194L.818 6.374a.75.75 0 01.416-1.28l4.21-.611L7.327.668A.75.75 0 018 .25zm0 2.445L6.615 5.5a.75.75 0 01-.564.41l-3.097.45 2.24 2.184a.75.75 0 01.216.664l-.528 3.084 2.769-1.456a.75.75 0 01.698 0l2.77 1.456-.53-3.084a.75.75 0 01.216-.664l2.24-2.183-3.096-.45a.75.75 0 01-.564-.41L8 2.694v.001z"></path>
                        </svg>
                        <div class="font-semibold">Star</div>
                        <div class="text-xs rounded-lg bg-gray-200 px-2 ml-1 font-semibold">56k</div>
                    </button>

                    <button class="border border-gray-300 hover:bg-gray-50 rounded rounded-l-none border-l-0 px-3 py-1 flex items-center space-x-1">
                        <svg class="w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div><!-- end repo stats -->

        <ul class="repo-nav border-b border-gray-300 bg-gray-50 flex items-center px-8 pt-4">
            <li class="font-semibold">
                <a href="#" class="flex items-center border-b-2 border-red-500 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path fill-rule="evenodd" d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path>
                    </svg>
                    <span class="ml-2">Code</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center border-b border-transparent hover:border-gray-300 transition ease-in-out duration-150 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        <path fill-rule="evenodd" d="M8 0a8 8 0 100 16A8 8 0 008 0zM1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0z"></path>
                    </svg>
                    <span class="ml-2 mr-2">Issues</span>
                    <div class="flex"></div>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center border-b border-transparent hover:border-gray-300 transition ease-in-out duration-150 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path fill-rule="evenodd" d="M7.177 3.073L9.573.677A.25.25 0 0110 .854v4.792a.25.25 0 01-.427.177L7.177 3.427a.25.25 0 010-.354zM3.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122v5.256a2.251 2.251 0 11-1.5 0V5.372A2.25 2.25 0 011.5 3.25zM11 2.5h-1V4h1a1 1 0 011 1v5.628a2.251 2.251 0 101.5 0V5A2.5 2.5 0 0011 2.5zm1 10.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0zM3.75 12a.75.75 0 100 1.5.75.75 0 000-1.5z"></path>
                    </svg>
                    <span class="ml-2">Pull requests</span>
                    <div class="font-semibold text-xs rounded-lg bg-gray-200 px-2 ml-1">19</div>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center border-b border-transparent hover:border-gray-300 transition ease-in-out duration-150 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path fill-rule="evenodd" d="M1.5 2.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-3.5a.75.75 0 00-.53.22L3.5 11.44V9.25a.75.75 0 00-.75-.75h-1a.25.25 0 01-.25-.25v-5.5zM1.75 1A1.75 1.75 0 000 2.75v5.5C0 9.216.784 10 1.75 10H2v1.543a1.457 1.457 0 002.487 1.03L7.061 10h3.189A1.75 1.75 0 0012 8.25v-5.5A1.75 1.75 0 0010.25 1h-8.5zM14.5 4.75a.25.25 0 00-.25-.25h-.5a.75.75 0 110-1.5h.5c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0114.25 12H14v1.543a1.457 1.457 0 01-2.487 1.03L9.22 12.28a.75.75 0 111.06-1.06l2.22 2.22v-2.19a.75.75 0 01.75-.75h1a.25.25 0 00.25-.25v-5.5z"></path>
                    </svg>
                    <span class="ml-2">Discussions</span>
                    <div class="font-semibold text-xs rounded-lg bg-gray-200 px-2 ml-1">22</div>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center border-b border-transparent hover:border-gray-300 transition ease-in-out duration-150 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM6.379 5.227A.25.25 0 006 5.442v5.117a.25.25 0 00.379.214l4.264-2.559a.25.25 0 000-.428L6.379 5.227z"></path>
                    </svg>
                    <span class="ml-2">Actions</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center border-b border-transparent hover:border-gray-300 transition ease-in-out duration-150 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path fill-rule="evenodd" d="M7.467.133a1.75 1.75 0 011.066 0l5.25 1.68A1.75 1.75 0 0115 3.48V7c0 1.566-.32 3.182-1.303 4.682-.983 1.498-2.585 2.813-5.032 3.855a1.7 1.7 0 01-1.33 0c-2.447-1.042-4.049-2.357-5.032-3.855C1.32 10.182 1 8.566 1 7V3.48a1.75 1.75 0 011.217-1.667l5.25-1.68zm.61 1.429a.25.25 0 00-.153 0l-5.25 1.68a.25.25 0 00-.174.238V7c0 1.358.275 2.666 1.057 3.86.784 1.194 2.121 2.34 4.366 3.297a.2.2 0 00.154 0c2.245-.956 3.582-2.104 4.366-3.298C13.225 9.666 13.5 8.36 13.5 7V3.48a.25.25 0 00-.174-.237l-5.25-1.68zM9 10.5a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.75a.75.75 0 10-1.5 0v3a.75.75 0 001.5 0v-3z"></path>
                    </svg>
                    <span class="ml-2">Security</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center border-b border-transparent hover:border-gray-300 transition ease-in-out duration-150 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current">
                        <path fill-rule="evenodd" d="M1.5 1.75a.75.75 0 00-1.5 0v12.5c0 .414.336.75.75.75h14.5a.75.75 0 000-1.5H1.5V1.75zm14.28 2.53a.75.75 0 00-1.06-1.06L10 7.94 7.53 5.47a.75.75 0 00-1.06 0L3.22 8.72a.75.75 0 001.06 1.06L7 7.06l2.47 2.47a.75.75 0 001.06 0l5.25-5.25z"></path>
                    </svg>
                    <span class="ml-2">Insights</span>
                </a>
            </li>
        </ul><!-- end repo-nav -->

        <div class="container mx-auto my-8 px-4 flex">
            <div class="file-explorer-container w-3/4 mr-8">
                <div class="branch-navigation flex items-center justify-between">
                    <div class="flex items-center space-x-1">
                        <button class="border border-gray-300 bg-gray-50 hover:bg-gray-100 rounded-md px-4 py-1 flex items-center space-x-2">
                            <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 w-4">
                                <path fill-rule="evenodd" d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
                            </svg>
                            <div class="font-semibold">master</div>
                            <svg class="w-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <a href="#" class="flex items-center space-x-2 px-3 py-1 group">
                            <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 group-hover:text-blue-600 w-4">
                                <path fill-rule="evenodd" d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
                            </svg>
                            <span class="text-gray-700 group-hover:text-blue-600">
                                <span class="font-semibold">47 </span>
                                <span class="text-gray-600 group-hover:text-blue-600">branches</span>
                            </span>
                        </a>

                        <a href="#" class="flex items-center space-x-2 px-3 py-1 group">
                            <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 group-hover:text-blue-600 w-4">
                                <path fill-rule="evenodd" d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path>
                            </svg>
                            <span class="text-gray-700 group-hover:text-blue-600">
                                <span class="font-semibold">210 </span>
                                <span class="text-gray-600 group-hover:text-blue-600">tags</span>
                            </span>
                        </a>
                    </div>

                    <div class="flex items-center space-x-2">
                        <button class="border border-gray-300 bg-gray-50 hover:bg-gray-100 rounded-md px-4 py-1 flex items-center space-x-2">
                            <div class="font-semibold">Go to file</div>
                        </button>

                        <button class="border border-gray-300 bg-gray-50 hover:bg-gray-100 rounded-md px-4 py-1 flex items-center space-x-2">
                            <div class="font-semibold">Add file</div>
                            <svg class="w-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <button class="border border-green-700 rounded-md font-semibold text-white bg-green-600 hover:bg-green-700 px-4 py-1 flex items-center space-x-2">
                            <div>Code</div>
                            <svg class="w-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div><!-- end branch-navigation -->

                <div class="commits-container bg-gray-50 rounded-md rounded-b-none border border-gray-300 border-b-0 flex items-center justify-between px-4 py-5 mt-5">
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6 rounded-full" data-test-selector="commits-avatar-stack-avatar-image" src="https://avatars.githubusercontent.com/u/2615508?s=40&amp;v=4" width="20" height="20" alt="@bradlc">
                        <a href="#" class="font-semibold hover:underline">bradlc</a>
                        <a href="#" class="hover:underline hover:text-blue-600">Update changelog</a>
                    </div>

                    <div class="flex items-end">
                        <a href="#">
                            <svg aria-label="12 / 12 checks OK" role="img" viewBox="0 0 16 16" class="w-4 fill-current text-green-600">
                                <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                            </svg>
                            <a href="#" class="font-mono text-xs text-gray-600 hover:underline hover:text-blue-600 ml-2">da070bd</a>
                            <a href="#" class="text-gray-600 hover:underline hover:text-blue-600 ml-2">1 hour ago</a>
                            <a href="#" class="flex items-center ml-3 group">
                                <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-600 group-hover:text-blue-600 w-4">
                                    <path fill-rule="evenodd" d="M1.643 3.143L.427 1.927A.25.25 0 000 2.104V5.75c0 .138.112.25.25.25h3.646a.25.25 0 00.177-.427L2.715 4.215a6.5 6.5 0 11-1.18 4.458.75.75 0 10-1.493.154 8.001 8.001 0 101.6-5.684zM7.75 4a.75.75 0 01.75.75v2.992l2.028.812a.75.75 0 01-.557 1.392l-2.5-1A.75.75 0 017 8.25v-3.5A.75.75 0 017.75 4z"></path>
                                </svg>
                                <span class="text-gray-700 group-hover:text-blue-600 ml-1">
                                    <span class="font-semibold">4,604 </span>
                                    <span class="text-gray-600 group-hover:text-blue-600">commits</span>
                                </span>
                            </a>
                        </a>

                    </div>
                </div> <!-- end commits-container -->

                <div class="file-explorer rounded-md rounded-t-none border border-gray-300 divide-y divide-gray-300">
                    <x-folder name=".github" description="Update issues template" time="11 days ago" />
                    <x-folder name="__tests__" description="Remove stale test" time="4 days ago" />
                    <x-folder name="dist" description="Add empty .npmignore so dist files are distributed with releases" time="3 years ago" />
                    <x-folder name="jest" description="Use `process.env.JEST_WORKER_ID`" time="15 months ago" />
                    <x-folder name="scripts" description="Prevent source maps from being generated" time="21 days ago" />
                    <x-folder name="src" description="Only wrap with variants if rules don't already contain any variants" time="4 days ago" />
                    <x-folder name="stubs" description="Generate responsive variants for container by default" time="4 days ago" />
                    <x-file name=".editorconfig" description="Convert new stuff to use ES6 modules" time="3 years ago" />
                    <x-file name=".eslintignore" description="Updated CLI init commend" time="16 months ago" />
                    <x-file name=".eslintrc.json" description=" Disable lint rule for TODO comments" time="3 months ago" />
                    <x-file name="plugin.js" description="Add new `plugin` and `plugin.withOptions` functions for creating blah blah" time="7 months ago" />
                    <x-file name="README.md" description="Add alt attribute to logo" time="2 months ago" />
                    <x-file name="tailwind.css" description="Undo accidental changes to CDN build process" time="7 months ago" />
                    <x-file name="utilities.css" description="Move CSS files to root for easier imports" time="2 years ago" />
                </div><!-- end file-explorer -->

                <div class="readme-container rounded-md border border-gray-300 px-4 py-4 mt-4">
                    <h4 class="font-semibold">README.md</h4>
                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam porro est dolores placeat, harum animi eveniet dolor veniam molestias natus consequatur quo maiores ipsa quisquam aperiam consequuntur. Sunt quasi alias ex similique amet deserunt, iusto voluptatum eos voluptatem neque consequuntur expedita aliquid porro ipsam tenetur. Quam nisi in rem, accusamus eveniet neque quia ab voluptas illum maxime non error debitis id veniam placeat vero dicta amet voluptatem, quibusdam sunt quidem. A quis iste, laborum tempora, accusantium assumenda odit, molestias animi totam possimus qui blanditiis fuga reprehenderit vitae. Doloremque corporis suscipit natus deleniti ratione repellat accusamus? Itaque cupiditate laborum ex ducimus molestiae, dolore, sapiente tempore, deleniti odit corrupti error deserunt vel repellat dolorem quo! Cum commodi illum repellendus quis, officiis consectetur ullam culpa inventore quibusdam dignissimos ea. Nam vero, quisquam tenetur quasi omnis odit similique, qui dolore ipsa officia nemo modi alias, eum est enim autem voluptas. Officiis illo et quod cupiditate placeat ratione! Odit qui accusantium corrupti blanditiis ullam error praesentium magni soluta rerum? Iusto voluptates sapiente ipsa omnis, sunt consectetur? Architecto sequi praesentium repudiandae fuga ipsa nemo culpa dolores veritatis quo deserunt ipsum facilis quis nostrum assumenda cum officia iure natus magni, maiores inventore? Impedit quod quidem eveniet est!
                    </div>
                </div><!-- end readme-container -->
            </div> <!-- end file-explorer-container -->

            <div class="sidebar w-1/4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, itaque voluptas tenetur excepturi numquam at placeat non necessitatibus dolores fugit eligendi architecto iure fuga, dicta ad recusandae laborum incidunt ullam quas accusantium a minima quia aut? Nam tempora earum quod accusantium natus dolorem libero qui, et deserunt molestias odio, distinctio consequatur autem eos, hic quo sit accusamus porro dolor voluptatum amet expedita vero fugit nostrum. Ratione corrupti esse aperiam dolorem. Voluptate tenetur hic doloribus molestias repellendus aliquid porro tempore assumenda, debitis beatae ea aperiam harum, perspiciatis deleniti tempora, consequuntur pariatur ipsum est! Fugit esse sequi minus, tenetur culpa explicabo veniam qui, quidem optio cupiditate magni necessitatibus quos recusandae voluptatibus sint pariatur libero consequatur quae est. Unde, doloribus sapiente! Commodi voluptate provident corporis alias voluptas quis libero dolorum culpa illo quos voluptates veniam odio beatae, nam placeat impedit. Cupiditate?
            </div> <!-- end sidebar -->
        </div>

        <footer class="container mx-auto text-xs border-t border-gray-300 py-10 flex items-center justify-between">
            <ul class="flex items-center space-x-10">
                <li class="text-gray-500 mr-4">
                    <div class="flex items-center space-x-2">
                        <svg aria-hidden="true"viewBox="0 0 16 16" class="w-6 fill-current">
                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                        <span>&copy; 2022 GitHub, Inc.</span>
                    </div>
                </li>
                <li><a href="#" class="text-blue-600 hover:underline">Terms</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Privacy</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Security</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Status</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Docs</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Contact GitHub</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Pricing</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">API</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Training</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Blog</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">About</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>