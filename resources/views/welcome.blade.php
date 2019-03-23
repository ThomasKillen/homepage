<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thomas Killen || PHP Developer || Financial Products</title>

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

            .homepage_header {
                background-color: #003459;
                text-align: center;
                height: 600px;
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


            .homepage_h1 {
                font-size: 3.75em;
                font-weight: 700;
                width: 600px;
                margin: 0 auto;
                padding: 100px 0;
                font-family: sans-serif;
            }

            .homepage_cta {
                background: #007EA7;
                padding: 18px;
                font-size: 2.25rem;
                border-radius: 10px;
                color: #ffffff;
                text-decoration: none;
                font-family: sans-serif;
            }

            .homepage_sub_header {
                color: #003459;
                font-size: 2rem;
                text-align: center;
                width: 80%;
                margin: 0 auto;
                font-family: sans-serif;
                margin-top: 40px;
            }

            .homepage_projects {
                display: flex;
                margin: 40px 0;
                flex-wrap: wrap;
                justify-content: space-evenly;
            }

            .credit_bckgrnd {
                width: 300px;
                height: 300px;
                background: url(images/credit.jpg);
                background-position: center;
                background-size: cover;
            }

            .insurance_bckgrnd {
                width: 300px;
                height: 300px;
                background: url(images/insurance.jpg);
                background-position: center;
                background-size: cover;
            }

            .pension_bckgrnd {
                width: 300px;
                height: 300px;
                background: url(images/pension.jpg);
                background-position: center;
                background-size: cover;
            }

            .savings_bckgrnd {
                width: 300px;
                height: 300px;
                background: url(images/savings.jpg);
                background-position: center;
                background-size: cover;
            }

            .project_header {
                width: 300px;
                height: 66px;
                background-color: #00A7E1;
                text-align: center;
                font-size: 40px;
                line-height: 1.5;
                color: #ffffff;
                font-family: sans-serif;
            }

            .project_text {
                margin: 37px auto;
                text-align: center;
                font-size: 22px;
                width: 80%;
                color: #006b90;
                height: 118px;
            }

            .project_cta  {
                background: #007EA7;
                padding: 13px;
                font-size: 2rem;
                border-radius: 10px;
                color: #ffffff;
                text-decoration: none;
                font-family: sans-serif;
                width: 141px;
                margin: 0 auto;

            }

            .cta_font {
                color: #ffffff;
                text-decoration: none;
            }

        </style>
    </head>
    <body>
<div class="homepage_header">
    <div class="header_content">
        <h1 class="homepage_h1">Start saving today for a finacially stable tomorrow!</h1>
    </div>
    <a class="homepage_cta" href="#homepage_products" >Get Started</a>
</div>

        <h2 id="homepage_products" class="homepage_sub_header"> Whether your looking to invest or secure a future for your family, we offer a bespoke package that is tailored to your requirements. Take a look at our market leading products below:  </h2>
        <div class="homepage_projects">

            <div class="project_flex">
                <div class="pension_bckgrnd">
                </div>
                <div class="project_header">
                    <span>Pensions</span>
                </div>
                <div class="project_text">
                    <p>A long-term and tax-efficient way to save for the future during your working life.</p>
                </div>
                <div class="project_cta"><a class="cta_font" href="/pensions"> More Info
                </a></div>
            </div>
            <div class="project_flex">
                <div class="insurance_bckgrnd">
                </div>
                <div class="project_header">
                    <span>Insurance</span>
                </div>
                <div class="project_text">
                    <p>If you need property, life, health, income, pets, business and travel insurance, we’re your go-to.</p>
                </div>
                <div class="project_cta"><a class="cta_font" href="/insurance"> More Info
                    </a></div>
            </div>
            <div class="project_flex">
                <div class="credit_bckgrnd">
                </div>
                <div class="project_header">
                    <span>Credit</span>
                </div>
                <div class="project_text">
                    <p>From day one, our business has been about helping people succeed with credit.</p>
                </div>
                <div class="project_cta"><a class="cta_font" href="/credit"> More Info
                    </a></div>
            </div>
            <div class="project_flex">
                <div class="savings_bckgrnd">
                </div>
                <div class="project_header">
                    <span>Savings</span>
                </div>
                <div class="project_text">
                    <p>Lots of clever ways to save a lot, by doing very little</p>
                </div>
                <div class="project_cta"><a class="cta_font" href="/savings"> More Info
                    </a></div>
            </div>
    </div>
    </body>
</html>
