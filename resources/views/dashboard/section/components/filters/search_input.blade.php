<div class="card-tools">
    <form>
        <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control float-right"
                   placeholder="جستجو">

            <div class="input-group-append">
                <button type="button" onclick="submit()" class="btn btn-default"><i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
