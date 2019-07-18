<?php

/**
 * Identify which bitmask values that has been used.
 *
 * Identify from given bitmask total value which values has been used. Each
 * value has its own naming, we store this in the results array as well.
 *
 * @param Int $flag_number The array key with flags to check.
 * @param String $names The flag names from the array, indexed by flag type.
 * @return Array
 **/
function getResults($flag_number, $names) {
    $flags = array();

    for ($i=1; $i<=32; $i++)
    {
        $flag = (1 << ($i - 1));
        if ($flag > $flag_number) 
            break;

        if ($flag_number&$flag)
            $flags[] = $flag . ' - ' . ($names && isset($names[$flag]) ? $names[$flag] : 'FALSE');
    }

    $flags_list = explode(',', implode($names ? ', ' : ' ', $flags));

    // Don't display values without meaning.
    foreach ($flags_list as $key => $value) {
        if (strpos($value, 'FALSE')) {
            unset($flags_list[$key]);
        }
    }

    return $flags_list;
}

/**
 * Save previous submitted values in next page refresh.
 *
 * Check whether the option has been set. If it has, we render it as selected.
 *
 * @param String $value The specific option value.
 * @return Echo
 **/
function wasOptionSubmitted($value) {
    if (isset($_SESSION['prev_flag_type']) && !empty($_SESSION['prev_flag_type'])) {
        if ($_SESSION['prev_flag_type'] === $value) {
            echo 'selected';
        }
    }
}
