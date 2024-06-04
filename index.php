<?php
require_once __DIR__ . "/models/gioco.php";
require_once __DIR__ . "/models/cuccia.php";
require_once __DIR__ . "/models/cibo.php";

$icon_dog = "https://icons.veryicon.com/png/o/animal/pet-icon/dog-24.png";
$icon_cat = "https://images.vexels.com/media/users/3/294719/isolated/preview/0921c8db6ffe463083a1bbabaed359db-self-esteem-cute-cat-icon.png";


$croccantini = new Cibo(
	"Royal Canin",
	73,
	"https://www.magazzinitotopiccinni.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/r/o/royal-canin-15kg-cani.jpg",
	$icon_dog
);

$lettiera = new Cuccia(
	"Lettiera Potato",
	30,
	"https://www.my-personaltrainer.it/2023/12/11/lettiere-autopulenti-orig.jpeg",
	$icon_cat
);

$pallina = new Gioco(
	"Crazy Ball",
	15,
	"https://www.shoppypet.com/5455-large_default/ferplast-pa-6060-pallina-per-cani-in-vinile.jpg",
	$icon_dog
);

$dentastick = null;
try {
	$dentastick = new Cibo(
		"Dentastick",
		0,
		"https://www.shoppypet.com/5455-large_default/ferplast-pa-6060-pallina-per-cani-in-vinile.jpg",
		$icon_dog
	);
} catch (Exception $error) {
	echo $error->getMessage();
}


// Stampiamo le card dei prodotti
echo "<pre>";
print_r($croccantini);
print_r($lettiera);
print_r($pallina);
print_r($dentastick);
echo "</pre>";

echo "<p>";
print_r($pallina->calcolaPrezzoScontato(50));
echo "</p>";
