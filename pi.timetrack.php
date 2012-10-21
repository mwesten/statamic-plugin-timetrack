<?php
class Plugin_timetrack extends Plugin {

  var $meta = array(
    'name'       => 'Timetrack Time Tracker',
    'version'    => '0.2',
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
    $showType     = $this->fetch_param('showType', false, false, true); //bool
    $class        = $this->fetch_param('class', '');
    
    $trackedTime = round(($end_time - $start_time), $round);

    switch ($timeType) {
      case 'ms':
        $trackedTime *= 1000;
        break;
      
      default:
        $showType = 's';
        break;
    }

    $type = ($showType) ? $timeType : '';

    return '<span id="trackedTime" class="'.$class.'">'.$trackedTime.$type.'</span>';
  }
}