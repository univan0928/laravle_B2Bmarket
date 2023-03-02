@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="css/custom-user-dashboard.css">
    <link rel="stylesheet" href="css/custom-index.css">
@endsection


@section('content')
    <main class="ps-page--my-account custom-my-account">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="left-side">
              <div class="row">
                <div class="pl-10 pr-20 mb-10">
                  <div class="avatar">
                    <i class="icon-user"></i>  
                  </div>
                </div>
                <div>
                  <p class="mb-0 customer-name">Eddy Kasirga</p>
                  <p class="mb-0 company-name">Fashion Junkies</p>
                  <div class="premium">PREMIUM</div>
                </div>  
              </div>
              <hr class="custom-hr" />
              <p class="account-title fw-400 mb-0">You account will expire on</p>
              <p class="account-title fw-700 mb-4">28 June 2023</p>
              <button class="account-button">Renew account</button>
            </div>
            <aside class="ps-widget--account-dashboard mt-5 mb-5">
              <div class="ps-widget__content">
                  <ul>
                      <li class="active"><a href="user-dashboard.html"><i class="icon-user"></i> Account Dashboard</a></li>
                      <li><a href="manage-ads.html"><i class="icon-alarm-ringing"></i> Manage Ads</a></li>
                      <li><a href="notifications.html"><i class="icon-papers"></i> Messages</a></li>
                      <li><a href="recent-viewed.html"><i class="icon-map-marker"></i> Recent Viewed Products</a></li>
                      <li><a href="store-list-2.html"><i class="icon-store"></i> Favourite Sellers</a></li>
                      <li><a href="wishlist.html"><i class="icon-heart"></i> Wishlist</a></li>
                      <li><a href="user-information-new.html"><i class="icon-power-switch"></i>User Information</a></li>
                  </ul>
              </div>
            </aside>
          </div>
          <div class="col-lg-9 col-md-9">
            <div class="row">
              <div class="col-md-12">
                <div class="account-card top-chart">Offers'views within 7 days</div>
                <div class="account-card">
                  <div id="chart"></div>    
                </div>
              </div>
            </div>
            <div class="row mt-5 mb-5">
              <div class="col-md-6">
                <div class="account-card">
                  <div class="top-part blue">
                    <span>23</span>
                    <i class="icon-indent-increase"></i>    
                  </div>
                  <p class="mt-2 mb-2">Number of offers</p>
                  <button>Add offer</button>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="account-card">
                  <div class="top-part yellow">
                    <span>23</span>
                    <i class="icon-receipt"></i>    
                  </div>
                  <p class="mt-2 mb-2">Number of points</p>
                  <button class="yellow">Add offer</button>  
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12">
                <div class="account-card">
                  <h4 class="fw-700 mb-0"><i class="icon-thumbs-up fw-700 mr-2"></i> The most popular offers</h4>
                </div>
                <div class="popular-item">
                  <div>1150 branded shoes A grade take all $10,-pp</div>
                  <p class="mb-0">7598</p>
                </div>
                <div class="popular-item">
                  <div>AGENT PROVOCATEUR SUIP (SILK) 2800 PIECES RETAIL 69,25 NOW $6,- </div>
                  <p class="mb-0">7330</p>
                </div>
                <div class="popular-item">
                  <div>1150 branded shoes A grade take all $10,-pp</div>
                  <p class="mb-0">7598</p>
                </div>
                <div class="popular-item">
                  <div>1150 branded shoes A grade take all $10,-pp</div>
                  <p class="mb-0">7598</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </main>
@endsection


@section('custom_js')
    <script src="js/apexcharts.js"></script>
    <script src="js/customchart.js"></script>
@endsection




 

