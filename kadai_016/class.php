<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
   <p>
   <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            // show_priceメソッドを追加
            public function show_price() {
                echo "価格: " . $this->price . "円";
            }
        }
        // インスタンス化する
        $food = new Food('potato', 250);
        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        ?>
        </P>
        <P>
   <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;
            // コンストラクタを定義する
            public function __construct(string $name, int $height,string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            // show_heightメソッドを追加
            public function show_height() {
                echo "高さ: " . $this->height . "cm";
            }
        }
        // インスタンス化する
        $animal = new Animal('dog', 250,5000);
        // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
        ?>
        
    </p>
      </body>
      </html>