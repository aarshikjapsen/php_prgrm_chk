$counter = 0;

while (true) {
    $counter++;
    
    if ($counter % 2 == 0) {
        echo "Even number: $counter\n";
    } else {
        echo "Odd number: $counter\n";
    }

    if ($counter >= 100) {
        $counter = 0; // Reset the counter after reaching 100
    }
}

