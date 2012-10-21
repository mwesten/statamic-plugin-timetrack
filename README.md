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

1. create a folder named `timetrack` in `_add-ons`
2. copy the `pi.timetrack.php` in this folder
3. you are ready to go

## Using the plugin
Everywhere you call `{{ timetrack }}` it will give you:

    <span id="trackedTime">0.1234s</span>
    
### Available options
####timeIn= [ s || ms ]

`{{ timetrack timeIn="ms" }}`gives you the time in Milliseconds

		<span id="trackedTime">123.4</span>

#### roundTo = [number]  default = 4
gives the digits that matter so:


- `{{ timetrack timeIn="ms" roundTo="5" }}`gives you the rounded time in Milliseconds

		<span id="trackedTime">123.45</span>
		

- `{{ timetrack timeIn="s" roundTo="6" }}`gives you the rounded time in Seconds

		<span id="trackedTime">0.123456</span>
		
#### showType="yes"
appends the selected timeType to the number

- `{{ timetrack timeIn="s" roundTo="6" showType="yes" }}`gives you 

		<span id="trackedTime">0.123456s</span>

- `{{ timetrack timeIn="ms" roundTo="2" showType="yes" }}`gives you 

		<span id="trackedTime">120ms</span>


	
## ToDo's
- get rid of this index.php hack
