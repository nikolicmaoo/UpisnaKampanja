<?php

include "ponavljajuce/header.php";

?>

<div data-aos="fade-up">
<div class="kontakt1">
    <h1>KONTAKT</h1>
</div>
</div>
<div data-aos="fade-down">
<div class="kontakt2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
<h2>
                Za sva pitanja se možete obratit studentskoj službi na broj telefona:
            </h2><br><br>
             <h2>063-446-699 <br><br> 011/260-6380 <br><br> 011/267-41-64</h2>
            <br>
            <h3>Mejl adresa za kontakt: <br><br> alfabkuniverzitet@edu.rs</h3>
            </div>
            <div class="col-lg-6">
            <?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>

<form action="/indexmail.php" method="post">
        <h1>Ili nam pošaljite poruku!</h1>
    <br><br>

    <div style="font-weight:bolder;">
        <label for="name">Ime:</label>
        <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Puno ime" style="padding:5px;">
        <small><?= $errors['name'] ?? '' ?></small>
    </div>
<br>
    <div style="font-weight: bolder;">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email addres-a" style="padding:5px;">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>
<br>
    <div style="font-weight:bolder;" >
        <label for="message">Poruka:</label>
        <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
        <small><?= $errors['message'] ?? '' ?></small>
    </div><br>

    <button type="submit" class="posaljidugme">Pošalji poruku</button>
</form>
            </div>
    </div>
</div>
</div>
</div>
<div data-aos="fade-down">
<div class="mapa">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.7302026385532!2d20.41111021573722!3d44.82706078374976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6576ba4f62f7%3A0x840f35a5a485a44e!2sAlfa%20BK%20University!5e0!3m2!1sen!2sde!4v1672162525359!5m2!1sen!2sde" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <br><br>
                    <h3>Adresa:</h3>
                    <h3>
                    Palmira Toljatija 3, Beograd 11070, Serbia
                    </h3>
                    <br>
                    <h3>Fax:</h3>
                    <h3>+381123456789</h3>
                </div>
            </div>
        </div>
</div>
</div>

<?php

include "ponavljajuce/footer.php";

?>