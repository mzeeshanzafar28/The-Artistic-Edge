<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artist->Name }} - Multan Art Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .modal-backdrop{
            display: none !important;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .artist-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            border-radius: 0 0 25px 25px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .artist-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.1);
            z-index: 1;
        }
        .artist-header .container {
            position: relative;
            z-index: 2;
        }
        .artist-name {
            font-weight: 700;
            color: #343a40;
            position: relative;
            display: inline-block;
            font-size: 2rem;
        }
        .artist-name:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            margin: 12px 0;
            border-radius: 2px;
        }
        .artist-bio {
            color: #495057;
            line-height: 1.8;
            font-size: 1.1rem;
            padding: 1rem 0;
        }
        .gallery-container {
            margin: 4rem 0;
        }
        .artwork-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
            background: white;
        }
        .artwork-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .artwork-image {
            height: 250px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.5s ease;
            cursor: pointer;
        }
        .artwork-card:hover .artwork-image {
            transform: scale(1.05);
        }
        .artwork-info {
            padding: 1.5rem;
            background: white;
        }
        .artwork-price {
            font-weight: 700;
            color: #6a11cb;
            font-size: 1.2rem;
        }
        .artwork-comment {
            color: #6c757d;
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }
        .artwork-created {
            color: #6c757d;
            margin-top: 0.5rem;
            font-size: 0.85rem;
            font-style: italic;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .btn-enquire {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            border: none;
            border-radius: 15px;
            padding: 0.3rem 1rem;
            font-size: 0.85rem;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-enquire:hover {
            background: linear-gradient(135deg, #e6355a, #e04327);
            transform: translateY(-2px);
        }
        .back-btn {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: linear-gradient(135deg, #5a0fb3, #2068e0);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .contact-info {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .contact-info h3 {
            font-size: 1.5rem;
            color: #343a40;
            margin-bottom: 1rem;
        }
        .contact-info p {
            color: #495057;
            font-size: 1rem;
        }
        .profile-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }
        .profile-image:hover {
            transform: scale(1.05);
        }
        .btn-whatsapp {
            background: #25D366;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-whatsapp:hover {
            background: #20b958;
            transform: translateY(-2px);
        }
        .btn-email {
            background: #007BFF;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-email:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }
        .modal-content {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .modal-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border-radius: 15px 15px 0 0;
        }
        .modal-card {
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            background: white;
            overflow: hidden;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .modal-image {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        .modal-card-info {
            padding: 1.5rem;
        }
        .modal-card-info p {
            margin-bottom: 0.5rem;
            color: #495057;
        }
        .modal-card-info strong {
            color: #343a40;
        }
        .modal-price {
            font-weight: 700;
            color: #6a11cb;
            font-size: 1.2rem;
        }
        .btn-buy-now {
            background: linear-gradient(135deg, #00b09b 0%, #96c93d 100%);
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-buy-now:hover {
            background: linear-gradient(135deg, #009688, #7cb342);
            transform: translateY(-2px);
        }
        .modal-dialog {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
        .artwork-interactions .btn {
            padding: 0.2rem 0.5rem;
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }
        .artwork-interactions .btn i {
            margin-right: 0.2rem;
        }
        @media (max-width: 768px) {
            .artist-header {
                padding: 2.5rem 0;
            }
            .profile-image {
                width: 150px;
                height: 150px;
            }
            .artwork-image, .modal-image {
                height: 200px;
            }
            .artist-name {
                font-size: 1.75rem;
            }
            .modal-dialog {
                min-height: calc(100% - 0.5rem);
            }
        }
    </style>
</head>
<body>
    <!-- Artist Header -->
    <div class="artist-header animate__animated animate__fadeIn">
        <div class="container text-center">
            @if($artist->profile_image)
                <img src="{{ asset($artist->profile_image) }}" class="profile-image" alt="{{ $artist->Name }}">
            @endif
            <h1 class="display-4 animate__animated animate__fadeInDown">{{ $artist->Name }}</h1>
            <p class="lead animate__animated animate__fadeInUp">Visual Artist</p>
        </div>
    </div>

    <!-- Artist Bio and Contact -->
    <div class="container animate__animated animate__fadeInUp">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="artist-name">About the Artist</h2>
                <p class="artist-bio">{{ $artist->Bio }}</p>

                <div class="contact-info animate__animated animate__fadeIn" style="animation-delay: 0.2s;">
                    <h3><i class="fas fa-envelope me-2"></i>Contact Information</h3>
                    <p><strong>Phone:</strong> {{ $artist->Contact }}</p>
                    <p><strong>Email:</strong> {{ $artist->Email }}</p>
                    <p><strong>Country:</strong> {{ $artist->Country }}</p>
                    <p><strong>Address:</strong> {{ $artist->Address }}</p>
                    <a target="_blank" href="https://wa.me/{{ $artist->Contact }}">
                        <button type="button" class="btn btn-whatsapp m-1">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp
                        </button>
                    </a>
                    <a href="mailto:{{ $artist->Email }}">
                        <button type="button" class="btn btn-email m-1">
                            <i class="fas fa-envelope me-2"></i>Email
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Artwork Gallery -->
        <div class="gallery-container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">Artwork Gallery</h2>
            <div class="row" id="lightgallery">
                @foreach($artist->images as $image)
                    <div class="col-md-4">
                        <div class="artwork-card animate__animated animate__fadeInUp" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                            <img src="{{ asset($image->image_path) }}" class="artwork-image" alt="Artwork"
                                 data-src="{{ asset($image->image_path) }}"
                                 data-sub-html="<h4>{{ $image->comment }}</h4><p>Price: ${{ number_format($image->price, 2) }}</p><p>Year: {{ $image->year ?? 'N/A' }}</p><p>Print: {{ $image->print ?? 'N/A' }}</p><p>Print Size: {{ $image->print_size ?? 'N/A' }}</p><p>Edition: {{ $image->edition ?? 'N/A' }}</p><p>Created: {{ $image->created_at->diffForHumans() }}</p>">
                            <div class="artwork-info">
                                <div class="artwork-price">${{ number_format($image->price, 2) }}</div>
                                <p class="artwork-comment">{{ $image->comment }}</p>
                                <p class="artwork-created">
                                    Created {{ $image->created_at->diffForHumans() }}
                                    <button type="button" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#enquireModal{{ $image->id }}" onclick="event.stopPropagation(); event.preventDefault();">
                                        Enquire
                                    </button>
                                </p>
                                <div class="artwork-interactions">
                                    <button class="btn btn-outline-primary btn-like" data-artwork-id="{{ $image->id }}">
                                        <i class="fas fa-thumbs-up"></i>
                                        <span class="like-count" data-artwork-id="{{ $image->id }}">{{ $image->reactions()->where('reaction', 1)->count() }}</span>
                                    </button>
                                    <button class="btn btn-outline-danger btn-dislike" data-artwork-id="{{ $image->id }}">
                                        <i class="fas fa-thumbs-down"></i>
                                        <span class="dislike-count" data-artwork-id="{{ $image->id }}">{{ $image->reactions()->where('reaction', -1)->count() }}</span>
                                    </button>
                                    <button class="btn btn-outline-secondary btn-comment" data-artwork-id="{{ $image->id }}" data-bs-toggle="modal" data-bs-target="#commentModal{{ $image->id }}" onclick="event.stopPropagation(); event.preventDefault();">
                                        <i class="fas fa-comment"></i>
                                        <span class="comment-count" data-artwork-id="{{ $image->id }}">{{ $image->comments()->count() }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enquire Modal -->
                    <div class="modal fade" id="enquireModal{{ $image->id }}" style="z-index:99999!important; margin-top:22%; overflow:hidden!important;" tabindex="-1" aria-labelledby="enquireModalLabel{{ $image->id }}" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="enquireModalLabel{{ $image->id }}">Enquire About Artwork</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-card">
                                        <div class="modal-card-info">
                                            <div class="modal-price">${{ number_format($image->price, 2) }}</div>
                                            <p><strong>Title:</strong> {{ $image->comment }}</p>
                                            <p><strong>Artist:</strong> {{ $artist->Name }}</p>
                                            <p><strong>Year:</strong> {{ $image->year ?? 'N/A' }}</p>
                                            <p><strong>Print:</strong> {{ $image->print ?? 'N/A' }}</p>
                                            <p><strong>Print Size:</strong> {{ $image->print_size ?? 'N/A' }}</p>
                                            <p><strong>Edition:</strong> {{ $image->edition ?? 'N/A' }}</p>
                                        </div>
                                        <div class="image-wrapper">
                                            <img src="{{ asset($image->image_path) }}" class="modal-image" alt="Artwork">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="mailto:{{ $artist->Email }}?subject=Enquiry%20About%20Artwork&body=I'm%20interested%20in%20purchasing%20your%20artwork:%20{{ $image->comment }}" class="btn btn-buy-now">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Modal -->
                    <div style="margin-top:25%;" class="modal fade" id="commentModal{{ $image->id }}" tabindex="-1" aria-labelledby="commentModalLabel{{ $image->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="commentModalLabel{{ $image->id }}">Comments for {{ $image->comment }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="comments-list-{{ $image->id }}" class="mb-3"></div>
                                    @auth
                                        <form id="comment-form-{{ $image->id }}">
                                            @csrf
                                            <div class="mb-3">
                                                <textarea class="form-control" name="comment" rows="3" placeholder="Add a comment..." required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Post Comment</button>
                                        </form>
                                    @else
                                        <p>Please <a href="{{ route('login') }}">login</a> to post a comment.</p>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-5">
            <a href="{{ url()->previous() }}" class="btn back-btn">
                <i class="fas fa-arrow-left me-2"></i>Back to Artists
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize LightGallery
            lightGallery(document.getElementById('lightgallery'), {
                selector: '.artwork-image',
                download: false,
                zoom: true
            });

            // Ensure only one modal is open and clean up backdrops
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                modal.addEventListener('show.bs.modal', () => {
                    modals.forEach(otherModal => {
                        if (otherModal !== modal && otherModal.classList.contains('show')) {
                            bootstrap.Modal.getInstance(otherModal).hide();
                        }
                    });
                });
                modal.addEventListener('hidden.bs.modal', () => {
                    document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
                    document.body.classList.remove('modal-open');
                    document.body.style.paddingRight = '';
                });
            });
        });

        $(document).ready(function() {
            // Like button
            $('.btn-like').click(function(e) {
                e.preventDefault();
                const artworkId = $(this).data('artwork-id');
                $.ajax({
                    url: '/artworks/' + artworkId + '/reaction',
                    method: 'POST',
                    data: { reaction: 1, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        $('span.like-count[data-artwork-id="' + artworkId + '"]').text(response.likes);
                        $('span.dislike-count[data-artwork-id="' + artworkId + '"]').text(response.dislikes);
                    },
                    error: function(xhr) {
                        if (xhr.status === 401) {
                            window.location = '/login';
                        }
                    }
                });
            });

            // Dislike button
            $('.btn-dislike').click(function(e) {
                e.preventDefault();
                const artworkId = $(this).data('artwork-id');
                $.ajax({
                    url: '/artworks/' + artworkId + '/reaction',
                    method: 'POST',
                    data: { reaction: -1, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        $('span.like-count[data-artwork-id="' + artworkId + '"]').text(response.likes);
                        $('span.dislike-count[data-artwork-id="' + artworkId + '"]').text(response.dislikes);
                    },
                    error: function(xhr) {
                        if (xhr.status === 401) {
                            window.location = '/login';
                        }
                    }
                });
            });

            // Load comments when modal opens
            $('[id^=commentModal]').on('show.bs.modal', function() {
                const artworkId = $(this).attr('id').replace('commentModal', '');
                $.ajax({
                    url: '/artworks/' + artworkId + '/comments',
                    method: 'GET',
                    success: function(comments) {
                        let commentsHtml = '';
                        comments.forEach(comment => {
                            commentsHtml += `<p><strong>${comment.user.name}</strong>: ${comment.comment}</p>`;
                        });
                        $('#comments-list-' + artworkId).html(commentsHtml);
                    }
                });
            });

            // Comment form submission
            $('[id^=comment-form-]').submit(function(e) {
                e.preventDefault();
                const artworkId = $(this).attr('id').replace('comment-form-', '');
                const comment = $(this).find('textarea').val();
                $.ajax({
                    url: '/artworks/' + artworkId + '/comment',
                    method: 'POST',
                    data: { comment: comment, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        const newComment = `<p><strong>${response.comment.user.name}</strong>: ${response.comment.comment}</p>`;
                        $('#comments-list-' + artworkId).append(newComment);
                        $('[id="comment-form-' + artworkId + '"] textarea').val('');
                    },
                    error: function(xhr) {
                        if (xhr.status === 401) {
                            window.location = '/login';
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
