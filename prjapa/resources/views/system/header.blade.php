<header class="header" style="background-color:var(--primary);">
    <div class="container" style="height: 2rem;">
        <div class="row d-flex gap-2 align-items-center justify-content-between h-100">
            <div class="d-flex col-8 gap-3 align-items-center">
                <div class="d-flex align-items-center gap-5">
                    <a href="/products" style="width:15%">
                        <img src="{{ asset('/img/Logo.png') }}" alt="" class="w-100">
                    </a>
                    <p>Olá
                        <strong class="active">Bruno Hiramuki</strong>
                        é bom ter você aqui !
                    </p>
                </div>
            </div>
            <div class="d-flex col-3 gap-3 justify-content-end">
                <a class="@if (\Request::route()->getName() == 'admin') active disabled @endif " href="/admin">Admin</a>
                <a class="@if (\Request::route()->getName() == 'products') active disabled @endif " href="/products">Produtos</a>
                <a class="@if (\Request::route()->getName() == 'myreservation') active disabled @endif" href="/myreservation">Reservas</a>
                <i class="fa-solid fa-cart-shopping" data-bs-toggle="offcanvas" data-bs-target="#cartcanvas"
                    aria-controls="cartcanvas"></i>

                <i class="fa-solid fa-power-off disabled"></i>
            </div>

        </div>
    </div>

    <div class="offcanvas offcanvas-end px-3" data-bs-scroll="true" tabindex="-1" id="cartcanvas"
        aria-labelledby="cartcanvasLabel" style="width: 35vw;">
        {{-- <div class="offcanvas-header"> --}}
        <div class="p-3">
            <div class="d-flex align-items-center justify-content-between ">
                <span data-bs-dismiss="offcanvas" role="button" class="c-pointer material-symbols-outlined"
                    style="color: var(--primary);font-size: 1.5rem;">
                    disabled_by_default
                </span>
                <h1 class="text-primary" style="font-weight: 500">Meu Carrinho</h1>
            </div>
            <div class="d-flex py-3 align-items-center justify-content-between">
                <span class="text-primary" style="font-size:1.4rem;color:var(--primary);font-weight:300">R$ 0.00</span>
                <button class="btn-confirm px-3 py-2 d-flex gap-3">Finalizar Pedido <span style="font-size: 1rem"
                        class="material-symbols-outlined">
                        shopping_cart_checkout
                    </span>
                </button>
            </div>
        </div>
        <div class="offcanvas-body">
            <ul class="p-0">
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
                <li class="gap-3 row align-items-center"
                    style="border-top:1px solid var(--primary); border-bottom:1px solid var(--primary)">
                    <div class="p-0 py-3 gap-3 col-12 d-flex align-items-center">
                        <div class="col-3 d-flex align-items-center" style="background-color:violet">
                            <img class="w-100" src="{{ asset('/img/Logo.png') }}" alt="Imagem do Produto">
                        </div>
                        <div class="col-6">
                            <h4>Título do Produto</h4>
                            <p>Descrição do Produto</p>
                            <div class="d-flex">
                                <div class="d-flex align-items-center"
                                    style="background-color: var(--primary);border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            horizontal_rule
                                        </span>
                                    </button>
                                    <input class="quantity" min="0" max="99" name="quantity" value="1"
                                        type="number" style="border-radius: 10px">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        style="background-color:var(--primary);" class="p-2 m-0">
                                        <span style="font-size:.7rem" class="material-symbols-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-3">
                            <span class="text-primary" style="font-size:.9rem;color:var(--primary);font-weight:300">R$
                                0.00</span>
                            <button class="btn-confirm px-3 py-2 d-flex gap-3">Salvar
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</header>

{{-- @endSection --}}
