<!DOCTYPE html>
<html>
<head>
    <title>Form Processing</title>
</head>
<body>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="post" action="/form">
        @csrf
        <label for="field_name">Field Name:</label>
        <input type="text" name="field_name" id="field_name" value="{{ old('field_name') }}">
        @error('field_name')
            <p>{{ $message }}</p>
        @enderror

        <!-- Tambahkan field dan validasi lainnya -->

        <button type="submit">Submit</button>
    </form>

</body>
</html>
