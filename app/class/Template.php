<?php
namespace SoundCloud;

class Template {



    public function embed($url, $options = Array()){

        $host = parse_url($url, PHP_URL_HOST);

        if(!$host || stripos($host,'soundcloud.com') === false){
            throw new \Exception('SoundCloud Plugin `embed` function must be passed a valid soundcloud URL');
        }//if

        $value = Array(
            'value'     => $url,
            'options'   => $options
        ); 

        return new \SoundCloud\field\SoundCloud(Array('field_value' => json_encode($value)));

    }//embed



}//Template
