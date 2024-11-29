<?php
// diagnose.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prior = $_POST['prior'];
    $sensitivity = $_POST['sensitivity'];
    $specificity = $_POST['specificity'];

    function calculateBayes($prior, $sensitivity, $specificity) {
        // Convert inputs to decimals
        $prior = $prior / 100;
        $sensitivity = $sensitivity / 100;
        $specificity = $specificity / 100;
        
        // Calculate probability of the evidence
        $probEvidence = ($sensitivity * $prior) + ((1 - $specificity) * (1 - $prior));
        // Apply Bayes' theorem
        $posterior = ($sensitivity * $prior) / $probEvidence;
        
        return $posterior * 100; // Return as percentage
    }

    $result = calculateBayes($prior, $sensitivity, $specificity);
    echo "<div class='container'>";
    echo "<h2>Diagnosis Result</h2>";
    echo "<p>Probability of Disease Given Symptoms: " . round($result, 2) . "%</p>";
    echo "<a href='index.php'>Back to Home</a>";
    echo "</div>";
}
?>
