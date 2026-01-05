<?php

spl_autoload_register(function ($class_name) {

    $file = $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

//-------------------------------------------------------------------------
//         DATA
//-------------------------------------------------------------------------

$film1 = new Film("The Shining", "Stanley Kubrick", 143);
$film2 = new Film("Braindead", "Peter Jackson", 104);
$film3 = new Film("The Hills Have Eyes", "Wes Craven", 90);

$filmProg1 = [$film1, $film2, $film3];
$cinema1 = new Cinema("Odeon Leicester Square", "London", $filmProg1);

$film4 = new Film("Psycho", "Alfred Hitchcock", 109);
$film5 = new Film("The Exorcist", "William Friedkin", 122);
$film6 = new Film("Halloween", "John Carpenter", 91);
$film7 = new Film("The Texas Chain Saw Massacre", "Tobe Hooper", 83);

$filmProg2 = [$film4, $film5, $film6, $film7];
$cinema2 = new Cinema("Ateon Mill Road", "Andover", $filmProg2);

$film8 = new Film("Alien", "Ridley Scott", 117);
$film9 = new Film("The Thing", "John Carpenter", 109);
$film10 = new Film("Night of the Living Dead", "George A. Romero", 96);
$film11 = new Film("Dawn of the Dead", "George A. Romero", 127);
$film12 = new Film("A Nightmare on Elm Street", "Wes Craven", 91);

$filmProg3 = [$film8, $film9, $film10, $film11, $film12];
$cinema3 = new Cinema("James Street", "Bath", $filmProg3);

$fest = new ShadowFest();
$fest->addCinema($cinema1);
$fest->addCinema($cinema2);
$fest->addCinema($cinema3);


//echo $film1;
//echo $Cinema1;
//echo $fest;

//-------------------------------------------------------------------------
//         FORM
//-------------------------------------------------------------------------


$showScheduleByVenue = false;
$showFilmByDirector = false;

$selectedCinema = $_POST['cinema'] ?? '';

if (!empty($selectedCinema)) {
    $showScheduleByVenue = true;

    $showResult = match ($selectedCinema) {

        'London' =>  $cinema1,
        'Andover' => $cinema2,
        'Bath' => $cinema3,
        'All' =>  $fest,
        default => null
    };
}

$selectedDirector = $_POST['director'] ?? '';
if (!empty($selectedDirector)) {
    $showFilmByDirector = true;
    $showFilms = $fest->findFilmByDirector($selectedDirector);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Creepster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Shadow Fest</title>
</head>

<body>
    <header>
        <h1>WELCOME TO SHADOW FEST 2026</h1>
        <h2>A Celebration of Cinematic Horror</h2>
    </header>


    <main class="festival-container">

        <section class="search">
            <h3 class="gray">Choose Your venue:</h3>
            <form action="Home.php" method="POST">
                <input type="radio" name="cinema" value="London">
                <label for="London">Odeon Leicester Square, London</label><br>

                <input type="radio" name="cinema" value="Andover">
                <label for="Andover">Ateon Mill Road, Andover</label><br>

                <input type="radio" name="cinema" value="Bath">
                <label for="Bath">James street, Bath</label><br>

                <input type="radio" name="cinema" value="All">
                <label for="All">See All venues</label><br>

                <input type="submit" value="Submit">
            </form>

            <form action="Home.php" method="POST">
                <h3 class="gray">Choose Movie by director:</h3>
                <input type="text" name="director" placeholder="John Carpenter">
                <input type="submit" value="Search">
            </form>

        </section>
        <?php if ($showScheduleByVenue && $showResult): ?>
            <section class="search-result">
                <?php echo $showResult; ?>
            </section>

        <?php endif; ?>

        <?php if ($showFilmByDirector && $showFilms): ?>
            <section class="search-result">
                <?php echo $showFilms ?>
            </section>

        <?php endif; ?>

    </main>

</body>

</html>


<?php

/*---------- data (IA created) -------------------------------- 
"The Shining" , "Stanley Kubrick" , 143 
"Braindead" , "Peter Jackson" , 104 
"The Hills Have Eyes" , "Wes Craven" , 90 "
Psycho" , "Alfred Hitchcock" , 109 
"The Exorcist" , "William Friedkin" , 122 
"Halloween" , "John Carpenter" , 91 
"The Texas Chain Saw Massacre" , "Tobe Hooper" , 83 
"Alien" , "Ridley Scott" , 117 
"The Thing" , "John Carpenter" , 109 
"Night of the Living Dead" , "George A. Romero" , 96 
"Dawn of the Dead" , "George A. Romero" , 127 
"A Nightmare on Elm Street" , "Wes Craven" , 91 
"Evil Dead II" , "Sam Raimi" , 84 
"The Evil Dead" , "Sam Raimi" , 85 
"Poltergeist" , "Tobe Hooper" , 114 
"Suspiria" , "Dario Argento" , 98 
"Carrie" , "Brian De Palma" , 98 
"Rosemary's Baby" , "Roman Polanski" , 137 
"The Omen" , "Richard Donner" , 111 
"Nosferatu" , "F.W. Murnau" , 94 
"The Fly" , "David Cronenberg" , 96 
"Hellraiser" , "Clive Barker" , 94 
"Friday the 13th" , "Sean S. Cunningham" , 95 
"An American Werewolf in London" , "John Landis" , 97 
"The Birds" , "Alfred Hitchcock" , 119 
"Jaws" , "Steven Spielberg" , 124 
"The Wicker Man" , "Robin Hardy" , 88 
"Re-Animator" , "Stuart Gordon" , 86 
"Child's Play" , "Tom Holland" , 87 
"The Beyond" , "Lucio Fulci" , 87*/ ?>