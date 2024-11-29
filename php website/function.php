<?php
function calculateBayes($prior, $sensitivity, $specificity) {
    $prior = $prior / 100;
    $sensitivity = $sensitivity / 100;
    $specificity = $specificity / 100;
    $probEvidence = ($sensitivity * $prior) + ((1 - $specificity) * (1 - $prior));
    $posterior = ($sensitivity * $prior) / $probEvidence;
    return $posterior * 100;
}
?>
