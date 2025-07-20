<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product - CLOTHESIS</title>
  <link rel="stylesheet" href="Asets/profil.css" />
  <link rel="stylesheet" href="Asets/product.css" />
</head>
<body>
  <?php include 'partials/header.php'; ?>

  <main class="content">
    <h2 style="text-align: center; margin-top: 30px;">GALERY</h2>

    <div class="product-container">
      <?php
        $products = [
          [
            "name" => "Dress Collective - dress tile",
            "image" => "Gambar 3.jpg",
            "rating" => "4.6",
            "sold" => "10RB+",
            "price" => "200.710",
            "bonus" => "EXTRA BONUS"
          ],
          [
            "name" => "Korean Feminine - long dress",
            "image" => "Gambar 4.jpg",
            "rating" => "4.6",
            "sold" => "10RB+",
            "price" => "200.710",
            "bonus" => "EXTRA BONUS"
          ],
          [
            "name" => "Pearletta Ellegan Dress",
            "image" => "Gambar 6.jpg",
            "rating" => "4.8",
            "sold" => "15RB+",
            "price" => "350.000",
            "bonus" => "BEST SELLER"
          ],
          [
            "name" => "Romantic Flare Sleeve Dress",
            "image" => "Gambar 7.jpg",
            "rating" => "4.5",
            "sold" => "8RB+",
            "price" => "175.500",
            "bonus" => "NEW ARRIVAL"
          ],
          [
            "name" => "Clarabelle Lolita Dress",
            "image" => "Gambar 8.jpg",
            "rating" => "4.7",
            "sold" => "12RB+",
            "price" => "285.000",
            "bonus" => "TRENDING"
          ],
          [
            "name" => "Valerie luxe dress",
            "image" => "Gambar 9.jpg",
            "rating" => "4.9",
            "sold" => "20RB+",
            "price" => "195.000",
            "bonus" => "HOT SALE"
          ],
          [
            "name" => "Calestine Modest Dress",
            "image" => "Gambar 10.jpg",
            "rating" => "4.6",
            "sold" => "9RB+",
            "price" => "225.000",
            "bonus" => "LIMITED"
          ],
          [
            "name" => "Bohemian Maxi Dress",
            "image" => "Gambar 11.jpg",
            "rating" => "4.4",
            "sold" => "6RB+",
            "price" => "165.000",
            "bonus" => "SALE 30%"
          ],
          [
            "name" => "Little Pink Dress",
            "image" => "Gambar 12.jpg",
            "rating" => "4.8",
            "sold" => "18RB+",
            "price" => "250.000",
            "bonus" => "CLASSIC"
          ],
          [
            "name" => "Wedding Guest Dress",
            "image" => "Gambar 15.jpg",
            "rating" => "4.7",
            "sold" => "11RB+",
            "price" => "320.000",
            "bonus" => "PREMIUM"
          ],
        ];

        foreach ($products as $product) {
          echo '
          <div class="card">
            <div class="bonus">'.$product["bonus"].'</div>
            <img src="'.$product["image"].'" alt="'.$product["name"].'">
            <div class="name">'.$product["name"].'</div>
            <div class="rating">⭐ '.$product["rating"].' / '.$product["sold"].' terjual</div>
            <div class="price">Rp. '.$product["price"].'</div>
          </div>';
        }
      ?>
    </div>
  </main>

  <?php include 'partials/footer.php'; ?>
</body>
</html>