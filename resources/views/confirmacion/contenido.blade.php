<div class="card-body rounded-sm d-flex flex-column align-items-center justify-content-center">
    <h3 class="title-2">Se ha enviado una verificación a tu dirección de correo con éxito</h3>

    <form action="{{ route('inicio') }}" method="GET">
        @csrf
        <button type="submit" class="btn">Volver a inicio</button>
    </form>
</div>
