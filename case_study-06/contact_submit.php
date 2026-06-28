            <h2>Contact Form Submitted</h2>

            <p>Thank you for contacting ITI. Below is the information you entered.</p>

            <br>

            <p><strong>Email:</strong></p>
            <p><?php echo $_POST["email"]; ?></p>

            <br>

            <p><strong>Subject:</strong></p>
            <p><?php echo $_POST["subject"]; ?></p>

            <br>

            <p><strong>Content of Letter:</strong></p>
            <p><?php echo nl2br($_POST["content"]); ?></p>

            <br>

            <a class="button" href="index.php?page=contact">Back to Contact Us</a>