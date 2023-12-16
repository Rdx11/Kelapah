<div class="alert alert-{{ $level }} mt-3" role="alert">
    <ul style="color: #F25961;">
        @php
            $message = $errors->all();
        @endphp
        @foreach ($message as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
