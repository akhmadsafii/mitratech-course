<!doctype html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="position-relative" data-spy="scroll" data-target=".site-nav" data-offset="55">
    @include('layouts.top-menu')
    <header id="page-hero" class="site-header position-relative  site-header" style="width: 100vw; min-height: 70vh;">
        <section class="layout-hero position-absolute d-flex align-items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, .7) 50px, transparent), url({{ asset('assets/img/main-image.jpeg') }}); height: 100%; width: 100%; filter: blur(0);">
        </section>
        <div class="layout-hero-content position-absolute d-flex align-items-center" style="height: 115%; width: 100%;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="header-content col-11 col-sm-10 col-md-9 animated fadeInUp">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Seven Logo" class="logo-image"
                            width="300px">
                        <p class="page-section-text text-light">
                            Welcome to our comprehensive course on modern web development using <a
                                class="text-warning font-weight-bold" href="https://codeigniter.com/"
                                target="_blank">CodeIgniter</a>
                            and <a class="text-warning font-weight-bold" href="https://laravel.com/"
                                target="_blank">Laravel</a>. This
                            course will empower you with the skills and knowledge needed to build dynamic and robust web
                            applications using two of the most popular PHP frameworks in the industry.
                        </p>
                        <div><a class="btn btn-lg btn-outline-light" href="https://your-course-website.com/">Explore
                                the Course</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- <header id="page-hero" class="site-header position-relative  site-header" style="width: 100vw; min-height: 30vh;">
        <section class="layout-hero position-absolute d-flex align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, .7) 50px, transparent), url(https://lil-cdn.com/585273/computing-floating-apps-226149059.jpg); height: 100%; width: 100%;  filter: blur(0);" ></section>
        <div class="layout-hero-content position-absolute d-flex align-items-center w-100 h-100">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="header-content col-11 col-sm-10 col-md-9 animated fadeInUp">
                <h2 class="page-section-title text-light"></h2>
                <p class="page-section-text text-light d-none d-md-block">
                  
                </p>
              </div>
            </div>
          </div>
        </div>
        </header> --}}


    <article id="main-content" class="page-home site-main container">
        <div class="row">
            <div class="main-content col-md-9">
                <h4 class="family-sans text-secondary mt-2 mb-4 px-3 px-sm-0">Latest Posts</h4>
                <div class="row justify-content-center px-3 px-sm-0 my-5  mb-3 ">
                    <div class="col-md-3">
                        <a href="/posts/2018-10-12-json-tutorial/" class="d-block mb-1">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/jsonarticle_tn.png"
                                alt="A JSON Tutorial. Getting started with JSON using JavaScript and jQuery image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Oct 12, 2018">Oct 12, 2018</time>
                    </div>
                    <div class="col-md-9">
                        <a href="/posts/2018-10-12-json-tutorial/" class="item-title h2 d-block">A JSON Tutorial.
                            Getting started with JSON using JavaScript and jQuery

                        </a>
                        <p class="item-summary lead mb-1 text-body">Javascript has grown from a way to add
                            interactivity on your page, to a language that lets you perform tasks that once belonged to
                            servers. JSON provides for an easy way to create and store data structures within
                            JavaScript. It’s super popular and a great alternative to XML.</p>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                            <a href="/tags/web development/" class="badge badge-special">web development</a>
                            <a href="/tags/data visualization/" class="badge badge-special">data visualization</a>
                            <a href="/tags/python/" class="badge badge-special">python</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/what-i-learned-resiliency-working-9-bosses-5-years-ray-villalobos/"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/resiliency_tn.png"
                                alt="What I learned about resiliency working for 9 bosses in 5 years image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Mar 28, 2018">Mar 28, 2018</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/what-i-learned-resiliency-working-9-bosses-5-years-ray-villalobos/"
                            class="item-title h2 d-block" target="_blank">What I learned about resiliency working for
                            9 bosses in 5 years
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">Getting a new boss can be really stressful. To
                            paraphrase the great philosopher F. Gump, you usually have little input into who that is, so
                            you don’t know what you're going to get until you've had the time to work with them. I
                            should know.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/want-get-hired-look-technology-careerlinkedin-jobs-finds-villalobos/"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/wanttogethired_tn.png"
                                alt="Want to get hired? Look into this technology career image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Dec 07, 2017">Dec 07, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/want-get-hired-look-technology-careerlinkedin-jobs-finds-villalobos/"
                            class="item-title h2 d-block" target="_blank">Want to get hired? Look into this technology
                            career
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">The LinkedIn U.S. Emerging Jobs Report finds that
                            job growth in the next decade outstrips growth in the previous decade creating 11.5 million
                            jobs, estimating that 65% of children entering primary school will hold jobs that don't yet
                            exist.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                            <a href="/tags/web design/" class="badge badge-special">web design</a>
                            <a href="/tags/web development/" class="badge badge-special">web development</a>
                            <a href="/tags/data visualization/" class="badge badge-special">data visualization</a>
                            <a href="/tags/python/" class="badge badge-special">python</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/looking-microsoft-ignite-first-time-attendee-journey-find-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/ignite_tn.png" alt="Looking to Microsoft Ignite image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Sep 25, 2017">Sep 25, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/looking-microsoft-ignite-first-time-attendee-journey-find-villalobos"
                            class="item-title h2 d-block" target="_blank">Looking to Microsoft Ignite
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">I find myself working for Microsoft at LinkedIn
                            Learning in my very first Microsoft conference...Ignite. Needless to say, I feel a bit like
                            a fish out of water, really more like a cat that's been adopted by a giraffe family. Here's
                            what I'll be looking for during the week.</p>
                        <div class="item-links"></div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/ignite/" class="badge badge-special">ignite</a>
                            <a href="/tags/conferences/" class="badge badge-special">conferences</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/three-things-i-learned-from-six-years-teacher-ray-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/threethings_tn.png"
                                alt="Three things I learned from six years as a teacher on Lynda.com image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Sep 12, 2017">Sep 12, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/three-things-i-learned-from-six-years-teacher-ray-villalobos"
                            class="item-title h2 d-block" target="_blank">Three things I learned from six years as a
                            teacher on Lynda.com
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">It's my sixth year anniversary at
                            lynda.com/LinkedIn Learning and milestones come with some reflection, so I wanted to share
                            with you some of the things I've learned over the years. Although these are specific to my
                            experience, I think you'll be able to relate to these and maybe share something you've
                            learned from your own.</p>
                        <div class="item-links"></div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/Teaching/" class="badge badge-special">Teaching</a>
                            <a href="/tags/Learning/" class="badge badge-special">Learning</a>
                            <a href="/tags/lynda.com/" class="badge badge-special">lynda.com</a>
                            <a href="/tags/LinkedIn Learning/" class="badge badge-special">LinkedIn Learning</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/crafting-effective-video-embed-campaign-linkedin-ray-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/effectivevideo_tn.png"
                                alt="Crafting an effective video embed campaign for LinkedIn image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Aug 29, 2017">Aug 29, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/crafting-effective-video-embed-campaign-linkedin-ray-villalobos"
                            class="item-title h2 d-block" target="_blank">Crafting an effective video embed campaign
                            for LinkedIn
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">Recently I launched a campaign promoting our serial
                            content for LinkedIn learning which attained a large number of plays, shares and
                            clickthroughs, so I wanted to share some of the things that worked well within our
                            publishing platform.</p>
                        <div class="item-links"></div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/Linked In/" class="badge badge-special">Linked In</a>
                            <a href="/tags/marketing/" class="badge badge-special">marketing</a>
                            <a href="/tags/online publishing/" class="badge badge-special">online publishing</a>
                            <a href="/tags/online marketing/" class="badge badge-special">online marketing</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/five-weekly-series-help-you-work-smarter-more-your-ray-villalobos/"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/weekly-worksmarter_tn.png"
                                alt="Five weekly series to help you work smarter image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Aug 25, 2017">Aug 25, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/five-weekly-series-help-you-work-smarter-more-your-ray-villalobos/"
                            class="item-title h2 d-block" target="_blank">Five weekly series to help you work smarter
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">In order to get ahead, you need to learn to be more
                            effective at work. Every week, these great authors give you quick, 10 minute tips to help
                            you train your staff, understand business finance, learn to develop and manage yourself,
                            build better work relationships and learn marketing tips to make your promotion efforts more
                            effective.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">

                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/get-challenged-professional-photographers-motion-10-video-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/photographerweekly_tn.png"
                                alt="Get challenged by these professional photographers image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Aug 25, 2017">Aug 25, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/get-challenged-professional-photographers-motion-10-video-villalobos"
                            class="item-title h2 d-block" target="_blank">Get challenged by these professional
                            photographers
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">Check out these short, weekly, 10 minute series of
                            courses that can help you keep up with the latest and challenge you to practice your skills.
                            You'll learn about photo gear, get inspired by critiques, learn from practicing professional
                            photographers, learn about the latest tools, mobile photography, Final Cut Pro, motion
                            graphics and Nuke.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/weekly series/" class="badge badge-special">weekly series</a>
                            <a href="/tags/photography/" class="badge badge-special">photography</a>
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/10-minute-weekly-courses-can-help-you-become-better-ray-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/weekly-artist_tn.png"
                                alt="10 minute weekly courses to become a better artist/designer image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Aug 25, 2017">Aug 25, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/10-minute-weekly-courses-can-help-you-become-better-ray-villalobos"
                            class="item-title h2 d-block" target="_blank">10 minute weekly courses to become a better
                            artist/designer
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">If you've been looking to improve your drawing,
                            design, layout and photo editing skills, but keep a busy schedule, then these weekly series
                            can help. They release once a week and include short, actionable tips and techniques from
                            world class authors.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/weekly series/" class="badge badge-special">weekly series</a>
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                            <a href="/tags/Adobe Illustrator/" class="badge badge-special">Adobe Illustrator</a>
                            <a href="/tags/InDesign/" class="badge badge-special">InDesign</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/nine-weekly-series-help-you-master-3-d-animation-ray-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/animation_tn.png"
                                alt="Nine Weekly Series to help you master 3-D and Animation image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Aug 25, 2017">Aug 25, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/nine-weekly-series-help-you-master-3-d-animation-ray-villalobos"
                            class="item-title h2 d-block" target="_blank">Nine Weekly Series to help you master 3-D
                            and Animation
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">If you're an animation, 3D or VR professional
                            looking to improve your skills, take a look at these quick, 10 minute weekly series from
                            LinkedIn Learning experts to help you master new technologies from Maya, Blender, Z-Brush,
                            Sketchup, BIM, Rhino and Revit.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/weekly series/" class="badge badge-special">weekly series</a>
                            <a href="/tags/tips/" class="badge badge-special">tips</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center px-3 px-sm-0 my-5  my-md-huge ">
                    <div class="col-md-3">
                        <a href="https://www.linkedin.com/pulse/5-unusual-skills-industry-professionals-use-more-ray-villalobos"
                            class="d-block mb-1" target="_blank">
                            <img class="item-title shadow-lg w-100 img-fluid rounded"
                                src="/images/posts/weekly-unusual_tn.png"
                                alt="5 Unusual Skills Industry Professionals Use to be More Successful in their Careers image">
                        </a>
                        <time class="item-date small d-block text-body" datetime="Aug 05, 2017">Aug 05, 2017</time>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.linkedin.com/pulse/5-unusual-skills-industry-professionals-use-more-ray-villalobos"
                            class="item-title h2 d-block" target="_blank">5 Unusual Skills Industry Professionals Use
                            to be More Successful in their Careers
                            <i class="fas fa-external-link-square-alt text-body ml-1" style="font-size: .5em;"></i>
                        </a>
                        <p class="item-summary lead mb-1 text-body">Having a successful career is largely a result of
                            actions, but also your re-action to opportunities and challenges that come along the way. In
                            order to be successful you need to master techniques that really work. Let's take a look at
                            what really works for professionals.</p>
                        <div class="item-links">
                        </div>
                        <div class="tagslist d-none d-lg-block mt-2">

                            <a href="/tags/external/" class="badge badge-special">external</a>
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-sidebar col-md-3">
                <h4 class="text-secondary mt-2 mb-4 px-3 px-sm-0">Latest Courses</h4>
                <div class="px-3 px-sm-0  mb-3 ">
                    <a href="https://www.linkedin.com/learning/svelte-first-look"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/svelte_tn.jpg" alt="Svelte: First Look photo"></a>
                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Dec 09, 2019</time>
                    <a href="https://www.linkedin.com/learning/svelte-first-look" class="h4 d-block my-1">Svelte:
                        First Look</a>
                    <p class="mb-1  text-body d-none d-lg-block">JavaScript frameworks and libraries keep growing,
                        sprouting increasingly more dependencies along the way. Svelte—a new, lightweight component
                        framework—marches into this tangle with a brush cutter, trimming down the weeds to provide a
                        core set of key functionalities with zero dependencies.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/frameworks/" class="badge badge-special">frameworks</a>
                            <a href="/tags/svelte/" class="badge badge-special">svelte</a>
                            <a href="/tags/javascript/" class="badge badge-special">javascript</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 px-sm-0  my-3 my-md-5 ">
                    <a href="https://www.linkedin.com/learning/github-actions-first-look-2"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/githubactions_tn.jpg" alt="Github Actions: First Look photo"></a>
                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Nov 08, 2019</time>
                    <a href="https://www.linkedin.com/learning/github-actions-first-look-2"
                        class="h4 d-block my-1">Github Actions: First Look</a>
                    <p class="mb-1  text-body d-none d-lg-block">Actions, a developer productivity and CI/CD suite of
                        tools from GitHub, offers developers a new way to automate workflows for their web projects.
                        Each action—which is a set of custom instructions—can be combined with other actions to create a
                        workflow. You can have tasks that run on a specific timeframe, control what happens when someone
                        interacts with the GitHub repository, and more.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/github/" class="badge badge-special">github</a>
                            <a href="/tags/actions/" class="badge badge-special">actions</a>
                            <a href="/tags/continuous integration/" class="badge badge-special">continuous
                                integration</a>
                            <a href="/tags/automation/" class="badge badge-special">automation</a>
                            <a href="/tags/git/" class="badge badge-special">git</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 px-sm-0  my-3 my-md-5 ">
                    <a href="https://www.linkedin.com/learning/gulp-js-web-project-workflows/"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/gulp_tn.jpg" alt="Gulp.js: Web Project Workflows photo"></a>
                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Oct 31, 2019</time>
                    <a href="https://www.linkedin.com/learning/gulp-js-web-project-workflows/"
                        class="h4 d-block my-1">Gulp.js: Web Project Workflows</a>
                    <p class="mb-1  text-body d-none d-lg-block">Modern front-end development means more than just
                        writing HTML, CSS, and JavaScript. Developing an efficient workflow will help you write better
                        code and test and deploy your web applications easily and efficiently. Gulp.js make setting up
                        compression, minification, preprocessing, and other common tasks as easy as writing a setup
                        file.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                            <a href="/tags/full stack/" class="badge badge-special">full stack</a>
                            <a href="/tags/web development/" class="badge badge-special">web development</a>
                            <a href="/tags/gulp/" class="badge badge-special">gulp</a>
                            <a href="/tags/build tools/" class="badge badge-special">build tools</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 px-sm-0  my-3 my-md-5 ">
                    <a href="https://www.linkedin.com/learning/vue-js-working-with-apis/lifecycles-and-the-fetch-api"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/vueapis_tn.jpg" alt="Vue.js: Working with APIs photo"></a>

                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Oct 18, 2019</time>
                    <a href="https://www.linkedin.com/learning/vue-js-working-with-apis/lifecycles-and-the-fetch-api"
                        class="h4 d-block my-1">Vue.js: Working with APIs</a>
                    <p class="mb-1  text-body d-none d-lg-block">Modern apps are shifting to a model where APIs provide
                        the data and interactivity. Front-end developers decide how to present the information and
                        interactions, and the APIs power the rest. Vue.js was built with these challenges in mind; it’s
                        a view-only framework specifically designed to integrate elegantly with other libraries.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                            <a href="/tags/full stack/" class="badge badge-special">full stack</a>
                            <a href="/tags/web development/" class="badge badge-special">web development</a>
                            <a href="/tags/vue.js/" class="badge badge-special">vue.js</a>
                            <a href="/tags/frameworks/" class="badge badge-special">frameworks</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 px-sm-0  my-3 my-md-5 ">
                    <a href="https://www.linkedin.com/learning/vue-js-full-stack-applications-with-firebase"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/vuefirebase_tn.jpg"
                            alt="Vue.js: Full-Stack Applications with Firebase photo"></a>

                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Sep 11, 2019</time>
                    <a href="https://www.linkedin.com/learning/vue-js-full-stack-applications-with-firebase"
                        class="h4 d-block my-1">Vue.js: Full-Stack Applications with Firebase</a>
                    <p class="mb-1  text-body d-none d-lg-block">Front-end developers can quickly assemble useful
                        applications by combining the Vue.js front-end framework with the easily accessible power of the
                        Firebase server engine from Google. In this course, join Ray Villalobos as he demonstrates how
                        to create a working single-page app using the Vue.js framework layered on the Firebase cloud
                        platform.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">
                            <a href="/tags/frameworks/" class="badge badge-special">frameworks</a>
                            <a href="/tags/vue.js/" class="badge badge-special">vue.js</a>
                            <a href="/tags/firebase/" class="badge badge-special">firebase</a>
                            <a href="/tags/full-stack/" class="badge badge-special">full-stack</a>
                            <a href="/tags/javascript/" class="badge badge-special">javascript</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 px-sm-0  my-3 my-md-5 ">
                    <a href="https://www.linkedin.com/learning/succeeding-in-web-development-full-stack-and-front-end/becoming-a-web-developer?u=104"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/succeeding-web-development_tn.png"
                            alt="Succeeding in Web Development: Full Stack and Front End photo"></a>

                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Sep 11, 2019</time>
                    <a href="https://www.linkedin.com/learning/succeeding-in-web-development-full-stack-and-front-end/becoming-a-web-developer?u=104"
                        class="h4 d-block my-1">Succeeding in Web Development: Full Stack and Front End</a>
                    <p class="mb-1  text-body d-none d-lg-block">This course provides a map of the core technologies
                        and advice about mastering them, complemented with the details you need to connect them to jobs.
                        Senior Staff Author Ray Villalobos also provides tips on finding training, getting hired, and
                        maximizing your earning potential in this lucrative and exciting field.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">

                            <a href="/tags/careers/" class="badge badge-special">careers</a>
                            <a href="/tags/full stack/" class="badge badge-special">full stack</a>
                            <a href="/tags/web development/" class="badge badge-special">web development</a>
                            <a href="/tags/web designer/" class="badge badge-special">web designer</a>
                            <a href="/tags/web developer/" class="badge badge-special">web developer</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 px-sm-0  my-3 my-md-5 ">
                    <a href="https://www.linkedin.com/learning/vue-js-building-an-interface-2/"
                        class="w-100 d-none d-lg-block mb-1"><img class="w-100  shadow-lg img-fluid rounded"
                            src="/images/courses/vueinterface_tn.jpg" alt="Vue.js: Building an Interface photo"></a>

                    <time class="small d-none d-lg-block text-body" datetime="Invalid DateTime">Aug 15, 2019</time>
                    <a href="https://www.linkedin.com/learning/vue-js-building-an-interface-2/"
                        class="h4 d-block my-1">Vue.js: Building an Interface</a>
                    <p class="mb-1  text-body d-none d-lg-block">The perfect way to learn Vue.js is to use Vue.js. Once
                        you build an app interface and see its strengths and flexibility in action, you can decide how
                        much of Vue.js you want to use in your own projects. This hands-on course teaches you how to
                        build a simple component-based app: an appointment booking and management system with features
                        for searching and sorting.</p>
                    <div class="item-links">
                        <a href="" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="mt-1">
                        <div class="tagslist d-none d-lg-block mt-2">

                            <a href="/tags/frameworks/" class="badge badge-special">frameworks</a>
                            <a href="/tags/vue.js/" class="badge badge-special">vue.js</a>
                            <a href="/tags/javascript/" class="badge badge-special">javascript</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <footer class="site-footer bg-transparent pb-3 pb-md-5">
        <div class="layout-social container d-flex justify-content-center">
        </div>
    </footer>
</body>

</html>
