<nav class="bg-white border-b border-gray-200">
    <!-- Top Navbar -->
    <div class="flex items-center justify-between px-20 h-16">
        <div class="flex items-center space-x-3">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 w-8" alt="Logo">
            <span class="self-center text-lg font-bold text-gray-800">Flowbite</span>
        </div>
        <div class="flex items-center space-x-4">
            <!-- Notifications -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="relative p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                    <span class="material-icons text-[10px]">notifications</span>
                    <!-- Notification badge -->
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[8px] rounded-full h-4 w-4 flex items-center justify-center">3</span>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute top-full right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-2 z-50">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <h3 class="text-xs font-medium text-gray-900">Notifications</h3>
                        <p class="text-[8px] text-gray-500">You have 3 new notifications</p>
                    </div>
                    <div class="max-h-64 overflow-y-auto">
                        <!-- Notification Item 1 -->
                        <div class="px-4 py-3 hover:bg-gray-50 border-b border-gray-100">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <span class="material-icons text-[10px] text-blue-500">account_circle</span>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-xs font-medium text-gray-900">New user registered</p>
                                    <p class="text-[8px] text-gray-500">John Doe has joined the system</p>
                                    <p class="text-[8px] text-gray-400 mt-1">2 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <!-- Notification Item 2 -->
                        <div class="px-4 py-3 hover:bg-gray-50 border-b border-gray-100">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <span class="material-icons text-[10px] text-green-500">check_circle</span>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-xs font-medium text-gray-900">Case completed</p>
                                    <p class="text-[8px] text-gray-500">Case #12345 has been resolved</p>
                                    <p class="text-[8px] text-gray-400 mt-1">5 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <!-- Notification Item 3 -->
                        <div class="px-4 py-3 hover:bg-gray-50">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <span class="material-icons text-[10px] text-orange-500">warning</span>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-xs font-medium text-gray-900">System maintenance</p>
                                    <p class="text-[8px] text-gray-500">Scheduled maintenance in 30 minutes</p>
                                    <p class="text-[8px] text-gray-400 mt-1">10 minutes ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-2 border-t border-gray-100">
                        <a href="#" class="text-xs text-blue-600 hover:text-blue-800">View all notifications</a>
                    </div>
                </div>
            </div>
            <!-- Apps Grid -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <span class="material-icons text-[10px]">apps</span>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute top-full right-0 mt-2 w-64 bg-white rounded-md shadow-lg py-3 z-50">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <h3 class="text-xs font-medium text-gray-900">Quick Apps</h3>
                    </div>
                    <div class="p-4">
                        <div class="grid grid-cols-3 gap-3">
                            <!-- App 1 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-blue-500 mb-1">dashboard</span>
                                <span class="text-[8px] text-gray-700">Dashboard</span>
                            </a>
                            <!-- App 2 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-green-500 mb-1">folder</span>
                                <span class="text-[8px] text-gray-700">Files</span>
                            </a>
                            <!-- App 3 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-purple-500 mb-1">people</span>
                                <span class="text-[8px] text-gray-700">Users</span>
                            </a>
                            <!-- App 4 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-orange-500 mb-1">account_balance_wallet</span>
                                <span class="text-[8px] text-gray-700">Finance</span>
                            </a>
                            <!-- App 5 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-red-500 mb-1">analytics</span>
                                <span class="text-[8px] text-gray-700">Reports</span>
                            </a>
                            <!-- App 6 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-indigo-500 mb-1">settings</span>
                                <span class="text-[8px] text-gray-700">Settings</span>
                            </a>
                            <!-- App 7 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-teal-500 mb-1">calendar_today</span>
                                <span class="text-[8px] text-gray-700">Calendar</span>
                            </a>
                            <!-- App 8 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-pink-500 mb-1">email</span>
                                <span class="text-[8px] text-gray-700">Mail</span>
                            </a>
                            <!-- App 9 -->
                            <a href="#" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="material-icons text-[16px] text-yellow-500 mb-1">help_outline</span>
                                <span class="text-[8px] text-gray-700">Help</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Help -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <span class="material-icons text-[10px]">help_outline</span>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute top-full right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-3 z-50">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <h3 class="text-xs font-medium text-gray-900">Help & Support</h3>
                    </div>
                    <div class="p-4 space-y-3">
                        <!-- Quick Help -->
                        <div class="space-y-2">
                            <h4 class="text-xs font-medium text-gray-800">Quick Help</h4>
                            <div class="space-y-1">
                                <a href="#" class="flex items-center text-[8px] text-gray-600 hover:text-blue-600 hover:bg-gray-50 p-2 rounded">
                                    <span class="material-icons text-[10px] mr-2 text-blue-500">article</span>
                                    User Guide
                                </a>
                                <a href="#" class="flex items-center text-[8px] text-gray-600 hover:text-blue-600 hover:bg-gray-50 p-2 rounded">
                                    <span class="material-icons text-[10px] mr-2 text-green-500">video_library</span>
                                    Video Tutorials
                                </a>
                                <a href="#" class="flex items-center text-[8px] text-gray-600 hover:text-blue-600 hover:bg-gray-50 p-2 rounded">
                                    <span class="material-icons text-[10px] mr-2 text-purple-500">quiz</span>
                                    FAQ
                                </a>
                            </div>
                        </div>
                        
                        <!-- Support -->
                        <div class="space-y-2">
                            <h4 class="text-xs font-medium text-gray-800">Support</h4>
                            <div class="space-y-1">
                                <a href="#" class="flex items-center text-[8px] text-gray-600 hover:text-blue-600 hover:bg-gray-50 p-2 rounded">
                                    <span class="material-icons text-[10px] mr-2 text-orange-500">support_agent</span>
                                    Contact Support
                                </a>
                                <a href="#" class="flex items-center text-[8px] text-gray-600 hover:text-blue-600 hover:bg-gray-50 p-2 rounded">
                                    <span class="material-icons text-[10px] mr-2 text-red-500">bug_report</span>
                                    Report Bug
                                </a>
                                <a href="#" class="flex items-center text-[8px] text-gray-600 hover:text-blue-600 hover:bg-gray-50 p-2 rounded">
                                    <span class="material-icons text-[10px] mr-2 text-indigo-500">feedback</span>
                                    Send Feedback
                                </a>
                            </div>
                        </div>
                        
                        <!-- System Info -->
                        <div class="pt-2 border-t border-gray-100">
                            <div class="text-[8px] text-gray-500 space-y-1">
                                <div class="flex justify-between">
                                    <span>Version:</span>
                                    <span>v1.2.0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Last Updated:</span>
                                    <span>Dec 15, 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="h-6 border-l border-gray-200 mx-2"></span>
            <!-- User dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @mouseenter="open = true" @mouseleave="open = false" class="flex items-center text-xs font-medium text-gray-700 hover:text-blue-500 focus:outline-none">
                    <span class="material-icons text-[10px] mr-2">account_circle</span>
                    {{ Auth::user()->name }}
                    <span class="material-icons text-[6px] font-extralight ml-1" x-text="open ? 'expand_less' : 'expand_more'"></span>
                </button>
                <div x-show="open" @mouseenter="open = true" @mouseleave="open = false" class="absolute top-full right-0 mt-1 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Profile</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Navbar -->
    <div class="bg-white border-t border-gray-100">
        <div class="flex space-x-6 px-20 h-12 items-center">
            <a href="{{ route('overview') }}" class="relative flex items-center text-xs font-normal text-gray-700 hover:text-blue-400">
                <span class="material-icons text-[8px] mr-1 text-blue-600">dashboard</span>
                Overview
            </a>
            <a href="#" class="relative flex items-center text-xs font-normal text-gray-700 hover:text-blue-400">
                <span class="material-icons text-[8px] mr-1 text-green-600">calendar_today</span>
                Calendar
            </a>
            
            <!-- Case Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @mouseenter="open = true" @mouseleave="open = false" class="flex items-center text-xs font-normal text-gray-700 hover:text-blue-400 focus:outline-none">
                    <span class="material-icons text-[8px] mr-1 text-purple-600">folder</span>
                    Case
                    <span class="material-icons text-[6px] font-extralight ml-1" x-text="open ? 'expand_less' : 'expand_more'"></span>
                </button>
                <div x-show="open" @mouseenter="open = true" @mouseleave="open = false" class="absolute top-full left-0 mt-1 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Consultation</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Open Case</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">File Management</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Partner List</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Client List</a>
                </div>
            </div>
            
            <!-- Accounting Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @mouseenter="open = true" @mouseleave="open = false" class="flex items-center text-xs font-normal text-gray-700 hover:text-blue-400 focus:outline-none">
                    <span class="material-icons text-[8px] mr-1 text-orange-600">account_balance_wallet</span>
                    Accounting
                    <span class="material-icons text-[6px] font-extralight ml-1" x-text="open ? 'expand_less' : 'expand_more'"></span>
                </button>
                <div x-show="open" @mouseenter="open = true" @mouseleave="open = false" class="absolute top-full left-0 mt-1 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Quotations</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Invoice</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Receipt</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Voucher</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Bill</a>
                </div>
            </div>
            
            <!-- Settings Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @mouseenter="open = true" @mouseleave="open = false" class="flex items-center text-xs font-normal text-gray-700 hover:text-blue-400 focus:outline-none">
                    <span class="material-icons text-[8px] mr-1 text-red-600">settings</span>
                    Settings
                    <span class="material-icons text-[6px] font-extralight ml-1" x-text="open ? 'expand_less' : 'expand_more'"></span>
                </button>
                <div x-show="open" @mouseenter="open = true" @mouseleave="open = false" class="absolute top-full left-0 mt-1 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Global Config</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Role Management</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">User Management</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Category</a>
                    <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 relative hover:after:content-[''] hover:after:block hover:after:absolute hover:after:right-0 hover:after:top-0 hover:after:bottom-0 hover:after:w-1 hover:after:bg-blue-500">Activity Logs</a>
                </div>
            </div>
        </div>
    </div>
</nav> 