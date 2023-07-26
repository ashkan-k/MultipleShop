<?php

namespace App\Http\Traits;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

trait Uploader
{
    use Helpers;

    private function Upload($file, $base_folder, $folder)
    {
        $year = Carbon::now()->year;
        $mouth = Carbon::now()->month;
        $day = Carbon::now()->day;

        $base_folder = str_replace('.', '-', $base_folder);
        $folder = str_replace('.', '-', $folder);
        $original_name = str_replace('+', '-', $file->getClientOriginalName());

        $imagePath = "/uploads/{$base_folder}/{$year}-{$mouth}-{$day}/{$folder}/";
        $filename = Str::random(20) . '-' . time() . '.' . $original_name;

        $file->move(public_path($imagePath), $filename);
        return $imagePath . $filename;
    }

    public function UploadFile($request, $name, $base_folder, $folder, $default = null)
    {
        $file = $request->hasFile($name) ? $this->Upload($request->file($name), $base_folder, $folder) : $default;
        return $file;
    }
}
