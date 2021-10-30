<?php
function fromNow($timestamp) {
    date_default_timezone_set('UTC');
    $datetime1 = new DateTime("now");
    $datetime2 = date_create($timestamp);
    $check = $datetime1 > $datetime2; 
    $diff = date_diff($datetime1, $datetime2);
    $timemsg = '';

    if ($diff->y > 0) {
        $timemsg = $diff->y . ' año' . ($diff->y > 1 ? "s" : '');
    } else if ($diff->m > 0) {
        $timemsg = $diff->m . ' mes' . ($diff->m > 1 ? "es" : '');
    } else if ($diff->d > 0) {
        $timemsg = $diff->d . ' dia' . ($diff->d > 1 ? "s" : '');
    } else if ($diff->h > 0) {
        $timemsg = $diff->h . ' hora' . ($diff->h > 1 ? "s" : '');
    } else if ($diff->i > 0) {
        $timemsg = $diff->i . ' minuto' . ($diff->i > 1 ? "s" : '');
    } else if ($diff->s > 0) {
        $timemsg = $diff->s . ' segundo' . ($diff->s > 1 ? "s" : '');
    } else if ($diff->s == 0) {
        $timemsg = ' un momento';
    }
    if ($check) {
        $timemsg = 'hace ' . $timemsg;
    } else {
        $timemsg = 'en ' . $timemsg;
    }
    return $timemsg;
}
