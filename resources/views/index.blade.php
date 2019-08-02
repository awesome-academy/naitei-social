@extends('layouts.app')

@section('content')
<div class="stretched">

  <div id="wrapper" class="clearfix">

    <div id="top-bar">
    </div>

    <section class="page-title">
      <div class="container clearfix">
        <h2>@lang('index.social')</h2>
      </div>
    </section>

    <section class="content">
      <div class="content-wrap">
        <div class="container clearfix">

          <div class="postcontent nobottommargin col_last clearfix">

            <div class="card gedf-card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                      aria-controls="posts" aria-selected="true"> @lang('index.makePost')</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images"
                      aria-selected="false" href="#images">@lang('index.images')</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    <div class="form-group">
                      <label class="sr-only" for="message">post</label>
                      <textarea class="form-control" id="message" rows="3"
                        placeholder="@lang('index.whatThing')"></textarea>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">@lang('index.uploadImg')</label>
                      </div>
                    </div>
                    <div class="py-4"></div>
                  </div>
                </div>
                <div class="btn-toolbar justify-content-between">
                  <div class="btn-group">
                    <button type="submit" class="btn btn-primary">@lang('index.share')</button>
                  </div>
                  <div class="btn-group">
                    <button id="btnGroupDrop1" type="button" class="btn
                      btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-globe"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" href="#"><i class="fa
                          fa-globe"></i> @lang('index.public')</a>
                      <a class="dropdown-item" href="#"><i class="fa
                          fa-users"></i> @lang('index.friends')</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-user"></i>@lang('index.justme')</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="posts">
              <div class="card gedf-card">
                <div class="card-header">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div class="d-flex justify-content-between
                      align-items-center">
                      <div class="mr-2">
                        <img class="rounded-circle" width="45" src="{{ asset('bower_components/images/ava1.jpg') }}" alt="">
                      </div>
                      <div class="ml-2">
                        <div class="h5 m-0">Miya</div>
                      </div>
                    </div>
                    <div>
                      <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                          <div class="h6 dropdown-header">@lang('index.configuration')</div>
                          <a class="dropdown-item" href="#">@lang('index.save')</a>
                          <a class="dropdown-item" href="#">@lang('index.hide')</a>
                          <a class="dropdown-item" href="#">@lang('index.report')</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10
                    min ago</div>
                  <a class="card-link" href="#">
                    <h5 class="card-title">Lorem ipsum dolor sit amet,
                      consectetur adip.</h5>
                  </a>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quo recusandae nulla rem eos ipsa praesentium esse magnam
                    nemo dolor
                    sequi fuga quia quaerat cum, obcaecati hic, molestias
                    minima iste voluptates.
                  </p>
                </div>
                <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-gittip"></i>@lang('index.like')</a>
                  <a href="#" class="card-link"><i class="fa fa-comment"></i>@lang('index.comment')</a>
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i>@lang('index.share')</a>
                </div>
              </div>
              <div class="card gedf-card">
                <div class="card-header">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div class="d-flex justify-content-between
                      align-items-center">
                      <div class="mr-2">
                        <img class="rounded-circle" width="45" src="{{ asset('bower_components/images/ava1.jpg') }}" alt="">
                      </div>
                      <div class="ml-2">
                        <div class="h5 m-0">Miya</div>
                      </div>
                    </div>
                    <div>
                      <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                          <div class="h6 dropdown-header">@lang('index.configuration')</div>
                          <a class="dropdown-item" href="#">@lang('index.save')</a>
                          <a class="dropdown-item" href="#">@lang('index.hide')</a>
                          <a class="dropdown-item" href="#">@lang('index.report')</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10
                    min ago</div>
                  <a class="card-link" href="#">
                    <h5 class="card-title">Lorem ipsum dolor sit amet,
                      consectetur adip.</h5>
                  </a>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quo recusandae nulla rem eos ipsa praesentium esse magnam
                    nemo dolor
                    sequi fuga quia quaerat cum, obcaecati hic, molestias
                    minima iste voluptates.
                  </p>
                </div>
                <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-gittip"></i>@lang('index.like')</a>
                  <a href="#" class="card-link"><i class="fa fa-comment"></i>@lang('index.comment')</a>
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i>@lang('index.share')</a>
                </div>
              </div>
              <div class="card gedf-card">
                <div class="card-header">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div class="d-flex justify-content-between
                      align-items-center">
                      <div class="mr-2">
                        <img class="rounded-circle" width="45" src="{{ asset('bower_components/images/ava1.jpg') }}" alt="">
                      </div>
                      <div class="ml-2">
                        <div class="h5 m-0">Miya</div>
                      </div>
                    </div>
                    <div>
                      <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                          <div class="h6 dropdown-header">@lang('index.configuration')</div>
                          <a class="dropdown-item" href="#">@lang('index.save')</a>
                          <a class="dropdown-item" href="#">@lang('index.hide')</a>
                          <a class="dropdown-item" href="#">@lang('index.report')</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10
                    min ago</div>
                  <a class="card-link" href="#">
                    <h5 class="card-title">Lorem ipsum dolor sit amet,
                      consectetur adip.</h5>
                  </a>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quo recusandae nulla rem eos ipsa praesentium esse magnam
                    nemo dolor
                    sequi fuga quia quaerat cum, obcaecati hic, molestias
                    minima iste voluptates.
                  </p>
                </div>
                <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-gittip"></i>@lang('index.like')</a>
                  <a href="#" class="card-link"><i class="fa fa-comment"></i>@lang('index.comment')</a>
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i>@lang('index.share')</a>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar nobottommargin clearfix">
            <div class="sidebar-widgets-wrap">
              <div class="widget clearfix user-profie">
                <div class="user-data full-width">
                  <div class="username-dt">
                    <div class="user-pic">
                      <img src="{{ asset('bower_components/images/ava1.jpg') }} " class="img-circle pic-size" alt="">
                    </div>
                  </div>
                  <div class="user-specs">
                    <h3 class="h34-fix-margin">Miya</h3>
                    <span>League of Legends streamer</span>
                  </div>
                  <ul class="ur-fw-status">
                    <li class="follow">
                      <h4 class="h4-fix-margin">@lang('index.following')</h4>
                      <span>100</span>
                    </li>
                    <li class="follow">
                      <h4 class="h4-fix-margin">@lang('index.follower')</h4>
                      <span>234.235</span>
                    </li>
                    <li>
                      <a href="#">@lang('index.viewprofile')</a>
                    </li>
                  </ul>
                </div>


              </div>
              <div class="widget clearfix">
                <h4>@lang('index.photo')</h4>
                <div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16"
                  data-type="group" data-lightbox="gallery">
                </div>
              </div>
              <div class="widget clearfix">
                <h4>@lang('index.tag')</h4>
                <div class="tagcloud">
                  <a href="#">@lang('index.general')</a>
                  <a href="#">@lang('index.videos')</a>
                  <a href="#">@lang('index.music')</a>
                  <a href="#">@lang('index.media')</a>
                  <a href="#">@lang('index.photography')</a>
                  <a href="#">@lang('index.parallax')</a>
                  <a href="#">@lang('index.ecommerce')</a>
                  <a href="#">@lang('index.terms')</a>
                  <a href="#">@lang('index.coupons')</a>
                  <a href="#">@lang('index.modern')</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <footer id="footer" class="dark">

    <div id="copyrights">
      <div class="container clearfix">
        <div class="col_half">
          Copyrights &copy; Lam Chung Production<br>
          <div class="copyright-links">
            <a href="#">Social Project</a>
            <a href="#">PHP Intern</a></div>
        </div>
        <div class="col_half col_last tright">
          <div class="fright clearfix">
            <a href="#" class="social-icon si-small si-borderless
                si-facebook">
              <i class="icon-facebook"></i>
              <i class="icon-facebook"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless
                si-twitter">
              <i class="icon-twitter"></i>
              <i class="icon-twitter"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless si-gplus">
              <i class="icon-gplus"></i>
              <i class="icon-gplus"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless
                si-pinterest">
              <i class="icon-pinterest"></i>
              <i class="icon-pinterest"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless si-vimeo">
              <i class="icon-vimeo"></i>
              <i class="icon-vimeo"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless
                si-github">
              <i class="icon-github"></i>
              <i class="icon-github"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless si-yahoo">
              <i class="icon-yahoo"></i>
              <i class="icon-yahoo"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless
                si-linkedin">
              <i class="icon-linkedin"></i>
              <i class="icon-linkedin"></i>
            </a>
          </div>
          <div class="clear"></div>
          <i class="icon-envelope2"></i> <a href="http://themes.semicolonweb.com/cdn-cgi/l/email-protection"
            class="__cf_email__" data-cfemail="0b62656d644b686a657d6a7825686466">[email&#160;protected]</a>
          <span class="middot">&middot;</span> <i class="icon-headphones"></i>
          +84-0999999999 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Skype
        </div>
      </div>
    </div>
  </footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>


<script src="{{ asset('bower_components/js-code/jquery.js') }}"></script>
<script src="{{ asset('bower_components/js-code/plugins.js') }}"></script>
<script src="{{ asset('bower_components/js-code/functions.js') }}"></script>
</div>
@endsection
