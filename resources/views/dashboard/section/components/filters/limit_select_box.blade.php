<form id="limit_form">
    <input type="hidden" name="search" value="{{ request('search') }}">

    <div
        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
        <div class="dataTables_length" id="kt_customers_table_length">
            <label><select
                    name="pagination" aria-controls="kt_customers_table"
                    onchange="$('#limit_form').submit()"
                    class="form-select form-select-sm form-select-solid">
                    <option @if(request('pagination') == 5) selected @endif value="5">5</option>
                    <option @if(!request('pagination') || request('pagination') == 10) selected @endif value="10">10
                    </option>
                    <option @if(request('pagination') == 25) selected @endif value="25">25</option>
                    <option @if(request('pagination') == 50) selected @endif value="50">50</option>
                </select></label>

{{--            <label><select--}}
{{--                    name="pagination" aria-controls="kt_customers_table"--}}
{{--                    onchange="$('#limit_form').submit()"--}}
{{--                    class="form-select form-select-sm form-select-solid">--}}
{{--                    <option @if(request('pagination') == 5) selected @endif value="5">5</option>--}}
{{--                    <option @if(!request('pagination') || request('pagination') == 10) selected @endif value="10">10--}}
{{--                    </option>--}}
{{--                    <option @if(request('pagination') == 25) selected @endif value="25">25</option>--}}
{{--                    <option @if(request('pagination') == 50) selected @endif value="50">50</option>--}}
{{--                </select></label>--}}
        </div>
    </div>
</form>
