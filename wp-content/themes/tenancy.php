<?php /* Multi tenancy */ ?>
<?php if ( env('TENANCY') ) : ?>
    <?php
    if ( isset($_GET['tenant']) ) {
        file_put_contents( ABSPATH . 'wp-tenant.php', '<?php return "'.$_GET['tenant'].'";' );
    }
    ?>
    <a class="wp-tenancy-show" href="#">
        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path style="font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;text-indent:0;text-align:start;text-decoration:none;line-height:normal;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;text-anchor:start;baseline-shift:baseline;opacity:1;color:#000000;fill:#000000;fill-opacity:1;stroke:none;stroke-width:4;marker:none;visibility:visible;display:inline;overflow:visible;enable-background:accumulate;font-family:Sans;-inkscape-font-specification:Sans" d="M 21.90625 16.96875 A 2.0002 2.0002 0 0 0 20.6875 17.46875 L 6.6875 29.46875 A 2.0002 2.0002 0 0 0 6.6875 32.5 L 20.6875 44.5 A 2.0049378 2.0049378 0 1 0 23.3125 41.46875 L 13.4375 33 L 82 33 C 83.056625 33.0149 84.03125 32.05673 84.03125 31 C 84.03125 29.94327 83.056625 28.98506 82 29 L 13.40625 29 L 23.3125 20.5 A 2.0002 2.0002 0 0 0 21.90625 16.96875 z M 77.8125 54.96875 A 2.0002 2.0002 0 0 0 76.6875 58.5 L 86.59375 67 L 18 67 L 17.8125 67 C 16.765159 67.049 15.857156 68.04635 15.90625 69.09375 C 15.95534 70.14105 16.952679 71.0493 18 71 L 86.5625 71 L 76.6875 79.46875 A 2.0049189 2.0049189 0 1 0 79.3125 82.5 L 93.3125 70.5 A 2.0002 2.0002 0 0 0 93.3125 67.46875 L 79.3125 55.46875 A 2.0002 2.0002 0 0 0 77.8125 54.96875 z " transform="translate(0,952.36218)"></path></g></svg>
    </a>
    <ul class="wp-tenancy hidden">
        <?php $tenants = explode(',', env('TENANTS')); ?>
        <?php foreach( $tenants as $tenant ) : ?>
            <?php list($env, $name) = explode(':', $tenant) ?>
            <li><a href="/?tenant=<?= $env ?>"><?= $name ?></a></li>
        <?php endforeach; ?>
    </ul>
    <style type="text/css">
        .wp-tenancy-show {
            position: fixed;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            z-index: 3000;
            background-color: #f2f2f2;
            display: block;
            padding: 5px;
            cursor: pointer;
        }
        .wp-tenancy {
            position: fixed;
            left: 0;
            top: 30px;
            width: 300px;
            z-index: 2999;
            background-color: #f2f2f2;
            display: block;
            padding: 0;
            list-style-type: none;
            margin: 0;
        }
        .wp-tenancy a {
            display: block;
            color: #191919;
            padding: 5px 15px;
        }
        .wp-tenancy a:hover {
            color: red;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.wp-tenancy-show').click(function(event){
                event.preventDefault();

                $('.wp-tenancy').toggleClass('hidden');
            })
        });
    </script>
<?php endif; ?>