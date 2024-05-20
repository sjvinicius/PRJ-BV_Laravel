<header class="header" style="background-color:var(--primary);">
    <div class="container" style="height: 2rem;">
        <div class="row d-flex gap-2 align-items-center justify-content-between h-100">
<<<<<<< HEAD
            <div class="d-flex p-0 col-8 gap-3 align-items-center">
                <div>
                    <p>img</p>
                </div>
                <div class="d-flex ">
=======
            <div class="d-flex col-8 gap-3 align-items-center">
                <div class="d-flex align-items-center gap-5">
                    <a href="/products" style="width:15%">
                        <img src="{{asset("/img/Logo.png")}}" alt="" class="w-100">
                    </a>
>>>>>>> 461ffe23e3d3b2cf6b84dbbc6a55a40e9bb3da1a
                    <p>Olá
                        <strong class="active">Bruno Hiramuki</strong>
                        é bom ter você aqui !
                    </p>
                </div>
            </div>
<<<<<<< HEAD
            <div class="d-flex p-0 col-3 gap-3 justify-content-end">
                <a class="@if (\Request::route()->getName() == 'products') active disabled @endif " href="/products">Produtos</a>
=======
            <div class="d-flex col-3 gap-3 justify-content-end">
                <a class="@if (\Request::route()->getName() == 'products') active disabled @endif "
                    href="/products">Produtos</a>
>>>>>>> 461ffe23e3d3b2cf6b84dbbc6a55a40e9bb3da1a
                <a class="@if (\Request::route()->getName() == 'myreservation') active disabled @endif"
                    href="/myreservation">Reservas</a>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-power-off disabled"></i>
            </div>

        </div>
    </div>
</header>
<<<<<<< HEAD
=======
{{-- @endSection --}}
>>>>>>> 461ffe23e3d3b2cf6b84dbbc6a55a40e9bb3da1a
