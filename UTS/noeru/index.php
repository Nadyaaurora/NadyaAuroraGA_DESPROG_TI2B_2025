<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'navbar.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Noéru - Fine Artisan Matcha</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-4Yw1LvO6pZ2dFqEozZp9bEoPwUVQZw6gGfSGEIp7vGxozc8guH2CwqufM4sErHqAKgZcfzZymlH1fV4T+M7g1A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=DM+Serif+Display&family=Annapurna+SIL&display=swap" rel="stylesheet">
</head>
<body>


  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-content">
      <h2>Discover Your Matcha Moment</h2>
      <p>Handcrafted drinks made to soothe your soul in every cup.</p>
      <a href="shop.php" class="shop-btn">Shop Now</a>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section class="about">
    <div class="about-image">
      <img src="img/about_noeru.jpg" alt="About Noeru">
    </div>
    <div class="about-text">
      <h3>ABOUT NOÉRU</h3>
      <p>
        Inspired by Japanese tea culture, Noéru was created to bring balance between tradition and modern calm. Every cup of our matcha carries the essence of mindful living, from the artful whisking ritual to the soft, earthy aroma that soothes the soul. We believe that matcha is more than just a drink because it offers a quiet moment to reconnect, recharge, and appreciate simplicity. Through Noéru, we invite you to experience the serenity of Japan’s timeless tea tradition in a way that feels fresh, minimal, and beautifully modern.
      </p>
    </div>
  </section>

  <!-- FEEDBACK SECTION -->
<section class="feedback">
  <div class="feedback-left">
    <form id="feedbackForm" method="POST" action="feedback.php">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" minlength="10" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

  <div class="feedback-right">
    <h2>FEEDBACK</h2>
    <p>Your opinion helps us grow better.</p>
  </div>
</section>

<script>
document.getElementById("feedbackForm").addEventListener("submit", function(e) {
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();

  if (!name || !email || !message) {
    alert("Semua kolom harus diisi!");
    e.preventDefault();
    return;
  }

  if (message.length < 10) {
    alert("Pesan minimal 10 karakter!");
    e.preventDefault();
    return;
  }
});
</script>

  <!-- FOOTER -->
  <footer>
    <div class="footer-left">
      <h2>Noéru</h2>
      <p>Fine Artisan Matcha</p>
    </div>
    <div class="footer-right">
      <h4>CONTACT US</h4>
      <p>@noerumatcha</p>
      <p>(0341) 754187</p>
      <p>Jl. Soekarno Hatta 78A, Malang</p>
    </div>
  </footer>
</body>
</html>
