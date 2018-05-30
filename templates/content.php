
    <main class="product productContainer" itemscope itemtype="http://schema.org/Product">

      <div class="product productImage">
        <img itemprop="image" src="<?= $product['img'] ?>" alt="Boite Doliprane">
      </div>

      <div class="product productDesc">

        <h1 class="product productName" itemprop="name"><?= $product['name'] ?></h1>
        <h2 class="product productBrand" itemprop="brand"><?= $product['brand'] ?></h2>
        <h3 class="product productStock"><?= $product['stockRemain'] ? 'En stock' : 'Indisponible'?></h3>

        <div class="product productScore" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
          <h3 class="product productScoreNumber"><span itemprop="ratingValue"><?= $product['score'] ?></span> / 5</h3>
          <span itemprop="reviewCount" style="display:none">1</span>
          <img class="product productScoreStars" src="star-rating.png" alt="Score Rating Stars" style="clip: rect(0, <?= $product['score'] / 5 * 60 ?>px, 13px, 0);">
        </div>

        <p class="product productDesc" itemprop="description"><?= $product['desc'] ?></p>
        <p class="product productFormat"><?= $product['dispoFormat'] ?></p>
        <p>Pharmaco30 vous livre gratuitement ce produit chez vous en moins de 30min !</p>

        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
          <meta itemprop="priceCurrency" content="<?= $product['currency'] ?>" />
          <h2 class="product productPrice"><span itemprop="price"><?= $product['price'] ?></span><?php if ($product['currency'] === 'EUR') echo '€' ?></h2>
        </span>
        <input class="product productBuy" type="button" name="" value="Acheter">

      </div>

    </main>
