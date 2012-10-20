<?php
class Plugin_timetrack extends Plugin {

  var $meta = array(
    'name'       => 'Timetrack Time Tracker',
    'version'    => '0.1',
    'author'     => 'Max Stauss',
    'author_url' => 'http://maxx.st'
  );

  function __construct() {
       parent::__construct();
       //$_SESSION['timetrack']['plugin_start_time'] = microtime(true);
  }

  public function index(){
    $start_time   = $_SESSION['timetrack']['start_time'];
    $end_time     = microtime(true);
    $timeType     = $this->fetch_param('timeIn', 's');
    $round        = $this->fetch_param('roundTo', 4);

    $trackedTime = round(($end_time - $start_time), $round);

    if($timeType === 'ms') { //millisecons
      $trackedTime *= 1000;
      $type = 'ms';
    } else { //seconds
      $type = 's';
    }

    return '<span id="trackedTime">'.$trackedTime.$type.'</span>';
  }
}