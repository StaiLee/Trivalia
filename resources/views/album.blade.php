<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivalia album</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/import/favicon_io/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .photo {
            margin-bottom: 20px;
        }
        .photo img {
            max-width: 100%;
            height: auto;
            max-height: 200px; 
            cursor: pointer;
        }
        .tag {
            margin-right: 5px;
            cursor: pointer;
        }
        .tag.active {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Photo Album</h1>
        <div class="mb-4">
            <span class="tag active" data-tag="all">All</span>
            <span class="tag" data-tag="nature">Nature</span>
            <span class="tag" data-tag="landscape">Landscape</span>
            <span class="tag" data-tag="city">City</span>
        </div>
        <div class="row">
            <div class="col-md-4 photo" data-tags="nature">
                <img src="https://images.pexels.com/photos/349758/hummingbird-bird-birds-349758.jpeg" alt="Nature" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="nature">
                <img src="https://images.pexels.com/photos/416179/pexels-photo-416179.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landscape" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="nature">
                <img src="https://images.pexels.com/photos/9004398/pexels-photo-9004398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nature" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="nature">
                <img src="https://images.pexels.com/photos/302304/pexels-photo-302304.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nature" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="nature">
                <img src="https://images.pexels.com/photos/133356/pexels-photo-133356.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nature" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="city">
                <img src="https://images.pexels.com/photos/1470405/pexels-photo-1470405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="City" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="city">
                <img src="https://images.pexels.com/photos/14993088/pexels-photo-14993088/free-photo-of-golden-gate-bridge-coucher-de-soleil.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="City" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="city">
                <img src="https://images.pexels.com/photos/366283/tianjin-twilight-city-scenery-366283.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="City" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="city">
                <img src="https://images.pexels.com/photos/2614820/pexels-photo-2614820.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="City" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="city">
                <img src="https://images.pexels.com/photos/771883/pexels-photo-771883.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="City" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="landscape">
                <img src="https://images.pexels.com/photos/1476880/pexels-photo-1476880.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landscape" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="landscape">
                <img src="https://images.pexels.com/photos/2433467/pexels-photo-2433467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landscape" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="landscape">
                <img src="https://images.pexels.com/photos/36478/amazing-beautiful-beauty-blue.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landscape" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="landscape">
                <img src="https://images.pexels.com/photos/1166209/pexels-photo-1166209.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landscape" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

            <div class="col-md-4 photo" data-tags="landscape">
                <img src="https://images.pexels.com/photos/12729895/pexels-photo-12729895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landscape" class="img-fluid" data-bs-toggle="modal" data-bs-target="#photoModal">
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt="Photo" class="img-fluid modal-image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tags = document.querySelectorAll('.tag');
            const photos = document.querySelectorAll('.photo');
            const modalImage = document.querySelector('.modal-image');

            tags.forEach(tag => {
                tag.addEventListener('click', () => {
                    const selectedTag = tag.getAttribute('data-tag');
                    tags.forEach(t => t.classList.remove('active'));
                    tag.classList.add('active');

                    photos.forEach(photo => {
                        const photoTags = photo.getAttribute('data-tags').split(' ');
                        if (selectedTag === 'all' || photoTags.includes(selectedTag)) {
                            photo.style.display = 'block';
                        } else {
                            photo.style.display = 'none';
                        }
                    });
                });
            });

            photos.forEach(photo => {
                photo.addEventListener('click', () => {
                    const imageSrc = photo.querySelector('img').getAttribute('src');
                    modalImage.setAttribute('src', imageSrc);
                });
            });
        });
    </script>
</body>
</html>
