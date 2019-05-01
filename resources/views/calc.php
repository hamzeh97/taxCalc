<?php
calc();
function calc()
{
    $info = $_GET['info'];
    $resident = $info[0];
    $married = $info[1];
    $wifres = $info[2];
    $hussal = (float)$info[3];
    $wifsal = (float)$info[4];
    $totalsal = 0.0;
    $totaltax = 0.0;

    $tax1 = 0.10;
    $tax2 = 0.20;

    if((boolean)$resident) {
        if ((int)$hussal > 9000)
            $hussal = (int)$hussal - 9000;
        else
            $hussal = 0;
    }

    if($married) {
        if ($wifres)
            if ((int)$wifsal > 9000)
                $wifsal = (int)$wifsal - 9000;
            else
                $wifsal = 0;
        $totalsal = (int)$hussal + (int)$wifsal;
    }

    if($totalsal > 10000){
        $totaltax = 10000 * 0.10;
        $totalsal -=10000;
        $totaltax += $totalsal * 0.20;
    }
    echo $totaltax;
}
?>