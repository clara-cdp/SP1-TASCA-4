<?php

spl_autoload_register(function ($class_name) {

    $file = $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});


$film1 = new Film("The Shining", "Stanley Kubrick", 143);
$film2 = new Film("Braindead", "Peter Jackson", 104);
$film3 = new Film("The Hills Have Eyes", "Wes Craven", 90);

$filmProg1 = [$film1, $film2, $film3];
$Cinema1 = new Cinema("Odeon Leicester Square", "London", $filmProg1);

$film4 = new Film("Psycho", "Alfred Hitchcock", 109);
$film5 = new Film("The Exorcist", "William Friedkin", 122);
$film6 = new Film("Halloween", "John Carpenter", 91);
$film7 = new Film("The Texas Chain Saw Massacre", "Tobe Hooper", 83);

$filmProg2 = [$film4, $film5, $film6, $film7];
$Cinema2 = new Cinema("Ateon Mill Road", "Andover", $filmProg2);

$film8 = new Film("Alien", "Ridley Scott", 117);
$film9 = new Film("The Thing", "John Carpenter", 109);
$film10 = new Film("Night of the Living Dead", "George A. Romero", 96);
$film11 = new Film("Dawn of the Dead", "George A. Romero", 127);
$film12 = new Film("A Nightmare on Elm Street", "Wes Craven", 91);

$filmProg3 = [$film8, $film9, $film10, $film11, $film12];
$Cinema3 = new Cinema("James Stree", "Bath", $filmProg3);

$fest = new ShadowFest();
$fest->addCinema($Cinema1);
$fest->addCinema($Cinema2);
$fest->addCinema($Cinema3);

//echo $film1;
//echo $Cinema1;
//echo $fest;

/*------------ data (IA created) --------------------------------

"The Shining", "Stanley Kubrick", 143 "Braindead", "Peter Jackson", 104

"The Hills Have Eyes", "Wes Craven", 90

"Psycho", "Alfred Hitchcock", 109

"The Exorcist", "William Friedkin", 122

"Halloween", "John Carpenter", 91

"The Texas Chain Saw Massacre", "Tobe Hooper", 83

"Alien", "Ridley Scott", 117

"The Thing", "John Carpenter", 109

"Night of the Living Dead", "George A. Romero", 96

"Dawn of the Dead", "George A. Romero", 127

"A Nightmare on Elm Street", "Wes Craven", 91

"Evil Dead II", "Sam Raimi", 84

"The Evil Dead", "Sam Raimi", 85

"Poltergeist", "Tobe Hooper", 114

"Suspiria", "Dario Argento", 98

"Carrie", "Brian De Palma", 98

"Rosemary's Baby", "Roman Polanski", 137

"The Omen", "Richard Donner", 111

"Nosferatu", "F.W. Murnau", 94

"The Fly", "David Cronenberg", 96

"Hellraiser", "Clive Barker", 94

"Friday the 13th", "Sean S. Cunningham", 95

"An American Werewolf in London", "John Landis", 97

"The Birds", "Alfred Hitchcock", 119

"Jaws", "Steven Spielberg", 124

"The Wicker Man", "Robin Hardy", 88

"Re-Animator", "Stuart Gordon", 86

"Child's Play", "Tom Holland", 87

"The Beyond", "Lucio Fulci", 87*/
