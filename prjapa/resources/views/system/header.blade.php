{{-- @extends('system.prelayout')

@section('header') --}}
<header class="header" style="background-color:var(--primary);">
    <div class="container" style="height: 2rem;">
        <div class="row d-flex gap-2 align-items-center justify-content-between h-100">
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
            <div class="d-flex col-3 gap-3 justify-content-end">
                <a class="@if (\Request::route()->getName() == 'products') active disabled @endif " href="/products">Produtos</a>
                <a class="@if (\Request::route()->getName() == 'myreservation') active disabled @endif"
                    href="/myreservation">Reservas</a>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-power-off disabled"></i>
            </div>

        </div>
    </div>
</header>
{{-- @endSection --}}
