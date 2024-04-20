@extends('home.layouts.app')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h2>Mexican</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mexican</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- blog main wrapper start -->
        <div class="blog-main-wrapper pt-60 pb-60 pb-md-54 pb-sm-54">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="blog-sidebar-wrapper pt-md-60 pt-sm-60">

                            <div class="blog-sidebar">
                                <h4 class="title">categories</h4>
                                <ul class="blog-archive blog-category">
                                    <li><a href="#">Alba Cinnamon</a></li>
                                    <li><a href="#">Continental</a></li>
                                    <li>
                                        <a href="{{ route('mexican') }}"
                                            style="{{ Route::currentRouteName() === 'mexican' ? 'color: #62d2a2;' : '' }}">Mexican</a>
                                    </li>
                                    <li><a href="#">Hamburg</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->

                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="blog-item-wrapper blog-item-wrapper__blog-grid blog-item-wrapper__blog-details">
                            <div class="blog-img">
                                <div class="blog-gallery-slider slider-arrow-style slider-arrow-style__style-2">
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog1.jpg" alt="">
                                    </div>
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog2.jpg" alt="">
                                    </div>
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog3.jpg" alt="">
                                    </div>
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="blog-inner-content">
                                <h5 class="cat-name"><a href="#">fruits</a></h5>
                                <h3>natural fresh berries</h3>
                                <ul class="blog-meta">
                                    <li>Post by: <span>Admin</span></li>
                                    <li>March 10 2023</li>
                                </ul>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis
                                    consequuntur illo aliquid nihil ad neque, debitis praesentium libero ullam
                                    asperiores exercitationem deserunt inventore facilis, officiis,</p>
                                <blockquote>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In
                                        venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed,
                                        cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                                        tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                </blockquote>
                                <p>aliquam maiores asperiores recusandae commodi blanditiis ipsum tempora culpa
                                    possimus assumenda ab quidem a voluptatum quia natus? Ex neque, saepe reiciendis
                                    quasi velit perspiciatis error vel quas quibusdam autem nesciunt voluptas odit quis
                                    dignissimos eos aspernatur voluptatum est repellat. Pariatur praesentium, corrupti
                                    deserunt ducimus quo doloremque nostrum aspernatur saepe cupiditate sit autem
                                    exercitationem debitis, maiores vitae perferendis nemo? Voluptas illo, animi
                                    temporibus quod earum molestias eaque, iure rem amet autem dignissimos officia
                                    dolores numquam distinctio esse voluptates optio pariatur aspernatur omnis? Ipsam
                                    qui commodi velit natus reiciendis quod quibusdam nemo eveniet similique animi!</p>
                                <div class="tag-line">
                                    <h5>tag:</h5>
                                    <a href="#">dry food</a>,
                                    <a href="#">wet food</a>,
                                    <a href="#">reach food</a>,
                                </div>
                                <div class="blog-share-link">
                                    <h5>share this post</h5>
                                    <div class="blog-social-icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- comment area start -->
                        <div class="comment-section pt-56">
                            <h3>03 comment</h3>
                            <ul>
                                <li>
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">reply</a></span>
                                        <h5 class="comment-author">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2023 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">reply</a></span>
                                        <h5 class="comment-author">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2023 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">reply</a></span>
                                        <h5 class="comment-author">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2023 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- comment area end -->
                        <!-- start blog comment box -->
                        <div class="blog-comment-wrapper pt-52">
                            <h3>leave a reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="comment-post-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>comment</label>
                                            <textarea name="commnet" placeholder="Write a comment"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mb-sm-20">
                                            <label>Name</label>
                                            <input type="text" class="coment-field" placeholder="Name">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mb-sm-20">
                                            <label>Email</label>
                                            <input type="text" class="coment-field" placeholder="Email">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mb-sm-20">
                                            <label>Website</label>
                                            <input type="text" class="coment-field" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <div class="coment-btn mt-20">
                                                <input class="btn btn__bg btn__sqr" type="submit" name="submit"
                                                    value="post comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- start blog comment box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->
    </main>
@endsection
