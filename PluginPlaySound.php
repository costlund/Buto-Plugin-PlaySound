<?php
class PluginPlaySound{
  /**
   * Play sound by embed audio element.
   * Audio element are in autoplay mode and hidden.
   * @param string $file Path to audio file.
   */
  public function play($file){
    $html = '<audio controls autoplay hidden><source src="'.$file.'" type="audio/mpeg">Your browser does not support the audio element.</audio>';
    echo $html;
  }
}