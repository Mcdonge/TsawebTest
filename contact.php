<?php
$page_title = "Contact Us - Technology Students Association";
include 'header.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message_text = $_POST['message'];
    
    // Here you would typically process the form data, such as sending an email or storing in a database
    // For this example, we'll just set a success message
    $message = "Thank you for your message, $name! We'll get back to you soon.";
}
?>

<main class="container">
    <h1>Contact Us</h1>

    <?php if (!empty($message)): ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
    <?php endif; ?>

    <div class="contact-form">
        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>

    <div class="contact-info">
        <h2>Other Ways to Reach Us</h2>
        <p>Email: info@tsamoi.org</p>
        <p>Phone: +254 123 456 789</p>
        <p>Address: School of Engineering, Moi University, Eldoret, Kenya</p>
    </div>
</main>

<?php include 'footer.php'; ?>