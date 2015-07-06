@if (isset($messages) && is_array($messages))
    <div id="{{ $id or 'message' }}">
        <ul>
            @foreach ($messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
