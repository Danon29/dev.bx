<?php

require  ('movies (1).php');

echo "Hello, please enter your age: ";

$input = (int)(readline());

if ($input > 0)
{
	foreach ($movies as $element)
	{
		if ($element['age_restriction'] <= $input)
		{
			echo "{$element['title']} ({$element['release_year']}), {$element['age_restriction']}+, Rating - {$element['rating']} \n";
		}
	}
}
