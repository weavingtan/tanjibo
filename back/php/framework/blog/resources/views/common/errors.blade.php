
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-info">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
