<?php
function tabel($limit, $rule, $color) {
    $limit = max(1, (int)$limit);
    $rule  = (string)$rule;
    $color = (string)$color;

    echo '<table class="tbl">';
    echo '<tr><th class="th-head"></th>';
    for ($c = 1; $c <= $limit; $c++) {
        echo '<th class="th-head">'. $c .'</th>';
    }
    echo '</tr>';

    for ($r = 1; $r <= $limit; $r++) {
        echo '<tr>';
        echo '<th class="th-head">'. $r .'</th>';

        for ($c = 1; $c <= $limit; $c++) {
            $val = pow($r, $c);

            $style = '';

            if (warna_sel($rule, $r, $c, $val, $limit)) {
                $style = "background: {$color};";
            }

            echo '<td style="'.$style.'">'.$val.'</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

function bil_kuadrat($n) {
    if ($n < 0) return false;
    $r = (int) floor(sqrt($n));
    return ($r * $r) === $n;
}

function bil_prima($n) {
    if ($n < 2) return false;
    if ($n % 2 === 0) return $n === 2;
    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i === 0) return false;
    }
    return true;
}

function bil_komposit($n) {
    return $n > 1 && !bil_prima($n);
}

function warna_sel($rule, $row, $col, $val, $limit = 1) {
    switch ($rule) {
        case 'squares':
            return bil_kuadrat($val);

        case 'chessboard':
            return (($row + $col) % 2) === 0;

        case 'composite':
            return bil_komposit($val);

        case 'diagonal':
            return ($limit !== 1 && ($row + $col) == ($limit + 1));

        default:
            return false;
    }
}