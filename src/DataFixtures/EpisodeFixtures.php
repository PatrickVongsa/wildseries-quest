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
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_0',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_0',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_0',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_0',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_1',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_1',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_1',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_1',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_2',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_2',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_2',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_2',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_3',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_3',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_3',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_3',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_4',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_4',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_4',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_4',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_5',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_5',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_5',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_5',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_6',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_6',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_6',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_6',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_7',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_7',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_7',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_7',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_8',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_8',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_8',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_8',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_9',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_9',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_9',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_9',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_10',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_10',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_10',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_10',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_11',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_11',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_11',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_11',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_12',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_12',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_12',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_12',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_13',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_13',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_13',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_13',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_14',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_14',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_14',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_14',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_15',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_15',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_15',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_15',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_16',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_16',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_16',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_16',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_17',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_17',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_17',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_17',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_18',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_18',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_18',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_18',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_19',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_19',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_19',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_19',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_20',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_20',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_20',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_20',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_21',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_21',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_21',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_21',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_22',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_22',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_22',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_22',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_23',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_23',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_23',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_23',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_24',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_24',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_24',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_24',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_25',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_25',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_25',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_25',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_26',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_26',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_26',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_26',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_27',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_27',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_27',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_27',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_28',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_28',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_28',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_28',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_29',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_29',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_29',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_29',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_30',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_30',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_30',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_30',
        ],
        [
            'title' => 'Episode 1',
            'number' => 1,
            'synopsis' => 'C\'est l\'épisode 1',
            'season' => 'season_31',
        ],
        [
            'title' => 'Episode 2',
            'number' => 2,
            'synopsis' => 'C\'est l\'épisode 2',
            'season' => 'season_31',
        ],
        [
            'title' => 'Episode 3',
            'number' => 3,
            'synopsis' => 'C\'est l\'épisode 3',
            'season' => 'season_31',
        ],
        [
            'title' => 'Episode 4',
            'number' => 4,
            'synopsis' => 'C\'est l\'épisode 4',
            'season' => 'season_31',
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
