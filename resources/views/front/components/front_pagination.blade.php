

@if ($paginator->hasPages())
    <div class="pager default text-center">
        <ul class="pager-items">

            {{-- Start Privious --}}
            @if ($paginator->onFirstPage())
                <li id="previousPage_diabled">
                    <a class="pager-prev"></a>
                </li>
            @else
                <li style="cursor: pointer">
                    <a id="previousPage" wire:click="previousPage" class="pager-prev"></a>
                </li>
            @endif
            {{-- end Previous --}}

            @foreach ($elements as $element)
                @if(is_array($element))
                    @foreach($element as $page => $url)
                        @if($page ==  $paginator->currentPage())
                            <li>
                                <a wire:loading.attr="disabled" wire:click="gotoPage({{$page}})"
                                   id="current"
                                   class="pager-item is-active">{{$page}}</a>
                            </li>

                        @else
                            <li style="cursor: pointer">
                                <a wire:loading.attr="disabled" wire:click="gotoPage({{$page}})"
                                   class="pager-item">{{$page}}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Start Next --}}
            @if ($paginator->hasMorePages())
                <li style="cursor: pointer" id="nextPage">
                    <a wire:click="nextPage" class="pager-next"></a>
                </li>
            @else
                <li id="nextPage_disabled" disabled>
                    <a class="pager-next"></a>
                </li>
            @endif
            {{-- End Next --}}

        </ul>
    </div>
@endif
