@if ($paginator->hasPages())
    <ul class="pagination justify-content-center mb-4">
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&larr; @lang('pagination.older')</a>
            </li>
        @else
            <li class="page-item disabled"><span class="page-link">&larr; @lang('pagination.older')</span></li>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">@lang('pagination.newer') &rarr;</span></li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.newer') &rarr;</a>
            </li>
        @endif
    </ul>
@endif
