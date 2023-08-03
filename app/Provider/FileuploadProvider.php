<?php
namespace App\Provider;

trait FileuploadProvider{
    public static function file(array $data)
    {
        // $data =[
        //     'filename' => 'image',
        //     'path' => '/public/uploads/images',
        // ];
        $files = $_FILES[$data['filename']];
        $filename = $files['name'];
        if($files['error']===UPLOAD_ERR_OK){
            $storagepath= '/'.$data['path'];
            $newname = time();
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newfilename = $newname.'_'.$filename.'.'.$extension;
            $uploadpath = $storagepath.$newfilename;
            $movefile = move_uploaded_file($files['temp_name'],$uploadpath);
            if($movefile){
                return [$data['filename']=>$uploadpath];
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    public static function getfile($path){
        $filepath = 'public/'.$path;
       return url($filepath);
    }
}