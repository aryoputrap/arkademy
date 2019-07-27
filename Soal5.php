<?php
    function sorting($sorting){
        $array_baru = [];
        $realAbjad = [
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'
        ];
        for ($i=0; $i < count($sorting); $i++) {
            for ($j = 0; $j < count($realAbjad); $j++) {
                for ($k = 0; $k < count($sorting[$i]); $k++) {
                    if ($realAbjad[$j] == $sorting[$i][$k]) {
                        $array_baru[$i][] = $sorting[$i][$k];
                    }
                }
            }
        }
        sort($array_baru);


        echo "<pre>";
        print_r($array_baru);
        echo "<pre>";
    }
    $sorting = [
        ['a','c','b','e','d'],
        ['a','c','b','d'],
        ['a','c','b']
    ];
    // $sorting = ['a','c','b'];
    sorting($sorting);
