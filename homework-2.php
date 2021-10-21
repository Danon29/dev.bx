<?php

require  ('movies (1).php');

echo "Hello, please enter your age: ";


$input = (readline());
$index = 1;
if (($input >= 0) && (is_numeric($input)))
{
	$input = (int)$input;
	foreach ($movies as $element)
	{
		if (($element['age_restriction'] <= $input) )
		{
			echo "{$index}. {$element['title']} ({$element['release_year']}), {$element['age_restriction']}+, Rating - {$element['rating']} \n";
			$index++;
		}

	}
}
else
{
	echo "Wrong input";
}