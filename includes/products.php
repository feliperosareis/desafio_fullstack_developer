<section class="products" id="products">
    <div class="container">
        <div class="separator"><span>Sua seleção especial</span></div>

        <ul class="products-list">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <li>
                    <a href="">
                        <div class="box-img">
                            <img src="https://picsum.photos/125/150?grayscale" alt="">
                        </div>
                        <div class="box-info">
                            <p class="product-name">Nome do produto</p>
                            <p class="product-description">
                                Descrição do produto um pouco maior, com duas linhas ou três que explica melhor do que se trata.
                            </p>
                            <p class="product-old-price">De: R$ <span></span></p>
                            <p class="product-price">Por: R$ <span></span></p>
                            <p class="product-installments">ou 2x de R$59,90</p>

                            <button class="btn-default btn-buy full-width">Comprar</button>
                        </div>
                    </a>
                </li>
            <?php endfor; ?>

        </ul>

        <button class="btn-default btn-load-more auto" onclick="loadMore();">Ainda mais produtos aqui!</button>
    </div>
</section>