<!DOCTYPE html>   
<body>
    hasilnya 

    <?php
    // Example usage
$data = [[1],[3],[2]];
$weights = rank_order_centroid($data);


    // // Calculate ranks for each feature
    $ranks = array_map(function($column) {
    $sorted = $column;
    sort($sorted);
    $ranks = array_flip(array_keys($sorted));
        return array_map(function($value) use ($ranks) {
            return $ranks;
        }, $column);
    }, $data);

    // Calculate weights using the ROC method
    $weights = array_map(function($row) use ($data) {
        $sum_ranks = array_sum($row);
        $num_instances = count($data);
        return ($sum_ranks + 1) / ($num_instances + 1);
    }, $data);

    return $weights;

print_r($weights);
?>

    </body>
</html>
