@props(['type' => 'success'])

<div x-data="{ show: true }"
    x-show="show"
    x-init="setTimeout(() => show = false, 4000)"
    class="p-4 mb-4 text-sm rounded-lg shadow-md transition-opacity duration-300 {{ $type === 'success' ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-red-100 text-red-800 border border-red-200' }}">
    <div class="flex justify-between items-center">
        <div>{{ $slot }}</div>
        <button @click="show = false" class="font-bold text-lg leading-none">&times;</button>
    </div>
</div>