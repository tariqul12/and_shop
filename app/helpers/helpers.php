<?php

function getFileUrl($image,$directory)
{
    $extension = $image->extension();
    $imageName = rand(1000,500000).'.'.$extension;
    $image->move($directory,$imageName);
    return $directory.$imageName;
}

function deletefileFromFolder($image)
{
    if(file_exists($image))
    {
        unlink($image);
    }
}