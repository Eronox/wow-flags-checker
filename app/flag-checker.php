<?php

    /** Helper functions. **/
    include_once('helpers.php');

    /** Flags used in TrinityCore 3.3.5a. **/
    $flags = require_once('trinitycore-flags.php');

    /** Application logic. **/
    session_start();
    $_SESSION['prev_flag_type'] = $_GET['flag_type'];
    $_SESSION['prev_flag_number'] = $_GET['flag_number'];

    // Validation for input values.
    $flag_number = (isset($_GET['flag_number'])) ? $_GET['flag_number'] : FALSE;
    $flag_type = (isset($_GET['flag_type'])) ? $_GET['flag_type'] : FALSE;

    // Get all the flag names from the array, indexed by flag type.
    $names = ($flag_type && isset($flags[$flag_type])) ? $flags[$flag_type] : FALSE;

    // Return array with the used flags for the bitmask value given.
    if ($flag_number && $flag_type) {
        $flags_list = getResults($flag_number, $names);
    }
