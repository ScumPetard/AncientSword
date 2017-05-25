<?php
namespace App\Tools;

use Image;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Session;

class Tools
{
    public static function notifyTo($message = '操作成功', $type = 'info', $path = null)
    {
        Session::flash('notify_message', $message);
        Session::flash('notify_type', $type);

        if (is_null($path)) {
            return back()->withInput();
        }
        return redirect($path);
    }

    public static function fileMove($request, $filename, $path)
    {
        try {
            if (!$request->hasFile($filename)) {
                return false;
            }

            $resource = new \stdClass();


            $resource->fileName = $request->file($filename)->getClientOriginalName();

            $request->file($filename)->move('uploads/' . $path, time() . $resource->fileName);

            $resource->filePath = 'uploads/' . $path . '/' . time() . $resource->fileName;

            return $resource;

        } catch (\Exception $exception) {
            return Tools::notifyTo($exception->getMessage(),'error');
        }
    }

    public static function tailoringImages($filepath, $width, $height = null)
    {
        try {

            if (is_null($height)) {
                $image = Image::make($filepath)->fit($width);
            } else {
                $image = Image::make($filepath)->resize($width, $height);
            }

            $image->save($filepath);

        } catch (\Exception $exception) {
            return Tools::notifyTo($exception->getMessage(),'error');
        }
    }
}