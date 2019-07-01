@extends('layouts.layout')


@section('title')

@endsection


@section('content')
  <div class="container">
          {{--<div class="center-block text-center">
              <h1>E-Commerce Template</h1>
              <p class="lead">Get Your Style On</p>
          </div>--}}
          <div class="row">
            <div class="col-md-8">
                  <img class="img-responsive" src="/images/ecommerce.jpg" style="width:700px;"/>
               <hr>
            </div>
            <div class="col-md-4">
              <div class="product menu-category">
                  <div class="menu-category-name list-group-item active">Accessories</div>
                  <div class="product-image">
                      <img class="product-image menu-item list-group-item" src="/images/dress.jpg">
                  </div> <a href="#" class="menu-item list-group-item">Belt<span class="badge">£28</span></a>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="product menu-category">
                  <div class="menu-category-name list-group-item active">Jeans</div>
                  <div class="product-image">
                      <img class="product-image menu-item list-group-item" src="/images/1.jpg">
                  </div> <a href="#" class="menu-item list-group-item">Dark Blue Jeans<span class="badge">$80</span></a>

              </div>
            </div>
            <div class="col-md-3">
              <div class="product menu-category">
                  <div class="menu-category-name list-group-item active">Pants</div>
                  <div class="product-image">
                      <img class="product-image menu-item list-group-item" src="/images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg">
                  </div> <a href="#" class="menu-item list-group-item">Light Grean Chinos<span class="badge">$59</span></a>

              </div>
            </div>

            <div class="col-md-3">
              <div class="product menu-category">
                  <div class="menu-category-name list-group-item active">Denim</div>
                  <div class="div-image">
                      <img class="product-image menu-item list-group-item" src="/images/download.jpeg">
                  </div> <a href="#" class="menu-item list-group-item">Denim Jacket<span class="badge">$56</span></a>

              </div>
            </div>

              <div class="col-md-3">
              <div class="product menu-category">
                  <div class="menu-category-name list-group-item active">Accessories</div>
                  <div class="product-image">
                      <img class="product-image menu-item list-group-item" src="/images/muslim.jpg" height="200">
                  </div> <a href="#" class="menu-item list-group-item">Socks<span class="badge">$56</span></a>

              </div>
            </div>
          </div>

          <div class="container">
            <h2>Denim Jacket</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.</p>
            <hr>
            <h2 class="text-right">$39</h2>
            <button class="btn btn-primary btn-lg ">Add to Cart</button>
            <hr>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#reviews">Reviews</a></li>
                <li><a data-toggle="tab" href="#details">Details</a></li>
                <li><a data-toggle="tab" href="#sizing">Sizing</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="reviews">

                <h4>Buyer Reviews</h4>
                <ul class="list-unstyled">
                  <li class="clearfix">(Mike R.) I bought this last month before a.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                  <li class="clearfix">(Karen) The size of this jacket was a little larger.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                  <li class="clearfix">(CAS) I love this jacket. I purchased this as part..  <i class="fa fa-star fa-2x yellow pull-right"></i><i class="fa fa-star fa-2x yellow pull-right"></i></li>
                  <li class="clearfix">(William D.) Great value with cool style. If you want.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                </ul>

              </div>
              <div class="tab-pane" id="details"><h4>Product Information</h4></div>
              <div class="tab-pane" id="sizing"><h4>Size Chart</h4></div>
             </div>

          </div>






                  </div>

          </div>
          <!--/container-->
      </div>
  </div>

  <hr>

  <div class="container">

               <div class="row">

                 <div class="col-sm-3">
                   <a href="#">
                     <br>
                     <img class="img-responsive" src="http://www.bootply.com/assets/example/ec_socks.jpg" data-alt="" data-title="">
                   </a>
                   <br>

                  </div>
                  <div class="col-sm-9">

                    <h2><a class="url" href="#"> Gentleman's Socks</a></h2>

                    <ul class="list-group ticketView">
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Color</span>
                            <label> Oatmeal</label>
                        </li>
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Material</span>
                            <label> Cotton</label>
                        </li>
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Sizes</span>
                            <label> Mens's 5-10, 8-12</label>
                        </li>
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Stock #</span>
                             N12325
                        </li>
                    </ul>

                  </div><!--/col-->
              </div><!--/row-->

              <div class="row">

                 <div class="col-sm-3">
                   <a href="#">
                     <br>
                     <img class="img-responsive" src="http://www.bootply.com/assets/example/ec_socks.jpg" data-alt="" data-title="">
                   </a>
                   <br>

                  </div>
                  <div class="col-sm-9">

                    <h2><a class="url" href="#"> Gentleman's Socks</a></h2>

                    <ul class="list-group ticketView">
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Color</span>
                            <label> Oatmeal</label>
                        </li>
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Material</span>
                            <label> Cotton</label>
                        </li>
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Sizes</span>
                            <label> Mens's 5-10, 8-12</label>
                        </li>
                        <li class="list-group-item ticketView">
                            <span class="label label-default">Stock #</span>
                             N12325
                        </li>
                    </ul>

                  </div><!--/col-->
              </div><!--/row-->

              <hr>
  </div><!--/container-->

  <div class="modal fade" id="myModal">
  	<div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Log In</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
      		<label for="exampleInputEmail1">Email address</label>
      		<input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
    		  </div>
  		  <div class="form-group">
  		  	<label for="exampleInputPassword1">Password</label>
  			<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
  		  </div>
            <p class="text-right"><a href="#">Forgot password?</a></p>
          </div>
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn">Close</a>
            <a href="#" class="btn btn-primary">Log-in</a>
          </div>
        </div>
      </div>
  </div>
  <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 column">
                <h4>Information</h4>
                <ul class="nav">
                    <li><a href="about-us.html">Products</a></li>
                    <li><a href="about-us.html">Services</a></li>
                    <li><a href="about-us.html">Benefits</a></li>
                    <li><a href="elements.html">Developers</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Follow Us</h4>
                <ul class="nav">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Contact Us</h4>
                <ul class="nav">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Headquarters</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Customer Service</h4>
                <ul class="nav">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </div>
        <!--/row-->
        <p class="text-right">©2015</p>
    </div>
</footer>
@endsection
