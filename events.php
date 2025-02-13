<?php
$page_title = "Events - Technology Students Association";
include 'header.php';
?>

<main class="container">
    <h1>Upcoming Events</h1>

    <div class="event-list">
        <?php
        include 'db_connect.php';
        $sql = "SELECT * FROM events ORDER BY event_date";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='event-item' id='event-" . $row["id"] . "'>";
                echo "<h2>" . $row["event_title"] . "</h2>";
                echo "<p class='event-date'>" . $row["event_date"] . "</p>";
                echo "<p>" . $row["event_description"] . "</p>";
                if (!empty($row["event_location"])) {
                    echo "<p><strong>Location:</strong> " . $row["event_location"] . "</p>";
                }
                echo "<a href='#' class='btn-secondary register-event' data-event-id='" . $row["id"] . "'>Register for Event</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No upcoming events at the moment.</p>";
        }
        $conn->close();
        ?>
    </div>
</main>

<?php include 'footer.php'; ?>