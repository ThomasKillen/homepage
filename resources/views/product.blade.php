<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Award Winning {{$product['0']->name}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html {
                scroll-behavior: smooth;
            }

            body {
                background-color: #ffffff;
                margin: 0;
            }

            .product_header {
                background-color: #003459;
                text-align: center;
                height: 100px;
                color: #ffffff;
                width: 100%;
            }

            .project_flex {
                background-color: #00345912;
                width: 300px;
                height: 630px;
                border: solid 1px #ffffff;
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 4px 0 rgba(0, 0, 0, 0.5);
            }


            .product_h1 {
                font-size: 3.75em;
                font-weight: 700;
                width: 100%;
                padding: 100px 0;
                font-family: sans-serif;
                text-align: center;
                color: #003459;
            }

            .product_sub_header {
                color: #003459;
                font-size: 2rem;
                text-align: center;
                width: 80%;
                margin: 0 auto;
                font-family: sans-serif;
                margin-top: 40px;
            }

            .homepage_cta {
                float: left;
                font-size: 50px;
                padding: 22px;
                font-weight: 700;
                color: #ffffff;
                text-decoration: none;
            }

        </style>
    </head>
    <body>
<div class="product_header">
<a href="/" class="homepage_cta"> < Homepage </a>
</div>
    <h1 class="product_h1">Award Winning {{ucfirst($product['0']->name)}}</h1>
    <h2 id="product_products" class="product_sub_header"> {{$product['0']->details}}  </h2>
    <h2 class="product_sub_header"> Call us on 07512647255!</h2>
</div>
    </body>
</html>
