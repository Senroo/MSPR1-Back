<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++ ){
            $article = new Article();
            $article->setTitle("Titre de l'article numéro $i")
                    ->setContent("<p>Contenu de l'article numéro $i</p>")
                    ->setImage("https://picsum.photos/200/300")
                    ->setCreatedAt(new \DateTime());

            $manager->persist($article);
            
        }

        $manager->flush();
    }
}
