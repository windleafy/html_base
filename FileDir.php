<?php
/**
 * tmp.php
 * Des:文件与目录工具
 * Created by PhpStorm.
 * Author: Wind
 * Created on: 2019/10/9 15:28
 */

class FileDir
{


    function check_exist($filename)             //检查目录或文件是否存在
    {
        if(file_exists($filename))
        {
            return true;
        }
        else return false;
    }
    function create_dir($dirname,$mode=0777)    //一次只能创建一级目录
    {
        if(is_null($dirname) || $dirname=="") return false;
        if(!is_dir($dirname))
        {
            return mkdir($dirname,$mode);
        }
        return false;
    }
    function createDir($aimUrl)                 //可同时创建多级目录
    {
        $aimUrl = str_replace('\\', '/', $aimUrl);
        $aimDir = '';
        $arr = explode('/', $aimUrl);
        foreach ($arr as $str)
        {
            $aimDir .= $str . '/';
            if (!file_exists($aimDir))
            {
                mkdir($aimDir);
            }
        }
    }
    function delete_dir($dirname)               //删除目录
    {
        if($this->check_exist($dirname) and is_dir($dirname))
        {
            if(!$dir_handle=opendir($dirname)) return false;
            while(($file=readdir($dir_handle))!==false)
            {
                if($file=="." or $file=="..") continue;
                $file=$dirname.DIRECTORY_SEPARATOR.$file;
                //表示$file是$dir的子目录
                if(is_dir($file))
                {
                    $this->delete_dir($file);
                }
                else
                {
                    unlink($file);
                }
            }
            closedir($dir_handle);
            return rmdir($dirname);
        }
        else return false;
    }
    function copy_dir($dir_from,$dir_to)        //复制目录
    {
        if(!is_dir($dir_from)) return false;
        if(!is_dir($dir_to))  mkdir($dir_to);
        $dir_handle=opendir($dir_from);
        if($dir_handle)
        {
            while(false!==($file=readdir($dir_handle)))
            {
                if($file=="." or $file=="..") continue;
                $file_from=$dir_from.DIRECTORY_SEPARATOR.$file;
                //表示$file是$dir的子目录
                $file_to=$dir_to.DIRECTORY_SEPARATOR.$file;
                if(is_dir($file_from))
                {
                    $this->copy_dir($file_from,$file_to);
                }
                else
                { if(!file_exists($file_to))
                    copy($file_from,$file_to);
                }
            }
        }
        closedir($dir_handle);
        return false;
    }
    function getDirSize($dirname)               //获取目录大小
    {
        if(!file_exists($dirname) or !is_dir($dirname)) return false;
        if(!$handle=opendir($dirname)) return false;
        $size=0;
        while(false!==($file=readdir($handle)))
        {
            if($file=="." or $file=="..") continue;
            $file=$dirname."/".$file;
            if(is_dir($file))
            {
                $size+=$this->getDirSize($file);
            }
            else
            {
                $size+=filesize($file);
            }
        }
        closedir($handle);
        return $size;
    }
    function getRealSize($size)                 //单位自动转换函数
    {
        $kb=1024;
        $mb=$kb*1024;
        $gb=$mb*1024;
        $tb=$gb*1024;
        if($size<$kb) return $size."B";
        if($size>=$kb and $size<$mb) return round($size/$kb,2)."KB";
        if($size>=$mb and $size<$gb) return round($size/$mb,2)."MB";
        if($size>=$gb and $size<$tb) return round($size/$gb,2)."GB";
        if($size>=$tb) return round($size/$tb,2)."TB";
        return false;
    }
    function copyFile($src_file,$dst_file)      //复制文件
    {
        if(is_file($src_file))
        {
            if(!file_exists($dst_file))
                return copy($src_file,$dst_file);
        }
        return false;
    }
    function unlinkFile($filename)              //删除文件
    {
        if($this->check_exist($filename) and is_file($filename))
        {
            return unlink($filename);
        }
        else return false;
    }
    function getSuffix($filename)               //获取文件名后缀
    {
        if(file_exists($filename) and is_file($filename))
        {
            return end(explode(".",$filename));
        }
        return false;
    }
    function input_content($filename,$str)      //将字符串写入文件
    {
        if(function_exists(file_put_contents))
        {
            file_put_contents($filename,$str);
        }
        else
        {
            $fp=fopen($filename,"wb");
            fwrite($fp,$str);
            fclose($fp);
        }
    }
    function output_content($filename)          //将整个文件内容读出到一个字符串中
    {
        if(function_exists(file_get_contents))
        {
            return file_get_contents($filename);
        }
        else
        {
            $fp=fopen($filename,"rb");
            $str=fread($fp,filesize($filename));
            fclose($fp);
            return $str;
        }
    }
    function output_to_array($filename)         //将文件内容读出到一个数组中
    {
        $file=file($filename);
        $arr=array();
        foreach($file as $value)
        {
            $arr[]=trim($value);
        }
        return $arr;
    }
}
//$dir=new file_dir;
//$size=$dir->getDirSize("F:/wamp/www/class/images");
//echo $dir->getReal_size($size);

$dir=new FileDir();
$result = $dir->check_exist('./2.txt');
if ($result){
    echo('检查结果：文件存在<br>');
}
else{
    echo('检查结果：文件不存在<br>');
}

$srcFile = './1.txt';
$dstFile = './2.txt';
$result = $dir->copyFile($srcFile,$dstFile);

if ($result){
    echo('文件复制成功<br>');
}
else{
    echo('文件复制失败<br>');
}

