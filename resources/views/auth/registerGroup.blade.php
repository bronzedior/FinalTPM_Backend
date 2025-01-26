<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
    <h1>Register</h1>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('auth.registerGroup') }}">
        @csrf
        <div class="mb-3">
            <label for="group_name" class="form-label">Group Name:</label>
            <input type="text" class="form-control" id="group_name" name="group_name" value="{{ old('group_name') }}" required>
            @error('group_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <small class="form-text text-muted">Password harus memiliki huruf besar, huruf kecil, angka, dan simbol.</small>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="binusian_status" class="form-label">Status:</label>
            <select class="form-control" name="binusian_status" id="binusian_status" required>
                <option value="Binusian" {{ old('binusian_status') == 'Binusian' ? 'selected' : '' }}>Binusian</option>
                <option value="Non-Binusian" {{ old('binusian_status') == 'Non-Binusian' ? 'selected' : '' }}>Non-Binusian</option>
            </select>
            @error('binusian_status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
</body>
</html>
