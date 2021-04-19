<?php include("./includes/header.php") ?>

<div class="top-background"></div>
<header class="top-header">

    <div class="container">
        <p class="text-center color-white">uma seleção de produtos</p>
        <h1 class="text-center color-white">especial para você</h1>

        <p class="text-center color-white">Todos os produtos desta lista foram selecionados a partir da sua navegação. Aproveite!</p>

        <div class="menu">
            <a href="">
                <button>Conheça a Linx</button>
            </a>
            <a href="">
                <button>Ajude o Algoritmo</button>
            </a>
            <a href="">
                <button>Seus produtos</button>
            </a>
            <a href="">
                <button>Compartilhe</button>
            </a>

        </div>
    </div>
</header>

<section class="form">
    <div class="container">
        <div class="flex-box">
            <div class="box-70 mb-30">
                <h4 class="title">Ajude o algoritmo a ser mais certeiro</h4>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, tempora ipsa harum temporibus at quis consequatur nam possimus perferendis aspernatur cupiditate sed assumenda nulla eos illo veniam, quod quia facere reiciendis maxime nemo, veritatis placeat suscipit? Officia veritatis corporis alias ratione distinctio nam rem ex vitae ipsam optio vero rerum voluptatibus ducimus nemo officiis ea, deserunt magnam aliquam dicta cumque soluta id est quia? Harum magnam nulla velit odit, totam nihil quia, aspernatur recusandae error sunt eaque, quam eum dicta consequatur modi quas vel distinctio! Pariatur, consectetur. Quae impedit, accusantium, sint, error qui dolores deleniti earum vero quis modi distinctio!
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quam aspernatur eligendi harum officiis enim delectus saepe fugit ea. Libero quis unde dolorum nobis cum? Quod ab cum voluptates error? Ut, itaque similique! Consequuntur sequi labore ut, iste sunt quibusdam, aperiam quo dolore itaque quis accusantium necessitatibus cum nesciunt quae.
                </p>
            </div>
            <div class="box-30 mb-30">
                <form action="">
                    <div class="input-group">
                        <label for="#name">Seu nome</label>
                        <input type="text" name="name" class="full-width">
                    </div>
                    <div class="input-group">
                        <label for="#name">E-mail</label>
                        <input type="email" name="email" class="full-width">
                    </div>
                    <div class="input-group">
                        <label for="#name">CPF</label>
                        <input type="text" name="name" class="full-width">
                    </div>

                    <div class="input-group">
                        <label for="">
                            <input type="radio" name="gender" value="m"> Masculino
                        </label>

                        <label for="">
                            <input type="radio" name="gender" value="f"> Feminino
                        </label>
                    </div>

                    <button class="btn-default">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <div class="separator"><span>Sua seleção especial</span></div>

        <ul class="products-list">
            <?php for( $i = 0; $i < 8; $i++) : ?>
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
        
                            <button class="btn-default btn-buy">Comprar</button>
                        </div>
                    </a>
                </li>
            <?php endfor; ?>
            
        </ul>
    </div>
</section>

<section class="share">
    <div class="container">
        <div class="separator"><span><strong>Compartilhe a novidade</strong></span></div>

        <div class="share-container">
            <p class="text-center full-width">Quer que seus amigos também ganhem a lista personalizada deles? Preencha agora!</p>

            <form action="" class="full-width flex">
                <div class="box-50">
                    <div class="input-group">
                        <label for="#name">name</label>
                        <input type="text" name="name" class="full-width">
                    </div>
                </div>
                <div class="box-50">
                    <div class="input-group">
                        <label for="#email">CPF</label>
                        <input type="email" name="email" class="full-width">
                    </div>
                </div>

            </form>
        </div>


    </div>
</section>

<?php include("./includes/footer.php") ?>