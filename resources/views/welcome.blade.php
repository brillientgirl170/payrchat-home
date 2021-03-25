@extends('layouts.app')
@section('main')
<link rel="stylesheet" href="{{ asset('frontendAssets') }}/assets/css/my-style.css">
<div class="main_content_inner">
  <div class="uk-grid-large" uk-grid>
      <div class="uk-width-2-3@m fead-area">
          <div class="section-small pt-0">
              <div class="uk-position-relative" uk-slider="finite: true">
                  <div class="uk-slider-container pb-3">
                      <ul
                          class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-3 story-slider uk-grid">
                          <li>
                              <a href="#" uk-toggle="target: body ; cls: is-open">
                                  <div class="story-card" data-src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-lg-1.jpg"
                                      uk-img>
                                      <i class="uil-plus"></i>
                                      <div class="story-card-content">
                                          <h4> Dennis </h4>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" uk-toggle="target: body ; cls: is-open">
                                  <div class="story-card" data-src="{{ asset('frontendAssets') }}/assets/images/events/listing-5.jpg"
                                      uk-img>
                                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-5.jpg" alt="">
                                      <div class="story-card-content">
                                          <h4> Jonathan </h4>
                                      </div>
                                  </div>
                              </a>

                          </li>
                          <li>
                              <a href="#" uk-toggle="target: body ; cls: is-open">
                                  <div class="story-card" data-src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-lg-3.jpg"
                                      uk-img>
                                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-6.jpg" alt="">
                                      <div class="story-card-content">
                                          <h4> Stella </h4>
                                      </div>
                                  </div>
                              </a>

                          </li>
                          <li>

                              <a href="#" uk-toggle="target: body ; cls: is-open">
                                  <div class="story-card" data-src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-lg-4.jpg"
                                      uk-img>
                                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-4.jpg" alt="">
                                      <div class="story-card-content">
                                          <h4> Alex </h4>
                                      </div>
                                  </div>
                              </a>

                          </li>
                          <li>

                              <a href="#" uk-toggle="target: body ; cls: is-open">
                                  <div class="story-card" data-src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-lg-2.jpg"
                                      uk-img>
                                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-2.jpg" alt="">
                                      <div class="story-card-content">
                                          <h4> Adrian </h4>
                                      </div>
                                  </div>
                              </a>

                          </li>
                          <li>

                              <a href="#" uk-toggle="target: body ; cls: is-open">
                                  <div class="story-card" data-src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-lg-5.jpg"
                                      uk-img>
                                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-5.jpg" alt="">
                                      <div class="story-card-content">
                                          <h4> Dennis </h4>
                                      </div>
                                  </div>
                              </a>

                          </li>

                      </ul>

                      <div class="uk-visible@m">
                          <a class="uk-position-center-left-out slidenav-prev" href="#"
                              uk-slider-item="previous"></a>
                          <a class="uk-position-center-right-out slidenav-next" href="#"
                              uk-slider-item="next"></a>
                      </div>
                      <div class="uk-hidden@m">
                          <a class="uk-position-center-left slidenav-prev" href="#"
                              uk-slider-item="previous"></a>
                          <a class="uk-position-center-right slidenav-next" href="#"
                              uk-slider-item="next"></a>
                      </div>

                  </div>
              </div>
          </div>

          <div class="post-newer">

              <div class="post-new" uk-toggle="target: body ; cls: post-focus">
                  <div class="post-new-media">
                      <div class="post-new-media-user">
                          <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-2.jpg" alt="">
                      </div>
                      <div class="post-new-media-input">
                          <input type="text" class="uk-input" placeholder="What's Your Mind ? Hamse!" uk-toggle="#textModal">
                      </div>
                  </div>
                  <hr>
                  <div class="post-new-type">
                    <div class="imageUp">
                      <a href="#mediaModal" uk-toggle>
                          <img src="{{ asset('frontendAssets') }}/assets/images/icons/photo.png" alt="">
                          Photo/Video
                      </a>
                      <input type="file" name="file" value="" hidden>
                    </div>
                    <div class="imageUp">
                      <a href="#" class="uk-visible@s">
                          <img src="{{ asset('frontendAssets') }}/assets/images/icons/tag-friend.png" alt="">
                          Tag Friend
                      </a>
                    </div>
                    <div class="imageUp">
                      <a href="#"><img src="{{ asset('frontendAssets') }}/assets/images/icons/reactions_wow.png" alt="">
                          Fealing /Activity
                      </a>
                    </div>
                  </div>
              </div>
              <!-- Post Modal -->
              <div id="textModal" class="uk-flex-top" uk-modal>
                  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                      <button class="uk-modal-close-default" type="button" uk-close></button>
                      <div class="post-new-header">
                          <h4> Create new post</h4>
                      </div>
                      <form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="1">
                        <div class="post-new-media">
                            <div class="post-new-media-user">
                                <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="post-new-media-input">
                                <input type="text" class="uk-input" name="post_text"
                                    placeholder="What's Your Mind ? Dennis!">
                            </div>
                        </div>
                        <div class="post-new-tab-nav">
                            <a href="#" uk-tooltip="title:Image"> <i class="uil-image"></i> </a>
                            <a href="#" uk-tooltip="Title:Tag Friends"> <i class="uil-user-plus"></i> </a>
                            <a href="#" uk-tooltip="Title:Video"> <i class="uil-video"></i> </a>
                            <a href="#" uk-tooltip="Title:Audio Record"> <i class="uil-record-audio"></i> </a>
                            <a href="#" uk-tooltip="Title:Attachment"> <i class="uil-file-alt"></i> </a>
                            <a href="#" uk-tooltip="Title:Felling/Activity"> <i class="uil-emoji"></i> </a>
                        </div>
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <select class="uk-select outline-light rounded" style="border-color: #e6e6e6;  border-width: 1px;" name="status" wire:model="status">
                                  <option class="uk-active" value="public">Public</option>
                                  <option value="only me">Only me</option>
                                  <option value="everyone">Every one</option>
                                  <option value="people i follow">People I Follow</option>
                                  <option value="people follow me">People Follow Me</option>
                                  <option value="private">Private</option>
                                </select>
                            </div>
                            <div>
                              <div uk-form-custom="target: true">
                                  <input type="file" name="photo" accept="image/*">
                                  <input class="uk-input uk-form-width-medium" type="text" placeholder="Select your photo" disabled name="file">
                              </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="button primary px-6 uk-align-right"> Post </button>
                      </form>

                  </div>
              </div>

              <!-- Post Modal -->
              <div id="mediaModal" class="uk-flex-top" uk-modal>
                  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                      <button class="uk-modal-close-default" type="button" uk-close></button>
                      <div class="post-new-header">
                          <h4> Create new post</h4>
                      </div>
                      <form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="1">
                        <div class="post-new-media">
                            <div class="post-new-media-user">
                                <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-2.jpg" alt="" style="vertical-align: middle;">
                            </div>
                            <div>
                              <p>user name</p>
                                <select class="status-select" style="" name="status" wire:model="status">
                                  <option class="uk-active" value="public">Public</option>
                                  <option value="only me">Only me</option>
                                  <option value="everyone">Every one</option>
                                  <option value="private">Private</option>
                                </select>
                            </div>
                        </div>
                        <div class="" style="height: 200px;overflow: auto;">
                          <div class="">
                              <textarea type="text" class="uk-textarea" name="post_text" placeholder="What's Your Mind ? Dennis!" ></textarea>
                          </div>
                          <div class="preview">
                            <img src="#" id="one" height="" width="100%" uk-img alt="">
                          </div>
                        </div>
                        <div class="post-new-tab-nav">
                            <a href="#" uk-tooltip="title:Image">
                              <label for="myFile"><i class="uil-image"></i></label>
                              <input type="file" name="photo" onchange="readURL(this);" hidden id="myFile">
                            </a>
                            <a href="#" uk-tooltip="Title:Tag Friends"> <i class="uil-user-plus"></i> </a>
                            <a href="#" uk-tooltip="Title:Video"> <i class="uil-video"></i> </a>
                            <a href="#" uk-tooltip="Title:Audio Record"> <i class="uil-record-audio"></i> </a>
                            <a href="#" uk-tooltip="Title:Attachment"> <i class="uil-file-alt"></i> </a>
                            <a href="#" uk-tooltip="Title:Felling/Activity"> <i class="uil-emoji"></i> </a>
                        </div>
                        <button type="submit" class="button primary px-6 uk-align-right uk-width-1-1"> Post </button>
                      </form>
                  </div>
              </div>

              <!-- Social Share -->
                <div id="socialShare" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <h2>Your Social Links</h2>
                        <div class="result-container">
                          <input type="text" value="" class="filter uk-input uk-position-relative" id="share_url" placeholder="copy url" readonly>
                          <button class="btn ctoCb" id="clipboard" style="position: absolute;right: 30px;height: 42px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                            <i class="uil-print"></i>
                          </button>
                        </div>
                        <div class="post-new-media">
                          <div class="post-new-tab-nav">
                              <a id="shareWithFb" uk-tooltip="title:facebook"> <i class="uil-facebook"></i> </a>
                              <a id="shareWithTwitter" uk-tooltip="Title:twitter"> <i class="uil-twitter"></i> </a>
                              <a id="shareWithWhatsapp" uk-tooltip="Title:whatsapp"> <i class="uil-whatsapp"></i> </a>
                              <a id="shareWithMail" uk-tooltip="Title:mail"> <i class="uil-mail"></i> </a>
                          </div>
                        </div>
                    </div>
                </div>
          </div>

          @foreach($posts as $val)
          <div class="post">
              <div class="post-heading">
                  <div class="post-avature">
                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-6.jpg" alt="">
                  </div>
                  <div class="post-title">
                      <h4> Mariah Ali </h4>
                      <p>{{ $val->created_at->diffForHumans() }}<i class="uil-users-alt"></i> </p>
                  </div>
                  <div class="post-btn-action">
                      <span class="icon-more uil-ellipsis-h"></span>
                      <div class="mt-0 p-2" uk-dropdown="pos: bottom-right;mode:hover ">
                          <ul class="uk-nav uk-dropdown-nav">
                              <li><a href="#socialShare" uk-toggle> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                              <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                  </a></li>
                              <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="post-description">
               <p>{{ $val->post_text }}</p>
                  <div class="fullsizeimg">
                    <img class="post_img" src="{{ asset('storage/uploads/photos/'.$val->photo) }}" alt="photo">
                  </div>
              </div>
              <div class="post-state">
                  <div class="post-state-btns"> <i class="uil-heart"></i> 126<span> Liked </span>
                  </div>
                  <div class="post-state-btns" id="myBtn"> <i class="uil-chat"></i> 18 <span> Coments</span>
                  </div>
                  <div class="post-state-btns"> <i class="uil-share-alt"></i> 19 <span> Shared </span>
                  </div>
                  <div class="post-state-btns"> <i class="uil-eye"></i> 13 <span> View </span>
                  </div>
              </div>

              <!-- The Modal -->
              <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p>Some text in the Modal..</p>
                </div>

              </div>
              <!-- post comments -->
              <script type="text/javascript">
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                  modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
              </script>
          </div>
          @endforeach

          @foreach($videos as $val)
          <div class="post">
              <div class="post-heading">
                  <div class="post-avature">
                      <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-6.jpg" alt="">
                  </div>
                  <div class="post-title">
                      <h4> Mariah Ali </h4>
                      <p>{{ $val->created_at->diffForHumans() }}<i class="uil-users-alt"></i> </p>
                  </div>
                  <div class="post-btn-action">
                      <span class="icon-more uil-ellipsis-h"></span>
                      <div class="mt-0 p-2" uk-dropdown="pos: bottom-right;mode:hover ">
                          <ul class="uk-nav uk-dropdown-nav">
                              <li><a href="#socialShare" uk-toggle> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                              <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                  </a></li>
                              <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="post-description">
               <p>{{ $val->post_text }}</p>
               <div  class="fullsizeimg">
                 <video src="{{ asset('storage/uploads/videos/'.$val->video) }}" title="Your video player" controls type="video/*"></video>
               </div>
             </div>
              <div class="post-state">
                  <div class="post-state-btns"> <i class="uil-heart"></i> 126<span> Liked </span>
                  </div>
                  <div class="post-state-btns" id="myBtn"> <i class="uil-chat"></i> 18 <span> Coments</span>
                  </div>
                  <div class="post-state-btns"> <i class="uil-share-alt"></i> 19 <span> Shared </span>
                  </div>
                  <div class="post-state-btns"> <i class="uil-eye"></i> 13 <span> View </span>
                  </div>
              </div>

              <!-- The Modal -->
              <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p>Some text in the Modal..</p>
                </div>

              </div>
              <!-- post comments -->
              <script type="text/javascript">
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                  modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
              </script>
          </div>
          @endforeach


      </div>
      <!-- sidebar -->
      <div class="uk-width-expand">
          <h3 class="mb-2"> Your Pages</h3>
          <a href="#" class="uk-link-reset">
              <div class="uk-flex uk-flex-top py-2 pb-0 pl-2 mb-2 bg-secondary-hover rounded">
                  <img src="{{ asset('frontendAssets') }}/assets/images/icons/flag.png" width="35px" class="mr-3" alt="">
                  <p> <strong> Gamers Varse </strong>&nbsp;<sup class="notificiationCount">5+</sup> </p>
              </div>
          </a>
            <a href="#" class="uk-link-reset">
              <div class="uk-flex uk-flex-top py-2 pb-0 pl-2 mb-2 bg-secondary-hover rounded">
                  <img src="{{ asset('frontendAssets') }}/assets/images/icons/flag.png" width="35px" class="mr-3" alt="">
                  <p> <strong> Payrchat </strong>&nbsp;<sup class="notificiationCount">7+</sup> </p>
              </div>
          </a>
          <hr>
         <h3 class="mb-2"> Birthdays</h3>
          <a href="#" class="uk-link-reset">
              <div class="uk-flex uk-flex-top py-2 pb-0 pl-2 mb-2 bg-secondary-hover rounded">
                  <img src="{{ asset('frontendAssets') }}/assets/images/icons/gift-icon.png" width="35px" class="mr-3" alt="">
                  <p> <strong> Jessica Erica </strong> and <strong> two others </strong>
                      have a birthdays to day .</p>
              </div>
          </a>
          <hr>
          <h3 class="mb-2"> Sponsered</h3>
          <div class="p-5 mb-3 rounded uk-background-cover uk-light"
              style="background-blend-mode: color-burn; background-color:rgba(0, 126, 255, 0.06)"
              data-src="{{ asset('frontendAssets') }}/assets/images/events/img-2.jpg" uk-img>
              <div class="uk-width-4-5">
                  <h3 class="mb-2">
                      <i class="uil-users-alt p-1 text-dark bg-white circle icon-small"></i>
                      Ads Title </h3>
                  <p> New ways to find and join communications .</p>
                  <a href="#" class="button white small"> View Products</a>
              </div>
          </div>
          <div class="p-5 mb-3 rounded uk-background-cover uk-light"
              style="background-blend-mode: color-burn; background-color:rgba(0, 126, 255, 0.06)"
              data-src="{{ asset('frontendAssets') }}/assets/images/events/img-2.jpg" uk-img>
              <div class="uk-width-4-5">
                  <h3 class="mb-2">
                      <i class="uil-users-alt p-1 text-dark bg-white circle icon-small"></i>
                      Ads Title </h3>
                  <p> New ways to find and join communications .</p>
                  <a href="#" class="button white small"> View Products</a>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
    var copiedLink = '';
    function copyToClipboard(element, btnElem) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
        $(btnElem).html(`<i class="uil-link"> </i> `);
        setTimeout(() => {
            $(btnElem).html(`<i class="uil-print"> </i> `);
        }, 2000);
    }
    $(document).ready(function() {
        copiedLink = $('#share_url').val();

        $('#shareWithTwitter').click(function () {
        window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
        });

        $('#shareWithFb').click(function () {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
        });

        $('#shareWithFb').click(function () {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
        });

        $('#shareWithMail').click(function () {
            var formattedBody = "This is cause link: " + (copiedLink);
            var mailToLink = "mailto:?subject= " + user + " wants you to donate to this noble cause&body=" + encodeURIComponent(formattedBody);
            window.location.href = mailToLink;
        });

        $('#shareWithWhatsapp').click(function () {
            var win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
            win.focus();
        });

        $(document).on('click', '.ctoCb', function () {
            copyToClipboard($(this).parent().parent().find('input'), $(this));
        });
    });
</script>

<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#one')
              .attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endsection
