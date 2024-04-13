<?php include 'products_home.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Minha Loja</a>
    </nav>

    <div class="container mt-5">
        <!-- Barra de pesquisa -->
        <input type="text" id="searchInput" placeholder="Pesquisar por título..." onkeyup="productsFilter()">

        <h1 class="mt-3">Lista de Produtos</h1>
        <div class="row mt-3" id="product-grid">
            <?php
            foreach ($products as $product) {

                if (isset($product['images']) && is_array($product['images']) && !empty($product['images'])) {
                    $firstImage = $product['images'][0];
                } else {
                    $firstImage = '../assets/default-featured-image.png';
                }
                echo '
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card">
                        <div class="ratio ratio-4x3">
                                <img src="' . $firstImage . '" class="card-img-top h-100" alt="' . $product['title'] . '">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">' . $product['title'] . '</h5>
                                <p class="card-text">' . $product['description'] . '</p>
                                <a href="pages/product_details.php?id=' . $product['id'] . '" class="btn btn-primary">Ver Mais</a>
                            </div>
                        </div>
                    </div>
                    ';
            }
            ?>
            <div id="no-products-message" style="display: none;">
                <p class="mt-3">
                    Nenhum produto encontrado.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="js/product.js"></script>
</body>

</html>