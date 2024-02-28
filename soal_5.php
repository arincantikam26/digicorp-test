<?php

function mostCharacter($kata) {
    $maxCount = 0;
    $maxChar = '';
    $currentChar = $kata[0];
    $currentCount = 1;

    $length = strlen($kata);

    for ($i = 1; $i < $length; $i++) {
        if ($kata[$i] === $currentChar) {
            $currentCount++;

            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
                $maxChar = $currentChar;
            }
        } else {
            $currentChar = $kata[$i];
            $currentCount = 1;
        }
    }

    if ($maxCount > 0) {
        return "$maxChar $maxCount x";
    } else {
        $charCount = array_count_values(str_split($kata));
        arsort($charCount);
        $charMax = key($charCount);
        $sumCharMax = $charCount[$charMax];
        return "$charMax $sumCharMax x";
    }
}

// Contoh penggunaan
$input = "wellcome";
$result = mostCharacter($input);
echo $result;

echo "<br>";

$input2 = "strawberry";
$result2 = mostCharacter($input2);
echo $result2;

echo "<br>";

$input3 = "hahala";
$result3 = mostCharacter($input3);
echo $result3;
