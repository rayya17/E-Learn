 @extends('layouts.layoutGuru')
 @section('content')
     <style>
         .main-content {
             position: absolute;
             top: 42px;
             left: 268px;
             width: 84vw;
         }

        .icon-plus-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .icon-plus {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            text-decoration: none;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .icon-plus:hover {
            background-color: #0056b3;
        }
     </style>
     <div class="container-fluid">
         <div class="row">
             <section class="courses section">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-4 col-md-4 col-4">
                             <!-- Single Course -->
                             <div class="single-course">
                                 <!-- Course Head -->
                                 <div class="course-head overlay">
                                     <img src="assets/images/courses/course1.jpg" alt="#">
                                     {{-- <div class="overlay-content">
                            <a href="course-single.html" class="btn white primary">Register Now</a>
                        </div> --}}
                                 </div>
                                 <!-- Course Body -->
                                 <div class="course-body">
                                     <div class="name-price">
                                         <div class="teacher-info">
                                             <img src="assets/images/author1.jpg" alt="#" class="rounded-circle"
                                                 style="width: 50px; height: 50px; object-fit: cover;">
                                             <h4 class="title">Jewel Mathies</h4>
                                         </div>
                                         <span class="price" type="button" class="btn btn-primary" data-toggle="modal"
                                             data-target="#exampleModal">$350</span>
                                     </div>
                                     <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a>
                                     </h4>
                                     <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground
                                         on the
                                         shore of this uncharted Gilligan consequa</p>
                                 </div>
                             </div>
                             <!--/ End Single Course -->
                         </div>
                         <div class="col-lg-4 col-md-4 col-4">
                             <!-- Single Course -->
                             <div class="single-course">
                                 <!-- Course Head -->
                                 <div class="course-head overlay">
                                     <img src="assets/images/courses/course3.jpg" alt="#">
                                     {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                                 </div>
                                 <!-- Course Body -->
                                 <div class="course-body">
                                     <div class="name-price">
                                         <div class="teacher-info">
                                             <img src="assets/images/author3.jpg" alt="#">
                                             <h4 class="title">Noha Brown</h4>
                                         </div>
                                         <span class="price">Free</span>
                                     </div>
                                     <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                                     <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground
                                         on the
                                         shore of this uncharted Gilligan</p>
                                 </div>
                             </div>
                             <!--/ End Single Course -->
                         </div>
                         <div class="col-lg-4 col-md-4 col-4">
                             <!-- Single Course -->
                             <div class="single-course">
                                 <!-- Course Head -->
                                 <div class="course-head overlay">
                                     <img src="assets/images/courses/course2.jpg" alt="#">
                                     {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                                 </div>
                                 <!-- Course Body -->
                                 <div class="course-body">
                                     <div class="name-price">
                                         <div class="teacher-info">
                                             <img src="assets/images/author2.jpg" alt="#">
                                             <h4 class="title">Jenola Protan</h4>
                                         </div>
                                         <span class="price" type="button" class="btn btn-primary" data-toggle="modal"
                                             data-target="#exampleModal">$290</span>
                                     </div>
                                     <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                                     <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground
                                         on the
                                         shore of this uncharted Gilligan</p>
                                 </div>
                             </div>
                             <!--/ End Single Course -->
                         </div>
                         <div class="col-lg-4 col-md-4 col-4">
                             <!-- Single Course -->
                             <div class="single-course">
                                 <!-- Course Head -->
                                 <div class="course-head overlay">
                                     <img src="assets/images/courses/course4.jpg" alt="#">
                                     {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                                 </div>
                                 <!-- Course Body -->
                                 <div class="course-body">
                                     <div class="name-price">
                                         <div class="teacher-info">
                                             <img src="assets/images/author1.jpg" alt="#">
                                             <h4 class="title">Jewel Mathies</h4>
                                         </div>
                                         <span class="price" type="button" class="btn btn-primary" data-toggle="modal"
                                             data-target="#exampleModal">$350</span>
                                     </div>
                                     <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a>
                                     </h4>
                                     <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground
                                         on the
                                         shore of this uncharted Gilligan consequa</p>
                                 </div>
                             </div>
                             <!--/ End Single Course -->
                         </div>
                     </div>
                 </div>
             </section>
         </div>
         <button type="button" style="width: 500px"><i class="fa-solid fa-plus"></i></button>
     </div>
 @endsection
