<?php

namespace App\Services;

class ChangeGenerator
{
    /**
     * @var array
     */
    protected $coins = [
        '$100 Bill' => 100,
        '$50 Bill' => 50,
        '$20 Bill' => 20,
        '$10 Bill' => 10,
        '$5 Bill' => 5,
        '$1 Bill' => 1,
        '50 Cents' => .5,
        '25 Cents' => .25,
        '10 Cents' => .1,
        '5 Cents' => .05,
        '1 Cent' => .01,
    ];

    /**
     * @param float $owed
     * @param float $paid
     * @return array
     */
    public function generateChanger(float $owed, float $paid): array
    {
        $changeDenominations = [];
        $changeCents = bcsub($owed, $paid, 2);

        if ($changeCents <= 0) {
            return [];
        }

        foreach ($this->coins as $denomination => $cost) {
            if ($cost > $changeCents) {
                continue;
            }

            $changeDenominations[$denomination] = intval(floor($changeCents / $cost));
            $changeCents = bcsub($changeCents, $changeDenominations[$denomination] * $cost, 2);
        }

        return $changeDenominations;
    }
}
