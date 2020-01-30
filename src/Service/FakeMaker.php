<?php


namespace App\Service;

use Faker;

class FakeMaker
{
    public function fakeArticle(int $paragraph) : string
    {
        $faker = Faker\Factory::create('fr_FR');
        $fakeArticle="";
        for ($i = 1; $i <= $paragraph; $i++) {
            $fakeArticle=$fakeArticle.'<h1>'.$faker->text(80).'<\h1>' ;
            $fakeArticle=$fakeArticle.'<p>'.$faker->text(400).'<\p>' ;
        }

        return $fakeArticle;
    }
}
