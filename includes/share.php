<section class="share" id="share">
    <div class="container">
        <div class="separator"><span><strong>Compartilhe a novidade</strong></span></div>

        <div class="share-container">
            <p class="text-center full-width">Quer que seus amigos também ganhem a lista personalizada deles? Preencha agora!</p>

            <form action="helper/mail.php" method="POST" class="full-width flex">
                <div class="box-50">
                    <div class="input-group">
                        <label for="#name">Nome do seu amigo:</label>
                        <input type="text" name="name" class="full-width" required minlength="3">
                    </div>
                </div>
                <div class="box-50">
                    <div class="input-group">
                        <label for="#email">E-mail dele:</label>
                        <input type="email" name="email" class="full-width" required>
                    </div>
                </div>

                <button class="btn-default auto">Enviar agora</button>
            </form>
        </div>
    </div>
</section>