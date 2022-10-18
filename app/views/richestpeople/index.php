<h3>Dit is de richestpeople view page</h3>

<?= $data['title'] ?> <br>

<table>
    <thead>
        <th>Id</th>
        <th>Naam</th>
        <th>Vermogen</th>
        <th>Leeftijd</th>
        <th>Bedrijf</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>
<p><a href="<?= URLROOT ?>/landingpages/index">Back to landingpage</a></p>