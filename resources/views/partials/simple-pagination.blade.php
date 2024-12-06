@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="join-item btn btn-disabled" aria-disabled="true"><span>⇐</span></a>
            @else
                <a class ="join-item btn btn-outline" href="{{ $paginator->previousPageUrl() }}" rel="prev">⇐</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class ="join-item btn btn-outline" href="{{ $paginator->nextPageUrl() }}" rel="next">⇒</a>
            @else
                <a class="join-item btn btn-disabled" aria-disabled="true"><span>⇒</span></a>
            @endif
        </ul>
    </nav>
@endif
