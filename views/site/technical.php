<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Technical';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-technical">
    <!--<h1><?= Html::encode($this->title) ?></h1> -->

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course Detail</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Course Detail</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                       
                          <?= Html::img('@web/assets/img/12.jpg', ['alt'=>'tech-image', 'class'=>'thing']);?>
                          <figcaption class="mu-latest-course-imgcaption">
                            <a href="#">Drawing</a>
                            <span><i class="fa fa-clock-o"></i>90Days</span>
                          </figcaption>
                        </figure>
                        <div class="mu-latest-course-single-content">
                          <h2><a href="#">Essentials of Technical Training.</a></h2>
                          <h4>Course Outline</h4>
                          <div class="table-responsive">
                            <table class="table">
                            <thead>
                              <tr>
                                <th> Title </th>
                                <th> Course Time </th>
                                <th> Mode </th>
                                <th> Status </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> Linux Distro</td>
                                <td> 4:30 Hours</td>
                                <td> Weekdays/Weekends </td>
                                <td> Standard </td>
                              </tr>
                              <tr>
                                <td> Virtualization </td>
                                <td> 4:30 Hours </td>
                                <td> Weekdays/Weekends </td>
                                <td> Standard </td>
                              </tr>
                              <tr>
                                <td> SQL Server </td>
                                <td> 4:30 Hour</td>
                                <td> Weekdays/Weekends</td>
                                <td> Standard </td>
                              </tr>
                              
                              <tr>
                                <td> Web Security </td>
                                <td> 4:30 </td>
                                <td> Weekdays/Weekends</td>
                                <td> Waiting </td>
                              </tr>
                              <tr>
                                <td> Bootcamp </td>
                                <td> 4:30 </td>
                                 <td> Weekdays/Weekends</td>
                                <td> - </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                          <h4>Course Information</h4>
                         Technical Training Solutions is an engineering skills training company with 36 years of experience behind it. 
                         <!-- <ul>
                            <li> <span>Course Price</span> <span>$250</span></li>
                            <li> <span>Place</span> <span>California,USA</span></li>
                            <li> <span>Total Students</span> <span>800+</span></li>
                            <li> <span>Course Duration</span> <span>4 Weeks</span></li>
                            <li> <span>Course Start</span> <span>July 25, 2016</span></li>
                          </ul> -->
                          <h4>Description</h4>
                          <p>How do you develop training that is highly technical, complex and specialized? And how do you make sure this training is engaging to 
                          learners and relevant to the business?
                          <p>This program explores the aspects of course development that are most specifically relevant to technical training, 
                          with a heavy emphasis on real technical training examples and case histories. Throughout
                           the program you will apply the tools and strategies to your own training project. Create your own interactive, engaging, 
                                              motivating and memorable technical training today! </p>
                          <blockquote>
                            <p> <a href="/site/enquiry"><input class="btn btn-primary" style=" margin-left:10%;" type="submit" value="Register Now!" /></a></p>
                          </blockquote>
                                                 </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
               
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="">Web Development</a></li>
                      <li><a href="">Linux Distro</a></li>
                      <li><a href="">Networking</a></li>
                      <li><a href="">CMS</a></li>
                      <li><a href="">eCommerce</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                     <h3>Popular Training</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            
                            <?= Html::img('@web/assets/img/courses/1.jpg', ['alt'=>'end-user-image', 'class'=>'thing']);?>
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Internet Fundamentals</a></h4>                      
                          <span class="popular-course-price">₦20,000.00</span>
                          <h6>Two Weeks</h6>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                           
                            <?= Html::img('@web/assets/img/courses/2.jpg', ['alt'=>'end-user-image', 'class'=>'thing']);?>
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">₦25,000.00</span>
                          <h6>Two Weeks</h6>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                           
                            <?= Html::img('@web/assets/img/courses/3.jpg', ['alt'=>'end-user-image', 'class'=>'thing']);?>
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Linux OS</a></h4>                      
                          <span class="popular-course-price">19,000.00</span>
                          <h6>Two Weeks</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Archives</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                      <li><a href="#">May <span>(25)</span></a></li>
                      <li><a href="">June <span>(35)</span></a></li>
                      <li><a href="">July <span>(20)</span></a></li>
                      <li><a href="">August <span>(125)</span></a></li>
                      <li><a href="">September <span>(45)</span></a></li>
                      <li><a href="">October <span>(85)</span></a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
               <!--   <div class="mu-single-sidebar">
                    <h3>Tags Cloud</h3>
                    <div class="tag-cloud">
                      <a href="#">Health</a>
                      <a href="#">Science</a>
                      <a href="#">Sports</a>
                      <a href="#">Mathematics</a>
                      <a href="#">Web Design</a>
                      <a href="#">Admission</a>
                      <a href="#">History</a>
                      <a href="#">Environment</a>
                    </div>
                  </div> -->
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>