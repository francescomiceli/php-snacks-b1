<?php
    $classe =[
        [
            'name' => 'Marco',
            'lastname' => 'Ingallinera',
            'voti' => [8, 8.5, 7, 10, 9]
        ],
        [
            'name' => 'Massimo',
            'lastname' => 'Meridio',
            'voti' => [6, 6.5, 8, 7, 7.5]
        ],
        [
            'name' => 'Valeria',
            'lastname' => 'Giarrusso',
            'voti' => [8, 9, 9.5, 7, 8.5]
        ],
        [
            'name' => 'Simona',
            'lastname' => 'Strano',
            'voti' => [7, 7.5, 6, 6.5, 7]
        ],
        [
            'name' => 'Giacomo',
            'lastname' => 'Vaccari',
            'voti' => [7, 7, 8, 8.5, 6.5]
        ]
    ];
?>



    <ul>
        <?php
        for($i = 0; $i < count($classe); $i++){

            $alunno = $classe[$i];
            $media = array_sum($alunno['voti'])/count($alunno['voti']);
        ?>

        <li>
            <?php
            echo "{$alunno['name']} {$alunno['lastname']} - media: $media";
            ?>
        </li>

        <?php
        }
        ?>
    </ul>
    
