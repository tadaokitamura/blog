@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>@lang('pagination.previous')</span></li>
        @else
            <!-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li> -->
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">前へ</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <!-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li> -->
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">次へ</a></li>
        @else
            <li class="disabled"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
