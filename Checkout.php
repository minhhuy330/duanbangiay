<?php include("header.php");
?>
<!-- Start of Main Content Wrapper -->
<main id="content" class="main-content-wrapper">
	       <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <a class="breadcrumb-item" href="cart.html">Shopping Cart</a>
                            <span class="breadcrumb-item active">Checkout</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Checkout Wrapper -->
            <div class="checkout-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-actions-area">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="user-actions user-login">
                                                <h3>Returning customer? <span id="show_login">Click here to login.</span></h3>
                                                <div id="checkout_login" class="display-content">
                                                    <div class="login-info">
                                                        <p class="login-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                                        <form>
                                                            <div class="form-row mb-3">
                                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                                    <label for="login_user">Username Or Email <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control" id="login_user" required>
                                                                </div>
                                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                                    <label for="login_pass">Password <span class="text-danger">*</span></label>
                                                                    <input type="password" class="form-control" id="login_pass" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row align-items-center mb-3">
                                                                <div class="form-group col-4 col-sm-2 col-md-2 col-lg-1">
                                                                    <button type="submit" class="btn btn-secondary">Login</button>
                                                                </div>
                                                                <div class="form-group col-8 col-sm-10 col-md-10 col-lg-11">
                                                                    <div class="form-check">
                                                                        <div class="custom-checkbox">
                                                                            <input class="form-check-input" type="checkbox" id="remember_check">
                                                                            <span class="checkmark"></span>
                                                                            <label class="form-check-label" for="remember_check">remember Me</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="lost-password">
                                                                <a href="#">Lost your password?</a>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end of user-actions -->

                                            <div class="user-actions user-coupon">
                                                <h3>Have A Coupon? <span id="show_coupon">Click Here To Enter Your Code.</span></h3>
                                                <div id="checkout_coupon" class="display-content">
                                                    <div class="coupon-info">
                                                        <form action="#">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="input-group">
                                                                        <input type="text" name="coupon" value="" placeholder="Coupon Code" id="input-coupon" class="form-control mr-3" required>
                                                                        <input type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end of user-actions -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of user-actions -->

                                <div class="checkout-area">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                                            <div class="checkout-form">
                                                <div class="section-title left-aligned with-border">
                                                    <h2>Billing Details</h2>
                                                </div>

                                                <form action="#">
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="first_name">First Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="first_name" required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="last_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="company_name">Company</label>
                                                            <input type="text" class="form-control" id="company_name">
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="email_address">Email Address <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" id="email_address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="p_address">Address <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="p_address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="city_name">City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="city_name" required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="province_name">Province <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="province_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="zip_code">Zip Code <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" id="zip_code" required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="country_name" class="d-block">Country <span class="text-danger">*</span></label>
                                                            <select name="country_id" id="country_name" class="form-control nice-select" required="">
                                                                <option value=""> --- Please Select --- </option>
                                                                <option value="">Argentina</option>
                                                                <option value="">Bangladesh</option>
                                                                <option value="">Belgium</option>
                                                                <option value="">Brazil</option>
                                                                <option value="">Germany</option>
                                                                <option value="">India</option>
                                                                <option value="">United Kingdom</option>
                                                                <option value="">United States</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="tel_number">telephone</label>
                                                            <input type="tel" class="form-control" id="tel_number">
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label for="fax_num">Fax</label>
                                                            <input type="text" class="form-control" id="fax_num">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <div class="form-check mb-3">
                                                                <div class="custom-checkbox">
                                                                    <input class="form-check-input" type="checkbox" id="create_account">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="create_account">Create an account?</label>
                                                                </div>
                                                            </div>
                                                            <div class="new-account-info mt-4">
                                                                <div class="form-row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <p class="mb-4">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                                        <label for="new_pass">Account Password <span class="text-danger">*</span></label>
                                                                        <input type="password" class="form-control" id="new_pass">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <div class="form-check mb-3">
                                                                <div class="custom-checkbox">
                                                                    <input class="form-check-input" type="checkbox" id="different_shipping">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="different_shipping" id="different_shipping_address">Ship to a different address?</label>
                                                                </div>
                                                            </div>
                                                            <div class="ship-box-info mt-4">
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label for="f_name">First Name <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="f_name" required>
                                                                    </div>
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label for="l_name">Last Name <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="l_name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label for="com_name">Company</label>
                                                                        <input type="text" class="form-control" id="com_name">
                                                                    </div>
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label for="email_add">Email Address <span class="text-danger">*</span></label>
                                                                        <input type="email" class="form-control" id="email_add" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="coun_name" class="d-block">Country <span class="text-danger">*</span></label>
                                                                        <select name="country_id" id="coun_name" class="form-control nice-select" required="">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Argentina</option>
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Belgium</option>
                                                                            <option value="">Brazil</option>
                                                                            <option value="">Germany</option>
                                                                            <option value="">India</option>
                                                                            <option value="">United Kingdom</option>
                                                                            <option value="">United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="street_add">Street Address</label>
                                                                        <input type="text" class="form-control" id="street_add">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="ap_add">Apartment, suite, unit etc. (optional)</label>
                                                                        <input type="text" class="form-control" id="ap_add">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="cit_name">City <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="cit_name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="prov_name">Province <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="prov_name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="zp_code">Zip Code <span class="text-danger">*</span></label>
                                                                        <input type="number" class="form-control" id="zp_code" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="order_notes">Order Notes</label>
                                                            <textarea class="form-control" id="order_notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- end of checkout-form -->
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="order-summary">
                                                <div class="section-title left-aligned with-border">
                                                    <h2>Your Order</h2>
                                                </div>
                                                <div class="product-container">
                                                    <div class="product-list">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                                                <a href="#">
                                                                    <img src="assets/images/products/best/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Proin Lectus Ipsum</h5>
                                                                <p class="product-quantity">Quantity: 3</p>
                                                                <p class="product-final-price">$180.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-list">
                                                        <div class="product-inner media align-items-center">
                                                            <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                                                <a href="#">
                                                                    <img src="assets/images/products/best/products-6-1.jpg" alt="Fusce Aliquam" title="Fusce Aliquam">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Fusce Aliquam</h5>
                                                                <p class="product-quantity">Quantity: 5</p>
                                                                <p class="product-final-price">$260.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of product-container -->
                                                <div class="order-review">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td class="text-center">$440.00</td>
                                                                </tr>            
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td class="text-center"><strong><span class="primary-color">$440.00</span></strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="checkout-payment">
                                                    <form action="#">
                                                        <div class="form-row">
                                                            <div class="custom-radio">
                                                                <input class="form-check-input" type="radio" name="payment" id="check_payment" value="check" checked>
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="check_payment">Check Payments</label>

                                                                <div class="payment-info" id="check_pay">
                                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                </div>
                                                            </div>
                                                            <div class="custom-radio">
                                                                <input class="form-check-input" type="radio" name="payment" id="cash_delivery_payment" value="cash">
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="cash_delivery_payment">Cash on Delivery</label>

                                                                <div class="payment-info" id="cash_pay">
                                                                    <p>Pay with cash upon delivery.</p>
                                                                </div>
                                                            </div>
                                                            <div class="custom-radio">
                                                                <input class="form-check-input" type="radio" name="payment" id="paypal_payment" value="paypal">
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="paypal_payment">PayPal Express Checkout</label>

                                                                <div class="payment-info" id="paypal_pay">
                                                                    <p>Pay via PayPal. You can pay with your credit card if you don’t have a PayPal account.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-check">
                                                                <div class="custom-checkbox">
                                                                    <input class="form-check-input" type="checkbox" id="terms_acceptance" required>
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="terms_acceptance">I agree to the <a href="#">terms of service</a> and will adhere to them unconditionally.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row justify-content-end">
                                                            <input type="submit" class="btn btn-secondary" value="Continue to Payment">
                                                        </div>
                                                    </form>
                                                </div> <!-- end of checkout-payment -->
                                            </div> <!-- end of order-summary -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of checkout-area -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Checkout Wrapper -->
	<?php
		include("newletter.php");
	?>
</main>	
<?php
include("footer.php");
?>