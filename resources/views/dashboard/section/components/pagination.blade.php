@if ($paginator->hasPages())
    <div
        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
        <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
            <ul class="pagination">

                @if ($paginator->onFirstPage())
                    <li class="paginate_button page-item previous disabled" aria-label="@lang('pagination.previous')"
                        id="kt_customers_table_previous"><a href="#"
                                                            aria-controls="kt_customers_table"
                                                            data-dt-idx="0" tabindex="0"
                                                            class="page-link"><i
                                class="previous"></i></a></li>

                @else
                    <li class="paginate_button page-item previous" aria-label="@lang('pagination.previous')"
                        id="kt_customers_table_previous"><a href="{{ $paginator->previousPageUrl() }}"
                                                            aria-controls="kt_customers_table"
                                                            data-dt-idx="0" tabindex="0"
                                                            class="page-link"><i
                                class="previous"></i></a></li>
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

                    <li class="paginate_button page-item"><a href="{{ $paginator->url(1) }}"
                                                             aria-controls="kt_customers_table"
                                                             data-dt-idx="1" tabindex="0"
                                                             class="page-link">{{ 1 }}</a></li>

                    @if($paginator->currentPage() != 4)
                        <li class="paginate_button page-item disabled"><a aria-controls="kt_customers_table"
                                                                          data-dt-idx="1" tabindex="0"
                                                                          class="page-link">...</a></li>
                    @endif
                @endif

                @for ($i = $start; $i <= $end; $i++)
                    <li class="paginate_button page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                        <a href="{{ $paginator->url($i) }}" aria-controls="kt_customers_table" data-dt-idx="1"
                           tabindex="0"
                           class="page-link">{{$i}}</a></li>
                @endfor



                @if($end < $paginator->lastPage())
                    @if($paginator->currentPage() + 3 != $paginator->lastPage())
                        <li class="paginate_button page-item disabled"><a aria-controls="kt_customers_table"
                                                                          data-dt-idx="1" tabindex="0"
                                                                          class="page-link">...</a></li>
                    @endif
                    <li class="paginate_button page-item">
                        <a href="{{ $paginator->url($paginator->lastPage()) }}" aria-controls="kt_customers_table"
                           data-dt-idx="1" tabindex="0"
                           class="page-link">{{$paginator->lastPage()}}</a></li>
                @endif

                @if ($paginator->hasMorePages())
                    <li class="paginate_button page-item next" id="kt_customers_table_next"
                        aria-label="@lang('pagination.next')"><a
                            href="{{ $paginator->nextPageUrl() }}" aria-controls="kt_customers_table" data-dt-idx="5"
                            tabindex="0"
                            class="page-link"><i class="next"></i></a></li>
                @else
                    <li class="paginate_button page-item next disabled" id="kt_customers_table_next"
                        aria-label="@lang('pagination.next')"><a
                            aria-controls="kt_customers_table" data-dt-idx="5" tabindex="0"
                            class="page-link"><i class="next"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
@endif
