<?php

namespace App\Http\Controllers;

use App\Http\Traits\Helpers;
use App\Http\Traits\Responses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BulkActionController extends Controller
{
    use Responses, Helpers;

    public function admin_bulk(Request $request)
    {
        $model = $request->model;
        $items = $request->items;
        $action = $request->action;

        try {
            if ($action == 'delete'){
                $model::whereIn('id', $items)->delete();
            }

            if ($action == 'delete_image') {
                $publicPath = public_path('uploads');
                $files = File::allFiles($publicPath);

                foreach ($items as $item){
                    if ($item !== null){
                        $file_path = str_replace('\\', '/', str_replace(public_path(), '', $files[$item]));
                        $this->DeleteFile($file_path);
                    }
                }
            }

            else if (in_array($action, [
                'draft', 'publish', 'done',
                'waiting', 'answered', 'close',
                'pending', 'approved', 'reject',
                'sending', 'posted', 'delivered']))
            {
                $model::whereIn('id', $items)->ChangeStatus($action);
            }

            else if (in_array($action, ['online', 'cash'])){
                $model::whereIn('id', $items)->ChangePaymentType($action);
            }

            else if (in_array($action, ['top', 'center', 'bottom'])){
                $model::whereIn('id', $items)->ChangeLocation($action);
            }

            else if ($action == 'is_special'){
                $model::whereIn('id', $items)->update(['is_special' => 1]);
            }

            else if ($action == 'is_not_special'){
                $model::whereIn('id', $items)->update(['is_special' => 0]);
            }

            else if ($action == 'is_active'){
                $model::whereIn('id', $items)->update(['is_active' => 1]);
            }

            else if ($action == 'is_not_active'){
                $model::whereIn('id', $items)->update(['is_active' => 0]);
            }

            else if ($action == 'is_approve'){
                $model::whereIn('id', $items)->update(['is_approved' => 1]);
            }

            else if ($action == 'is_reject'){
                $model::whereIn('id', $items)->update(['is_approved' => 0]);
            }

            else if ($action == 'success'){
                $model::whereIn('id', $items)->update(['status' => 1]);
            }

            else if ($action == 'fail'){
                $model::whereIn('id', $items)->update(['status' => 0]);
            }

            else if ($action == 'approve_status'){
                $model::whereIn('id', $items)->update(['status' => 'approved']);
            }

            else if ($action == 'reject_status'){
                $model::whereIn('id', $items)->update(['status' => 'reject']);
            }

            else if ($action == 'pending_status'){
                $model::whereIn('id', $items)->update(['status' => 'pending']);
            }

            else if ($action == 'done_status'){
                $model::whereIn('id', $items)->update(['status' => 'done']);
            }

            else if ($action == 'end_status'){
                $model::whereIn('id', $items)->update(['status' => 'end']);
            }

            else if ($action == 'block'){
                $model::whereIn('id', $items)->ChangeBlockStatus(true);
            }

            else if ($action == 'unblock'){
                $model::whereIn('id', $items)->ChangeBlockStatus(false);
            }

            else if ($action == 'cash'){
                $model::whereIn('id', $items)->ChangeType(true);
            }

            else if ($action == 'free'){
                $model::whereIn('id', $items)->ChangeType(false);
            }

            else if ($action == 'active'){
                $model::whereIn('id', $items)->ChangeActiveStatus(true);
            }

            else if ($action == 'deactive'){
                $model::whereIn('id', $items)->ChangeActiveStatus(false);
            }

            else if (in_array($action, ['admin', 'staff', 'user'])){
                $model::whereIn('id', $items)->ChangeRole($action);
            }
        }
        catch (\Exception $exception){
            return $this->FailResponse($exception->getMessage());
        }

        return $this->SuccessResponse('عملیات مورد نظر با موفقیت انجام شد.');
    }
}
