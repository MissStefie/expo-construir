<div class="card-body rounded-sm text-center d-flex flex-column align-items-center justify-content-center">
    <h3>Se ha enviado una verificación a tu dirección de correo con éxito</h3>

    <i class="far fa-check-circle icono mt-3 mb-3"></i>

    <form action="{{ route('inicio') }}" method="GET">
        @csrf
        <button type="submit" class="btn">Volver a inicio</button>
    </form>
</div>
