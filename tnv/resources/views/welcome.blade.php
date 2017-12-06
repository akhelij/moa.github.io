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

<header class="header" id="site-header">

    <div class="page-title">
        <a href="{{ url('/welcome') }}" style="margin-top:-10%">
            <img src="img/logo2.png" alt="t&v" style="max-width:71px;margin-left:-25px;margin-top:-27px;background-color: #edf2f7;">
        </a>
    </div>

    <div class="header-content-wrapper">
        <form class="search-bar w-search notification-list friend-requests">
            <div class="form-group with-button">
                <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                <button>
                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                </button>
            </div>
        </form>

        <a href="#" class="link-find-friend"></a>

        <div class="control-block">

            <div class="control-icon more has-items">
                <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
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
                                    <img src="img/avatar55-sm.jpg" alt="author">
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
                                    <img src="img/avatar56-sm.jpg" alt="author">
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
                                    <img src="img/avatar57-sm.jpg" alt="author">
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
                                    <img src="img/avatar58-sm.jpg" alt="author">
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
                    </div>

                    <a href="#" class="view-all bg-blue">Check all your Events</a>
                </div>
            </div>

            <div class="control-icon more has-items">
                <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
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
                                    <img src="img/avatar59-sm.jpg" alt="author">
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
                                    <img src="img/avatar60-sm.jpg" alt="author">
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
                                    <img src="img/avatar61-sm.jpg" alt="author">
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
                                    <img src="img/avatar11-sm.jpg" alt="author">
                                    <img src="img/avatar12-sm.jpg" alt="author">
                                    <img src="img/avatar13-sm.jpg" alt="author">
                                    <img src="img/avatar10-sm.jpg" alt="author">
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
                                    <img src="img/avatar62-sm.jpg" alt="author">
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
                                    <img src="img/avatar63-sm.jpg" alt="author">
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
                                    <img src="img/avatar64-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                </div>
                                <span class="notification-icon">
												<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
											</span>

                                <div class="comment-photo">
                                    <img src="img/comment-photo1.jpg" alt="photo">
                                    <span>“She looks incredible in that outfit! We should see each...”</span>
                                </div>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar65-sm.jpg" alt="author">
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
                                    <img src="img/avatar66-sm.jpg" alt="author">
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
                        <img alt="author" src="img/author-page.jpg" class="avatar">
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
                            <img src="img/avatar55-sm.jpg" alt="author">
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
                            <img src="img/avatar56-sm.jpg" alt="author">
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
                            <img src="img/avatar57-sm.jpg" alt="author">
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
                            <img src="img/avatar58-sm.jpg" alt="author">
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
                            <img src="img/avatar59-sm.jpg" alt="author">
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
                            <img src="img/avatar60-sm.jpg" alt="author">
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
                            <img src="img/avatar61-sm.jpg" alt="author">
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
                            <img src="img/avatar11-sm.jpg" alt="author">
                            <img src="img/avatar12-sm.jpg" alt="author">
                            <img src="img/avatar13-sm.jpg" alt="author">
                            <img src="img/avatar10-sm.jpg" alt="author">
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
                            <img src="img/avatar62-sm.jpg" alt="author">
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
                            <img src="img/avatar63-sm.jpg" alt="author">
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
                            <img src="img/avatar64-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                        </div>
                        <span class="notification-icon">
													<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
												</span>

                        <div class="comment-photo">
                            <img src="img/comment-photo1.jpg" alt="photo">
                            <span>“She looks incredible in that outfit! We should see each...”</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar65-sm.jpg" alt="author">
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
                            <img src="img/avatar66-sm.jpg" alt="author">
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

<!-- ... end Responsive Header -->

<div class="header-spacer"></div>
@include('map')
<div class="container" id="app">


    <div class="modal-map" id="update-location">
        <div class="modal-dialog ui-block window-popup update-header-photo">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Update location<i>(click to choose the location)</i></h6>
                <button class="btn btn-primary pull-right" value="Valider" @click="valider_map" data-dismiss="modal" aria-label="Close">Valider</button>
            </div>
            <div class="container row" align="center">
                <div class="col-md-12"> <input type="text" id="address" class="map-control"  size="30"></div>
                <div class="col-md-6"> <input type="text" id="lat"  class="map-control"  size="30" readonly></div>
                <div class="col-md-6"> <input type="text" id="lng"  class="map-control" size="30" readonly></div>
            </div>
            <br>

            <input id="pac-input" class="map-control" type="text" placeholder="Search Box">

            <div id="map_canvas"></div>

        </div>
    </div>

    <div class="row">

        <!-- Main Content -->

        <main class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
            @if (Auth::guest() == false)
                <div class="ui-block">
                    <div class="news-feed-form">
                        <input type="hidden" id="place" class="map-control"  size="30" v-model="post.place">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" style="width:50%">
                                <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true" v-on:click="changeType('post')">

                                    <svg class="olymp-status-icon"><use xlink:href="icons/icons.svg#olymp-status-icon"></use></svg>

                                    <span>Status</span>
                                </a>
                            </li>
                            <li class="nav-item" style="width:50%">
                                <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false" v-on:click="changeType('question')">

                                    <svg class="olymp-multimedia-icon"><use xlink:href="icons/icons.svg#olymp-multimedia-icon"></use></svg>

                                    <span>Question</span>
                                </a>
                            </li>


                        </ul>
                        <!--fdc_post -->
                        <div class="form-group " style="margin:5%">
                            <label>Category</label>
                            <select  id="category" class="form-control"  name="category" v-model="post.category_id" v-on:change="getCriteres" >
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group " style="margin:5%">
                            <label>About what/who ?</label>
                            <input class="form-control" id="title" name="title" placeholder="Subject" v-model="post.title">

                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                                <form>
                                    <div class="author-thumb">
                                        <img src="img/author-page.jpg" alt="author">
                                    </div>
                                    <div class="form-group with-icon label-floating is-empty">
                                        <label class="control-label">Share what you are thinking here...</label>
                                        <textarea class="form-control" placeholder="" v-model="post.content"></textarea>
                                    </div>




                                    <div class="col-md-12" id="criteres" >


                                        <div class='critere' v-for="critere in criteres">
                                            <label >@{{critere.title}} : &nbsp; </label>
                                            <star-rating  :id="critere.id" :name="critere.title" > </star-rating>

                                        </div>


                                    </div>
                                    <div class="add-options-message">
                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                                            <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
                                        </a>
                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                                            <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
                                        </a>

                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                                            <svg class="olymp-small-pin-icon" data-toggle="modal" data-target="#update-location"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
                                        </a>


                                        <input type ="button" class="btn btn-success btn-md col-md-4 pull-right" @click="updatePost" value="Edit Status" v-if="edit">
                                        <input type ="button" class="btn btn-primary btn-md col-md-4 pull-right" @click="addPost" value="Post Status" v-else>

                                    </div>

                                </form>
                            </div>

                            <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
                                <form>
                                    <div class="author-thumb">
                                        <img src="img/author-page.jpg" alt="author">
                                    </div>
                                    <div class="form-group with-icon label-floating" >
                                        <label class="control-label">Share what you are thinking here...</label>
                                        <textarea class="form-control" placeholder=""  ></textarea>
                                    </div>

                                    <div class="add-options-message">
                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                                            <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
                                        </a>
                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                                            <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
                                        </a>

                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                                            <svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
                                        </a>

                                        <input type ="button" class="btn btn-success btn-md col-md-4 pull-right" @click="updateQuestion" value="Edit Status" v-if="editQuestion">
                                        <input type ="button" class="btn btn-primary btn-md col-md-4 pull-right" @click="addQuestion" value="Post Status" v-else>

                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
            <div id="newsfeed-items-grid" >




                <!--fda_post -->
                <div class="ui-block" v-for="(post, indexOfPost) in posts">
                    <div class="post-thumb">


                    </div>
                    <article class="hentry post has-post-thumbnail">


                        <div class="post__author author vcard inline-items">
                            <img src="img/author-main1.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">@{{ post.user.firstname }} @{{post.user.lastname }}</a> On
                                <a :href="'details/'+post.id">@{{ post.title }}</a>
                                <div class="post__date">
                                    <time class="published" >
                                        @{{ post.created_at | timeAgo }}
                                    </time>
                                </div>
                            </div>

                            <div class="more">

                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#" @click="editPost(post)">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#" @click="deletePost(post)">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <a href="#" class="post-category bg-purple">@{{ post.category.title }}</a>
                        <div class="row" v-if="post.type == 'post' ">
                            <div class="col-md-8 pull-left">


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
                            <div class="col-md-4 pull-right">
                                <div class="circle-progress circle-pie-chart">
                                    <div class="pie-chart" data-value="0.68" data-startcolor="#38a9ff" data-endcolor="#317cb6">
                                        <div class="content"><span>%</span></div>
                                    </div>
                                </div>
                                <h4 style="position: absolute;top: 50%;transform: translateY(-50%);">Result @{{ AverageVotes(post.criteres) }}%</h4>
                            </div>
                        </div>
                        <p>@{{ post.content }}</p>

                        <div class="post-additional-info inline-items">

                            <a  class="post-add-icon inline-items" @click="Like(post)">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>@{{ post.likes_count }} Likes</span>
                            </a >

                            <div class="comments-shared">
                                <a  class="post-add-icon inline-items" >
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>@{{ post.comments_count }} Comments</span>
                                </a>

                                <a  class="post-add-icon inlinspane-items">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                    <span>0 Shares</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">
                            <a href="#" class="btn btn-control" >
                                <span style="font-size:14px;margin-top: -10px">70%</span>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-stats-icon"><use xlink:href="icons/icons.svg#olymp-stats-icon"></use></svg>
                            </a>



                        </div>

                    </article>



                    <ul class="comments-list">
                        <li  v-for="(comment, indexOfComment) in post.comments">
                            <div class="post__author author vcard inline-items">

                                <img src="img/author-page.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="{{url('home')}}">@{{ comment.firstname }} @{{ comment.lastname }}</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2004-07-24T18:18">
                                            @{{ comment.pivot.created_at | timeAgo}}
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{url('icons/icons.svg#olymp-three-dots-icon')}}"></use></svg></a>

                            </div>

                            <p>@{{ comment.pivot.content }}</p>

                            <a  class="post-add-icon inline-items"  @click="LikeComment(comment.pivot.id, indexOfPost, indexOfComment)">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>@{{ comment.pivot.likes_count }} </span>
                            </a>

                        </li>

                    </ul>

                    <a href="#" class="more-comments">View more comments <span>+</span></a>


                    @if (Auth::guest() == false)

                    <form class="comment-form inline-items">
                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">
                            <div class="form-group with-icon-right is-empty">
                                <textarea placeholder="" class="form-control" v-model="post.comment"></textarea>
                                <div class="add-options-message">
                                    <a href="#" data-toggle="modal" data-target="#update-header-photo" class="options-message">
                                        <svg class="olymp-camera-post-icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="icons/icons.svg#olymp-camera-post-icon"></use>
                                        </svg>
                                    </a>
                                    <a  class="options-message" @click="addComment(post)">
                                        <svg class="olymp-comments-post-icon ">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                                <span class="material-input"></span>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>






                <div class="ui-block">
                    <article class="hentry post video">

                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar7-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a href="#">link</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        March 4 at 2:05pm
                                    </time>
                                </div>
                            </div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron Maid. The next time they come to the city we should totally go!</p>

                        <div class="post-video">
                            <div class="video-thumb">
                                <img src="img/video-youtube1.jpg" alt="photo">
                                <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                                    <svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
                                </a>
                            </div>

                            <div class="video-content">
                                <a href="#" class="h4 title">Iron Maid - ChillGroves</a>
                                <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua...
                                </p>
                                <a href="#" class="link-site">YOUTUBE.COM</a>
                            </div>
                        </div>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>18</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic9.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic11.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">Jenny</a>, <a href="#">Robert</a> and
                                <br>18 more liked this
                            </div>

                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>

                                    <span>0</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>

                                    <span>16</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                            </a>

                        </div>

                    </article>
                </div>

                <div class="ui-block">
                    <article class="hentry post">

                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar10-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        9 hours ago
                                    </time>
                                </div>
                            </div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
                        </p>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>24</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic9.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic11.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">You</a>, <a href="#">Elaine</a> and
                                <br>22 more liked this
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>17</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                    <span>24</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                            </a>

                        </div>

                    </article>

                    <ul class="comments-list">
                        <li>
                            <div class="post__author author vcard inline-items">
                                <img src="img/author-page.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="{{url('home')}}">James Spiegel</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2004-07-24T18:18">
                                            38 mins ago
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

                            </div>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>3</span>
                            </a>
                            <a href="#" class="reply">Reply</a>
                        </li>
                        <li>
                            <div class="post__author author vcard inline-items">
                                <img src="img/avatar1-sm.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2004-07-24T18:18">
                                            1 hour ago
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

                            </div>

                            <p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
                                quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                            </p>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>8</span>
                            </a>
                            <a href="#" class="reply">Reply</a>
                        </li>
                    </ul>

                    <a href="#" class="more-comments">View more comments <span>+</span></a>

                    <form class="comment-form inline-items">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="form-group with-icon-right ">
                                <textarea class="form-control" placeholder=""  ></textarea>
                                <div class="add-options-message">
                                    <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                        <svg class="olymp-camera-icon"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail">

                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar5-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        March 8 at 6:42pm
                                    </time>
                                </div>
                            </div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p>Hey guys! We are gona be playing this Saturday of <a href="#">The Marina Bar</a> for their new Mystic Deer Party.
                            If you wanna hang out and have a really good time, come and join us. We’l be waiting for you!
                        </p>

                        <div class="post-thumb">
                            <img src="img/post__thumb1.jpg" alt="photo">
                        </div>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>49</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic9.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic11.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">Jimmy</a>, <a href="#">Andrea</a> and
                                <br>47 more liked this
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>264</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                    <span>37</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                            </a>

                        </div>

                    </article>
                </div>

                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail">

                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar3-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Sarah Hetfield</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        March 2 at 9:06am
                                    </time>
                                </div>
                            </div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                        </p>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>0 Likes</span>
                            </a>

                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>0 Comments</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                    <span>2 Shares</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                            </a>

                        </div>

                    </article>
                </div>

                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail">

                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar2-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Nicholas Grissom</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        March 2 at 8:34am
                                    </time>
                                </div>
                            </div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque.
                        </p>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                <span>22</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic9.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic11.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">Jimmy</a>, <a href="#">Andrea</a> and
                                <br>47 more liked this
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>0</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                    <span>2</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                            </a>

                        </div>

                    </article>
                </div>

            </div>


            <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>


        </main>

        <!-- ... end Main Content -->


        <!-- Left Sidebar -->

        <aside class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">


            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Latest posts</h6>
                </div>

                <ul class="widget w-friend-pages-added notification-list friend-requests">
                    <li v-for="latestPost in latestPosts">
                        <div class="author-thumb">
                            <img src="img/avatar49-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">@{{ latestPost.user.lastname }}</a> On  <a href="#" class="notification-link">@{{ latestPost.title }}</a>.
                            <span class="notification-date">Category : <a href="#"> @{{ latestPost.category.title }}</a></span>
                        </div>
                    </li>


                </ul>

            </div>
            @if (Auth::guest())
                <div class="ui-block">
                    <div class="widget w-action">

                        <img src="img/logo.png" alt="Olympus">

                        <div class="content">
                            <h4 class="title" style="color:#496e91">Test & Vote</h4>
                            <span >THE FUTUR BEST SOCIAL NETWORK!</span>
                            <a href="{{url('login')}}" class="btn btn-bg-secondary ">Register Now!</a>
                        </div>



                    </div>
                </div>
            @else
                <div class="ui-block">
                    <div class="widget w-birthday-alert">

                        <div class="content" align="center">
                            <h4 class="title" style="color:#ffffff">Test & Vote</h4>

                            <img src="img/rocket.png" alt="Olympus">
                            <span >KNOW MORE ABOUT US!</span>
                            <a href="{{url('story')}}" class="btn btn-bg-secondary ">Our Story</a>
                        </div>
                    </div>
                </div>
            @endif
        </aside>

        <!-- ... end Left Sidebar -->


        <!-- Right Sidebar -->

        <aside class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">




            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Active Users</h6>
                </div>

                <ul class="widget w-friend-pages-added notification-list friend-requests">
                    <li class="inline-items" v-for="left in left_top_sidebar">
                        <div class="author-thumb">
                            <img src="img/avatar38-sm.jpg" alt="author">
                        </div>


                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">@{{ left.lastname }} @{{ left.firstname }}</a>
                            <span class="chat-message-item">@{{ left.posts_count }} Posts</span>
                        </div>
                        <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>
								</span>

                    </li>


                </ul>

            </div>

            <div class="ui-block">

                <div class="ui-block-title">
                    <h6 class="title">Best Posts</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>

                <ul class="widget w-activity-feed notification-list">
                    <li v-for="left in left_bottom_sidebar">
                        <div class="author-thumb">
                            <img src="img/avatar49-sm.jpg" alt="author">
                        </div>



                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">@{{ left.title }} </a> by @{{ left.user.lastname }} .
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">@{{ left.likes_count }} Likes</time></span>
                        </div>
                    </li>


                </ul>
            </div>




        </aside>

        <!-- ... end Right Sidebar -->

    </div>
</div>


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
    <div class="modal-dialog ui-block window-popup update-header-photo">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
        </a>

        <div class="ui-block-title">
            <h6 class="title">Update Header Photo</h6>
        </div>

        <a href="#" class="upload-photo-item">
            <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>

            <h6>Upload Photo</h6>
            <span>Browse your computer.</span>
        </a>

        <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

            <svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>

            <h6>Choose from My Photos</h6>
            <span>Choose from your uploaded photos</span>
        </a>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->




<!-- Window-popup Choose from my Photo -->
<div class="modal fade" id="choose-from-my-photo">
    <div class="modal-dialog ui-block window-popup choose-from-my-photo">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
        </a>

        <div class="ui-block-title">
            <h6 class="title">Choose from My Photos</h6>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                        <svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                        <svg class="olymp-albums-icon"><use xlink:href="icons/icons.svg#olymp-albums-icon"></use></svg>
                    </a>
                </li>
            </ul>
        </div>


        <div class="ui-block-content">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo1.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo2.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo3.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>

                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo4.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo5.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo6.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>

                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo7.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo8.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="img/choose-photo9.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>


                    <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                    <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="img/choose-photo10.jpg" alt="photo">
                            <figcaption>
                                <a href="#">South America Vacations</a>
                                <span>Last Added: 2 hours ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="img/choose-photo11.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Photoshoot Summer 2016</a>
                                <span>Last Added: 5 weeks ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="img/choose-photo12.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Amazing Street Food</a>
                                <span>Last Added: 6 mins ago</span>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="img/choose-photo13.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Graffity & Street Art</a>
                                <span>Last Added: 16 hours ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="img/choose-photo14.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Amazing Landscapes</a>
                                <span>Last Added: 13 mins ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="img/choose-photo15.jpg" alt="photo">
                            <figcaption>
                                <a href="#">The Majestic Canyon</a>
                                <span>Last Added: 57 mins ago</span>
                            </figcaption>
                        </figure>
                    </div>


                    <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                    <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->

<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
    <div class="ui-block-title">
        <span class="icon-status online"></span>
        <h6 class="title" >Chat</h6>
        <div class="more">
            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
            <svg class="olymp-little-delete js-chat-open"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
        </div>
    </div>
    <div class="mCustomScrollbar">
        <ul class="notification-list chat-message chat-message-field">
            <li>
                <div class="author-thumb">
                    <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                </div>
                <div class="notification-event">
                    <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
                </div>
                <div class="notification-event">
                    <span class="chat-message-item">Don’t worry Mathilda!</span>
                    <span class="chat-message-item">I already bought everything</span>
                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                </div>
            </li>

            <li>
                <div class="author-thumb">
                    <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                </div>
                <div class="notification-event">
                    <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                </div>
            </li>
        </ul>
    </div>

    <form>

        <div class="form-group label-floating is-empty">
            <label class="control-label">Press enter to post...</label>
            <textarea class="form-control" placeholder=""></textarea>
            <div class="add-options-message">
                <a href="#" class="options-message">
                    <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
                </a>
                <div class="options-message smile-block">

                    <svg class="olymp-happy-sticker-icon"><use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

                    <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                        <li>
                            <a href="#">
                                <img src="img/icon-chat1.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat2.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat3.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat4.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat5.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat6.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat7.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat8.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat9.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat10.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat11.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat12.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat13.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat14.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat15.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat16.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat17.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat18.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat19.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat20.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat21.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat22.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat23.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat24.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat25.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat26.png" alt="icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icon-chat27.png" alt="icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </form>


</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
    <img src="icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

<script src="{{url('js/vue.js')}}"></script>
<script src="{{url('js/moment.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.0/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js"></script>
<script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>

<script type="text/javascript">
    window.Laravel = {!! json_encode([
			  'csrfToken' => csrf_token(),
			  'url' => url('/')
			])

			!!};
</script>

<script >
    Vue.filter('timeAgo', function (value) {
        return moment(value).fromNow();
    });
    var app = new Vue({
        el : '#app',
        directives:{
            dateshow : function (value){
                var date=moment(value).fromNow(); // here u modify data
                this.el.innerText=date; // and set to the view

            }
        },
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
            editQuestion:false,
            latestPosts:[],
            left_top_sidebar:[],
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
            addPost:function(){
                for(i=0;i<app.votes.length;i++){
                    critere= {
                        id: app.votes[i].id,
                        value: app.votes[i].value
                    }

                    this.post.criteres.push(critere);
                }
                axios.post(window.Laravel.url+'/addPost',this.post)
                    .then(response =>{
                    this.reinitialiserCriteres();

                if(response.data.etat)
                {
                    this.post.created_at = response.data.created_at.date.split(".")[0];
                    this.post.id = response.data.id;

                    this.posts.push(this.post);
                    swal(
                        'Saved!',
                        'Your transaction has been added.',
                        'success'
                    )
                    this.reinitialiser();
                    this.getPosts();
                }
            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },
            addQuestion:function(){

                axios.post(window.Laravel.url+'/addQuestion',this.post)
                    .then(response =>{


                if(response.data.etat)
                {
                    this.post.created_at = response.data.created_at.date.split(".")[0];
                    this.post.id = response.data.id;

                    this.posts.push(this.post);
                    swal(
                        'Saved!',
                        'Your transaction has been added.',
                        'success'
                    )
                    this.reinitialiser();
                    this.getPosts();
                }
            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },
            editPost:function(post){

                this.edit = true;
                this.post = post;

                this.criteres = this.getCriteres();

            },
            updatePost:function(){
                for(i=0;i<app.votes.length;i++){
                    critere= {
                        id: app.votes[i].id,
                        value: app.votes[i].value
                    }

                    this.post.criteres.push(critere);
                }
                axios.put(window.Laravel.url + '/updatePost', this.post)
                    .then(response => {
                    this.reinitialiserCriteres();
                console.log(response.data);

                if(response.data.etat)
                {

                    this.post.created_at = response.data.created_at.date.split(".")[0];
                    this.post.id = response.data.id;

                    this.posts.push(this.post);
                    swal(
                        'Updated!',
                        'Your transaction has been added.',
                        'success'
                    )
                    this.reinitialiser();
                    this.getPosts();
                }
            })
            .catch(error => {
                    console.log(error);
            })
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
            getPosts:function(){
                axios.get(window.Laravel.url+'/getPosts')
                    .then(response =>{
                        console.log(response.data);


                    this.posts = response.data.listOfPost;

                for(i =0 ; i< this.posts.length;i++){
                    for(j =0 ; j< this.posts[i].comments.length;j++) {
                        if(response.data.comments[i].post_id == this.posts[i].id)
                        {
                            for(x =0 ; x< response.data.comments.length;x++) {
                                if(this.posts[i].comments[j].pivot.id == response.data.comments[x].id) {
                                    this.posts[i].comments[j].pivot = response.data.comments[x];
                                }
                            }
                        }


                    }

                }


                    this.latestPosts = response.data.left_sidebar;
                    this.left_top_sidebar = response.data.left_top_sidebar;
                    this.left_bottom_sidebar = response.data.left_bottom_sidebar;

            })
            .catch(error => {
                    console.log('errors : ', error);
            })
            },Like:function(post){
                axios.post(window.Laravel.url+'/Like',post)
                    .then(response =>{
                        console.log(response.data);
                    if(response.data.etat){

                    this.posts = response.data.listOfPost;
                    swal({
                        position: 'top-right',
                        type: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    swal({
                        position: 'top-right',
                        type: 'error',
                        title: 'Erreur veuillez nous contacter',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            })
            .catch(error => {
                    console.log('errors : ', error);
                swal({
                    position: 'top-right',
                    type: 'error',
                    title: 'You have to login, If the error persist please contact us',
                    showConfirmButton: false,
                    timer: 2500
                })
            })
            },LikeComment:function(commentId,indexOfPost, indexOfComment){

                axios.post(window.Laravel.url+'/LikeComment',[ commentId,  indexOfPost, indexOfComment])
                    .then(response =>{
                        console.log(response.data);
                    if(response.data.etat){

                            this.posts[indexOfPost].comments[indexOfComment].pivot = response.data.comment;

                        swal({
                            position: 'top-right',
                            type: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }else{
                        swal({
                            position: 'top-right',
                            type: 'error',
                            title: 'Error,  If the error persist please contact us ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }

                })
                .catch(error => {
                        console.log('errors : ', error);
                        swal({
                            position: 'top-right',
                            type: 'error',
                            title: 'You have to login, If the error persist please contact us',
                            showConfirmButton: false,
                            timer: 2500
                        })
                })
            },
            addComment:function(post){
                axios.post(window.Laravel.url+'/addComment',post)
                    .then(response =>{
                    if(response.data.etat) {
                    this.posts = response.data.listOfPost;
                    swal({
                        position: 'top-right',
                        type: 'success',
                        title: 'Success : +1 point',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    swal({
                        position: 'top-right',
                        type: 'danger',
                        title: 'You have to login',
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

            this.getPosts();

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

<!-- Swiper / Sliders -->
<script src="{{asset('js/swiper.jquery.min.js')}}"></script>

<!-- Chart JS Generate scripts-->
<script src="{{asset('js/Chart.min.js')}}"></script>
<script src="{{asset('js/chartjs-plugin-deferred.min.js')}}"></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{asset('js/run-chart.js')}}"></script>

<!-- Lightbox plugin script-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>


<script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>

<script type="text/javascript">
    var stars = Vue.component('star-rating', {

        props: {
            'name': String,
            'value': null,
            'id': null,
            'disabled': Boolean,
            'required': Boolean
        },

        template: '<div class="star-rating">\
					  <label class="star-rating__star" v-for="rating in ratings" \
					  :class="{\'is-selected\': ((value >= rating) && value != null), \'is-disabled\': disabled}" \
					  v-on:click="set(rating,id)"  v-on:mouseover="star_over(rating)" v-on:mouseout="star_out">\
					  <input class="star-rating star-rating__checkbox" type="radio" :value="rating"  \
					  v-model="value" :id="id">&#10022;</label>\
					   <span>@{{value}}</span> / 10</div>',

        /*
         * Initial state of the component's data.
         */
        data: function() {
            return {
                temp_value: null,
                ratings: [0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10],

            };
        },


        methods: {
            trouveId:function(array, value) {
                for(i=0;i<array.length;i++){
                    if(array[i].id == value){
                        return i;
                    }

                }
                return -1;

            },
            /*
             * Behaviour of the stars on mouseover.
             */
            star_over: function(index) {
                var self = this;
                if (!this.disabled) {
                    this.temp_value = this.value;
                    return this.value = index;
                }

            },

            /*
             * Behaviour of the stars on mouseout.
             */
            star_out: function() {
                var self = this;
                if (!this.disabled) {
                    return this.value = this.temp_value;
                }
            },

            /*
             * Set the rating of the score
             */
            set: function(value,id) {
                var self = this;
                app.vote ={
                    id : id,
                    value : value
                };

                var indice = this.trouveId(app.votes,id);

                if (indice != -1) {
                    // console.log(app.votes[indice].id+" = "+id+" is "+indice);

                    app.votes[indice]=app.vote;

                }else{app.votes.push(app.vote);}

                // Make some call to a Laravel API using Vue.Resource
                if (!this.disabled) {
                    // Make some call to a Laravel API using Vue.Resource

                    this.temp_value = value;
                    return this.value = value;
                }

            }

        }

    });



</script>

</body>
</html>
