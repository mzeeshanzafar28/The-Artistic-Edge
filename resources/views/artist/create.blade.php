@extends('layout.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Details Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Varela Round', sans-serif;
        }
        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 50px;
            margin-bottom: 50px;
            transition: all 0.3s ease;
        }
        .form-container:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .form-title {
            color: #343a40;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        .form-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            margin: 10px auto;
            border-radius: 2px;
        }
        .image-group {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px dashed #dee2e6;
            transition: all 0.3s ease;
        }
        .image-group:hover {
            border-color: #6a11cb;
            background: #f0f5ff;
        }
        .btn-add-more {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-add-more:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .btn-submit {
            background: linear-gradient(135deg, #00b09b 0%, #96c93d 100%);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .form-control:focus, .form-select:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 0.25rem rgba(106, 17, 203, 0.25);
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
    @include('layout.navbar')

    <div class="container animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="form-title">Add Artist Details</h2>

                    <!-- Error Message -->
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('artist.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Artist Name -->
                        <div class="mb-3">
                            <label for="artistName" class="form-label">Artist Name</label>
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="artistName" 
                                   placeholder="Enter artist name" name="Name" value="{{ old('Name') }}" 
                                   required minlength="2" maxlength="255">
                            @error('Name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Bio -->
                        <div class="mb-3">
                            <label for="artistBio" class="form-label">Artist Bio</label>
                            <textarea class="form-control @error('Bio') is-invalid @enderror" id="artistBio" rows="3" 
                                      placeholder="Enter artist bio" name="Bio" required minlength="10" maxlength="500">{{ old('Bio') }}</textarea>
                            @error('Bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Contact -->
                        <div class="mb-3">
                            <label for="artistContact" class="form-label">Contact Phone Number</label>
                            <input type="text" class="form-control @error('Contact') is-invalid @enderror" id="artistContact" 
                                   placeholder="Enter phone number (e.g., +1234567890)" name="Contact" required 
                                   value="{{ old('Contact') }}">
                            @error('Contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Email -->
                        <div class="mb-3">
                            <label for="artistEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('Email') is-invalid @enderror" id="artistEmail" 
                                   placeholder="Enter email address" name="Email" required 
                                   value="{{ old('Email') }}">
                            @error('Email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Country -->
                        <div class="mb-3">
                            <label for="artistCountry" class="form-label">Country</label>
                            <select class="form-select @error('Country') is-invalid @enderror" id="artistCountry" name="Country" required>
                                <option value="" disabled {{ old('Country') ? '' : 'selected' }}>Select a country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country }}" {{ old('Country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                                @endforeach
                            </select>
                            @error('Country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artist Address -->
                        <div class="mb-3">
                            <label for="artistAddress" class="form-label">Address</label>
                            <textarea class="form-control @error('Address') is-invalid @enderror" id="artistAddress" rows="3" 
                                      placeholder="Enter address" name="Address" required minlength="10" maxlength="500">{{ old('Address') }}</textarea>
                            @error('Address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Profile Image -->
                        <div class="mb-3">
                            <label for="profileImage" class="form-label">Profile Image</label>
                            <input type="file" class="form-control @error('profile_image') is-invalid @enderror" 
                                   id="profileImage" name="profile_image" required accept="image/*">
                            @error('profile_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artwork Images -->
                        <div id="image-section">
                            <div class="image-group mb-3">
                                <h5>Artwork #1</h5>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control @error('images.*') is-invalid @enderror" 
                                           name="images[]" required accept="image/*">
                                    @error('images.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Comment</label>
                                    <input type="text" class="form-control @error('comments.*') is-invalid @enderror" 
                                           name="comments[]" required>
                                    @error('comments.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price ($)</label>
                                    <input type="number" step="0.01" class="form-control @error('prices.*') is-invalid @enderror" 
                                           name="prices[]" required>
                                    @error('prices.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Year</label>
                                    <input type="number" class="form-control @error('years.*') is-invalid @enderror" 
                                           name="years[]" placeholder="e.g., 2023">
                                    @error('years.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Print Type</label>
                                    <input type="text" class="form-control @error('prints.*') is-invalid @enderror" 
                                           name="prints[]" placeholder="e.g., Giclée">
                                    @error('prints.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Print Size</label>
                                    <input type="text" class="form-control @error('print_sizes.*') is-invalid @enderror" 
                                           name="print_sizes[]" placeholder="e.g., 24x36 inches">
                                    @error('print_sizes.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edition</label>
                                    <input type="text" class="form-control @error('editions.*') is-invalid @enderror" 
                                           name="editions[]" placeholder="e.g., Limited Edition 1/100">
                                    @error('editions.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Add More Artworks Button -->
                        <button type="button" class="btn btn-primary btn-add-more mb-3" onclick="addMoreImages()">
                            <i class="material-icons">add</i> Add More Artworks
                        </button>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-submit px-4">
                                <i class="material-icons">save</i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function addMoreImages() {
        const imageSection = document.getElementById('image-section');
        const imageGroups = document.querySelectorAll('.image-group');
        const newIndex = imageGroups.length + 1;
        
        const newGroup = document.createElement('div');
        newGroup.className = 'image-group mb-3';
        newGroup.innerHTML = `
            <h5>Artwork #${newIndex}</h5>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="images[]" required accept="image/*">
            </div>
            <div class="mb-3">
                <label class="form-label">Comment</label>
                <input type="text" class="form-control" name="comments[]" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price ($)</label>
                <input type="number" step="0.01" class="form-control" name="prices[]" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year</label>
                <input type="number" class="form-control" name="years[]" placeholder="e.g., 2023">
            </div>
            <div class="mb-3">
                <label class="form-label">Print Type</label>
                <input type="text" class="form-control" name="prints[]" placeholder="e.g., Giclée">
            </div>
            <div class="mb-3">
                <label class="form-label">Print Size</label>
                <input type="text" class="form-control" name="print_sizes[]" placeholder="e.g., 24x36 inches">
            </div>
            <div class="mb-3">
                <label class="form-label">Edition</label>
                <input type="text" class="form-control" name="editions[]" placeholder="e.g., Limited Edition 1/100">
            </div>
            <button type="button" class="btn btn-danger btn-sm" onclick="removeImageGroup(this)">
                <i class="material-icons">delete</i> Remove
            </button>
        `;
        
        imageSection.appendChild(newGroup);
    }
    
    function removeImageGroup(button) {
        const imageGroups = document.querySelectorAll('.image-group');
        if (imageGroups.length > 1) {
            button.closest('.image-group').remove();
            document.querySelectorAll('.image-group h5').forEach((header, index) => {
                header.textContent = `Artwork #${index + 1}`;
            });
        } else {
            alert('You must have at least one artwork.');
        }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
