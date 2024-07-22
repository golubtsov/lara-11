@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between items-center">
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
               class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-300 bg-gray-800 border border-gray-700 leading-5 rounded-md hover:text-gray-100 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-700 active:text-gray-100 transition ease-in-out duration-150">
                <--
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
               class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-300 bg-gray-800 border border-gray-700 leading-5 rounded-md hover:text-gray-100 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-700 active:text-gray-100 transition ease-in-out duration-150">
                -->
            </a>
        @endif
    </nav>
@endif
