<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>wp_learn</title>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent
        .indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.write('<meta name="viewport" content="width=device-width">');
    } else {
        document.write('<meta name="viewport" content="width=1024">');
    }
    </script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="inner">
            <nav>
                <h2>JaDoo</h2>
                <div class="hamburger-container">
                    <ul class="hamburger">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'new-nav-menu' ) ); ?>
            </nav>
        </div>
    </header>