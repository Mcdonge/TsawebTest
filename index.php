<?php
$page_title = "Home - Technology Students Association";
include 'header.php';
?>

<main class="container">
    <section class="hero">
        <h1>Welcome to Technology Students Association</h1>
        <p>Moi University School of Engineering</p>
    </section>

    <section class="featured">
        <div class="featured-image">
            <img src="images/tsa-event.jpg" alt="TSA Event" width="600" height="400">
        </div>
        <div class="featured-content">
            <h2>Empowering Future Engineers</h2>
            <p>TSA is dedicated to fostering innovation, leadership, and professional growth among engineering students at Moi University.</p>
            <a href="about.php" class="btn">Learn More</a>
        </div>
    </section>

    <section class="upcoming-events">
        <h2>Upcoming Events</h2>
        <div class="event-grid">
            <?php
            include 'db_connect.php';
            $sql = "SELECT * FROM events ORDER BY event_date LIMIT 3";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='event-card'>";
                    echo "<h3>" . $row["event_title"] . "</h3>";
                    echo "<p class='event-date'>" . $row["event_date"] . "</p>";
                    echo "<p>" . $row["event_description"] . "</p>";
                    echo "<a href='events.php#event-" . $row["id"] . "' class='btn-secondary'>Learn more</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>No upcoming events at the moment.</p>";
            }
            $conn->close();
            ?>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>