
    <footer>
      <p>2016 - 2017 &copy; Pharmaco30, une marque du groupe VroumVroum Doliprane</p>
    </footer>

    <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "<?= $product['name'] ?>",
      "image": [
        "<?= $product['img'] ?>"
       ],
      "description": "<?= $product['desc'] ?>",
      "brand": {
        "@type": "Thing",
        "name": "<?= $product['brand'] ?>"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= $product['score'] ?>",
        "reviewCount": "1"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "<?= $product['currency'] ?>",
        "price": "<?= $product['price'] ?>"
      }
    }
    </script>

  </body>

</html>
