<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //

    public static function folderSize($dir){
        $total_size = 0;
        $count = 0;
        $dir_array = scandir($dir);
        foreach($dir_array as $key=>$filename){
            if($filename!=".." && $filename!="."){
                if(is_dir($dir."/".$filename)){
                    $new_foldersize = self::foldersize($dir."/".$filename);
                    $total_size = $total_size+ $new_foldersize;
                }
                else if(is_file($dir."/".$filename)){
                    $total_size = $total_size + filesize($dir."/".$filename);
                    $count++;
                }
            }
        }
        return $total_size;
    }
}
