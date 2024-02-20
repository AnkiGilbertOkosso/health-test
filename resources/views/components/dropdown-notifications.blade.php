@props([
    'align' => 'right'
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button
        class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600/80 rounded-full"
        :class="{ 'bg-slate-200': open }"
        aria-haspopup="true"
        @click.prevent="open = !open"
        :aria-expanded="open"                        
    >
        <span class="sr-only">Notifications</span>
        <svg class="w-6 h-6 text-slate-500 dark:text-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11.2 3.8a1 1 0 1 0-2 .4l.4 1.7a5.3 5.3 0 0 0-2.8 5.8l.2 1.5.1.3c.3 1.3-.2 2.2-.6 3-.3.5-.6 1-.5 1.4.1.6.3 1.2.8 1l12.7-2.3c.5-.1.4-.7.3-1.3-.1-.5-.6-1-1.2-1.7a5.2 5.2 0 0 1-1.4-2 19.6 19.6 0 0 1-.3-1.8 5.3 5.3 0 0 0-5.4-4.4l-.3-1.6Z"/>
            <path fill-rule="evenodd" d="M6.5 4.3c.4.3.5 1 .1 1.4A6.9 6.9 0 0 0 4.8 10a1 1 0 0 1-2-.2c.1-2.1 1-3.9 2.3-5.5a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/>
            <path d="M9 19.7c.6.8 1.7 1.3 2.8 1.3 1.5 0 2.8-1.1 3.3-2.5l-6.2 1.2Z"/>
          </svg>    
        <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-rose-500 border-2 border-white dark:border-[#182235] rounded-full"></div>
    </button>
    <div
        class="origin-top-right z-10 absolute top-full -mr-48 sm:mr-0 min-w-80 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1 {{$align === 'right' ? 'right-0' : 'left-0'}}"                
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak                    
    >
        <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase pt-1.5 pb-2 px-4">Notifications</div>
        <ul>
            <li class="border-b border-slate-200 dark:border-slate-700 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50 dark:hover:bg-slate-700/20" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800 dark:text-slate-100">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400 dark:text-slate-500">Feb 12, 2021</span>
                </a>
            </li>
            <li class="border-b border-slate-200 dark:border-slate-700 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50 dark:hover:bg-slate-700/20" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800 dark:text-slate-100">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400 dark:text-slate-500">Feb 9, 2021</span>
                </a>
            </li>
            <li class="border-b border-slate-200 dark:border-slate-700 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50 dark:hover:bg-slate-700/20" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">🚀<span class="font-medium text-slate-800 dark:text-slate-100">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400 dark:text-slate-500">Jan 24, 2020</span>
                </a>
            </li>
        </ul>                
    </div>
</div>