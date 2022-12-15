<?php

function dd()
{
    echo "<pre>";
    $args = func_get_args();
    var_dump($args);
    die;
}

function getRelativeTime($datetime, $depth = 1)
{
    $units = array(
        "year" => 31104000,
        "month" => 2592000,
        "week" => 604800,
        "day" => 86400,
        "hour" => 3600,
        "minute" => 60,
        "second" => 1
    );

    $plural = "s";
    $conjugator = " and ";
    $separator = ", ";
    $suffix1 = " ago";
    $suffix2 = " left";
    $now = "Vừa xong";
    $empty = "";

    # DO NOT EDIT BELOW

    $timediff = time() - strtotime(date($datetime));
    if ($timediff == 0) return $now;
    if ($depth < 1) return $empty;

    $max_depth = count($units);
    $remainder = abs($timediff);
    $output = "";
    $count_depth = 0;
    $fix_depth = true;

    foreach ($units as $unit => $value) {
        if ($remainder > $value && $depth-- > 0) {
            if ($fix_depth) {
                $max_depth -= ++$count_depth;
                if ($depth >= $max_depth) $depth = $max_depth;
                $fix_depth = false;
            }
            $u = (int)($remainder / $value);
            $remainder %= $value;
            $pluralise = $u > 1 ? $plural : $empty;
            $separate = $remainder == 0 || $depth == 0 ? $empty : ($depth == 1 ? $conjugator : $separator);
            $output .= "{$u} {$unit}{$pluralise}{$separate}";
        }
        $count_depth++;
    }
    return $output . ($timediff < 0 ? $suffix2 : $suffix1);
}

const BASE_URL = "http://localhost:8080/duan1/";


const SITE_URL = BASE_URL . "site/index.php";
const ADMIN_BASE = BASE_URL . 'admin/index.php';
const AUTH_BASE = BASE_URL . 'auth/index.php';

const UPLOAD_BASE = BASE_URL . "upload/";
