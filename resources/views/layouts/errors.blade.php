@if ($errors->any())
    <div class="alert alert-danger">
    	<h5>Attention</h5>
        <ol >
            @foreach ($errors->all() as $error)
                <li style="display: inline;">{{ $error }}</li>

            @endforeach
        </ol>
    </div>
@endif