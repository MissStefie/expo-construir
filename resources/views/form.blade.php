<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Input masks</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nombre completo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese el nombre">
            </div>
        </div>

        <div class="form-group">
            <label>Número de teléfono:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese el número telefónico"
                    data-inputmask='"mask": "(9999) 999-999"' data-mask>
            </div>
        </div>

        <div class="form-group">
            <label>Correo electrónico</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el correo">
            </div>
        </div>

        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
    </div>
</div>