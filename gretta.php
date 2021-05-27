#1 Print the number of integers in an array that are above the given input and the number that are below, e.g. for the array [1, 5, 2, 1, 10] with input 6, print “above: 1, below: 4”.

$above=0; $below=0;
$num_array = [1, 5, 2, 1, 10];
$input = 6;

foreach($num_array as $number) {
	if($input > $number) {
		$above++;
	} elseif($input < $number) {
		$below++;
	}
}

print $above.' are above, '.$below.' are below';



#2 Rotate the characters in a string by a given input and have the overflow appear at the beginning, e.g. “MyString” rotated by 2 is “ngMyStri”.

$input = 6;
$secondHalf = '';
$string = "DrewsString";

$secondHalf = substring($string, strlen($string)-$input, strlen($string)-1);
$string = $secondHalf.substring($string, 0, strlen($string)-($input+1));



#3 If you could change 1 thing about your favorite framework/language/platform (pick one), what would it be?
I'd make it handle arrays more efficiently. 

