<?php
if($_POST["Message"]) {
mail("smith.gethan@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: smith.gethan@gmail.com");
}
?>

<div>
            <form 
            class="reservation_form"
            action="https://formsubmit.co/smith.gethan@gmail.com" method="POST"
            >
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="number">Phone Number:</label><br>
                <input type="text" id="number" name="number"><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="2023-10-01" min="2023-10-01" max="2024-12-31" /><br>
                <label for="guests">Number of Guests in your Party:</label><br>
                <input type="text" id="guests" name="guests"><br>
                <label for="details">Anything we should know?</label><br>
                <textarea id="details" name="details" rows="4" cols="50" placeholder="Celebrating a special occassion? Favorite snack? Go-to cocktail? Let us know!"></textarea><br>
                <button type="submit" value="Submit">Submit</button><br>
                </form>

        </div>