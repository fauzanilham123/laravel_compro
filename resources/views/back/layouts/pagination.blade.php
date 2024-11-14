<div class="pagination-wrap clearfix">
    <p class="result-count">Menampilkan: {{ $paginator->count() }} of {{ $paginator->total() }} hasil</p>

    @if ($paginator->hasPages())
    <nav class="pagination right clearfix">
        @if ($paginator->onFirstPage())
        <span class="page-numbers"><i class="fa fa-angle-left"></i></span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
        @endif

        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
        @else
            <span class="page-numbers"><i class="fa fa-angle-right"></i></span>
        @endif
    </nav>
    @endif
</div>
