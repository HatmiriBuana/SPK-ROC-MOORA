<!DOCTYPE html>   
<body>
    hasilnya 

    <?php
$criteria = [
    'Criterion 1' => 5,
    'Criterion 2' => 4,
    'Criterion 3' => 3,
    'Criterion 4' => 2,
    'Criterion 5' => 1,
    // Add more criteria as needed
];

$numCriteria = count($criteria);
$weights = [];

$sumRanks = array_sum($criteria);
foreach ($criteria as $rank) {
    $weight = ($rank + 1) / ($sumRanks + $numCriteria);
    $weights[] = $weight;
}

print_r($weights);
?>

    </body>
</html>
