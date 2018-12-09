<?php
declare(strict_types=1);

// Multidimensional associative array to store author id´s that point to name and wiki-page for each author...
$authorsArray = [
		1 => ["name" => "Ayala", "wiki" => "https://en.wikipedia.org/wiki/List_of_Star_Trek:_Voyager_characters#Ayala"],
		2 => ["name" => "Chell", "wiki" => "https://en.wikipedia.org/wiki/List_of_Star_Trek:_Voyager_characters#Chell"],
		3 => ["name" => "Icheb", "wiki" => "https://en.wikipedia.org/wiki/List_of_Star_Trek:_Voyager_characters#Icheb"],
		4 => ["name" => "Seska", "wiki" => "https://en.wikipedia.org/wiki/List_of_Star_Trek:_Voyager_characters#Seska"],
		5 => ["name" => "Vorik", "wiki" => "https://en.wikipedia.org/wiki/List_of_Star_Trek:_Voyager_characters#Vorik"],
];

// Multidimensional indexed + associative array to store articles, titles and more...
$articlesArray = [
	[
		'title'		=> "Vessels and fluctuations in energy readings",
		'content'	=>
			"Unidentified vessel travelling at sub warp speed, bearing 235.7. Fluctuations in energy readings from it,
			Captain. All transporters off. A strange set-up, but I'd say the graviton generator is depolarized.
			The dark colourings of the scrapes are the leavings of natural rubber,
			a type of non-conductive sole used by researchers experimenting with electricity.
			The molecules must have been partly de-phased by the anyon beam.",

		'author_id' => 1,
		'published'	=> "2018-08-11",
		'numlikes'	=> 10,
		'dislikes'	=> 5
	],
	[
		'title'		=> "Reset the sensors to scan for frequencies",
		'content'	=>
			"I have reset the sensors to scan for frequencies outside the usual range.
			By emitting harmonic vibrations to shatter the lattices.
			We will monitor and adjust the frequency of the resonators.
			He has this ability of instantly interpreting and extrapolating any verbal communication he hears.
			It may be due to the envelope over the structure, causing hydrogen-carbon helix patterns throughout.
			I'm comparing the molecular integrity of that bubble against our phasers.",

		'author_id' => 2,
		'published'	=> "2018-02-01",
		'numlikes'	=> 12,
		'dislikes'	=> 6
	],
	[
		'title'		=> "What are the possibilities of warp drive?",
		'content'	=>
			"Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism.
			The organisms fuse to the nerve, intertwining at the molecular level.
			That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex corresponding to an REM state.
			The engineering section's critical. Destruction is imminent. Their robes contain ultritium, highly explosive,
			virtually undetectable by your transporter.",

		'author_id' => 1,
		'published'	=> "2018-06-04",
		'numlikes'	=> 30,
		'dislikes'	=> 3
	],
	[
		'title'		=> "Remarkable piece of bio-electronic engineering",
		'content'	=>
			"We're acquainted with the wormhole phenomenon, but this...
			Is a remarkable piece of bio-electronic engineering by which I see much of the EM spectrum ranging from heat and infrared through radio waves,
			et cetera, and forgive me if I've said and listened to this a thousand times.
			This planet's interior heat provides an abundance of geothermal energy. We need to neutralize the homing signal.",

		'author_id' => 2,
		'published'	=> "2018-08-01",
		'numlikes'	=> 2,
		'dislikes'	=> 8
	],
	[
		'title'		=> "Sensors indicate human life forms!",
		'content'	=>
			"Sensors indicate human life forms 30 meters below the planet's surface. Stellar flares are increasing in magnitude and frequency.
			Set course for Rhomboid Dronegar 006, warp seven. There's no evidence of an advanced communication network. Total guidance system failure,
			with less than 24 hours' reserve power. Shield effectiveness has been reduced 12 percent.
			We have covered the area in a spherical pattern which a ship without warp drive could cross in the given time.",

		'author_id' => 4,
		'published'	=> "2018-03-05",
		'numlikes'	=> 40,
		'dislikes'	=> 10
	],
	[
		'title'		=> "Energy discharge in six seconds!",
		'content'	=>
			"Deflector power at maximum. Energy discharge in six seconds. Warp reactor core primary coolant failure.
			Fluctuate phaser resonance frequencies. Resistance is futile. Recommend we adjust shield harmonics to the upper EM band when proceeding.
			These appear to be some kind of power-wave-guide conduits which allow them to work collectively as they perform ship functions.
			Increase deflector modulation to upper frequency band.",

		'author_id' => 3,
		'published'	=> "2018-04-10",
		'numlikes'	=> 15,
		'dislikes'	=> 25
	],
	[
		'title'		=> "Using the gravitational pull of a star!",
		'content'	=>
			"Communication is not possible. The shuttle has no power. Using the gravitational pull of a star to slingshot back in time?
			We are going to Starbase Montgomery for Engineering consultations prompted by minor read-out anomalies. Probes have recorded unusual levels of geological activity in all five planetary systems.
			Assemble a team. Look at records of the Drema quadrant. Would these scans detect artificial transmissions as well as natural signals?",

		'author_id' => 4,
		'published'	=> "2018-06-08",
		'numlikes'	=> 26,
		'dislikes'	=> 16
	],
	[
		'title'		=> "Force field maintaining our hull integrity",
		'content'	=>
			"Sensors indicate no shuttle or other ships in this sector. According to coordinates,
			we have travelled 7,000 light years and are located near the system J-25. Tractor beam released, sir.
			Force field maintaining our hull integrity. Damage report? Sections 27, 28 and 29 on decks four, five and six destroyed.
			Without our shields, at this range it is probable a photon detonation could destroy the Enterprise.",

		'author_id' => 5,
		'published'	=> "2018-03-12",
		'numlikes'	=> 28,
		'dislikes'	=> 18
	],
	[
		'title'		=> "Distortion in the areas emanating triolic waves",
		'content'	=>
			"It indicates a synchronic distortion in the areas emanating triolic waves. The cerebellum, the cerebral cortex, the brain stem,
			the entire nervous system has been depleted of electrochemical energy. Any device like that would produce high levels of triolic waves.
			These walls have undergone some kind of selective molecular polarization. I haven't determined if our phaser energy can generate a stable field.
			We could alter the photons with phase discriminators.",

		'author_id' => 3,
		'published'	=> "2018-08-18",
		'numlikes'	=> 34,
		'dislikes'	=> 26
	],
	[
		'title'		=> "Something strange on the detector circuit",
		'content'	=>
			"Shields up. I recommend we transfer power to phasers and arm the photon torpedoes.
			Something strange on the detector circuit. The weapons must have disrupted our communicators.
			You saw something as tasty as meat, but inorganically materialized out of patterns used by our transporters.
			Captain, the most elementary and valuable statement in science, the beginning of wisdom, is 'I do not know.' All transporters off.",

		'author_id' => 5,
		'published'	=> "2018-02-28",
		'numlikes'	=> 46,
		'dislikes'	=> 16
	],
];
