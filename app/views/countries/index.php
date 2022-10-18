<h3>Dit is de countries view page</h3>

<?= $data['title'] ?> <br>

<table>
    <thead>
        <th>Id</th>
        <th>Naam</th>
        <th>Hoofstad</th>
        <th>Continent</th>
        <th>Aantal Inwoners</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>
<p><a href="<?= URLROOT ?>/landingpages/index">Back to landingpage</a></p>