@extends('layout.navbar')
@extends('layout.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibition Details Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @include('layout.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Exhibition Details</h2>
                <form action="{{ route('exhibition.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="artistName" class="form-label">Exhibition Name</label>
                        <input type="text" class="form-control @error('Name') is-invalid @enderror" id="artistName" placeholder="Enter Exhibition Name" name="Name" value="{{ old('Name') }}">
                        @error('Name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="artistBio" class="form-label">Exhibition Bio</label>
                        <textarea class="form-control @error('Bio') is-invalid @enderror" id="artistBio" rows="3" placeholder="Enter Exhibition Details" name="Bio">{{ old('Bio') }}</textarea>
                        @error('Bio')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="artistDate" class="form-label">Expected Date</label>
                        <input type="date" class="form-control @error('Date') is-invalid @enderror" id="artistDate" placeholder="Enter Expected Date" name="Date" value="{{ old('Date') }}">
                        @error('Date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="artistVenue" class="form-label">Venue</label>
                        <textarea class="form-control @error('Venue') is-invalid @enderror" id="artistVenue" placeholder="Enter Venue" name="Venue">{{ old('Venue') }}</textarea>
                        @error('Venue')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="image-inputs">
                        <div class="mb-3">
                            <label for="image0" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image0" name="images[]">
                        </div>
                    </div>
                    <button type="button" id="add-image" class="btn btn-secondary mb-3">Add Another Image</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#add-image').on('click', function() {
                const imageInputs = $('#image-inputs');
                const inputCount = imageInputs.children().length;
                const newInput = `
                    <div class="mb-3">
                        <label for="image${inputCount}" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image${inputCount}" name="images[]">
                    </div>
                `;
                imageInputs.append(newInput);
            });
        });
    </script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>