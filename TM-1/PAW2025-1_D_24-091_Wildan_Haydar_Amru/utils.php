<?php
function isSquare(int $number): int
{
	if (!$number)
	{
		return false;
	}

	$squareCounter = 0;

	while ($squareCounter <= $number)
	{
		$power = $squareCounter ** 2;

		if ($power === $number) {
			return true;
		} elseif ($power > $number) {
			return false;
		}

		$squareCounter++;
	}
}

function getFactorTotal(int $number): int
{
	$newNumber = $number;
	$factors = 0;

	for ($i = 1; $i <= $newNumber; $i++)
	{
		if ($newNumber % $i == 0)
		{
			$factors++;
		}
	}

	return $factors;
}

function isPrime(int $number): bool
{
	$factors = getFactorTotal($number);
	return $factors === 2 ? true : false;
}

function isComposite(int $number): bool
{
	if ($number <= 1)
	{
		return false;
	}

	return !isPrime($number);
}
?>