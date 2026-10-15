<div x-show="showDeleteModal"
    style="display: none;"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    x-transition.opacity>

    <div class="bg-white rounded-lg p-6 max-w-sm w-full mx-4 shadow-xl" @click.away="showDeleteModal = false">
        <h3 class="text-lg font-bold text-gray-900 mb-2">
            Delete {{ $item }}?
        </h3>
        <p class="text-sm text-gray-600 mb-4">
            Are you sure you want to delete this {{ strtolower($item) }}? <br> This action cannot be undone.
        </p>

        <form :action="deleteUrl" method="POST" class="flex justify-end space-x-3">
            @csrf
            @method('DELETE')

            <button type="button"
                @click="showDeleteModal = false"
                class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 text-sm font-medium">
                Cancel
            </button>

            <button type="submit"
                class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 text-sm font-medium">
                Delete
            </button>
        </form>
    </div>
</div>