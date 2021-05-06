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
use App\Http\Controllers\front\CategoryController as CatController;
use App\Http\Controllers\front\ItemController as ItemFrontController;
use App\Http\Controllers\front\NewProductsController;
use App\Http\Controllers\front\FeaturedItemsController;
use App\Http\Controllers\front\ClientShoppingCartController;
use App\Http\Controllers\front\OrderPlacedController;
use App\Http\Controllers\front\ClientAccountController;
use App\Http\Controllers\front\AboutUsController;
use App\Http\Controllers\front\CheckoutController;
use App\Http\Controllers\front\ProductRequestController;
use App\Http\Controllers\front\BillController;
use App\Http\Controllers\front\ClientAuthController;
use App\Mail\SendUserCode;
use App\Http\Controllers\front\ClientOrdersController;
use App\Http\Controllers\front\ClientRewardsController;
use App\Http\Controllers\front\ClientWalletController;
use App\Http\Controllers\front\ClientWishlistController;
use App\Http\Controllers\front\ClientAddressController;
use App\Http\Controllers\Auth\SocialLoginsController;
use App\Http\Controllers\front\OffersController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\FaqController;
use App\Http\Controllers\front\CareerController;
use App\Http\Controllers\front\ContactUsController;
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
    Route::get('/new-products', [NewProductsController::Class, 'getNewProducts'])->name('New Products');
    Route::get('/products-of-category/{category_id}/{fake_id}',[CatController::Class, 'getAllCategoryItems'])->name('Similar Items');
    Route::get('/check-product/{item_id}/{fake_id}',[ItemFrontController::Class, 'viewNewProductSingle'])->name('Single Product');
    Route::get('/featured-products', [FeaturedItemsController::Class, 'getFeaturedProducts'])->name('Featured Products');
    Route::get('/about_us', [AboutUsController::Class, 'aboutUs'])->name('About Us');
    Route::get('/checkout', [CheckoutController::Class, 'proceedToCheckout'])->name('checkout');
    Route::get('/our_blog', [BlogController::Class,'getBlog'])->name('Our Blog');
    Route::get('/career', [CareerController::Class,'getCareer'])->name('Career');
    Route::get('/press', function(){ return view('front_page.press');})->name('Press');
    Route::get('/request_product', [ProductRequestController::Class, 'requestForProduct'])->name('Request Product');
    Route::get('/order_placed', [OrderPlacedController::Class, 'getPlacedOrders'])->name('Order Placed');
    Route::get('/bill', [BillController::Class, 'getClientBill'])->name('Bill');
    Route::get('/sign_in', [ClientAuthController::Class, 'signInPage'])->name('Log in');
    Route::get('/sign_up', [ClientAuthController::Class, 'signUpPage'])->name('Sign Up');
    Route::get('/forgot_password', [ClientAuthController::Class, 'forgotPassword'])->name('Forgot Password');
    Route::get('/contact_us', [ContactUsController::Class, 'contactUs'])->name('Contact');
    Route::get('/blog_detail_view', function() { return view('front_page.blog_details');})->name('Blog Details');
    Route::get('/offers',[OffersController::Class, 'getOffers'])->name('Offers');
    Route::get('/faq', [FaqController::Class, 'getFaq'])->name('Faq');
    Route::get('/dashboard_my_wishlist', [ClientWishlistController::Class, 'getClientWishlist'])->name('My Wishlist');
    Route::get('/wishlist_overview', function() { return view('front_page.wishlist_overview');})->name('Wishlist Overview');
    Route::get('/my_orders', [ClientOrdersController::Class, 'getClientOrders'])->name('Dashboard My Orders');
    Route::get('/dashboard_my_rewards', [ClientRewardsController::Class, 'getClientRewards'])->name('My Rewards');
    Route::get('/dashboard_my_wallet', [ClientWalletController::Class, 'getClientWallet'])->name('My Wallet');
    Route::get('/dashboard_my_addresses', [ClientAddressController::Class, 'getClientAddress'])->name('My Address');
    Route::get('/privacy_policy', function() { return view('front_page.privacy_policy');})->name('Privacy Policy');
    Route::get('/term_and_conditions', function() { return view('front_page.terms-and-conditions');})->name('Tearms & Conditions');
    Route::get('/refund_and_return_policy', function() { return view('front_page.return-and-refund');})->name('Return $ Refund');
    Route::get('/send-email-code-to-customer',[MailMarketingController::Class, 'sendCustomerCode']);
    Route::get('/checkout/{user_email}/{user_code}',[CheckoutController::Class, 'confirmUserEnteredCode'])->name('checkout');
    Route::get('/checkout/{user_email}',[CheckoutController::Class, 'proceedToCheckout'])->name('checkout');
    Route::get('/confirm-delivery-time-and-date/{user_email}',[CheckoutController::Class, 'saveDeliveryDateAndTime']);
    Route::get('/place-order-for-client/{user_email}',[CheckoutController::Class, 'makePayment']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard',[AdminController::Class, 'home'])->name('Dashboard')->middleware('is_admin');
    Route::get('/admin-dashboard',[AdminController::Class, 'home'])->name('Dashboard')->middleware('is_admin');
    Route::get('/categories',[CategoryController::Class, 'index'])->name('Categories')->middleware('is_admin');
    Route::get('/delete-category/{category_id}',[CategoryController::Class, 'delete'])->middleware('is_admin');
    Route::post('/create-category',[CategoryController::Class, 'store'])->middleware('is_admin');
    Route::get('/items',[ItemController::Class, 'index'])->name('Items')->middleware('is_admin');
    Route::post('/create-item',[ItemController::Class, 'store'])->middleware('is_admin');
    Route::get('/banners',[BannerController::Class, 'index'])->name('Promotion Banners')->middleware('is_admin');
    Route::get('/delete-promotion-banner/{banner_id}',[BannerController::Class, 'destroy'])->middleware('is_admin');
    Route::post('/create-promotion-banner',[BannerController::Class, 'store'])->middleware('is_admin');
    Route::get('/pin-codes',[PincodeController::Class, 'index'])->name('Pincodes')->middleware('is_admin');
    Route::get('/create-pincode',[PincodeController::Class, 'store'])->middleware('is_admin');
    Route::get('/working-hours',[TimeController::Class, 'index'])->name('Working Hours')->middleware('is_admin');
    Route::post('/create-time',[TimeController::Class, 'store'])->middleware('is_admin');
    Route::get('/promocode',[PromocodeController::class, 'index'])->name('Promocodes')->middleware('is_admin');
    Route::get('/create-promocode',[PromocodeController::class, 'store'])->middleware('is_admin');
    Route::get('/drivers',[DriverController::Class, 'index'])->name('Drivers')->middleware('is_admin');
    Route::get('/create-driver',[DriverController::Class, 'store'])->middleware('is_admin');
    Route::get('/payment-methods',[PaymentController::Class, 'index'])->name('Payment Methods')->middleware('is_admin');
    Route::get('/manage-payment/{payment_id}',[PaymentController::Class, 'managepayment'])->name('Payment Methods')->middleware('is_admin');
    Route::get('/update-payment',[PaymentController::Class, 'update'])->middleware('is_admin');
    Route::get('/orders',[OrderController::Class, 'index'])->name('Orders')->middleware('is_admin');
    Route::get('/users',[UserController::Class, 'index'])->name('Users')->middleware('is_admin');
    Route::get('/private-policy',[PrivacyPolicyController::Class, 'index'])->name('Private Policy')->middleware('is_admin');
    Route::get('/terms-and-conditions',[TermsController::class, 'index'])->name('Terms & Conditions')->middleware('is_admin');
    Route::get('/review',[RattingController::Class, 'index'])->name('Reviews')->middleware('is_admin');
    Route::get('/inquiries',[ContactController::Class, 'index'])->name('Inquiries')->middleware('is_admin');
    Route::get('/about',[AboutController::Class, 'index'])->name('About')->middleware('is_admin');
    Route::get('/home',[HomeController::Class, 'index'])->name('Front Home')->middleware('is_admin');
    Route::get('/cart', [CartController::Class, 'index'])->middleware('is_admin');
    Route::get('/send-notification',[NotificationController::Class, 'sendNotification'])->middleware('is_admin');
    Route::get('/marketing',[MarketingController::Class, 'index'])->name('Marketing')->middleware('is_admin');
    Route::get('/news-letter-subscriber',[NewsLetterSubscriberController::Class, 'index'])->name('News Letter')->middleware('is_admin');
    Route::get('/mail',[MailMarketingController::Class, 'index'])->name('Mail')->middleware('is_admin');
    Route::get('/add-marketing',[MarketingController::Class, 'addMarketing'])->name('Marketing')->middleware('is_admin');
    Route::post('/save-marketing',[MarketingController::Class, 'saveMarketing'])->middleware('is_admin');
    Route::get('/logoutUser',[Home::Class, 'logoutUser']);
    Route::get('/my-profile', function() { return view('admin.profile');})->name('Profile')->middleware('is_admin');
    Route::get('/dashboard_overview', [ClientAccountController::Class, 'showClientAccount'])->name('Dashboard Overview')->middleware('is_customer');
    Route::get('/customer-dashboard', [ClientAccountController::Class, 'showClientAccount'])->name('Dashboard Overview')->middleware('is_customer');
});

Route::prefix('cart')->group(function () {
    Route::get('/add-item-to-cart/{item_id}',[ClientShoppingCartController::Class, 'addItemToCart']);
});

Route::get('/save-client-delivery-address',[CheckoutController::Class, 'saveClientDeliveryAddress'])->name('Save Client Delivery Address');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email', function(){ return new SendUserCode(); });

Route::get('/auth/github', [SocialLoginsController::Class, 'redirectUser']);
Route::get('/auth/callback', [SocialLoginsController::Class, 'handleProviderCallBack']);
Route::get('/auth/facebook', [SocialLoginsController::Class, 'redirectFacebookUser']);
Route::get('/auth/callback/facebook', [SocialLoginsController::Class, 'handleProviderCallBackForFaceBook']);
Route::get('/auth/gmail', [SocialLoginsController::Class, 'redirectGmailUser']);
Route::get('/auth/callback/gmail', [SocialLoginsController::Class, 'handleProviderCallBackForGmail']);

// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/', function()
// 	{
// 		return "Hello";
// 	});

// 	Route::get('test',function(){
// 		return View::make('test');
// 	});
// });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Route::get('/subscribe-for-news-letter',[NewsLetterSubscriberController::Class, 'subscriberNewsLetter']);
Route::get('/make-payment',[PaymentController::Class, 'testPayment']);
