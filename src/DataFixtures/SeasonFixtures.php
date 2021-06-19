<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    const SEASON = [
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_0',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_0',
        ],
        [
            'number' => 3,
            'year' => 2014,
            'description' => 'C\'est la saison 3',
            'program' => 'program_0',
        ],
        [
            'number' => 4,
            'year' => 2015,
            'description' => 'C\'est la saison 4',
            'program' => 'program_0',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_1',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_2',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_2',
        ],
        [
            'number' => 3,
            'year' => 2014,
            'description' => 'C\'est la saison 3',
            'program' => 'program_2',
        ],
        [
            'number' => 4,
            'year' => 2015,
            'description' => 'C\'est la saison 4',
            'program' => 'program_2',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_3',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_3',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_4',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_4',
        ],
        [
            'number' => 3,
            'year' => 2014,
            'description' => 'C\'est la saison 3',
            'program' => 'program_4',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_5',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_5',
        ],
        [
            'number' => 3,
            'year' => 2014,
            'description' => 'C\'est la saison 3',
            'program' => 'program_5',
        ],
        [
            'number' => 4,
            'year' => 2015,
            'description' => 'C\'est la saison 4',
            'program' => 'program_5',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_6',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_6',
        ],
        [
            'number' => 3,
            'year' => 2014,
            'description' => 'C\'est la saison 3',
            'program' => 'program_6',
        ],
        [
            'number' => 4,
            'year' => 2015,
            'description' => 'C\'est la saison 4',
            'program' => 'program_6',
        ],
        [
            'number' => 1,
            'year' => 2012,
            'description' => 'C\'est la saison 1',
            'program' => 'program_7',
        ],
        [
            'number' => 2,
            'year' => 2013,
            'description' => 'C\'est la saison 2',
            'program' => 'program_7',
        ],
        [
            'number' => 3,
            'year' => 2014,
            'description' => 'C\'est la saison 3',
            'program' => 'program_7',
        ],
        [
            'number' => 4,
            'year' => 2015,
            'description' => 'C\'est la saison 4',
            'program' => 'program_7',
        ],
    ];

    public function load(ObjectManager $manager)
    {

        foreach (self::SEASON as $key => $seasons) {
            $season = new Season();
            $season
                ->setNumber($seasons['number'])
                ->setYear($seasons['year'])
                ->setDescription($seasons['description'])
                ->setProgram($this->getReference($seasons['program']))
                ->setSlug($seasons['number'] . '-' . $seasons['program']);
            $manager->persist($season);
            $this->addReference('season_' . $key, $season);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont SeasonFixtures dépend
        return [
          ProgramFixtures::class,
        ];
    }
}
