<?php $filter = request($name); ?>
<div class="mb-10">
    <label class="form-label fs-6 fw-semibold" for="{{ $name }}">{{ $label }}:</label>
    <select class="form-select form-select-solid fw-bold"
            data-kt-select2="true"
            name="{{ $name }}" id="{{ $name }}"
{{--            data-allow-clear="true"--}}
            data-kt-user-table-filter="role">
        <option value="">همه موارد</option>
        @foreach($items as $item)
            <option @if(isset($filter) && $item[0] == request($name)) selected
                    @endif value="{{ $item[0] }}">{{ $item[1] }}</option>
        @endforeach
    </select>
</div>
