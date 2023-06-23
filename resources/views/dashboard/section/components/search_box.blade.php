<form id="search_form">
    <div class="card-title">
        <!--begin::جستجو-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5" onclick="$('#search_form').submit()">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" data-kt-user-table-filter="search" value="{{ request('search') }}"
                   name="search" id="search_input"
                   class="form-control form-control-solid w-250px ps-13" placeholder="جستجو ..."/>
        </div>
        <!--end::جستجو-->
    </div>

    <input type="hidden" name="pagination" value="{{ request('pagination') }}">
</form>
