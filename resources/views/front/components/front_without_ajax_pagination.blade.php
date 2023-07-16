
@if ($paginator->hasPages())
    <div class="pager default text-center">
        <ul class="pager-items">


            @if ($paginator->onFirstPage())
                <li id="previousPage_diabled">
                    <a class="pager-prev"></a>
                </li>
            @else
                <li style="cursor: pointer">
                    <a id="previousPage" href="{{ $paginator->previousPageUrl() }}" class="pager-prev"></a>
                </li>

            @endif

            <?php
            $start = $paginator->currentPage() - 2; // show 3 pagination links before current
            $end = $paginator->currentPage() + 2; // show 3 pagination links after current
            if ($start < 1) {
                $start = 1; // reset start to 1
                $end += 1;
            }
            if ($end >= $paginator->lastPage()) $end = $paginator->lastPage(); // reset end to last page
            ?>

            @if($start > 1)

                <li>
                    <a href="{{ $paginator->url(1) }}"
                       id="current"
                       class="pager-item">{{ 1 }}</a>
                </li>

                @if($paginator->currentPage() != 4)
                    <line class="pager-items--partition"></line>
                @endif
            @endif

            @for ($i = $start; $i <= $end; $i++)
                <li>
                    <a href="{{ $paginator->url($i) }}"
                       id="current"
                       class="pager-item {{ ($paginator->currentPage() == $i) ? ' is-active' : '' }}">{{ $i }}</a>
                </li>
            @endfor

            @if($end < $paginator->lastPage())
                @if($paginator->currentPage() + 3 != $paginator->lastPage())
                    <line class="pager-items--partition"></line>
                @endif

                <li>
                    <a href="{{ $paginator->url($paginator->lastPage()) }}"
                       id="current"
                       class="pager-item">{{$paginator->lastPage()}}</a>
                </li>

            @endif

            @if ($paginator->hasMorePages())
                <li style="cursor: pointer" id="nextPage">
                    <a href="{{ $paginator->nextPageUrl() }}" class="pager-next"></a>
                </li>
            @else
                <li id="nextPage_disabled" disabled>
                    <a class="pager-next"></a>
                </li>
            @endif

        </ul>
    </div>
@endif
