<?php

class SoundCloudPlugin extends \Enact\Plugin {



    public function name(){
        return 'SoundCloud';
    }//name



    public function creator(){
        return 'WebYoke';
    }//creator


    public function website(){
        return 'http://webyoke.com';
    }//website


    public function version(){
        return 1.0;
    }//version


    public function githubLink(){
        return 'https://github.com/webyoke/enact-cms-soundcloud-plugin';
    }//githubLink


    public function onBoot(){
        require 'vendor/autoload.php';
    }//onBoot



    public function template(){
        return new SoundCloud\Template;
    }//template


    public function fields(){

        return Array(
            new \SoundCloudPlugin\field\SoundCloudDefinition,
        );

    }//fields



}//SoundCloudPlugin



return new SoundCloudPlugin;
