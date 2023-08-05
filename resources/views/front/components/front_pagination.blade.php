@if ($paginator->hasPages())
    <ul class="mt-3 pagination d-flex justify-content-center">

        @if ($paginator->onFirstPage())
            <li class="page-item" id="previousPage_diabled"><a class="page-link">قبلی</a></li>
        @else
            <li class="page-item"><a class="page-link" id="previousPage" wire:click="previousPage">قبلی</a></li>
        @endif

        @foreach ($elements as $element)
            @if(is_array($element))
                @foreach($element as $page => $url)
                    @if($page ==  $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" wire:loading.attr="disabled"
                                                        wire:click="gotoPage({{$page}})"
                                                        id="current">{{$page}}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" wire:loading.attr="disabled"
                                                 wire:click="gotoPage({{$page}})">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Start Next --}}
        @if ($paginator->hasMorePages())
            <li class="page-item" id="nextPage"><a class="page-link" wire:click="nextPage">بعدی</a></li>
        @else
            <li id="nextPage_disabled" disabled class="page-item"><a class="page-link">بعدی</a></li>
        @endif
        {{-- End Next --}}

    </ul>
@endif
