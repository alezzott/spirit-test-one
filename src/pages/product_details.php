<?php include 'product_process.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="/styles/details.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark p-3">
        <a class="navbar-brand" href="/">Alezzo shop</a>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php if (!empty($product['images']) && is_array($product['images'])): ?>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($product['images'] as $image): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image; ?>" class="img-fluid w-100 h-100"
                                        alt="<?php echo $product['title']; ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                <?php else: ?>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../assets/default-featured-image.png" class="img-fluid w-100 h-100"
                                    alt="Imagem Padrão">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <div class="col-md-6">
                <h2 class="mt-3"><?php echo $product['title']; ?></h2>
                <p><?php echo $product['fullDescription']; ?></p>
                <p><strong>Preço:</strong> R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ratingModal">
                    Faça uma avaliação
                </button>

                <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ratingModalLabel">Faça uma avaliação</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="rating">
                                    <button class="star" data-value="5"><i class="ph ph-star fs-3"></i></button>
                                    <button class="star" data-value="4"><i class="ph ph-star fs-3"></i></button>
                                    <button class="star" data-value="3"><i class="ph ph-star fs-3"></i></button>
                                    <button class="star" data-value="2"><i class="ph ph-star fs-3"></i></button>
                                    <button class="star" data-value="1"><i class="ph ph-star fs-3"></i></button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3" id="average-rating">Avaliação média: 0</div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/stars.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {

            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>