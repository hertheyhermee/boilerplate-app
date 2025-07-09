<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Form</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Instrument Sans', sans-serif; background: #f9f9f9; padding: 2rem; }
        .form-container { background: #fff; max-width: 400px; margin: 2rem auto; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px #0001; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: 500; }
        input[type="text"], input[type="email"] { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #f53003; color: #fff; border: none; padding: 0.75rem 1.5rem; border-radius: 4px; font-weight: 600; cursor: pointer; }
        .success { background: #e6ffed; color: #1a7f37; padding: 0.75rem; border-radius: 4px; margin-bottom: 1rem; }
        .error { color: #f53003; font-size: 0.95em; margin-bottom: 0.5rem; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Demo Form</h2>
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="/demo-form">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')<div class="error">{{ $message }}</div>@enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html> 