<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    private $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    const EPISODE = [
        [
            'title' => 'Days Gone Bye',
            'number' => 1,
            'synopsis' => 'Deputy Sheriff Rick Grimes awakens from a coma, and searches for his family in a world ravaged by the undead.',
            'season' => 'season_0',
        ],
        [
            'title' => 'Guts',
            'number' => 2,
            'synopsis' => 'In Atlanta, Rick is rescued by a group of survivors, but they soon find themselves trapped inside a department store surrounded by walkers.',
            'season' => 'season_0',
        ],
        [
            'title' => 'Tells it to the Frogs',
            'number' => 3,
            'synopsis' => 'Rick is reunited with Lori and Carl but soon decides - along with some of the other survivors - to return to the rooftop and rescue Merle. Meanwhile, tensions run high between the other survivors at the camp.',
            'season' => 'season_0',
        ],
        [
            'title' => 'Vatos',
            'number' => 4,
            'synopsis' => 'Rick, Glenn, Daryl and T-Dog come across a group of seemingly hostile survivors whilst searching for Merle. Back at camp, Jim begins behaving erratically.',
            'season' => 'season_0',
        ],
        [
            'title' => 'What lies ahead',
            'number' => 1,
            'synopsis' => 'The group\'s plan to head for Fort Benning is put on hold when Sophia goes missing.',
            'season' => 'season_1',
        ],
        [
            'title' => 'Bloodletting',
            'number' => 2,
            'synopsis' => 'After Carl is accidentally shot, the group are brought to a family living on a nearby farm. Shane makes a dangerous trip in search of medical supplies.',
            'season' => 'season_1',
        ],
        [
            'title' => 'Save the last one',
            'number' => 3,
            'synopsis' => 'As Carl\'s condition continues to deteriorate, Shane and Otis try to dodge the walkers as they head back to the farm.',
            'season' => 'season_1',
        ],
        [
            'title' => 'Cheeroke Rose',
            'number' => 4,
            'synopsis' => 'With Carl recovering, the group puts their focus on finding Sophia. Glenn and Maggie go for a trip to find supplies.',
            'season' => 'season_1',
        ],
        [
            'title' => 'Seed',
            'number' => 1,
            'synopsis' => 'After months on the run, the group take refuge in a federal prison, while elsewhere, Andrea\'s health starts to deteriorate.',
            'season' => 'season_2',
        ],
        [
            'title' => 'Sick',
            'number' => 2,
            'synopsis' => 'As Hershel\'s condition worsens, Rick, Daryl and T-Dog deal with a group of prisoners.',
            'season' => 'season_2',
        ],
        [
            'title' => 'Walk with me',
            'number' => 3,
            'synopsis' => 'Andrea and Michonne are brought to a walled community run by a man called The Governor.',
            'season' => 'season_2',
        ],
        [
            'title' => 'Killer within',
            'number' => 4,
            'synopsis' => 'Lori goes into labour when the prison comes under attack. Michonne tries to convince Andrea to leave Woodbury.',
            'season' => 'season_2',
        ],
        [
            'title' => '30 Days Without an Accident',
            'number' => 1,
            'synopsis' => 'Several months have passed and Rick and the expanded group are living a more peaceful life at the prison. Problems surface when Rick encounters a new survivor, and a supply run ends in disaster.',
            'season' => 'season_3',
        ],
        [
            'title' => 'Infected',
            'number' => 2,
            'synopsis' => 'Rick is forced to abandon his quiet lifestyle when a mysterious virus puts the lives of everyone at the prison at risk.',
            'season' => 'season_3',
        ],
        [
            'title' => 'Isolation',
            'number' => 3,
            'synopsis' => 's the sick are quarantined, Daryl, Tyreese, Michonne and Bob leave the prison in search of medical supplies. Rick makes a shocking discovery.',
            'season' => 'season_3',
        ],
        [
            'title' => 'Indifference',
            'number' => 4,
            'synopsis' => 'Daryl, Tyreese, Michonne and Bob continue to the veterinary college on foot in search of medicine. Rick and Carol go on a run to a nearby town where they find two uninfected stragglers.',
            'season' => 'season_3',
        ],
        [
            'title' => 'Steven Sees a Ghost',
            'number' => 1,
            'synopsis' => 'While investigating a ghost story for his latest novel, a skeptical Steven receives a call from his sister that triggers a chain of fateful events.',
            'season' => 'season_4',
        ],
        [
            'title' => 'Open Casket',
            'number' => 2,
            'synopsis' => 'A devastating family tragedy stirs memories of traumatic losses, reminding Shirley of her first brush with death -- and awakening long-dormant fears.',
            'season' => 'season_4',
        ],
        [
            'title' => 'Touch',
            'number' => 3,
            'synopsis' => 'Keenly perceptive Theo sees shades of herself in a troubled young patient, a girl who\'s haunted by the menacing grin of "Mr. Smiley."',
            'season' => 'season_4',
        ],
        [
            'title' => 'The Twin Thing',
            'number' => 4,
            'synopsis' => 'Still wrestling with addiction -- and an unshakable fright -- a frantic Luke tries to save a friend while sensing his twin sister is in danger.',
            'season' => 'season_4',
        ],
        [
            'title' => 'Pilot',
            'number' => 1,
            'synopsis' => 'Therapist Ben Harmon, his wife, Vivien, and their daughter, Violet, move across the country to Los Angeles to escape their troubled past.',
            'season' => 'season_5',
        ],
        [
            'title' => 'Home invasion',
            'number' => 2,
            'synopsis' => 'Serial killer enthusiasts reenact the brutal murders of two nursing students, while Ben returns to Boston to fix a mistake involving an old flame.',
            'season' => 'season_5',
        ],
        [
            'title' => 'Murder house',
            'number' => 3,
            'synopsis' => 'Ben confronts Moira about recent strange behavior, while Vivien learns about the house\'s first resident.',
            'season' => 'season_5',
        ],
        [
            'title' => 'Halloween: part 1',
            'number' => 4,
            'synopsis' => 'Two of the house\'s previous residents, interior designers Chad and Patrick, give the Harmons decorating advice.',
            'season' => 'season_5',
        ],
        [
            'title' => 'Welcome to Briarcliff',
            'number' => 1,
            'synopsis' => 'After a life-changing experience, a young man is admitted into a notorious insane asylum, while a local reporter is determined to get the full story.',
            'season' => 'season_6',
        ],
        [
            'title' => 'Tricks and treats',
            'number' => 2,
            'synopsis' => 'An exorcist is summoned to Briarcliff to help save a troubled farm boy. Sister Jude\'s darkest secret is revealed.',
            'season' => 'season_6',
        ],
        [
            'title' => 'Nor\'easter',
            'number' => 3,
            'synopsis' => 'A group of patients plan an escape from the asylum during a violent storm.',
            'season' => 'season_6',
        ],
        [
            'title' => 'I Am Anne Frank: Part 1',
            'number' => 4,
            'synopsis' => 'A new patient claiming to be Anne Frank exposes Arden\'s past. Kit learns why Grace was admitted to Briarcliff.',
            'season' => 'season_6',
        ],
        [
            'title' => 'Bitchcraft',
            'number' => 1,
            'synopsis' => 'After discovering her unique bloodline, a young girl is whisked away to a special academy for girls who share the same lineage.',
            'season' => 'season_7',
        ],
        [
            'title' => 'Boy Parts',
            'number' => 2,
            'synopsis' => 'Fiona threatens a long-standing peace when she delves into Madame LaLaurie\'s past, while Zoe and Madison must deal with a horrible tragedy.',
            'season' => 'season_7',
        ],
        [
            'title' => 'The Replacements',
            'number' => 3,
            'synopsis' => 'Fiona threatens a long-standing peace when she delves into Madame LaLaurie\'s past, while Zoe and Madison must deal with a horrible tragedy.',
            'season' => 'season_7',
        ],
        [
            'title' => 'Fearful Pranks Ensue',
            'number' => 4,
            'synopsis' => 'Fiona\'s choices rattle a decades-long truce between the Salem witches and Marie Laveau. The Council of Witchcraft pays a surprise visit to the Academy with disturbing allegations.',
            'season' => 'season_7',
        ],
        [
            'title' => 'Monsters Among Us',
            'number' => 1,
            'synopsis' => 'After their mother\'s murder, conjoined twins Bette and Dot are hired by struggling freak show owner Elsa Mars.',
            'season' => 'season_8',
        ],
        [
            'title' => 'Massacres and Matinees',
            'number' => 2,
            'synopsis' => 'With a killer on the loose, police impose a curfew on Jupiter. Elsa hires a strongman, unaware of his dark past with Ethel.',
            'season' => 'season_8',
        ],
        [
            'title' => 'Edward Mordrake: Part 1',
            'number' => 3,
            'synopsis' => 'Elsa defies superstition to rehearse on Halloween, summoning the spirit of Edward Mordrake and his ghostly band of freaks.',
            'season' => 'season_8',
        ],
        [
            'title' => 'Edward Mordrake: Part 2',
            'number' => 4,
            'synopsis' => 'Mordrake hunts for a freak soul to add to his ghost troupe. Jimmy and Maggie have a run-in with Twisty the clown.',
            'season' => 'season_8',
        ],
        [
            'title' => 'Sonnie\'s Edge',
            'number' => 1,
            'synopsis' => 'In the underground world of "beastie" fights, Sonnie is unbeatable -- as long as she keeps her edge.',
            'season' => 'season_9',
        ],
        [
            'title' => 'Three Robots',
            'number' => 2,
            'synopsis' => 'Long after the fall of humanity, three robots embark on a sightseeing tour of a post-apocalyptic city.',
            'season' => 'season_9',
        ],
        [
            'title' => 'The Witness',
            'number' => 3,
            'synopsis' => 'After seeing a brutal murder, a woman flees from the killer through the streets of a surreal city.',
            'season' => 'season_9',
        ],
        [
            'title' => 'Suits',
            'number' => 4,
            'synopsis' => 'A community of farmers use their homemade mechs to defend their families from an alien invasion.',
            'season' => 'season_9',
        ],
        [
            'title' => 'Automated Customer Service',
            'number' => 1,
            'synopsis' => 'Some senior citizens are lucky enough to enjoy their golden years in tomorrow\'s high-tech, assisted living communities. They pursue relaxation, their every need taken care of - until their robotic servants decide to kill them.',
            'season' => 'season_10',
        ],
        [
            'title' => 'Ice',
            'number' => 2,
            'synopsis' => 'In a future where many humans are enhanced with extraordinary strength and endurance, the "unmodded" feel left behind. This class-conflict drives a rift between two brothers that puts their lives at risk during a dangerous race.',
            'season' => 'season_10',
        ],
        [
            'title' => 'Pop Squad',
            'number' => 3,
            'synopsis' => 'In a future where resources are controlled by the rich, "unregistered offspring" are forbidden by the state. A police officer charged with enforcing population control faces a crisis of conscience.',
            'season' => 'season_10',
        ],
        [
            'title' => 'Snow in the Desert',
            'number' => 4,
            'synopsis' => 'On an arid, scorched planet at the edge of galactic civilization, an ageless albino named "Snow" is hunted by an assortment of hired killers. But after a beautiful stranger named Hirald saves his life, she reveals her own plans for him.',
            'season' => 'season_10',
        ],
        [
            'title' => 'Night Work',
            'number' => 1,
            'synopsis' => 'London 1891. Renowned explorer Sir Malcolm Murray and the strangely beautiful Vanessa Ives recruit American sharp-shooter Ethan Chandler and Dr. Victor Frankenstein to help them search for someone who has been lost.',
            'season' => 'season_11',
        ],
        [
            'title' => 'Séance',
            'number' => 2,
            'synopsis' => 'Vanessa and Sir Malcolm encounter the mysteriously beautiful Dorian Gray at a party. Things take a turn, however, when renowned medium Madame Kali hosts a séance. Meanwhile, Ethan befriends Ms. Brona Croft, a young Irish immigrant.',
            'season' => 'season_11',
        ],
        [
            'title' => 'Resurrection',
            'number' => 3,
            'synopsis' => 'Dr. Frankenstein is confronted by his past. Vanessa has a vision of Mina, which leads to a strange discovery at the London Zoo.',
            'season' => 'season_11',
        ],
        [
            'title' => 'Demimonde',
            'number' => 4,
            'synopsis' => 'Vanessa\'s infatuation with Dorian Gray grows. Professor Van Helsing is hired to work with Dr. Frankenstein. Fenton draws his master to Sir Malcolm\'s mansion.',
            'season' => 'season_11',
        ],
        [
            'title' => 'Fresh Hell',
            'number' => 1,
            'synopsis' => 'Sir Malcolm returns to find a new evil hunting Vanessa.',
            'season' => 'season_12',
        ],
        [
            'title' => 'Verbis Diablo',
            'number' => 2,
            'synopsis' => 'A haunted Vanessa turns to Sir Malcolm for solace. Meanwhile, Dorian Gray meets an intriguing woman with a secret, Hecate hunts down a prize for her mother - and Ferdinand Lyle reveals the disturbing backstory of the Verbis Diablo.',
            'season' => 'season_12',
        ],
        [
            'title' => 'The Nightcomers',
            'number' => 3,
            'synopsis' => 'In a flashback, Vanessa meets The Cut-Wife, who quickly realizes the extent of Vanessa\'s powers and warns her of the danger that lies ahead - and the evil that pursues her.',
            'season' => 'season_12',
        ],
        [
            'title' => 'Evil Spirits in Heavenly Places',
            'number' => 4,
            'synopsis' => 'Lyle reveals how the story of the Verbis Diablo affects Vanessa. Meanwhile, Hecate tries to get closer to Ethan; Angelique and Dorian\'s romance grows; and Inspector Rusk interviews the sole survivor of the Mariner\'s Inn massacre.',
            'season' => 'season_12',
        ],
        [
            'title' => 'The Day Tennyson Died',
            'number' => 1,
            'synopsis' => 'With Ethan, Sir Malcolm and Dr. Frankenstein now scattered around the world facing their own demons, a shattered and despondent Vanessa seeks the help of Dr. Seward to battle a new evil.',
            'season' => 'season_13',
        ],
        [
            'title' => 'Predators Far and Near',
            'number' => 2,
            'synopsis' => 'Sir Malcolm continues on his journey with the enigmatic Kaetenay. Meanwhile, Ethan gets some unexpected help from Hecate, Drs. Frankenstein and Jekyll hatch a plan and unbeknownst to her, evil forces track Vanessa\'s every move.',
            'season' => 'season_13',
        ],
        [
            'title' => 'Good and Evil Braided Be',
            'number' => 3,
            'synopsis' => 'Vanessa Ives is confronted by a familiar face who will reveal a clue to her past.',
            'season' => 'season_13',
        ],
        [
            'title' => 'A Blade of Grass',
            'number' => 4,
            'synopsis' => 'With the help of Dr. Seward, Vanessa undergoes hypnosis to relive her time in the Banning Clinic.',
            'season' => 'season_13',
        ],
        [
            'title' => 'So Close, Yet So Far',
            'number' => 1,
            'synopsis' => 'While Madison struggles to keep Nick from a crippling withdrawal, Travis ventures out to find his son before the city of Los Angeles falls.',
            'season' => 'season_14',
        ],
        [
            'title' => 'The Dog',
            'number' => 2,
            'synopsis' => 'After they escape a riot, Travis, Liza and Chris seek refuge with the Salazars; Madison defends her home.',
            'season' => 'season_14',
        ],
        [
            'title' => 'Not Fade Away',
            'number' => 3,
            'synopsis' => 'Madison and Travis see different sides of the National Guard\'s occupation in their neighborhood; the family tries to adapt to the new world.',
            'season' => 'season_14',
        ],
        [
            'title' => 'Cobalt',
            'number' => 4,
            'synopsis' => 'The National Guard\'s plan for the neighborhood is revealed; Travis and Madison make a difficult decision.',
            'season' => 'season_14',
        ],
        [
            'title' => 'Monster',
            'number' => 1,
            'synopsis' => 'Travis, Madison, and their blended family set sail on Strand\'s boat off the coast of California in an effort to escape the apocalypse. While they\'re looking for safety, they only find more trouble at sea.',
            'season' => 'season_15',
        ],
        [
            'title' => 'We All Fall Down',
            'number' => 2,
            'synopsis' => 'The group seeks shelter with a survivalist family. Madison tries to uncover the family\'s true motives. Meanwhile, Salazar works to discover Strand\'s intentions.',
            'season' => 'season_15',
        ],
        [
            'title' => 'Ouroboros',
            'number' => 3,
            'synopsis' => 'Madison confronts Strand about his mysterious destination. Meanwhile, Nick, Alicia and others inspect wreckage from a plane crash.',
            'season' => 'season_15',
        ],
        [
            'title' => 'Blood in the Streets',
            'number' => 4,
            'synopsis' => 'The group lets a family in distress board the Abigail. Strand\'s past begins to come to light. Nick looks for an associate of Strand\'s.',
            'season' => 'season_15',
        ],
        [
            'title' => 'Eye of the Beholder',
            'number' => 1,
            'synopsis' => 'The Clark family find themselves in a dire predicament and must work together to discover a path to safety.',
            'season' => 'season_16',
        ],
        [
            'title' => 'The New Frontier',
            'number' => 2,
            'synopsis' => 'Strand faces resistance as he attempts to hold power over his domain.',
            'season' => 'season_16',
        ],
        [
            'title' => 'TEOTWAWKI',
            'number' => 3,
            'synopsis' => 'Alicia and Nick fall in with new crowds. Madison discovers Otto\'s past mimics her own.',
            'season' => 'season_16',
        ],
        [
            'title' => '100',
            'number' => 4,
            'synopsis' => 'A mysterious character searches for purpose and becomes tied to the struggle over a resource.',
            'season' => 'season_16',
        ],
        [
            'title' => 'What\'s Your Story?',
            'number' => 1,
            'synopsis' => 'A lone traveler\'s wearying journey is interrupted by new acquaintances, some who become friend, others who become foe.',
            'season' => 'season_17',
        ],
        [
            'title' => 'Another Day in the Diamond',
            'number' => 2,
            'synopsis' => 'A troubled survivor finds allies in an unexpected place; the life Madison has fought to build comes under threat.',
            'season' => 'season_17',
        ],
        [
            'title' => 'Good Out Here',
            'number' => 3,
            'synopsis' => 'Madison and Morgan try to help Nick find inner peace; a quest for revenge exacts its toll on the group.',
            'season' => 'season_17',
        ],
        [
            'title' => 'Buried',
            'number' => 4,
            'synopsis' => 'Al\'s questioning uncovers some surprising truths about the group\'s past; John Dorie receives unexpected news.',
            'season' => 'season_17',
        ],
        [
            'title' => 'Have you met Ted ?',
            'number' => 1,
            'synopsis' => 'It\'s the year 2030 and an older Ted Mosby is telling the story to his son and daughter about how he met and will eventually marry their mother. This is where we meet for the first time Ted, Lily, Marshall, Barney and Robin.',
            'season' => 'season_18',
        ],
        [
            'title' => 'Purple Giraffe',
            'number' => 2,
            'synopsis' => 'Ted throws a party in hopes of seeing Robin again, but when she doesn\'t show up, he throws another... and another.',
            'season' => 'season_18',
        ],
        [
            'title' => 'The Sweet Taste of Liberty',
            'number' => 3,
            'synopsis' => 'Barney\'s plan to meet girls at the airport backfires as he and Ted are picked up by airport security. Meanwhile, Lily gets jealous of Robin.',
            'season' => 'season_18',
        ],
        [
            'title' => 'Return of the Shirt',
            'number' => 4,
            'synopsis' => 'Ted reconnects with an old flame and soon remembers why he dumped her in the first place. Barney pays Robin to say outrageous things on the air.',
            'season' => 'season_18',
        ],
        [
            'title' => 'Where Were We?',
            'number' => 1,
            'synopsis' => 'Marshall becomes predictably depressed and pathetic after the breakup. And it only gets worse when he discovers that Lily may be back in town.',
            'season' => 'season_19',
        ],
        [
            'title' => 'The Scorpion and the Toad',
            'number' => 2,
            'synopsis' => 'Barney gets Marshall back out on the singles market, but Barney keeps taking all the prospects from him. And Ted\'s convinced that Lily is back because she wants Marshall back, even though she says she\'s never been better.',
            'season' => 'season_19',
        ],
        [
            'title' => 'Brunch',
            'number' => 3,
            'synopsis' => 'Ted discovers that his parents are keeping a secret from him after his dad acts as Barney\'s wingman, and Marshall and Lily intentionally try to get each other sexually aroused.',
            'season' => 'season_19',
        ],
        [
            'title' => 'Ted Mosby, Architect',
            'number' => 4,
            'synopsis' => 'Barney tells Ted that single women like architects. But will Ted use this useful tidbit of information to cheat on Robin after they have their first fight?',
            'season' => 'season_19',
        ],
        [
            'title' => 'Wait for It',
            'number' => 1,
            'synopsis' => 'Ted\'s still not ready to date months after his breakup with Robin. But when Robin returns to New York with an exotic new boyfriend, he decides it\'s time to finally do something adventurous.',
            'season' => 'season_20',
        ],
        [
            'title' => 'We\'re Not from Here',
            'number' => 2,
            'synopsis' => 'Ted and Barney pose as tourists to pick up on a couple of New York women, and Robin starts getting fed up with her new boyfriend.',
            'season' => 'season_20',
        ],
        [
            'title' => 'Third Wheel',
            'number' => 3,
            'synopsis' => 'Ted has a chance for a threesome with two women, but Barney and Lily try to sabotage it. Meanwhile, Robin\'s date also goes better than expected, if only she can find a razor.',
            'season' => 'season_20',
        ],
        [
            'title' => 'Little Boys',
            'number' => 4,
            'synopsis' => 'Robin tries to date a guy with a child, even though she does not like or want children. Meanwhile, Ted finds it impossible to make it with a woman he knows that Barney slept with a year ago.',
            'season' => 'season_20',
        ],
        [
            'title' => 'Do I Know You?',
            'number' => 1,
            'synopsis' => 'Ted and Stella get engaged, but Ted soon learns that he doesn\'t know anything about her. Meanwhile, Barney confesses to Lily that he\'s in love with Robin',
            'season' => 'season_21',
        ],
        [
            'title' => 'The Best Burger in New York',
            'number' => 2,
            'synopsis' => 'Marshall claims that he had the best hamburger in the world during his first week in New York City, but he forgot where the burger joint is located. The gang then hits the streets of Manhattan to help him find it.',
            'season' => 'season_21',
        ],
        [
            'title' => 'I Heart NJ',
            'number' => 3,
            'synopsis' => 'Ted does not want to move in with Stella because he hates New Jersey. Robin prematurely quits her TV job because she incorrectly thinks that she already has a new job.',
            'season' => 'season_21',
        ],
        [
            'title' => 'Intervention',
            'number' => 4,
            'synopsis' => 'Ted, Robin, Marshall, and Lily all begin getting cold feet because of their imminent life changes, and Barney tries to prove that he can pick up a woman while posing as an 80-year-old man.',
            'season' => 'season_21',
        ],
        [
            'title' => 'The One Where Monica Gets a Roommate',
            'number' => 1,
            'synopsis' => 'Monica and the gang introduce Rachel to the "real world" after she leaves her fiancé at the altar.',
            'season' => 'season_22',
        ],
        [
            'title' => 'The One with the Sonogram at the End',
            'number' => 2,
            'synopsis' => 'Ross finds out his ex-wife is pregnant. Rachel returns her engagement ring to Barry. Monica becomes stressed when her and Ross\'s parents come to visit.',
            'season' => 'season_22',
        ],
        [
            'title' => 'The One with the Thumb',
            'number' => 3,
            'synopsis' => 'Monica becomes irritated when everyone likes her new boyfriend more than she does. Chandler resumes his smoking habit. Phoebe is given $7000 when she finds a thumb in a can of soda.',
            'season' => 'season_22',
        ],
        [
            'title' => 'The One with George Stephanopoulos',
            'number' => 4,
            'synopsis' => 'Joey and Chandler take Ross to a hockey game to take his mind off the anniversary of the first time he slept with Carol, while the girls become depressed when they realize they don\'t have a "plan".',
            'season' => 'season_22',
        ],
        [
            'title' => 'The One with Ross\'s New Girlfriend',
            'number' => 1,
            'synopsis' => 'Rachel waits for Ross at the airport, unaware he has a new girlfriend. Meanwhile, Chandler has a frightening experience with Joey\'s tailor, and Phoebe gives Monica a bad haircut.',
            'season' => 'season_23',
        ],
        [
            'title' => 'The One with the Breast Milk',
            'number' => 2,
            'synopsis' => 'Monica goes shopping with Julie and tries to keep it a secret from Rachel. Ross is grossed out by Carol\'s breast milk. At his day job, Joey competes with a fellow cologne spritzer.',
            'season' => 'season_23',
        ],
        [
            'title' => 'The One Where Heckles Dies',
            'number' => 3,
            'synopsis' => 'Mr. Heckles dies and leaves all his possessions to Monica and Rachel, Chandler worries he will die alone just like him. Meanwhile, Rachel and Monica argue over a lamp, Phoebe and Ross argue over evolution.',
            'season' => 'season_23',
        ],
        [
            'title' => 'The One with Phoebe\'s Husband',
            'number' => 4,
            'synopsis' => 'When the gang find out Phoebe married a gay Canadian ice dancer for a green card, more of their secrets are revealed. Meanwhile, Rachel gives Ross bad advice on his relationship with Julie.',
            'season' => 'season_23',
        ],
        [
            'title' => 'The One with the Princess Leia Fantasy',
            'number' => 1,
            'synopsis' => 'Monica suffers from insomnia and depression following her breakup with Richard. Joey struggles to accept Chandler and Janice\'s relationship. Ross confides in Rachel about one of his fantasies.',
            'season' => 'season_24',
        ],
        [
            'title' => 'The One Where No One\'s Ready',
            'number' => 2,
            'synopsis' => 'A stressed Ross desperately and insistently tries to get the rest of the gang ready for a black tie event at the museum, while Joey and Chandler clash over personal belongings and personal space.',
            'season' => 'season_24',
        ],
        [
            'title' => 'The One with the Jam',
            'number' => 3,
            'synopsis' => 'Monica tries to get over Richard by using her free time to make jam and considers artificial insemination through a sperm bank. Phoebe is stalked by a man who mistakes her for Ursula.',
            'season' => 'season_24',
        ],
        [
            'title' => 'The One with the Metaphorical Tunnel',
            'number' => 4,
            'synopsis' => 'Chandler tries to get over his fear of commitment. Phoebe poses as Joey\'s agent after she forgets to tell him about an audition. Ross panics after seeing Ben play with a Barbie doll and tries to convince him to play with more manly toys.',
            'season' => 'season_24',
        ],
        [
            'title' => 'The One with the Jellyfish',
            'number' => 1,
            'synopsis' => 'Ross chooses between Rachel and his bald-headed girlfriend Bonnie; Joey, Chandler, and Monica have a perilous encounter with a jellyfish at the beach.',
            'season' => 'season_25',
        ],
        [
            'title' => 'The One with the Cat',
            'number' => 2,
            'synopsis' => 'Phoebe becomes convinced that the spirit of her dead mother is inside a cat. Chandler and Joey are robbed. Monica goes on a date with a guy from her high school.',
            'season' => 'season_25',
        ],
        [
            'title' => 'The One with the \'Cuffs',
            'number' => 3,
            'synopsis' => 'Monica tries to avoid criticism when she caters a party for her mother. Chandler ends up half naked and handcuffed to a chair in Rachel\'s boss\'s office. Joey tries to get educated from a salesman trying to sell him a set of encyclopedias.',
            'season' => 'season_25',
        ],
        [
            'title' => 'The One with the Ballroom Dancing',
            'number' => 4,
            'synopsis' => 'Joey is forced to help Treeger learn how to dance after he threatens to have Monica and Rachel evicted. Phoebe develops a crush on one of her clients. Ross tries to help Chandler quit the gym.',
            'season' => 'season_25',
        ],
    ];
    
    public function load(ObjectManager $manager)
    {

        foreach (self::EPISODE as $episodes) {
            $episode = new Episode();
            $episode
                ->setTitle($episodes['title'])
                ->setNumber($episodes['number'])
                ->setSynopsis($episodes['synopsis'])
                ->setSeason($this->getReference($episodes['season']))
                ->setSlug($this->slugify->generate($episodes['title']));
            $manager->persist($episode);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont EpisodeFixtures dépend
        return [
          SeasonFixtures::class,
        ];
    }
}
