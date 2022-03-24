<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //create 7 articles
        $createdArticles = [        
            'titles' => [
                'Nulla auctor arcu sit amet urna sodales iaculis',
                'Nunc ac eros hendrerit erat tincidunt auctor',
                'Nam fringilla erat ut auctor dignissim',
                'Curabitur vel turpis eu magna mollis gravida',
                'Etiam egestas ligula mollis porta aliquam',
                'Praesent et nisi sit amet purus molestie tincidunt',
                'Aliquam vel ligula sit amet turpis pharetra euismod'
            ], 
            'contents' => [
                'Ut ullamcorper consequat rutrum. Donec ac feugiat eros. Phasellus rutrum leo sed odio venenatis suscipit. Cras eget fermentum leo. Vivamus pretium pretium elit, in consectetur eros euismod eu. Nam in mi imperdiet, aliquam est quis, sagittis turpis. Maecenas suscipit, augue eu dignissim consequat, elit lacus hendrerit turpis, nec volutpat nulla ligula in lacus. ',
                'Fusce fringilla mi felis, a pulvinar urna porttitor id. Proin auctor vehicula sapien, nec tempus diam efficitur non. Ut vehicula at metus quis interdum. Nullam condimentum, massa et bibendum imperdiet, mi ipsum sagittis mauris, et pulvinar nibh metus ac diam. Mauris vehicula vestibulum tristique. Proin sed ipsum nisl.',
                'Donec vehicula enim et felis laoreet lacinia. Sed id tellus nec dolor lacinia interdum. Suspendisse feugiat justo dolor, in blandit justo euismod iaculis. Vestibulum at nulla odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas gravida risus in libero luctus, at feugiat arcu placerat.',
                'Maecenas sit amet dolor ex. Pellentesque venenatis egestas blandit. Fusce in dolor tempor, facilisis lectus vitae, suscipit justo. Vivamus rutrum libero ut turpis iaculis, sed sodales risus commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec magna a nisl egestas lobortis ac sit amet ligula. Vestibulum feugiat blandit tortor eget dictum. ',
                'n hac habitasse platea dictumst. In mollis justo sed nisl convallis egestas. Nunc tempor mi non libero convallis pulvinar. Integer sapien urna, pretium in risus et, interdum rutrum justo. In et dui eget ligula egestas scelerisque. Nulla congue maximus mauris. Etiam id feugiat urna, sit amet viverra augue. In egestas euismod urna, quis tincidunt massa. Duis efficitur dignissim odio, vel blandit magna dignissim in. Quisque rutrum tellus at consectetur volutpat. Morbi fringilla vulputate blandit. Suspendisse ac rhoncus lacus. Pellentesque in pharetra ex.',
                'Proin eget mauris at enim pharetra ullamcorper non ac purus. Pellentesque quis nisi et tellus interdum placerat vitae vitae nisl. Nullam lectus ligula, scelerisque ut ipsum non, sodales dictum enim. Nulla ultricies augue pulvinar quam ornare, venenatis vulputate ante vehicula. Duis non eros sodales, mattis augue eu, lobortis velit. Aliquam finibus venenatis dolor. Sed ac sollicitudin est. Vestibulum varius pellentesque dui vitae blandit. Suspendisse placerat augue eu tempor dapibus.',
                'Fusce accumsan ante porttitor nisl finibus, vel ultricies purus placerat. Nullam non nisi varius, imperdiet sem sit amet, consequat nulla. Vestibulum vel consequat lectus, vitae fermentum nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras enim risus, sodales id ullamcorper quis, pharetra et mi. Integer mattis, est sed fringilla fringilla, lorem purus tempus mauris, vulputate lacinia augue ligula id eros.'
            ],
            'imgs' => [
                'https://picsum.photos/id/201/200/300',
                'https://picsum.photos/id/202/200/300',
                'https://picsum.photos/id/203/200/300',
                'https://picsum.photos/id/204/200/300',
                'https://picsum.photos/id/206/200/300',
                'https://picsum.photos/id/208/200/300',
                'https://picsum.photos/id/209/200/300'
            ],
            'descriptions' => [
                'Ut ullamcorper consequat rutrum. Donec ac feugiat eros.',
                'Fusce fringilla mi felis, a pulvinar',
                'Donec vehicula enim et felis laoreet lacinia.',
                'Maecenas sit amet dolor ex. Pellentesque venenatis',
                'n hac habitasse platea dictumst. In mollis',
                'Proin eget mauris at enim pharetra ullamcorper non ac purus. Pellentesque quis nisi et tellus interdum placerat',
                'Fusce accumsan ante porttitor nisl finibus, vel ultricies purus placerat.'
            ]
        ];
        for ($i = 0; $i < 7; $i++) {
            $article = new Article();
            $article->setTitle($createdArticles['titles'][$i]);
            $article->setContent($createdArticles['contents'][$i]);
            $article->setImg($createdArticles['imgs'][$i]);
            $article->setDescription($createdArticles['descriptions'][$i]);
            $manager->persist($article);
        }
        $manager->flush();
    }
}
