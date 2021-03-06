$(document).ready(function(){

    loadMore();

    if (success === "1")    // Exibe um alert se o e-mail tiver sido enviado.
    {
        alert('E-mail enviado com sucesso!');
    }
});

// Função que faz a paginação.
function loadMore()
{
    let pageUrl = $('.btn-load-more').data('page');     // Pega a url da primeira págnia de produtos contida no botão "Ainda mais produtos aqui";
    let html = "";

    $.ajax({
            url: pageUrl,
            type: 'get',
            success: function (data) {

                $.each(data['products'], function(index, val){

                    let oldPrice    = currencyFormat(val.oldPrice);
                    let price       = currencyFormat(val.price);
                    let installment = currencyFormat(val.installments.value);
                    
                    // Monta os blocos dos produtos a serem carregados na página.
                    html += "<li class='flex'>";
                    html += "<div class='box-img'>";
                    html += "<img src='" + val.image + "' title='" + val.name + "'>";
                    html += "</div>";
                    html += "<div class='box-info'>";
                    html += "<p class='product-name'>" + val.name + "</p>";
                    html += "<p class='product-description'>" + val.description + "</p>";
                    html += "<p class='product-old-price'>De: R$ <span>" + oldPrice + "</span></p>";
                    html += "<p class='product-price'>De: R$ <span>" + price +"</span></p>";
                    html += "<p class='product-installments'>ou " + val.installments.count + " de R$ " + installment +"</p>";
                    html += "<button class='btn-default btn-buy full-width'>Comprar</button>";
                    html += "</div>";
                    html += "</li>";
                    
                });
                
                $('.products-list').append(html);
                
                // Atualiza a url do botão para carregar a próxima página.
                $('.btn-load-more').data('page', 'https://'+data.nextPage);

            }
        })
        .fail(function(data){
            console.log('fail...');
        });
}

// Formata uma string de valor em moeda.
function currencyFormat(value) {
    let result = value.toLocaleString('pt-BR', {
        minimumFractionDigits: 2
    });

    return result;
}