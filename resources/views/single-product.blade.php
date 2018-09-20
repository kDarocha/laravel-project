@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row blog-news-title">
                    <div class="col-md-3">
                        <img width="100%" src="{{ $product->picture }}" alt="">
                    </div>
                    <div class="col-md-9">
                        <h2>{{ $product->title }}</h2>
                        <p>{!! $product->description !!}</p>
                    </div>
                </div>
                <div class="row blog-news-details blog-single-details">
                    <div class="col-md-12">
                        {!! $product->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="row">
                @foreach($product->productsPhotos as $photo)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                           data-image="{{ $photo->picture }}"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="{{ $photo->picture }}"
                                 alt="Another alt text"
                                 style="object-fit: cover; width: 100%; height: 200px; border: none;">
                        </a>
                    </div>
                @endforeach
            </div>


            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="max-width: 600px; max-height: 600px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="" style="object-fit: cover; height: 100%;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>

                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
      var modalId = $('#image-gallery');

      $(document)
        .ready(function () {

          loadGallery(true, 'a.thumbnail');

          //This function disables buttons when needed
          function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
              .show();
            if (counter_max === counter_current) {
              $('#show-next-image')
                .hide();
            } else if (counter_current === 1) {
              $('#show-previous-image')
                .hide();
            }
          }

          /**
           *
           * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
           * @param setClickAttr  Sets the attribute for the click handler.
           */

          function loadGallery(setIDs, setClickAttr) {
            var current_image,
              selector,
              counter = 0;

            $('#show-next-image, #show-previous-image')
              .click(function () {
                if ($(this)
                    .attr('id') === 'show-previous-image') {
                  current_image--;
                } else {
                  current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
              });

            function updateGallery(selector) {
              var $sel = selector;
              current_image = $sel.data('image-id');
              $('#image-gallery-title')
                .text($sel.data('title'));
              $('#image-gallery-image')
                .attr('src', $sel.data('image'));
              disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
              $('[data-image-id]')
                .each(function () {
                  counter++;
                  $(this)
                    .attr('data-image-id', counter);
                });
            }
            $(setClickAttr)
              .on('click', function () {
                updateGallery($(this));
              });
          }
        });

      // build key actions
      $(document)
        .keydown(function (e) {
          switch (e.which) {
            case 37: // left
              if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                $('#show-previous-image')
                  .click();
              }
              break;

            case 39: // right
              if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                $('#show-next-image')
                  .click();
              }
              break;

            default:
              return; // exit this handler for other keys
          }
          e.preventDefault(); // prevent the default action (scroll / move caret)
        });
    </script>
@endsection
