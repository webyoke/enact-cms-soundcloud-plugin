<?php
namespace SoundCloudPlugin\field;

class SoundCloudDefinition {



    public function name(){
        return 'SoundCloud';
    }//name



    public function fieldAssets(){
        return Array(
            '/js/jsx/SoundCloudField.js',
            '/js/PlayerOptions.js'
        );
    }//fieldAssets



    public function optionsAssets(){
        return Array(
            '/js/jsx/SoundCloudFieldOptions.js',
            '/js/PlayerOptions.js',
        );
    }//optionsAssets



    public function fieldClass(){
        return 'SoundCloud\field\SoundCloud';
    }//fieldClass



}//SoundCloudDefinition
