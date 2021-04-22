<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ItemController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\PincodeController;
use App\Http\Controllers\admin\TimeController;
use App\Http\Controllers\admin\PromocodeController;
use App\Http\Controllers\admin\DriverController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PrivacyPolicyController;
use App\Http\Controllers\admin\TermsController;
use App\Http\Controllers\admin\RattingController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\admin\MarketingController;
use App\Http\Controllers\admin\NewsLetterSubscriberController;
use App\Http\Controllers\admin\MailMarketingController;
use App\Http\Controllers\HomeController as Home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    /**
     * Front Pages
     */
    Route::get('/', [HomeController::Class, 'index'])->name('Synetoss Grocery');
    Route::get('/new-products', [HomeController::Class, 'getNewProducts'])->name('New Products');
    Route::get('/featured-products', [HomeController::Class, 'getFeaturedProducts'])->name('Featured Products');
    Route::get('/dashboard_overview', function(){ return view('front_page.dashboard');})->name('Dashboard Overview');
    Route::get('/about_us', function(){ return view('front_page.about');})->name('About Us');
    Route::get('/our_blog', function(){ return view('front_page.our-blog');})->name('Our Blog');
    Route::get('/career', function(){ return view('front_page.career');})->name('Career');
    Route::get('/press', function(){ return view('front_page.press');})->name('Press');
    Route::get('/single_product_view', function() { return view('front_page.single-product-view');})->name('Single Page View');
    Route::get('/checkout', function() { return view('front_page.checkout');})->name('checkout');
    Route::get('/request_product', function() { return view('front_page.request-product');})->name('Request Product');
    Route::get('/order_placed', function() { return view('front_page.order-placed');})->name('Order Placed');
    Route::get('/bill', function() { return view('front_page.bill');})->name('Bill');
    Route::get('/sign_in', function() { return view('front_page.sign_in');})->name('Log in');
    Route::get('/sign_up', function() { return view('front_page.sign_up');})->name('Sign Up');
    Route::get('/forgot_password', function() { return view('front_page.forgot_password');})->name('Forgot Password');
    Route::get('/contact_us', function() { return view('front_page.contact');})->name('Contact');
    Route::get('/blog_detail_view', function() { return view('front_page.blog_details');})->name('Blog Details');
    Route::get('/offers', function() { return view('front_page.offers');})->name('Offers');
    Route::get('/faq', function() { return view('front_page.faq');})->name('Faq');
    Route::get('/dashboard_my_wishlist', function() { return view('front_page.wishlist');})->name('My Wishlist');
    Route::get('/wishlist_overview', function() { return view('front_page.wishlist_overview');})->name('Wishlist Overview');
    Route::get('/my_orders', function() { return view('front_page.wishlist-order');})->name('Dashboard My Orders');
    Route::get('/dashboard_my_rewards', function() { return view('front_page.rewards');})->name('My Rewards');
    Route::get('/dashboard_my_wallet', function() { return view('front_page.wallet');})->name('My Wallet');
    Route::get('/dashboard_my_addresses', function() { return view('front_page.address');})->name('My Address');
    Route::get('/privacy_policy', function() { return view('front_page.privacy_policy');})->name('Privacy Policy');
    Route::get('/term_and_conditions', function() { return view('front_page.terms-and-conditions');})->name('Tearms & Conditions');
    Route::get('/refund_and_return_policy', function() { return view('front_page.return-and-refund');})->name('Return $ Refund');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard',[AdminController::Class, 'home'])->name('Dashboard');
    Route::get('/categories',[CategoryController::Class, 'index'])->name('Categories');
    Route::get('/delete-category/{category_id}',[CategoryController::Class, 'delete']);
    Route::post('/create-category',[CategoryController::Class, 'store']);
    Route::get('/items',[ItemController::Class, 'index'])->name('Items');
    Route::post('/create-item',[ItemController::Class, 'store']);
    Route::get('/banners',[BannerController::Class, 'index'])->name('Promotion Banners');
    Route::get('/delete-promotion-banner/{banner_id}',[BannerController::Class, 'destroy']);
    Route::post('/create-promotion-banner',[BannerController::Class, 'store']);
    Route::get('/pin-codes',[PincodeController::Class, 'index'])->name('Pincodes');
    Route::get('/create-pincode',[PincodeController::Class, 'store']);
    Route::get('/working-hours',[TimeController::Class, 'index'])->name('Working Hours');
    Route::post('/create-time',[TimeController::Class, 'store']);
    Route::get('/promocode',[PromocodeController::class, 'index'])->name('Promocodes');
    Route::get('/create-promocode',[PromocodeController::class, 'store']);
    Route::get('/drivers',[DriverController::Class, 'index'])->name('Drivers');
    Route::get('/create-driver',[DriverController::Class, 'store']);
    Route::get('/payment-methods',[PaymentController::Class, 'index'])->name('Payment Methods');
    Route::get('/manage-payment/{payment_id}',[PaymentController::Class, 'managepayment'])->name('Payment Methods');
    Route::get('/update-payment',[PaymentController::Class, 'update']);
    Route::get('/orders',[OrderController::Class, 'index'])->name('Orders');
    Route::get('/users',[UserController::Class, 'index'])->name('Users');
    Route::get('/private-policy',[PrivacyPolicyController::Class, 'index'])->name('Private Policy');
    Route::get('/terms-and-conditions',[TermsController::class, 'index'])->name('Terms & Conditions');
    Route::get('/review',[RattingController::Class, 'index'])->name('Reviews');
    Route::get('/inquiries',[ContactController::Class, 'index'])->name('Inquiries');
    Route::get('/about',[AboutController::Class, 'index'])->name('About');
    Route::get('/home',[HomeController::Class, 'index'])->name('Front Home');
    Route::get('/cart', [CartController::Class, 'index']);
    Route::get('/email',[MailController::Class,'sendEmail']);
    Route::get('/send-notification',[NotificationController::Class, 'sendNotification']);
    Route::get('/marketing',[MarketingController::Class, 'index'])->name('Marketing');
    Route::get('/news-letter-subscriber',[NewsLetterSubscriberController::Class, 'index'])->name('News Letter');
    Route::get('/mail',[MailMarketingController::Class, 'index'])->name('Mail');
    Route::get('/add-marketing',[MarketingController::Class, 'addMarketing'])->name('Marketing');
    Route::post('/save-marketing',[MarketingController::Class, 'saveMarketing']);
    Route::get('/logoutUser',[Home::Class, 'logoutUser']);
    Route::get('/my-profile', function() { return view('admin.profile');})->name('Profile');
});

