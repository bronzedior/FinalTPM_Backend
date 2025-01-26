<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Page 2</title>
    <!-- Bootstrap 5 CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Page 2: Additional Information</h1>

        <form action="{{ route('auth.registerNonBinusian') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Full Name -->
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                       id="full_name" name="full_name" value="{{ old('full_name') }}">
                @error('full_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- WhatsApp -->
            <div class="mb-3">
                <label for="whatsapp" class="form-label">WhatsApp Number</label>
                <input type="text" class="form-control @error('whatsapp') is-invalid @enderror"
                       id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                @error('whatsapp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Line ID -->
            <div class="mb-3">
                <label for="line_id" class="form-label">Line ID</label>
                <input type="text" class="form-control @error('line_id') is-invalid @enderror"
                       id="line_id" name="line_id" value="{{ old('line_id') }}">
                @error('line_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- GitHub ID -->
            <div class="mb-3">
                <label for="github_id" class="form-label">GitHub ID</label>
                <input type="text" class="form-control @error('github_id') is-invalid @enderror"
                       id="github_id" name="github_id" value="{{ old('github_id') }}">
                @error('github_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Birthplace -->
            <div class="mb-3">
                <label for="birthplace" class="form-label">Birthplace</label>
                <input type="text" class="form-control @error('birthplace') is-invalid @enderror"
                       id="birthplace" name="birthplace" value="{{ old('birthplace') }}">
                @error('birthplace')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Birthdate -->
            <div class="mb-3">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" class="form-control @error('birthdate') is-invalid @enderror"
                       id="birthdate" name="birthdate" value="{{ old('birthdate') }}">
                @error('birthdate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- CV Upload -->
            <div class="mb-3">
                <label for="cv" class="form-label">Upload CV (PDF)</label>
                <input type="file" class="form-control @error('cv') is-invalid @enderror"
                       id="cv" name="cv">
                @error('cv')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- ID Card Upload -->
            <div class="mb-3">
                <label for="id_card" class="form-label">ID Card (Non-Binusian, JPG/PNG)</label>
                <input type="file" class="form-control @error('id_card') is-invalid @enderror"
                       id="id_card" name="id_card">
                @error('id_card')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap 5 JS for validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
