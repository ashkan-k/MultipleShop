<div class="bulk-actions">
    <div class="row">
        <div class="col-md-5 pt-2">
            <input class="form-check-input" type="checkbox" data-kt-check="true"
                   id="checkAll2" ng-model="select_all" ng-checked="items.length == selected_items.length" ng-change="AddItemsToBulkAction(<?php echo json_encode($items->pluck('id')->toArray() ); ?>, select_all)"/>
            <label for="checkAll2"
                   class="align-items-center fs-6 text-gray-600 mr-3">
                انتخاب همه
            </label>
        </div>
        <div class="col-md-3">
            <p class="mt-2 text-gray-600">عملیات دست جمعی موارد انتخاب شده</p>
        </div>
        <div class="col-md-2" style="float: left !important;">
            <select ng-model="bulk_action" name="bulk-action" id="bulkAction" class="form-control">
                <option value="" disabled selected>انتخاب عملیات</option>
                @foreach($actions as $action)
                    <option value="{{ $action[0] }}">{{ $action[1] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button type="button" ng-click="SubmitBulkActionConfirm()" class="btn btn-info" >برو انجام بده</button>
        </div>
    </div>
</div>
