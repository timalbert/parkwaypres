<header x-data="{ open: false }">
    <div class="max-w-6xl mx-auto px-4 py-6 flex items-center justify-between">
        <a href="/" class="font-medium text-lg">Parkway Presbyterian Church</a>

        <nav class="hidden md:flex md:items-center md:gap-6 md:text-sm">
            <a class="text-gray-800/75 transition hover:text-gray-800" href="/about">About Us</a>
            <a class="text-gray-800/75 transition hover:text-gray-800" href="/worship">Worship</a>
            <a class="text-gray-800/75 transition hover:text-gray-800" href="/calendar">Events</a>
            <a class="text-gray-800/75 transition hover:text-gray-800" href="/give">Give</a>
            <a class="text-gray-800/75 transition hover:text-gray-800" href="/contact">Contact Us</a>
        </nav>

        <button x-on:click="open = true" class="text-gray-600">
            <span class="sr-only">Toggle menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div
            x-dialog
            x-model="open"
            style="display: none"
            class="fixed inset-0 overflow-hidden z-10 md:hidden"
        >
            <!-- Overlay -->
            <div x-dialog:overlay x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

            <!-- Panel -->
            <div class="fixed inset-y-0 right-0 max-w-lg w-full">
                <div
                    x-dialog:panel
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    class="h-full w-full"
                >
                    <div class="h-full flex flex-col justify-between bg-white shadow-lg overflow-y-auto">
                        <div class="p-8">
                            <!-- Title -->
                            <div class="flex items-center justify-between">
                                <h2 x-dialog:title class="text-2xl font-bold">Parkway Presbyterian</h2>

                                <button type="button" @click="$dialog.close()" class="rounded-lg p-1 text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2">
                                    <span class="sr-only">Close slideover</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Content -->
                            <div class="mt-8 text-gray-600 flex-1 flex flex-col items-start gap-3">
                                <a class="text-gray-800/75 transition hover:text-gray-800" href="/about">About Us</a>
                                <a class="text-gray-800/75 transition hover:text-gray-800" href="/worship">Worship</a>
                                <a class="text-gray-800/75 transition hover:text-gray-800" href="/calendar">Events</a>
                                <a class="text-gray-800/75 transition hover:text-gray-800" href="/give">Give</a>
                                <a class="text-gray-800/75 transition hover:text-gray-800" href="/contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
