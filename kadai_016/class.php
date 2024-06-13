<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
//Foodクラスの作成 
class Food {

//プロパティを定義する
private $name;
private $price;


//コンストラクタを定義
public function __construct(string $name, int $price) {
$this->name = $name;
$this->price =$price;
}

//show_priceメソッドを作成
public function show_price(){
    echo $this-> price;
}
}

//インスタンス化する
$food = new Food('potato',250);


//Animalクラスの作成
class Animal {
//プロパティを定義する
private $name;
private $height;
private $weight;


//コンストラクタを定義
public function __construct(string $name, int $height, int $weight) {
    $this->name =$name;
    $this->height =$height;
    $this->weight =$weight;
    }
//show_heightメソッドを作成
public function show_height(){
echo $this-> height;
}

}

//インスタンス化する
$animal = new Animal('dog', 60, 5000);


//インスタンス$foodの各プロパティの値を出力する
print_r($food);
echo '<br>';
print_r($animal);
echo  '<br>';
$food->show_price();
echo  '<br>';
$animal->show_height();

?>


</body>
</html>