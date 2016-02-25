<?php

class short_way
{
    public $start;
    public $end;
    public $count;

    public function __construct($start, $end, $count)
    {
        $this->start = $start;
        $this->end = $end;
        $this->count = $count;

    }

    public function permute($items, $perms = array(), $result = array())
    {
        if (empty($items) && $perms[0][0] == $this->start && $perms[$this->count - 1][0] == $this->end) {
            $result[] = $perms;
        } else {
            for ($i = 0; $i < count($items); ++$i) {
                $newitems = $items;
                $newperms = $perms;
                $foo = array_splice($newitems, $i, 1);
                array_unshift($newperms, $foo);
                $result = $this->permute($newitems, $newperms, $result);
            }

        }
        return $result;
    }

    public function distance($start, $end)
    {
        return sqrt((pow($end[0] - $start[0], 2) + pow($end[1] - $start[1], 2)));
    }

    public function getNumberOfResults($arr)
    {
        $res = 1;
        for ($i = 1; $i < count($arr) - 1; $i++) {
            $res = $i * $res;
        }
        return $res;
    }
}


function chemin_court($liste_points, $point_depart = false, $point_arrivee = false)
{

    if (is_array($liste_points) && $liste_points >= 5) {
        foreach ($liste_points as $arr) {
            if (!is_array($arr)) return [];
            foreach ($arr as $p) {
                if (!is_int($p)) return [];
            }
        }
        if (!isset($point_depart) || !isset($point_arrivee) || !is_int($point_arrivee) || !is_int($point_depart)) return [];

        elseif (!array_key_exists($point_depart, $liste_points) || !array_key_exists($point_arrivee, $liste_points)) return [];
        elseif ($point_arrivee == $point_depart ) return [];

        $start = $liste_points[$point_depart];
        $end = $liste_points[$point_arrivee];
        $count = count($liste_points);
        $short_way = new short_way($start, $end, $count);
        $results = $short_way->permute($liste_points);
        $dist = 0;
        $test = [];
        foreach ($results as $result) {
            for ($i = 0; $i < count($result); $i++) {
                if (isset($result[$i + 1])) {
                    $dist += $short_way->distance($result[$i][0], $result[$i + 1][0]);
                }
            }
            var_dump($dist);
            $test[$dist] = $result;
            $dist = 0;
        }
        ksort($test);
        $test = array_values($test);
        return $test[0];
    }
}