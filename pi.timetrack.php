<?php
class Plugin_timetrack extends Plugin {

  var $meta = array(
    'name'       => 'Timetrack Time Tracker',
    'version'    => '0.1',
    'author'     => 'Max Stauss',
    'author_url' => 'http://maxx.st'
  );

  public function index(){
    return '<span id="trackedTime">'.(microtime(true) - $_SESSION['timetrack']['start_time']).'</span>';
  }
}