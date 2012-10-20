#Statamic Timetracker Plugin
I haven't found a better name yet. So feel free an suggest something

## What It Does
This little plugin will give you the time in Seconds it took the PHP-Code from the begining to the point you call the Plugin

## Getting Started
I didn't find a better solution yet so I'm sorry but you have to hack the index.php
  
So in your `statmic-root/index.php` add this
    $_SESSION['timetrack']['start_time'] = microtime(true);
at the very top

Then you have to copy the plugin into your plugin folder

## Using the plugin
Everywhere you call `{{ timetrack }}` it will give you:
    <span id="trackedTime">0.123456789</span>


## ToDo's
- get rid of this index.php hack
- give opporunity to refactor the number
