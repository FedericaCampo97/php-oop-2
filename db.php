<?php


$cats = new Category('cats', 'fa-solid fa-cat');
$dogs = new Category('dogs', 'fa-solid fa-dog');

$categories = [
    $cats,
    $dogs
];


$generic_product = new Product(1, 'Collari per cani', 9.99, $categories[1], 'https://m.media-amazon.com/images/I/81+ri-ZvG7L.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!');


$food = new Food(2, 'Il menù', 19.99, $categories[1], 'https://www.sheba.it/Content/img/home/teaser3-xs.png', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!', '2024-12-12');

$ball = new Toy(3, 'Divertimento', 2.99, $categories[1], 'https://i.ebayimg.com/images/g/M6MAAOSwoVJklCbT/s-l1200.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!', 'soft');
$treehouse = new House(4, 'Casette e cucce', 29.99, $categories[0], 'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/6a3a96526570419721460b040af7836c.jpg?imageView2/2/w/800/q/70', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!', 'tree');


$products = [
    $generic_product,
    $food,
    $ball,
    $treehouse
];
