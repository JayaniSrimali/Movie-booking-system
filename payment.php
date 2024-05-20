
<?php
include('config.php');

$sql = "SELECT * FROM payment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "ID: " . $row["ID"] . "<br>";
        echo "Name on Card: " . $row["nameoncard"] . "<br>";
        echo "Card Number: " . $row["cardnumber"] . "<br>";
        echo "Expir month: " . $row["exp_month"] . "<br>";
        echo "Expir Year: " . $row["exp_year"] . "<br>";
        echo "CVV: " . $row["cvv"] . "<br>";
        echo "<form action='delete.php' method='POST'>";
        echo "<input type='hidden' name='payment_id' value='" . $row["ID"] . "'>";
        echo '<a href="delete.php?ID=' . $row["ID"] . '"><button>Delete</a></button>';
        echo '<a href="update.php?ID=' . $row["ID"] . '"><button>Update</a></button>';

        echo "</form>";
        echo "<hr>";

    }
} else {
    echo "No payment records found.";
}



$conn->close();
?>



