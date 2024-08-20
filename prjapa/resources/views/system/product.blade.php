<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<div class="modal">
  <div class="modal-content">
    <div class="header-modal" style="padding-right: 120px; padding-left: 120px;">
      <span class="close" style="display: flex; flex-direction: row-reverse;">&times;</span>
      <h1>Nome do Produto</h1>
      <h3>Detalhes do produto</h3>
    </div>
    <div class="product" style="display: flex; justify-content: center; padding-right: 120px; padding-left: 120px;">
        <div class="product-data" style="padding-left: 0px;">
            <div class="image-upload">

            </div>
            <div class="images" style="display: flex; gap: 10px;padding-top: 20px; height: 25%;">
                <div class="other-images">
                  
                </div>
                <div class="other-images">
                  
                </div>
                <div class="other-images">
                  
                </div>
            </div>
        </div>
        <div class="product-data">
            <h4>Descrição:</h4>
            <p> Produto Exemplo</p>
            <h4>Tamanho:</h4>
            <p> Este é um exemplo de produto com uma descrição detalhada.</p>
            <h4>Valor:</h4>
            <p> R$ 199,99</p>
            <div class="quantity" style="display: flex; flex-direction: row;">
                <div class="quantity-selector">
                  <button class="quantity-button" id="decrease">-</button>
                  <input type="number" id="quantity" value="1" min="1" readonly>
                  <button class="quantity-button" id="increase">+</button>
                </div>
                <button>
                    Adicionar R$0,00
                </button>
            </div>
        </div>
   </div>
</div>

<style>
  h4{
    color:FF9B42;
  }
  
  h3, h1{
    color:4F1271;
  }
  
  button{
    color:FFF;
    background-color:4F1271;
  }
  
  .product-data {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column; 
}
  
  .image-upload {
    height: 100%; width:100%;
    border:3px dashed #4F1271;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}
  .other-images{
    height:100%;
    padding:05px;
    width:100%;
    border:3px dashed red;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}
</style>
</body>