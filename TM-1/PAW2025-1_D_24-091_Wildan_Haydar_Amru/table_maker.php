<?php
require_once("utils.php");

function tableMaker(int $sizeLimit, string $rule, string $color): void
{
	if (!$sizeLimit)
	{
		return;
	}

	echo "<table>";

	$isUsingColor = false;
	for ($row=0; $row <= $sizeLimit; $row++) { 
		echo "<tr>";

		// save the value of first state of color condition (only for chess pattern)
		if ($rule === "chess-pattern")
		{
			$firstColorState = $isUsingColor;
		}

		for ($col=0; $col <= $sizeLimit; $col++) { 
			$usedNumber = 0;

			// cells value conditions
			$cellsValConditions = [
				"empty_corner" => $row === 0 && $col === 0,
				"column_header" => $row >= 1 && $col <= 0,
				"row_header" => $row === 0 && $col >= 1,
				"cell_data" => $row !== 0 && $col >= 1
			];

			// cells value selector
			if ($cellsValConditions["column_header"]) {
				$usedNumber = $row;
			} elseif ($cellsValConditions["row_header"]) {
				$usedNumber = $col;
			} elseif ($cellsValConditions["cell_data"]) {
				$usedNumber = $row ** $col;
			}

			// rule validator
			switch ($rule)
			{
				case "square-number":
					$isUsingColor = isSquare($usedNumber);
					break;

				case "chess-pattern":
					$isUsingColor = !$isUsingColor;
					break;

				case "composite-number":
					$isUsingColor = isComposite($usedNumber);
					break;

				case "diagonal-topright-bottomleft":
					$isUsingColor = $row >= 0 && $col === ($sizeLimit + 1) - $row ? true : false;
					break;
			}

			// styling class
			$colorClass = $isUsingColor ? "class=\"$color\"" : "";

			// opening & closer tag
			$tags = [
				"open" => $cellsValConditions["column_header"] || $cellsValConditions["row_header"] ? "<th class='table-heading'>" : "<td $colorClass>",
				"close" => $cellsValConditions["column_header"] || $cellsValConditions["row_header"] ? "</th>" : "</td>"
			];


			// empty corner cell
			if ($cellsValConditions["empty_corner"])
			{
				echo "<th class='table-heading'></th>";
				continue;
			}

			// cell output
			printf("%s%d%s", $tags["open"], $usedNumber, $tags["close"]);
		}

		// change the first color state (only for chess pattern)
		if ($rule === "chess-pattern")
		{
			$isUsingColor = !$firstColorState;
		}

		echo "</tr>";
	}

	echo "</table>";
}
?>