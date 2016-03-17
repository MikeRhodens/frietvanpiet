<?php
$purchase = (empty($_GET['purchase'])) ? '' : $_GET['purchase'];
if ($purchase) {
    NewOrder($_POST['name'], $_POST['number'], $_POST['purchase']);
    header("Location:?action=contact");
}
?>

<div class="contact">
    <div class="contactRedSquare">
        <div class="contectRedSquareRight">
            <h2>U kunt nu ook een bestelling plaatsen bij Friet van Piet</h2>
            <h4>Het enige wat wij van u nodig hebben is de bestelling en uw nummer.Na het plaatsen van de betaling word
                u z.s.m opgebeld om de bestelling te verifieren.</h4>
        </div>
    </div>

    <div class="contactWhitesquare">
        <div class="contactWhitesquareLeft">
            <img src="img/patat.png" class="img-responsive">
        </div>
        <div class="contactWhitesquareRight">
            <h2 class="contactWhitesquaretext">contact</h2>
            <form role="form" action="?action=contact&purchase=true" method="post">
                <div class="form-group">
                    <input name="name" type="text" class="form-control  contactName" id="name" placeholder="naam">
                </div>
                <div class="form-group">
                    <input name="number" type="text" class="form-control contactNumber" id="number"
                           placeholder="mobiel nummer">
                </div>
                <div class="form-group">
                    <textarea class="form-control contactOrder" rows="5" id="purchase" name="purchase"
                              placeholder="plaats hier u bestelling"></textarea>
                </div>
                <button type="submit" class="btn btn-default vierknop">bestelling plaatsen</button>
            </form>
        </div>
    </div>
</div>