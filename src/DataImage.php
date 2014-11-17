<?php

namespace RDIFB0\DataImage;

class DataImage
{

    public static function embed($filePath)
    {
        static $mimes = array(
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
        );

        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        if (isset($mimes[$ext]))
        {
            $imageMime = $mimes[$ext];
            $imageData = base64_encode(file_get_contents($filePath));

            return 'data:'.$imageMime.';base64,'.$imageData;
        }

        return null;
    }
} 