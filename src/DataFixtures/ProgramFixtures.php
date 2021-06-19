<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    private $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    const PROGRAM = [
        [
            'title' => 'The Walking Dead',
            'summary' => 'Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg',
            'category' => 'category_4',
        ],
        [
            'title' => 'The Haunting Of Hill House',
            'summary' => 'Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
            'category' => 'category_4',
        ],
        [
            'title' => 'American Horror Story',
            'summary' => 'A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
            'category' => 'category_4',
        ],
        [
            'title' => 'Love Death And Robots',
            'summary' => 'Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
            'category' => 'category_4',
        ],
        [
            'title' => 'Penny Dreadful',
            'summary' => 'Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg',
            'category' => 'category_4',
        ],
        [
            'title' => 'Fear The Walking Dead',
            'summary' => 'La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
            'category' => 'category_4',
        ],
        [
            'title' => 'How I Met Your Mother',
            'summary' => 'Ted se remémore ses jeunes années, lorsqu\'il était encore célibataire. Il revoit avec nostalgie ses moments d\'égarements et de troubles, ses rencontres et ses recherches effrénées du Grand Amour.',
            'poster' => 'https://img.betaseries.com/Qh6VZ1u1vthQ58IloDPwM0NIaPc=/600x900/smart/https%3A%2F%2Fpictures.betaseries.com%2Ffonds%2Fposter%2Fcfa3c0c2e868afb3f866cfad7fb7ed4a.jpg',
            'category' => 'category_3',
        ],
        [
            'title' => 'Friends',
            'summary' => 'Les péripéties de 6 jeunes New-Yorkais liés par une profonde amitié. Entre amour, travail, et famille, ils partagent leurs bonheurs et leurs soucis au Central Perk, leur café favori...',
            'poster' => 'https://img.betaseries.com/_jeGfZJkMiztGYrgxCHPtih0P5I=/600x900/smart/https%3A%2F%2Fpictures.betaseries.com%2Ffonds%2Fposter%2Fb2876f3f93a6534bf77f064ba8983a39.jpg',
            'category' => 'category_3',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::PROGRAM as $key => $serie) {
            $program = new Program();
            $program
                ->setTitle($serie['title'])
                ->setSummary($serie['summary'])
                ->setPoster($serie['poster'])
                ->setCategory($this->getReference($serie['category']))
                ->setSlug($this->slugify->generate($serie['title']))
                ->setOwner($this->getReference('owner_0'));
                if ($key == 0) {
                    for ($i=0; $i < count(ActorFixtures::ACTORS); $i++) {
                        $program->addActor($this->getReference('actor_' . $i));
                    }
                }
            $manager->persist($program);
            $this->addReference('program_' . $key, $program);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          ActorFixtures::class,
          CategoryFixtures::class,
          UserFixtures::class,
        ];
    }
}
