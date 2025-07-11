<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Artist - Multan Art Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            padding: 2rem 0;
        }
        .edit-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 30px;
            margin-top: 50px;
            margin-bottom: 50px;
            transition: transform 0.3s ease;
        }
        .edit-container:hover {
            transform: translateY(-5px);
        }
        .edit-title {
            color: #343a40;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        .edit-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #00f2fe, #4facfe);
            margin: 10px auto;
            border-radius: 2px;
        }
        .image-preview {
            height: 150px;
            width: 100%;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 2px solid #dee2e6;
        }
        .profile-image-preview {
            max-width: 150px;
            max-height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 3px solid #4facfe;
        }
        .btn-update {
            background: linear-gradient(135deg, #00f2fe, #4facfe);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-update:hover {
            background: linear-gradient(135deg, #00d4e6, #3f9bfe);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .btn-add-more {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-add-more:hover {
            background: linear-gradient(135deg, #e6355a, #e04327);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .existing-image {
            position: relative;
            margin-bottom: 20px;
        }
        .delete-image {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(220, 53, 69, 0.8);
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .delete-image:hover {
            background: rgba(220, 53, 69, 1);
        }
        .image-group {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px dashed #dee2e6;
        }
        .form-control, .form-select {
            border: none;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        }
        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 5px rgba(0,242,254,0.5);
            border-color: #00f2fe;
        }
        .invalid-feedback {
            font-size: 0.85rem;
        }
        .alert {
            border-radius: 5px;
            padding: 0.75rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="edit-container">
                    <h2 class="edit-title">Edit Artist Details</h2>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Error Message -->
                    @if(session('error'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fas fa-exclamation-circle me-2"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('artist.update', $artist->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Profile Image -->
                        <div class="mb-3 text-center">
                            <label for="profile_image" class="form-label fw-bold">Profile Image</label>
                            <div>
                                <img src="{{ asset($artist->profile_image) }}" class="profile-image-preview" alt="Profile Image">
                            </div>
                            <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*">
                            @error('profile_image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Name -->
                        <div class="mb-3">
                            <label for="artistName" class="form-label">Artist Name</label>
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="artistName" name="Name" value="{{ old('Name', $artist->Name) }}" required>
                            @error('Name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Bio -->
                        <div class="mb-3">
                            <label for="artistBio" class="form-label">Artist Bio</label>
                            <textarea class="form-control @error('Bio') is-invalid @enderror" id="artistBio" rows="3" name="Bio" required>{{ old('Bio', $artist->Bio) }}</textarea>
                            @error('Bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Contact Info -->
                        <div class="mb-3">
                            <label for="artistContact" class="form-label">Contact Phone Number</label>
                            <input type="text" class="form-control @error('Contact') is-invalid @enderror" id="artistContact" name="Contact" required value="{{ old('Contact', $artist->Contact) }}">
                            @error('Contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Email -->
                        <div class="mb-3">
                            <label for="artistEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('Email') is-invalid @enderror" id="artistEmail" name="Email" required value="{{ old('Email', $artist->Email) }}">
                            @error('Email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Country -->
                        <div class="mb-3">
                            <label for="artistCountry" class="form-label">Country</label>
                            <select class="form-select @error('Country') is-invalid @enderror" id="artistCountry" name="Country" required>
                                <option value="" disabled>Select a country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country }}" {{ old('Country', $artist->Country) == $country ? 'selected' : '' }}>{{ $country }}</option>
                                @endforeach
                            </select>
                            @error('Country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Address -->
                        <div class="mb-3">
                            <label for="artistAddress" class="form-label">Address</label>
                            <textarea class="form-control @error('Address') is-invalid @enderror" id="artistAddress" rows="3" name="Address" required>{{ old('Address', $artist->Address) }}</textarea>
                            @error('Address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Existing Artworks -->
                        <h4 class="mt-4 mb-3">Existing Artworks</h4>
                        <div class="row">
                            @foreach($artist->images as $image)
                                <div class="col-md-4 existing-image">
                                    <img src="{{ asset($image->image_path) }}" class="image-preview">
                                    <input type="text" class="form-control mb-2" name="existing_comments[]" value="{{ $image->comment }}" placeholder="Comment">
                                    <input type="number" step="0.01" class="form-control mb-2" name="existing_prices[]" value="{{ $image->price }}" placeholder="Price">
                                    <input type="number" class="form-control mb-2" name="existing_years[]" value="{{ $image->year }}" placeholder="Year (e.g., 2023)">
                                    <input type="text" class="form-control mb-2" name="existing_prints[]" value="{{ $image->print }}" placeholder="Print Type (e.g., Giclée)">
                                    <input type="text" class="form-control mb-2" name="existing_print_sizes[]" value="{{ $image->print_size }}" placeholder="Print Size (e.g., 24x36 inches)">
                                    <input type="text" class="form-control mb-2" name="existing_editions[]" value="{{ $image->edition }}" placeholder="Edition (e.g., Limited Edition 1/100)">
                                    <input type="hidden" name="existing_image_ids[]" value="{{ $image->id }}">
                                    <div class="delete-image" onclick="confirmDelete({{ $image->id }})">
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Add New Artworks -->
                        <h4 class="mt-5 mb-3">Add New Artworks</h4>
                        <div id="new-images-section">
                            <div class="image-group mb-4">
                                <div class="mb-3">
                                    <label class="form-label">New Image</label>
                                    <input type="file" class="form-control" name="new_images[]" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Comment</label>
                                    <input type="text" class="form-control" name="new_comments[]">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price ($)</label>
                                    <input type="number" step="0.01" class="form-control" name="new_prices[]">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Year</label>
                                    <input type="number" class="form-control" name="new_years[]" placeholder="e.g., 2023">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Print Type</label>
                                    <input type="text" class="form-control" name="new_prints[]" placeholder="e.g., Giclée">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Print Size</label>
                                    <input type="text" class="form-control" name="new_print_sizes[]" placeholder="e.g., 24x36 inches">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edition</label>
                                    <input type="text" class="form-control" name="new_editions[]" placeholder="e.g., Limited Edition 1/100">
                                </div>
                            </div>
                        </div>

                        <!-- Add More Artworks Button -->
                        <button type="button" class="btn btn-add-more mb-4" onclick="addMoreNewImages()">
                            <i class="fas fa-plus"></i> Add More Artworks
                        </button>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-update px-4">
                                <i class="fas fa-save"></i> Update Artist
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addMoreNewImages() {
            const container = document.getElementById('new-images-section');
            const newGroup = document.createElement('div');
            newGroup.className = 'image-group mb-4';
            newGroup.innerHTML = `
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="new_images[]" accept="image/*">
                </div>
                <div class="mb-3">
                    <label class="form-label">Comment</label>
                    <input type="text" class="form-control" name="new_comments[]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price ($)</label>
                    <input type="number" step="0.01" class="form-control" name="new_prices[]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Year</label>
                    <input type="number" class="form-control" name="new_years[]" placeholder="e.g., 2023">
                </div>
                <div class="mb-3">
                    <label class="form-label">Print Type</label>
                    <input type="text" class="form-control" name="new_prints[]" placeholder="e.g., Giclée">
                </div>
                <div class="mb-3">
                    <label class="form-label">Print Size</label>
                    <input type="text" class="form-control" name="new_print_sizes[]" placeholder="e.g., 24x36 inches">
                </div>
                <div class="mb-3">
                    <label class="form-label">Edition</label>
                    <input type="text" class="form-control" name="new_editions[]" placeholder="e.g., Limited Edition 1/100">
                </div>
                <button type="button" class="btn btn-danger btn-sm" onclick="removeImageGroup(this)">
                    <i class="fas fa-trash"></i> Remove
                </button>
            `;
            container.appendChild(newGroup);
        }

        function removeImageGroup(button) {
            const imageGroups = document.querySelectorAll('.image-group');
            if (imageGroups.length > 1) {
                button.closest('.image-group').remove();
            }
        }

        function confirmDelete(imageId) {
            if (confirm('Are you sure you want to delete this artwork?')) {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                fetch(`/artist/image/${imageId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        location.reload();
                    } else {
                        alert('Failed to delete artwork. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while deleting the artwork.');
                });
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
