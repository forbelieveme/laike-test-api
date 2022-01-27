<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
  //
  function getProducts()
  {
    return array(
      'products' =>
      array(
        0 =>
        array(
          'id' => 1,
          'title' => 'Brown eggs',
          'type' => 'dairy',
          'description' => 'Raw organic brown eggs in a basket',
          'filename' => 'https://s3.us-east-1.amazonaws.com/laikapp/images_products/c3d4884daeb52a2c3aaeae5422dd72f4.jpg',
          'height' => 600,
          'width' => 400,
          'price' => 28.1,
          'rating' => 4,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        1 =>
        array(
          'id' => 2,
          'title' => 'Sweet fresh stawberry',
          'type' => 'fruit',
          'description' => 'Sweet fresh stawberry on the wooden table',
          'filename' => 'https://s3.us-east-1.amazonaws.com/laikapp/images_products/10ea470d75cbb51a8bb86b925b53d885.jpg',
          'height' => 450,
          'width' => 299,
          'price' => 29.45,
          'rating' => 4,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        2 =>
        array(
          'id' => 3,
          'title' => 'Asparagus',
          'type' => 'vegetable',
          'description' => 'Asparagus with ham on the wooden table',
          'filename' => 'https://laikapp.s3.amazonaws.com/dev_images_products/3710_44295_Aikos_Gomitas_Con_Sabor_A_Carne_1612561181_750x1334.jpg',
          'height' => 450,
          'width' => 299,
          'price' => 18.95,
          'rating' => 3,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        3 =>
        array(
          'id' => 4,
          'title' => 'Green smoothie',
          'type' => 'dairy',
          'description' => 'Glass of green smoothie with quail egg\'s yolk, served with cocktail tube, green apple and baby spinach leaves over tin surface.',
          'filename' => 'https://laikapp.s3.amazonaws.com/dev_images_products/66997_Smartbones_unidad_smartsticks_dental_1622586713_0_500x500.png',
          'height' => 600,
          'width' => 399,
          'price' => 17.68,
          'rating' => 4,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        4 =>
        array(
          'id' => 5,
          'title' => 'Brown eggs',
          'type' => 'dairy',
          'description' => 'Raw organic brown eggs in a basket',
          'filename' => 'https://s3.us-east-1.amazonaws.com/laikapp/images_products/c3d4884daeb52a2c3aaeae5422dd72f4.jpg',
          'height' => 600,
          'width' => 400,
          'price' => 28.1,
          'rating' => 4,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        5 =>
        array(
          'id' => 6,
          'title' => 'Sweet fresh stawberry',
          'type' => 'fruit',
          'description' => 'Sweet fresh stawberry on the wooden table',
          'filename' => 'https://s3.us-east-1.amazonaws.com/laikapp/images_products/10ea470d75cbb51a8bb86b925b53d885.jpg',
          'height' => 450,
          'width' => 299,
          'price' => 29.45,
          'rating' => 4,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        6 =>
        array(
          'id' => 7,
          'title' => 'Asparagus',
          'type' => 'vegetable',
          'description' => 'Asparagus with ham on the wooden table',
          'filename' => 'https://laikapp.s3.amazonaws.com/dev_images_products/3710_44295_Aikos_Gomitas_Con_Sabor_A_Carne_1612561181_750x1334.jpg',
          'height' => 450,
          'width' => 299,
          'price' => 18.95,
          'rating' => 3,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
        7 =>
        array(
          'id' => 8,
          'title' => 'Green smoothie',
          'type' => 'dairy',
          'description' => 'Glass of green smoothie with quail egg\'s yolk, served with cocktail tube, green apple and baby spinach leaves over tin surface.',
          'filename' => 'https://laikapp.s3.amazonaws.com/dev_images_products/66997_Smartbones_unidad_smartsticks_dental_1622586713_0_500x500.png',
          'height' => 600,
          'width' => 399,
          'price' => 17.68,
          'rating' => 4,
          'stars' => 5,
          'pricemember' => 2345,
          'oldprice' => 6543
        ),
      ),
    );
  }
}
