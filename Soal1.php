<?php
    function biodata()
    {
        $biodata = [
            "name" => "Aryo Putra Purwanto",
            "age" => 24,
            "address" => "Jl. Raya Bogor KM 46",
            "hobbies" => [
                "Game","Olahraga","Travel"
            ],
            "is_married" => false,
            "list_school" => [
                "year_in" => 2012,
                "year_out" => 2016,
                "major" => "Biologi"
            ],
            "skills" => [
                "skill_name" => "PHP","Java"
                "level" => "Intermediet","Beginner"
            ],
            "interest_in_coding" => true,
        ];
        $json_data = json_encode($biodata);
        return $json_data;
    }
echo biodata();
