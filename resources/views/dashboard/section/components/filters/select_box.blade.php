<?php $filter = request($name); ?>

<div class="card-tools d-none d-md-block" style="left: {{ isset($left_space) ? $left_space : '200' }}px!important; right: auto!important;">
    <form>
        <div class="input-group input-group-sm" style="width: 150px;">
            <select class="form-control float-right" name="{{ $name }}" id="{{ $name }}" onchange="submit()">
                <option value="">همه موارد</option>
                @foreach($items as $item)
                    <option @if(isset($filter) && $item[0] == request($name)) selected @endif value="{{ $item[0] }}">{{ $item[1] }}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
