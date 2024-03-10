@if ($errors->any())
    <div class="alert alert-danger" style="position: absolute;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif