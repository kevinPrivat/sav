<h1> <?php echo $title; ?> </h1>
<?php echo validation_errors();
echo form_open('client/update/' .$client['idClient']); ?>

<label for="nomClient">Nom Client</label>
<input type="text" name="nomClient" value="<?php echo $client['nomClient']; ?>"/>

<label for="numClient">Num Client</label>
<input type="number" name="numClient" value="<?php echo $client['numClient']; ?>"/>

<label for="mail">Email Client</label>
<input type="text" name="mail" value="<?php echo $client['mail']; ?>"/>

<label for="adresse">Adresse Client</label>
<input type="text" name="adresse" value="<?php echo $client['adresse']; ?>"/>

<label for="numTel">Téléphone Client</label>
<input type="text" name="numTel" value="<?php echo $client['numTel']; ?>"/>

<input type="submit" value="Yolo !">
</form>