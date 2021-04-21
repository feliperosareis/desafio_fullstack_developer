$(document).ready(function(){

    loadMore();

});

// Função que faz a paginação.
function loadMore()
{
    let pageUrl = $('.btn-load-more').data('page');
    let html = "";

    $.ajax({
            url: pageUrl,
            type: 'get',
            success: function (data) {

                $.each(data['products'], function(index, val){

                    let oldPrice    = currencyFormat(val.oldPrice);
                    let price       = currencyFormat(val.price);
                    let installment = currencyFormat(val.installments.value);
                    
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
                
                
                $('.btn-load-more').data('page', 'https://'+data.nextPage);

            }
        })
        .fail(function(data){
            console.log('fail...');

        });
}

function currencyFormat(value) {
    let result = value.toLocaleString('pt-BR', {
        minimumFractionDigits: 2
    });

    return result;
}