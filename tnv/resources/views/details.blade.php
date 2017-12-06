<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>T&V</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Main Font -->
    <script src="js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">

    <!-- Theme Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme-styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blocks.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simplecalendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
    <!-- Lightbox popup script-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

    <style>.star-rating__checkbox {
            position: absolute;
            overflow: hidden;
            clip: rect(0 0 0 0);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0;
            border: 0;
        }

        .star-rating__star {
            display: inline-block;
            padding: 3px;
            vertical-align: middle;
            line-height: 1;
            font-size: 1.5em;
            color: #ABABAB;
            transition: color .2s ease-out;
        }

        .star-rating__star:hover {
            cursor: pointer;
        }

        .star-rating__star.is-selected {
            color: #FFD700;
        }

        .star-rating__star.is-disabled:hover {
            cursor: default;
        }
        .critere{
            margin-top: 3%;
        }
    </style>
</head>
<body>




<!-- Header -->

<header class="header" style="position: relative;
    color: #fff;" id="site-header">

    <div class="page-title">
        <a href="{{ url('/welcome') }}" style="margin-top:-10%">
            <img src="{{url('img/logo2.png')}}" alt="t&v" style="max-width:71px;margin-left:-25px;margin-top:-27px;background-color: #edf2f7;">
        </a>
    </div>

    <div class="header-content-wrapper">
        <form class="search-bar w-search notification-list friend-requests">
            <div class="form-group with-button">
                <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                <button>
                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{url('icons/icons.svg#olymp-magnifying-glass-icon')}}"></use></svg>
                </button>
            </div>
        </form>

        <a href="#" class="link-find-friend"></a>

        <div class="control-block">

            <div class="control-icon more has-items">
                <svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
                <div class="label-avatar bg-blue">6</div>

                <div class="more-dropdown more-with-triangle triangle-top-center">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">FRIEND REQUESTS</h6>
                        <a href="#">Find Friends</a>
                        <a href="#">Settings</a>
                    </div>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="notification-list friend-requests">
                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar55-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                    <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                                </div>
                                <span class="notification-icon">
											<a href="#" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
												</span>
											</a>

											<a href="#" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
												</span>
											</a>

										</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar56-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                    <span class="chat-message-item">4 Friends in Common</span>
                                </div>
                                <span class="notification-icon">
											<a href="#" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
												</span>
											</a>

											<a href="#" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
												</span>
											</a>

										</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                </div>
                            </li>

                            <li class="accepted">
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar57-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
                                </div>
                                <span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{url('icons/icons.svg#olymp-little-delete')}}"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar58-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                    <span class="chat-message-item">9 Friends in Common</span>
                                </div>
                                <span class="notification-icon">
											<a href="#" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
												</span>
											</a>

											<a href="#" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="{{url('icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
												</span>
											</a>

										</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <a href="#" class="view-all bg-blue">Check all your Events</a>
                </div>
            </div>

            <div class="control-icon more has-items">
                <svg class="olymp-chat---messages-icon"><use xlink:href="{{url('icons/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
                <div class="label-avatar bg-purple">2</div>

                <div class="more-dropdown more-with-triangle triangle-top-center">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Chat / Messages</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="notification-list chat-message">
                            <li class="message-unread">
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar59-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                    <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                </div>
                                <span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="{{url('icons/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
										</span>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar60-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Jake Parker</a>
                                    <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                </div>
                                <span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="{{url('icons/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
										</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                </div>
                            </li>
                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar61-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                    <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-chat---messages-icon"><use xlink:href="{{url('icons/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
											</span>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                </div>
                            </li>

                            <li class="chat-group">
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar11-sm.jpg')}}" alt="author">
                                    <img src="{{url('img/avatar12-sm.jpg')}}" alt="author">
                                    <img src="{{url('img/avatar13-sm.jpg')}}" alt="author">
                                    <img src="{{url('img/avatar10-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                    <span class="last-message-author">Ed:</span>
                                    <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
											</span>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="view-all bg-purple">View All Messages</a>
                </div>
            </div>

            <div class="control-icon more has-items">
                <svg class="olymp-thunder-icon"><use xlink:href="icons/icons.svg#olymp-thunder-icon"></use></svg>

                <div class="label-avatar bg-primary">8</div>

                <div class="more-dropdown more-with-triangle triangle-top-center">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Notifications</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="notification-list">
                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar62-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
											</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li class="un-read">
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar63-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li class="with-comment-photo">
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar64-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
											</span>

                                <div class="comment-photo">
                                    <img src="{{url('img/comment-photo1.jpg')}}" alt="photo">
                                    <span>“She looks incredible in that outfit! We should see each...”</span>
                                </div>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar65-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="{{url('img/avatar66-sm.jpg')}}" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
											</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="view-all bg-primary">View All Notifications</a>
                </div>
            </div>

            <div class="author-page author vcard inline-items more">
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="author-name fn">
                        <div class="control-icon more has-items">
                            <i class="fa fa-lock"> </i> Login
                        </div>
                    </a>
                    <a href="{{ route('register') }}" class="author-name fn">
                        <div class="control-icon more has-items">
                            <i class="fa fa-edit"> </i> Register
                        </div>
                    </a>
                @else
                    <div class="author-thumb">
                        <img alt="author" src="{{url('img/author-page.jpg')}}" class="avatar">
                        <span class="icon-status online"></span>
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Your Account</h6>
                                </div>

                                <ul class="account-settings">
                                    <li>
                                        <a href="{{url('profile')}}">

                                            <svg class="olymp-menu-icon"><use xlink:href="icons/icons.svg#olymp-menu-icon"></use></svg>

                                            <span>Profile Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
                                            <svg class="olymp-logout-icon"><use xlink:href="icons/icons.svg#olymp-logout-icon"></use></svg>
                                            <span>Log Out</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>


                                </ul>


                            </div>

                        </div>
                    </div>
                    <div class="author-name fn">
                        <div class="author-title">
                            {{Auth::user()->firstname}} {{Auth::user()->lastname}} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                        </div>
                        <span class="author-subtitle">SPACE COWBOY</span>
                    </div>

                @endif
            </div>

        </div>
    </div>

</header>

<!-- ... end Header -->


<!-- Responsive Header -->

<header class="header header-responsive" id="site-header-responsive">

    <div class="header-content-wrapper">
        <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#request" role="tab">
                    <div class="control-icon has-items">
                        <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                        <div class="label-avatar bg-blue">6</div>
                    </div>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
                    <div class="control-icon has-items">
                        <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                        <div class="label-avatar bg-purple">2</div>
                    </div>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
                    <div class="control-icon has-items">
                        <svg class="olymp-thunder-icon"><use xlink:href="icons/icons.svg#olymp-thunder-icon"></use></svg>
                        <div class="label-avatar bg-primary">8</div>
                    </div>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#search" role="tab">
                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                    <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
                </a>
            </li>
        </ul>
    </div>

    <!-- Tab panes -->
    <div class="tab-content tab-content-responsive">

        <div class="tab-pane " id="request" role="tabpanel">

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">FRIEND REQUESTS</h6>
                    <a href="#">Find Friends</a>
                    <a href="#">Settings</a>
                </div>
                <ul class="notification-list friend-requests">
                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar55-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                            <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                        </div>
                        <span class="notification-icon">
												<a href="#" class="accept-request">
													<span class="icon-add without-text">
														<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
													</span>
												</a>

												<a href="#" class="accept-request request-del">
													<span class="icon-minus">
														<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
													</span>
												</a>

											</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar56-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Tony Stevens</a>
                            <span class="chat-message-item">4 Friends in Common</span>
                        </div>
                        <span class="notification-icon">
												<a href="#" class="accept-request">
													<span class="icon-add without-text">
														<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
													</span>
												</a>

												<a href="#" class="accept-request request-del">
													<span class="icon-minus">
														<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
													</span>
												</a>

											</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>
                    <li class="accepted">
                        <div class="author-thumb">
                            <img src="{{url('img/avatar57-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
                        </div>
                        <span class="notification-icon">
												<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar58-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                            <span class="chat-message-item">9 Friends in Common</span>
                        </div>
                        <span class="notification-icon">
												<a href="#" class="accept-request">
													<span class="icon-add without-text">
														<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
													</span>
												</a>

												<a href="#" class="accept-request request-del">
													<span class="icon-minus">
														<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
													</span>
												</a>

											</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>
                </ul>
                <a href="#" class="view-all bg-blue">Check all your Events</a>
            </div>

        </div>

        <div class="tab-pane " id="chat" role="tabpanel">

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">Chat / Messages</h6>
                    <a href="#">Mark all as read</a>
                    <a href="#">Settings</a>
                </div>

                <ul class="notification-list chat-message">
                    <li class="message-unread">
                        <div class="author-thumb">
                            <img src="{{url('img/avatar59-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Diana Jameson</a>
                            <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                        </div>
                        <span class="notification-icon">
												<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
											</span>
                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar60-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Jake Parker</a>
                            <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                        </div>
                        <span class="notification-icon">
												<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
											</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar61-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                            <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
												</span>
                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>

                    <li class="chat-group">
                        <div class="author-thumb">
                            <img src="{{url('img/avatar11-sm.jpg')}}" alt="author">
                            <img src="{{url('img/avatar12-sm.jpg')}}" alt="author">
                            <img src="{{url('img/avatar13-sm.jpg')}}" alt="author">
                            <img src="{{url('img/avatar10-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                            <span class="last-message-author">Ed:</span>
                            <span class="chat-message-item">Yeah! Seems fine by me!</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
												</span>
                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        </div>
                    </li>
                </ul>

                <a href="#" class="view-all bg-purple">View All Messages</a>
            </div>

        </div>

        <div class="tab-pane " id="notification" role="tabpanel">

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">Notifications</h6>
                    <a href="#">Mark all as read</a>
                    <a href="#">Settings</a>
                </div>

                <ul class="notification-list">
                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar62-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
												</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li class="un-read">
                        <div class="author-thumb">
                            <img src="{{url('img/avatar63-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li class="with-comment-photo">
                        <div class="author-thumb">
                            <img src="{{url('img/avatar64-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
												</span>

                        <div class="comment-photo">
                            <img src="{{url('img/comment-photo1.jpg')}}" alt="photo">
                            <span>“She looks incredible in that outfit! We should see each...”</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar65-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
												</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="{{url('img/avatar66-sm.jpg')}}" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
												</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>
                </ul>

                <a href="#" class="view-all bg-primary">View All Notifications</a>
            </div>

        </div>

        <div class="tab-pane " id="search" role="tabpanel">


            <form class="search-bar w-search notification-list friend-requests">
                <div class="form-group with-button">
                    <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                </div>
            </form>


        </div>

    </div>
    <!-- ... end  Tab panes -->

</header>



<div class="container"  id="app">
    <div class="row mt50">

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="ui-block mb60">
                <article class="hentry blog-post single-post single-post-v3">

                    <a href="#" class="post-category bg-primary">@{{post.category.title}}</a>


                    <h1 class="post-title">@{{post.title}}</h1>

                    <div class="author-date">
                        <div class="author-thumb">
                            <img alt="author" src="{{url('img/friend-harmonic7.jpg')}}" class="avatar">
                        </div>
                        by
                        <a class="h6 post__author-name fn" href="#">@{{post.user.firstname}} @{{post.user.lastname}}</a>
                        <div class="post__date">
                            <time class="published" datetime="2017-03-24T18:18">
                                -  12 hours ago
                            </time>
                        </div>
                    </div>

                    <div class="post-thumb">
                       <!--image if exist -->
                    </div>

                    <div class="post-content-wrap">

                        <div class="control-block-button post-control-button">
                            <h5>
                                <a href="#" class="post-add-icon inline-items">
                                    105<span><svg class="olymp-share-icon"> <use xlink:href="{{url('icons/icons.svg#olymp-share-icon')}}"></use></svg>
                                    </span>
                                </a>
                            </h5>
                            <a href="#" class="btn btn-control has-i bg-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>

                            <a href="#" class="btn btn-control has-i bg-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="post-content">


                            <p>@{{ post.content }}
                            </p>




                        </div>
                    </div>


                    <div class="choose-reaction reaction-colored">
                        <div class="title"><span>Ratings !</span></div>
                        <div class="vote" v-for="critere in post.criteres">

                            @{{ critere.title }}

                            <div class="star-rating" style="margin-left:5%" >
                                <label class="star-rating__star"  :class="{'is-selected': ((index <= critere.pivot.note)) }"
                                       v-for="index in 10"
                                >
                                    <input class="star-rating star-rating__checkbox" type="radio"
                                    >&#10022;</label>

                                @{{ critere.pivot.note }} / 10
                            </div>

                        </div>
                    </div>
                </article>
            </div>

            <div class="crumina-module crumina-heading with-title-decoration">

                <h5><a  class="post-add-icon inline-items pull-right" @click="Like(post)">
                    @{{ post.likes_count }}
                    <svg class="olymp-heart-icon">
                        <use xlink:href="{{url('icons/icons.svg#olymp-heart-icon')}}"></use>
                    </svg>
                    <span> Likes</span>
                </a ></h5>

                   <h5> <a class="post-add-icon inline-items" >
                        @{{ post.comments_count }}
                        <svg class="olymp-speech-balloon-icon">
                            <use xlink:href="{{url('icons/icons.svg#olymp-speech-balloon-icon')}}"></use>
                         </svg>
                        <span> Comments</span>
                    </a></h5>

            </div>

            <ul class="comments-list style-3">

                <li class="has-children" v-for="comment in post.comments">
                    <div class="post__author-thumb">
                        <img src="{{url('img/avatar3.jpg')}}" alt="author">
                    </div>

                    <div class="comments-content">
                        <div class="post__author author vcard">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">@{{ comment.firstname }} @{{ comment.lastname }}</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        @{{ comment.pivot.created_at }}
                                    </time>
                                </div>
                            </div>

                        </div>

                        <p>@{{ comment.pivot.content }}</p>
                        <a href="#" class="reply">Reply</a>
                        <a href="#" class="report">Report</a>
                    </div>

                    <ul class="children">
                        <li>
                            <div class="post__author-thumb">
                                <img src="{{url('img/avatar4.jpg')}}" alt="author">
                            </div>

                            <div class="comments-content">
                                <div class="post__author author vcard">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="#">James Spiegel</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2004-07-24T18:18">
                                                20 hours ago
                                            </time>
                                        </div>
                                    </div>

                                </div>

                                <p>Consectadipisicing elit, sed do eiusmod por incidid ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris.
                                </p>

                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="report">Report</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-center">
                <a href="#" class="btn btn-purple btn-md mb60 mt60">Load More Comments...</a>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <form>
                    <div class="crumina-module crumina-heading with-title-decoration">
                        <h5 class="heading-title">Write a Comment</h5>
                    </div>
                    <div class="row">


                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Your Comment</label>
                                <textarea class="form-control" placeholder="" v-model="post.comment"></textarea>
                            </div>
                            <a  class="btn btn-primary btn-lg full-width"  @click="addComment(post)">Post your Comment</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <aside class="blog-post-wrap">
                <div class="crumina-module crumina-heading with-title-decoration">
                    <h5 class="heading-title">Featured Posts</h5>
                </div>



                <div class="ui-block"  v-for="featured in sidebar">
                    <article class="hentry blog-post blog-post-v3 featured-post-item">

                        <div class="post-thumb">
                            <img src="{{url('img/post15.jpg')}}" alt="photo">
                            <a href="#" class="post-category bg-purple">@{{ featured.category.title }}</a>
                        </div>

                        <div class="post-content">

                            <div class="author-date">
                                by
                                <a class="h6 post__author-name fn" href="#">@{{ featured.user.firstname }} @{{ featured.user.lastname }} </a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        @{{ featured. created_at}}
                                    </time>
                                </div>
                            </div>

                            <a href="#" class="h4 post-title">@{{ featured.title }} </a>

                            <div class="post-additional-info inline-items">


                                <div class="names-people-likes">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-heart-icon"><use xlink:href="{{url('icons/icons.svg#olymp-heart-icon')}}"></use></svg>
                                        <span>39</span>
                                    </a>
                                </div>

                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon"><use xlink:href="{{url('icons/icons.svg#olymp-speech-balloon-icon')}}"></use></svg>
                                        <span>39</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </article>
                </div>



            </aside>
        </div>

    </div>

</div>

<section class="medium-padding100">
    <div class="container">
        <div class="related-posts">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-heading with-title-decoration">
                        <h5 class="heading-title">Related Articles</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <article class="hentry blog-post">

                            <div class="post-thumb">
                                <img src="{{url('img/post1.jpg')}}" alt="photo">
                            </div>

                            <div class="post-content">
                                <a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
                                <a href="#" class="h4 post-title">Here’s the Featured Urban photo of August! </a>
                                <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                                <div class="author-date">
                                    by
                                    <a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            - 7 hours ago
                                        </time>
                                    </div>
                                </div>

                                <div class="post-additional-info inline-items">

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat27.png')}}" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat2.png')}}" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="names-people-likes">
                                        26
                                    </div>

                                    <div class="comments-shared">
                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                            <span>0</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <article class="hentry blog-post">

                            <div class="post-thumb">
                                <img src="{{url('img/post7.jpg')}}" alt="photo">
                            </div>

                            <div class="post-content">
                                <a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
                                <a href="#" class="h4 post-title">Here are the best tattoos of our community</a>
                                <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                                <div class="author-date">
                                    by
                                    <a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            -  2 MONTHS ago
                                        </time>
                                    </div>
                                </div>

                                <div class="post-additional-info inline-items">

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat2.png')}}" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat4.png')}}" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="names-people-likes">
                                        37
                                    </div>

                                    <div class="comments-shared">
                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                            <span>62</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <article class="hentry blog-post">

                            <div class="post-thumb">
                                <img src="{{url('img/post8.jpg')}}" alt="photo">
                            </div>

                            <div class="post-content">
                                <a href="#" class="post-category bg-purple">INSPIRATION</a>
                                <a href="#" class="h4 post-title">Take a look to the coolest beaches of the world</a>
                                <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                                <div class="author-date">
                                    by
                                    <a class="h6 post__author-name fn" href="#">MADDY SIMMONS</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            - 2 months ago
                                        </time>
                                    </div>
                                </div>

                                <div class="post-additional-info inline-items">

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat26.png')}}" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat25.png')}}" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{url('img/icon-chat21.png')}}" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="names-people-likes">
                                        104
                                    </div>

                                    <div class="comments-shared">
                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                            <span>84</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">Start Making Friends Now!</a>
            </div>
        </div>
    </div>
    <img class="first-img" alt="guy" src="https://theme.crumina.net/app/img/guy.png')}}">
    <img class="second-img" alt="rocket" src="https://theme.crumina.net/app/img/rocket1.png')}}">
    <div class="content-bg-wrap">
        <div class="content-bg bg-section1"></div>
    </div>
</section>

<div class="footer footer-full-width" id="footer">
    <div class="container">
        <div class="container">
            <div class="container container">
                <a href="#" class="btn btn-control has-i bg-facebook pull-right ">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>

                <a href="#" class="btn btn-control has-i bg-twitter pull-right">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>


                <a href="#" class="btn btn-control has-i bg-google pull-right">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>

                <h2>Share your beloved website : </h2>
             </div>
        </div>
    </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sub-footer-copyright">
					<span>
						Copyright <a href="index-2.html">Olympus Buddypress + WP</a> All Rights Reserved 2017
					</span>
                </div>
            </div>
</div>

<div class="modal fade" id="registration-login-form-popup">
    <div class="modal-dialog ui-block window-popup registration-login-form-popup">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
        </a>
        <div class="registration-login-form">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                        <svg class="olymp-login-icon"><use xlink:href="icons/icons.svg#olymp-login-icon"></use></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                        <svg class="olymp-register-icon"><use xlink:href="icons/icons.svg#olymp-register-icon"></use></svg>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home1" role="tabpanel" data-mh="log-tab">
                    <div class="title h6">Register to Olympus</div>
                    <form class="content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">First Name</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Last Name</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Your Email</label>
                                    <input class="form-control" placeholder="" type="email">
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Your Password</label>
                                    <input class="form-control" placeholder="" type="password">
                                </div>

                                <div class="form-group date-time-picker label-floating">
                                    <label class="control-label">Your Birthday</label>
                                    <input name="datetimepicker" value="10/24/1984" />
                                    <span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="{{url('icons/icons.svg#olymp-calendar-icon')}}"></use></svg>
										</span>
                                </div>

                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Your Gender</label>
                                    <select class="selectpicker form-control">
                                        <option value="MA">Male</option>
                                        <option value="FE">Female</option>
                                    </select>
                                </div>

                                <div class="remember">
                                    <div class="checkbox">
                                        <label>
                                            <input name="optionsCheckboxes" type="checkbox">
                                            I accept the <a href="#">Terms and Conditions</a> of the website
                                        </label>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="profile1" role="tabpanel" data-mh="log-tab">
                    <div class="title h6">Login to your Account</div>
                    <form class="content">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Your Email</label>
                                    <input class="form-control" placeholder="" type="email">
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Your Password</label>
                                    <input class="form-control" placeholder="" type="password">
                                </div>

                                <div class="remember">

                                    <div class="checkbox">
                                        <label>
                                            <input name="optionsCheckboxes" type="checkbox">
                                            Remember Me
                                        </label>
                                    </div>
                                    <a href="#" class="forgot">Forgot my Password</a>
                                </div>

                                <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                                <div class="or"></div>

                                <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>

                                <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                                <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
    <img src="{{url('icons/back-to-top.svg')}}" alt="arrow" class="back-icon">
</a>

<script src="{{url('js/vue.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.0/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js"></script>
<script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>

<script>
    window.Laravel = {!! json_encode([
			  'csrfToken' => csrf_token(),
			  'idPost' => $id,
			  'url' => url('/')
			])

			!!};
</script>

<script >

    var app = new Vue({
        el : '#app',
        data :{
            criteres : [],
            critere : {
                id:0,
                value:0
            },
            total : 0,
            votes : [],
            vote : {
                id : 0,
                value : 0
            },
            edit:false,
            latestPosts:[],
            sidebar:[],
            left_bottom_sidebar:[],
            posts : [],
            post :{

                category_id:'',
                title:'',
                type :'post',
                content:'',
                place:'',
                criteres : [],
                like:0
            }

        },
        computed: {

        },
        methods:{
            AverageVotes: function(criteres) {
                let total = 0;
                for(let i = 0; i < criteres.length; i++){
                    console.log(criteres[i].pivot.note);
                    total += parseInt(criteres[i].pivot.note);
                }
                var ton_chiffre = total / criteres.length * 10 ; // Ta variable de chiffre
                return ton_chiffre.toFixed(0);
            },
            reinitialiser:function(){
                this.post = {
                    id:"",
                    category_id:'',
                    title:'',
                    type :'post',
                    content:'',
                    place:'',
                    criteres : []
                };
                this.criteres = [];
                this.critere = {
                    id:0,
                    value:0
                };
            },
            reinitialiserCriteres:function(){
                this.post.criteres = [];
            },
            getCriteres:function(){
                axios.get(window.Laravel.url+'/getCriteres/'+this.post.category_id)
                    .then(response =>{
                    this.criteres = response.data;
            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },
            valider_map:function(){

                this.post.place = $('#address').val()+":::"+$('#lat').val()+":::"+$('#lng').val();
            },
            changeType:function(type){
                this.post.type = type;
            },


            deletePost:function(post){

                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(() => {

                    axios.delete(window.Laravel.url + '/deletePost/'+post.id)
                    .then(response => {

                    if(response.data.etat)
                {
                    var pos = this.posts.indexOf(post);
                    this.posts.splice(pos,1);
                }
            })
            .catch(error => {
                    console.log(error);
            })
                swal(
                    'Deleted!',
                    'Your post has been deleted.',
                    'success'
                )
            }, function (dismiss) {
                    // dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                    if (dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your post is safe :)',
                            'error'
                        )
                    }
                })

            },
            getPost:function(){
                axios.get(window.Laravel.url+'/getPost/'+window.Laravel.idPost)
                    .then(response =>{
                    console.log(response.data);
                    this.post = response.data.post;
                    this.sidebar = response.data.sidebar;

                // this.latestPosts = response.data.left_sidebar;
                //this.left_top_sidebar = response.data.left_top_sidebar;
                //this.left_bottom_sidebar = response.data.left_bottom_sidebar;


            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },Like:function(post){
                axios.post(window.Laravel.url+'/Like',post)
                    .then(response =>{
                    this.getPost();
                swal({
                    position: 'top-right',
                    type: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },
            addComment:function(post){
                post.detail = true;
                axios.post(window.Laravel.url+'/addComment',post)
                    .then(response =>{

                if(response.data.etat) {
                    this.getPost();
                    swal({
                        position: 'top-right',
                        type: 'success',
                        title: 'Success : +1 point',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },

        },mounted:function(){

            this.getPost();

        }
    });
</script>
<!-- jQuery first, then Other JS. -->
<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>


<!-- Js effects for material design. + Tooltips -->
<script src="{{asset('js/material.min.js')}}"></script>

<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="{{asset('js/theme-plugins.js')}}"></script>


<!-- Init functions -->
<script src="{{asset('js/main.js')}}"></script>

<!-- Load more news AJAX script -->
<script src="{{asset('js/ajax-pagination.js')}}"></script>

<!-- Select / Sorting script -->
<script src="{{asset('js/selectize.min.js')}}"></script>

<!-- Datepicker input field script-->
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/daterangepicker.min.js')}}"></script>

<!-- Widget with events script-->
<script src="{{asset('js/simplecalendar.js')}}"></script>

<!-- Lightbox plugin script-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>


<script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>


</body>
</html>
