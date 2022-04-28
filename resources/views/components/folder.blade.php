@props(['name', 'description', 'time'])

<div class="flex justify-between px-4 py-2 hover:bg-gray-50">
    <div class="w-4/12 flex items-center">
        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current text-blue-400">
            <path d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3H7.5a.25.25 0 01-.2-.1l-.9-1.2C6.07 1.26 5.55 1 5 1H1.75z"></path>
        </svg>
        <a href="#" class="hover:underline hover:text-blue-600 ml-3">{{ $name }}</a>
    </div>
    <div class="w-6/12 truncate text-gray-500">
        <a href="#" class="hover:underline hover:text-blue-600">{{ $description }}</a>
    </div>
    <div class="w-2/12 text-right text-gray-500">
        <span>{{ $time }}</span>
    </div>
</div>