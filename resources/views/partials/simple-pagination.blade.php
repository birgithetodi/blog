
@if ($paginator->hasPages())
    <nav role="navigation"
        aria-label="{{ __('Pagination Navigation') }}"
        class="flex items-center justify-between gap-2">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-outline btn-disabled" disabled aria-disabled="true">
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                rel="prev"
                class="btn btn-outline">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                rel="next"
                class="btn btn-outline">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn btn-outline btn-disabled" disabled aria-disabled="true">
                {!! __('pagination.next') !!}
            </button>
        @endif

    </nav>
@endif
