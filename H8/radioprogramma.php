<?php
class radioProgramma {
    private $name = "";
    private $description = "";
    private $songs = array();

    //Makes the variables have things in them
    function setName($name) {$this->name = $name;}
    function setDesription($desc){$this->description = $desc;}
    function setSongs($songs) {
        $this->songs = $songs;
    }

    //Gets name desc. and songs
    function getSongs() {
        return $this->songs;
    }

    function getProgramma() {
        return array(
            "Name" => $this->name,
            "Description" => $this->description
        );
    }
}
?>

<?php
$program = new radioProgramma;
$program->setName("Epic radio station");
$program->setDesription("Epic radio station or something idk");
$program->setSongs(array("song1", "song2", "song3", "song4"));

echo "<ul><li>Name:</li><ul><li>" . $program->getProgramma()['Name'] . "</li></ul>";
echo "<li>Description:</li><ul><li>" . $program->getProgramma()['Description'] . "</li></ul>";

echo "<li>Songs:</li> <ul>";
foreach ($program->getSongs() as $p) {
    echo "<li>" . $p . "</li>";
}
echo "</ul></ul>";
?>