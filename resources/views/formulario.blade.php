<div class="card-body rounded-sm d-flex flex-column align-items-center justify-content-center">
    <div class="form-group">
        <label class="col-sm-9 col-form-label">Nombre completo:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-9 col-form-label">Número de teléfono:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text" name="telefono" id="telefono" class="form-control"
                placeholder="Ingrese el número telefónico" data-inputmask='"mask": "(9999) 999-999"' data-mask>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-9 col-form-label">Correo electrónico</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="correo" id="correo" class="form-control" id="exampleInputEmail1"
                placeholder="Ingrese el correo">
        </div>
    </div>

    <button type="submit" class="btn">Inscribirme</button>
</div>
