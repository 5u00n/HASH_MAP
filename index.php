<!DOCTYPE html>
<html lang='en'>

<head>
    <!--Google Tag Manager-->
    <script class='gtm'>
        var dataLayer = [{
            'labName': 'Data Structures – 1',
            'discipline': 'Computer Science and Engineering',
            'college': 'IIITH',
            'phase': '3',
            'expName': 'Hash Map',
            'expShortName': 'bubble-sort'
        }];

        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src =
                'googletagmanager/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W59SWTR');
    </script>
    <!--End Google Tag Manager-->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta content='' name='description'>
    <meta content='' name='author'>

    <meta name='experiment-short-name' content='bubble-sort'>
    <meta name='developer-institute' content='IIITH'>
    <meta name='learning-unit' content='Hash Map Experiment'>
    <meta name='task-name' content='Aim'>

    <!-- For iPhone -->
    <meta name='msapplication-TileColor' content='#4076e0'>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name='theme-color' content='#4076e0'>
    <!-- Windows Phone -->
    <meta name='msapplication-navbutton-color' content='#4076e0'>
    <title>Virtual Labs</title>
    <link rel='shortcut icon' href='assets/images/favicon.ico'>
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='cdnjs.cloudflare.com/ajax/libs/github-markdown-css/4.0.0/github-markdown.min.css'
        integrity='sha512-Oy18vBnbSJkXTndr2n6lDMO5NN31UljR8e/ICzVPrGpSud4Gkckb8yUpqhKuUNoE+o9gAb4O/rAxxw1ojyUVzg=='
        crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans&amp;family=Raleway&amp;display=swap'
        rel='stylesheet'>
    <link rel='stylesheet' href='assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='assets/css/github-markdown.min.css'>
    <link rel='stylesheet' href='assets/css/vlabs-style.css'>

    <script src='assets/js/jquery-3.4.1.slim.min.js'></script>
    <script src='cdn.jsdelivr.net/npm/%40popperjs/core%402.5.4/dist/umd/popper.min.js'
        integrity='sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU' crossorigin='anonymous'>
    </script>
    <script src='cdn.jsdelivr.net/npm/bootstrap%405.0.0-beta1/dist/js/bootstrap.min.js'
        integrity='sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj' crossorigin='anonymous'>
    </script>
    <style>
        h1 {
            font-size: 1.8rem;
        }

        h2 {
            font-size: 1.4rem;
        }

        h3 {
            font-size: 1.2rem;
        }

        h2,
        h3 {
            font-weight: 800;
        }
    </style>
</head>

<body class='p-0 container-fluid vlabs-page d-flex flex-column justify-content-between'>
    <!--Google Tag Manager (noscript)-->
    <noscript class='gtm'>
        <iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-W59SWTR'
            style='display:none;visibility:hidden' width='0'>
        </iframe>
    </noscript>
    <!--End Google Tag Manager (noscript)-->

    <?php echo "<header class='vlabs-header sticky-top bg-white'>
        <nav class='p-0 navbar navbar-light d-flex align-items-stretch'>

            <button class='navbar-toggler px-4' type='button' onclick='toggle()'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <div class='d-flex justify-content-center'>
                <a href='https://vlab.co.in/' class='navbar-brand'>
                    <img src='assets/images/vlabs-color-small-moe.jpg' alt='vlabs logo' class='vlabs-logo'>
                </a>
            </div>

            <div id='headerNavbar' class='d-none border-top flex-grow-1 d-lg-flex align-items-center'>
                <ul class='navbar-nav ml-auto text-center d-flex flex-md-row'>
                    <li class='nav-item px-2 m-1'>
                        <a href='https://vlab.co.in/'>HOME</a>
                    </li>
                    <li class='nav-item px-2 m-1'>
                        <a href='https://vlab.co.in/participating-institutes'>PARTNERS</a>
                    </li>
                    <li class='nav-item px-2 m-1'>
                        <a href='https://vlab.co.in/contact-us'>CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class='container-fluid flex-fill d-flex flex-column vlabs-page-main'>
        <div class='row d-flex justify-content-between'>
            <div class='flex-column'>

                <div class='row py-4 px-4 breadcrumbs'>
                    <a href='http://vlab.co.in/broad-area-computer-science-and-engineering'>
                        Computer Science and Engineering
                    </a>
                    <span class='mx-2'>
                        <i aria-hidden='true' class='fa fa-angle-right'></i>
                    </span>
                    <a href='https://ds1-iiith.vlabs.ac.in/'>
                        Data Structures – 1
                    </a>
                    <span class='mx-2'>
                        <i aria-hidden='true' class='fa fa-angle-right'></i>
                    </span>
                    <a href='https://ds1-iiith.vlabs.ac.in/List of experiments.html'>
                        Experiments
                    </a>
                </div>

            </div>
            <div class='flex-column'>
                <div id='plugin-bug-report'></div>
                <div id='plugin-rating'></div>
            </div>
        </div>
        <div class='row flex-grow-1 d-flex flex-nowrap flex-column flex-lg-row'>
            <div class='modal fade popupmenu' id='popupMenu' tabindex='-1' aria-labelledby='exampleModalLabel'
                aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>
                                <a href='https://vlab.co.in/' class='navbar-brand'>
                                    <img src='assets/images/vlabs-color-small-moe.jpg' alt='vlabs logo'
                                        class='vlabs-logo'>
                                </a>
                            </h5>
                            <button type='button' class='btn-close align-self-center' data-bs-dismiss='modal'
                                aria-label='Close'></button>
                        </div>
                        <div class='modal-body nav-menu'>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='index.html' class='p-2  current-item '>
                                        Aim
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='overview.html' class='p-2 '>
                                        Overview
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='recap.html' class='p-2 '>
                                        Recap
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='pretest.html' class='p-2 '>
                                        Pretest
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>

                                    <a data-bs-toggle='collapse' href='#t-bubble-sort' class='p-2 '>
                                        Hash Map
                                    </a>
                                    <button class='btn btn-white' type='button' data-bs-toggle='collapse'
                                        data-bs-target='#t-bubble-sort' aria-controls='bubble-sort'>
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </div>
                                <div id='t-bubble-sort' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                        <a href='hash-map/index.html' class='py-1 '> Aim </a>
                                        <a href='hash-map/basic-concept.html' class='py-1 '> Concept </a>
                                        <a href='hash-map/bsalgo.html' class='py-1 '> Algorithm </a>
                                        <a href='hash-map/bsdemo.html' class='py-1 '> Demo </a>
                                        <a href='hash-map/bspractice.html' class='py-1 '> Practice </a>
                                        <a href='hash-map/bsexercise.html' class='py-1 '> Exercise </a>
                                        <a href='hash-map/bubble-sort-quiz.html' class='py-1 '> Quiz </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>

                                    <a data-bs-toggle='collapse' href='#t-optimized-bubble-sort' class='p-2 '>
                                        Optimized Hash Map
                                    </a>
                                    <button class='btn btn-white' type='button' data-bs-toggle='collapse'
                                        data-bs-target='#t-optimized-bubble-sort' aria-controls='optimized-bubble-sort'>
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </div>
                                <div id='t-optimized-bubble-sort' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                        <a href='optimized-bubblesort/index.html' class='py-1 '> Aim </a>
                                        <a href='optimized-bubblesort/optimization-technique.html' class='py-1 '>
                                            Optimization Technique </a>
                                        <a href='optimized-bubblesort/opt-bs-demo.html' class='py-1 '> Demo </a>
                                        <a href='optimized-bubblesort/opt-bs-practice.html' class='py-1 '> Practice </a>
                                        <a href='optimized-bubblesort/opt-bs-exercise.html' class='py-1 '> Exercise </a>
                                        <a href='optimized-bubblesort/opt-bs-quiz.html' class='py-1 '> Quiz </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>

                                    <a data-bs-toggle='collapse' href='#t-analysis' class='p-2 '>
                                        Analysis
                                    </a>
                                    <button class='btn btn-white' type='button' data-bs-toggle='collapse'
                                        data-bs-target='#t-analysis' aria-controls='analysis'>
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </div>
                                <div id='t-analysis' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                        <a href='analysis/index.html' class='py-1 '> Aim </a>
                                        <a href='analysis/overview.html' class='py-1 '> Overview </a>
                                        <a href='analysis/time-and-space-complexity-of-bubble-sort.html' class='py-1 '>
                                            Time and Space Complexity </a>
                                        <a href='analysis/time-and-spce-complexity.html' class='py-1 '> Time and Space
                                            Complexity Demo </a>
                                        <a href='analysis/stability-of-bubble-sort.html' class='py-1 '> Stability of
                                            Hash Map </a>
                                        <a href='analysis/comparison-with-other-algorithms.html' class='py-1 '>
                                            Comparison with other Algorithms </a>
                                        <a href='analysis/analysis-quiz.html' class='py-1 '> Quiz </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='posttest.html' class='p-2 '>
                                        Posttest
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='further-reading-and-references.html' class='p-2 '>
                                        Further Readings/References
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class='d-flex nav-menu-body'>
                                    <a href='feedback.html' class='p-2 '>
                                        Feedback
                                    </a>

                                </div>
                                <div id='t-' class='collapse'>
                                    <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='nav flex-column sidebar nav-menu flex-shrink-0 px-lg-4 align-items-center align-items-lg-start hidden d-none d-lg-flex'
                id='menu'>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='index.html' class='p-2  current-item '>
                            Aim
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='overview.html' class='p-2 '>
                            Overview
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='recap.html' class='p-2 '>
                            Recap
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='pretest.html' class='p-2 '>
                            Pretest
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>

                        <a data-bs-toggle='collapse' href='#t-bubble-sort' class='p-2 '>
                            Hash Map
                        </a>
                        <button class='btn btn-white' type='button' data-bs-toggle='collapse'
                            data-bs-target='#t-bubble-sort' aria-controls='bubble-sort'>
                            <i class='fa fa-angle-down'></i>
                        </button>
                    </div>
                    <div id='t-bubble-sort' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                            <a href='hash-map/index.html' class='py-1 '> Aim </a>
                            <a href='hash-map/basic-concept.html' class='py-1 '> Concept </a>
                            <a href='hash-map/bsalgo.html' class='py-1 '> Algorithm </a>
                            <a href='hash-map/bsdemo.html' class='py-1 '> Demo </a>
                            <a href='hash-map/bspractice.html' class='py-1 '> Practice </a>
                            <a href='hash-map/bsexercise.html' class='py-1 '> Exercise </a>
                            <a href='hash-map/bubble-sort-quiz.html' class='py-1 '> Quiz </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>

                        <a data-bs-toggle='collapse' href='#t-optimized-bubble-sort' class='p-2 '>
                            Optimized Hash Map
                        </a>
                        <button class='btn btn-white' type='button' data-bs-toggle='collapse'
                            data-bs-target='#t-optimized-bubble-sort' aria-controls='optimized-bubble-sort'>
                            <i class='fa fa-angle-down'></i>
                        </button>
                    </div>
                    <div id='t-optimized-bubble-sort' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                            <a href='optimized-bubblesort/index.html' class='py-1 '> Aim </a>
                            <a href='optimized-bubblesort/optimization-technique.html' class='py-1 '> Optimization
                                Technique </a>
                            <a href='optimized-bubblesort/opt-bs-demo.html' class='py-1 '> Demo </a>
                            <a href='optimized-bubblesort/opt-bs-practice.html' class='py-1 '> Practice </a>
                            <a href='optimized-bubblesort/opt-bs-exercise.html' class='py-1 '> Exercise </a>
                            <a href='optimized-bubblesort/opt-bs-quiz.html' class='py-1 '> Quiz </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>

                        <a data-bs-toggle='collapse' href='#t-analysis' class='p-2 '>
                            Analysis
                        </a>
                        <button class='btn btn-white' type='button' data-bs-toggle='collapse'
                            data-bs-target='#t-analysis' aria-controls='analysis'>
                            <i class='fa fa-angle-down'></i>
                        </button>
                    </div>
                    <div id='t-analysis' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                            <a href='analysis/index.html' class='py-1 '> Aim </a>
                            <a href='analysis/overview.html' class='py-1 '> Overview </a>
                            <a href='analysis/time-and-space-complexity-of-bubble-sort.html' class='py-1 '> Time and
                                Space Complexity </a>
                            <a href='analysis/time-and-spce-complexity.html' class='py-1 '> Time and Space Complexity
                                Demo </a>
                            <a href='analysis/stability-of-bubble-sort.html' class='py-1 '> Stability of Hash Map
                            </a>
                            <a href='analysis/comparison-with-other-algorithms.html' class='py-1 '> Comparison with
                                other Algorithms </a>
                            <a href='analysis/analysis-quiz.html' class='py-1 '> Quiz </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='posttest.html' class='p-2 '>
                            Posttest
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='further-reading-and-references.html' class='p-2 '>
                            Further Readings/References
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex nav-menu-body'>
                        <a href='feedback.html' class='p-2 '>
                            Feedback
                        </a>

                    </div>
                    <div id='t-' class='collapse'>
                        <div class='px-3 d-flex flex-column tasks align-items-center align-items-lg-start'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='vlabs-page-content px-5 pb-4 flex-grow-1 markdown-body'>
                <div class='text-center fix-spacing'>
                    <h1 id='bubble-sort'>Hashing in DAA</h1>

                </div>
                <h3 id='estimated-time'>Estimated Time</h3>
                <p>1 hour</p>
                <h3 id='learning-objectives-of-the-experiment'>Learning Objectives of the Experiment</h3>
                <p>In this experiment, we will be able to do the following:</p>
                <ul>
                    <li>
                        <p>Given an unsorted array of numbers, generate a sorted array of numbers by applying Bubble
                            Sort.</p>
                    </li>
                    <li>
                        <p>Optimise the Hash Map algorithm to achieve better performance.</p>
                    </li>
                    <li>
                        <p>Demonstrate knowledge of time complexity of Hash Map by counting the number of operations
                            involved in each iteration.</p>
                    </li>
                    <li>
                        <p>Compare Hash Map with other sorting algorithms and realise Hash Map as a stable
                            comparison sorting algorithm.</p>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <footer class='text-light pt-2 vlabs-footer d-flex flex-column'>
        <div class='row px-5 mx-0'>
            <div class='col d-flex flex-column'>
                <span class='font-weight-bold vlabs-footer-sect-name pb-2 mb-3'>Community Links</span>
                <a href='https://www.sakshat.ac.in/' class='text-light'>Sakshat Portal</a>
                <a href='http://outreach.vlabs.ac.in/' class='text-light'>Outreach Portal</a>
                <a href='https://vlab.co.in/faq' class='text-light'>FAQ: Virtual Labs</a>
            </div>
            <div class='col d-flex flex-column'>
                <span class='font-weight-bold vlabs-footer-sect-name pb-2 mb-3'>Contact Us</span>
                <span> Phone: General Information: 011-26582050 </span>
                <span> Email: support@vlabs.ac.in </span>
            </div>
            <div class='col d-flex flex-column'>
                <span class='font-weight-bold vlabs-footer-sect-name pb-2 mb-3'>Follow Us</span>
                <div class='social-links'>
                    <a class='p-2 mt-1 mr-2 d-inline-flex justify-content-center align-items-center'
                        style='background: #55acee;' href='https://twitter.com/TheVirtualLabs'>
                        <i class='fa fa-twitter'></i>
                    </a>
                    <a class='p-2 mt-1 mr-2 d-inline-flex justify-content-center align-items-center'
                        style='background: #3b5998;'
                        href='https://www.facebook.com/Virtual-Labs-IIT-Delhi-301510159983871/'>
                        <i class='fa fa-facebook'></i>
                    </a>
                    <a class='p-2 mt-1 mr-2 d-inline-flex justify-content-center align-items-center'
                        style='background: #e52d27;' href='https://www.youtube.com/watch?v=asxRaOgk6a0'>
                        <i class='fa fa-youtube'></i>
                    </a>
                    <a class='p-2 mt-1 mr-2 d-inline-flex justify-content-center align-items-center'
                        style='background: #2867B2;' href='https://in.linkedin.com/in/virtual-labs-008ba9136'>
                        <i class='fa fa-linkedin'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class='m-0 py-2 text-center' style='font-family:Open Sans, sans-serif; background: #212121;'>
            <a class='text-primary font-weight-bold' href='https://www.gnu.org/licenses/agpl-3.0.en.html'> AGPL 3.0 </a>
            &nbsp;&amp;&nbsp;
            <a class='text-primary font-weight-bold' href='https://creativecommons.org/licenses/by-nc-sa/4.0/'> Creative
                Commons (CC BY-NC-SA 4.0) </a>
        </div>
    </footer>

    <script src='assets/js/toggleSidebar.js'></script>";
    ?>
</body>
<!-- Mirrored from ds1-iiith.vlabs.ac.in/exp/hash-map/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 May 2022 14:08:54 GMT -->

</html>