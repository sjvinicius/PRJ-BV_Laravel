<style>
    :root {
        --primary: #4F1271;
        --secondary: #BFACC8;
        --tertiary: #FF9B42;
    }

    .text-primary: {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 200;
        font-style: normal;
    }

    .text-secondary: {
        font-family: "Lancelot", serif;
        font-weight: 400;
        font-style: normal;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        border: none;
    }

    body {
        min-width: 100vw;
        min-height: 100vh;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    label,
    button {
        margin-bottom: .3rem;
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 200;
        font-style: normal;
    }

    .header p,
    .header h1,
    .header h2,
    .header h3,
    .header h4,
    .header h5,
    .header label,
    .header button {
        color: #FFF;
        font-size: .8rem;
        padding: 0 !important;
        margin: 0 !important;
    }

    .active {
        color: var(--tertiary) !important
    }

    .header {
        height: 2rem
    }

    a {
        text-decoration: none !important;
        font-size: .8rem;
        color: #FFF !important;
    }

    a:not(.disabled):hover {
        color: var(--secondary) !important;
    }

    i {
        color: #FFF;
        cursor: pointer;
    }

    i:not(.disabled):hover {
        color: #FFF;
        cursor: pointer;
    }

    .fa-power-off {
        color: #F00 !important;
    }

</style>
<div class="header" style="background-color:var(--primary);">
    <div class="container" style="height: 2rem;">
        <div class="row d-flex gap-2 align-items-center h-100">
            <div class="d-flex col-8 gap-3 align-items-center">
                <div>
                    <p>img</p>
                </div>
                <div class="d-flex ">
                    <p>Olá
                        <strong class="active">Bruno Hiramuki</strong>
                        é bom ter você aqui !
                    </p>
                </div>
            </div>
            <div class="d-flex col-3 gap-2">
                <a class="active disabled" href="#">Produtos</a>
                <a href="/cart">Reservas</a>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-power-off disabled"></i>
            </div>

        </div>
    </div>
</div>
