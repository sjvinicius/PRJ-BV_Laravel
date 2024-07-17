<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <button id="openCartBtn">Abrir Carrinho</button>

    <div class="cart">
        <div class="cart-content">
            <div class="cart-header">
                <span class="close">&times;</span>
                <h2>Meu Carrinho</h2>
            </div>
            <div class="cart-body">
                <ul id="cartItems">
                    <li class="cart-item">
                        <div class="item-left">
                            <img src="caminho_para_imagem" alt="Imagem do Produto">
                        </div>
                        <div class="item-middle">
                            <h3>Título do Produto</h3>
                            <p>Descrição do Produto</p>
                            <div class="quantity-box">
                                <button class="quantity-btn minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-btn plus">+</button>
                            </div>
                        </div>
                        <div class="item-right">
                            <span class="item-price">R$ <span class="price-value">10.00</span></span>
                            <button class="btn-save">Salvar</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-subtotal">
                <span>Total: R$ <span id="cartTotal">0.00</span></span>
            </div>
            <div class="cart-footer">
                <button class="btn-cancel" id="closeModalBtn">Continuar Comprando</button>
                <button class="btn-confirm">Finalizar Pedido</button>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    .cart {
        display: none; /* Esconde o modal por padrão */
        position: fixed; /* Posição fixa na tela */
        z-index: 1; /* Fica acima de outros elementos */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Rolagem se necessário */
        background-color: rgba(0,0,0,0.4); /* Fundo semi-transparente */
    }

    .cart-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border-radius: 5px;
        width: 90%;
        max-width: 400px;
    }

    .cart-header {
        display: flex; 
        align-items: center;
        justify-content: center; 
        position: relative; 

        .close {
            position: absolute; 
            left: 0; 
        }
    }

    .cart-header h2 {
        color: #4F1271;
        font-size: 45px;
        margin: 0 auto; 
    }

    .close {
        background-color: #4F1271;
        color: #fff;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
        padding: 1px 5px;
        border-radius: 5px;
    }

    /* .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
    } */

    .cart-body {
        padding-top: 10px;
        padding-bottom: 20px;
    }

    #cartItems {
        list-style-type: none;
        padding: 0;
        border-color: #4F1271;
    }

    #cartItems li {
        border: 1px solid #4F1271;
        padding-bottom: 5px;
        padding: 30px; /* Espaçamento interno (padding) em todos os lados */
        .h2{
            font-size: 20px;
        }
        .h3{
            font-size: 15px;
        }
    }

    #cartItems li:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }


    .cart-footer {
        display: flex;
        justify-content: flex-end;
        margin-top: 10px;
        text-align: center;
    }

    .subtotal-cart{
        font-size: 25px;
        color: #4F1271;
        font-weight: bold;
        flex: auto;
        display: flex;
        align-items: center;
    }

    .cart-footer button {
        font-size: 20px;
        padding: 10px 20px;
        margin-left: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .btn-confirm {
        background-color: #FF9B42;
        color: white;
    }

    .btn-confirm:hover {
        background-color: #FF9B42;
    }




</style>

<script>

</script>