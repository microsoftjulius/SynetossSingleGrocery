<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        @include('front_layout.css')
    </head>
    <body>
        @include('front_layout.select_category')
        @include('front_layout.search_modal')
        @include('front_layout.cart-toggle')
        <header class="header clearfix">
            @include('front_layout.topheader')
            @include('front_layout.menu')
        </header>
        <div class="wrapper">
            <div class="gambo-Breadcrumb">
                <div class="container">
                    @include('front_layout.breadcrumb')
                </div>
            </div>
            <div class="dashboard-group">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="user-dt">
                                <div class="user-img">
                                    <img src="{{ asset('front_pages/images/avatar/img-5.jpg')}}" alt="">
                                    <div class="img-add">
                                        <input type="file" id="file">
                                        <label for="file"><i class="uil uil-camera-plus"></i></label>
                                    </div>
                                </div>
                                <h4>Johe Doe</h4>
                                <p>+91999999999<a href="#"><i class="uil uil-edit"></i></a></p>
                                <div class="earn-points"><img src="{{ asset('front_pages/images/Dollar.svg')}}" alt="">Points : <span>20</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            @include('front_layout.wishlist-sidebar')
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="dashboard-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title-tab">
                                            <h4><i class="uil uil-wallet"></i>My Wallet</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="reward-body-dtt">
                                                <div class="reward-img-icon">
                                                    <img src="{{ asset('front_pages/images/money.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">My Wallet Balance</span>
                                                <h4 class="cashbk-price">${{ $wallet_balance }}</h4>
                                                <span class="date-reward">Last Updated On : {{ $wallet_balance_update }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="gambo-body-cash">
                                                <div class="reward-img-icon">
                                                    <img class="rotate-img" src="{{ asset('front_pages/images/business.svg')}}" alt="">
                                                </div>
                                                <span class="rewrd-title">Synetoss Cashback Blance</span>
                                                <h4 class="cashbk-price">$5</h4>
                                                <p>100% of this can be used for your next order.</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>Active Offers</h4>
                                            </div>
                                            <div class="active-offers-body">
                                                <div class="table-responsive">
                                                    <table class="table ucp-table earning__table">
                                                        <thead class="thead-s">
                                                            <tr>
                                                                <th scope="col">Offers</th>
                                                                <th scope="col">Offer Code</th>
                                                                <th scope="col">Expires Date</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>15%</td>
                                                                <td>GAMBOCOUP15</td>
                                                                <td>31 May 2020</td>
                                                                <td><b class="offer_active">Activated</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10%</td>
                                                                <td>GAMBOCOUP10</td>
                                                                <td>25 May 2020</td>
                                                                <td><b class="offer_active">Activated</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>25%</td>
                                                                <td>GAMBOCOUP25</td>
                                                                <td>20 May 2020</td>
                                                                <td><b class="offer_active">Activated</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5%</td>
                                                                <td>GAMBOCOUP05</td>
                                                                <td>15 May 2020</td>
                                                                <td><b class="offer_active">Activated</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>Add Balance</h4>
                                            </div>
                                            <div class="add-cash-body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group mt-1">
                                                            <label class="control-label">Holder Name*</label>
                                                            <div class="ui search focus">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text" name="holdername" value="" id="holder[name]" required="" maxlength="64" placeholder="Holder Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group mt-1">
                                                            <label class="control-label">Card Number*</label>
                                                            <div class="ui search focus">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text" name="cardnumber" value="" id="card[number]" required="" maxlength="64" placeholder="Card Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group mt-1">
                                                            <label class="control-label">Expiration Month*</label>
                                                            <select class="ui fluid search dropdown form-dropdown" name="card[expire-month]">
                                                                <option value="">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group mt-1">
                                                            <label class="control-label">Expiration Year*</label>
                                                            <div class="ui search focus">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group mt-1">
                                                            <label class="control-label">CVV*</label>
                                                            <div class="ui search focus">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" name="card[cvc]" maxlength="3" placeholder="CVV">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group mt-1">
                                                            <label class="control-label">Add Balance*</label>
                                                            <div class="ui search focus">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text" name="addbalance" maxlength="3" placeholder="$0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="next-btn16 hover-btn mt-3">Add Balance</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pdpt-bg">
                                            <div class="pdpt-title">
                                                <h4>History</h4>
                                            </div>
                                            <div class="history-body scrollstyle_4">
                                                <ul class="history-list">
                                                    <li>
                                                        <div class="purchase-history">
                                                            <div class="purchase-history-left">
                                                                <h4>Purchase</h4>
                                                                <p>Transaction ID <ins>gambo14255896</ins></p>
                                                                <span>6 May 2018, 12.56PM</span>
                                                            </div>
                                                            <div class="purchase-history-right">
                                                                <span>-$25</span>
                                                                <a href="#">View</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="purchase-history">
                                                            <div class="purchase-history-left">
                                                                <h4>Purchase</h4>
                                                                <p>Transaction ID <ins>gambo14255895</ins></p>
                                                                <span>5 May 2018, 11.16AM</span>
                                                            </div>
                                                            <div class="purchase-history-right">
                                                                <span>-$21</span>
                                                                <a href="#">View</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="purchase-history">
                                                            <div class="purchase-history-left">
                                                                <h4>Purchase</h4>
                                                                <p>Transaction ID <ins>gambo14255894</ins></p>
                                                                <span>4 May 2018, 02.56PM</span>
                                                            </div>
                                                            <div class="purchase-history-right">
                                                                <span>-$30</span>
                                                                <a href="#">View</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="purchase-history">
                                                            <div class="purchase-history-left">
                                                                <h4>Purchase</h4>
                                                                <p>Transaction ID <ins>gambo14255893</ins></p>
                                                                <span>3 May 2018, 5.56PM</span>
                                                            </div>
                                                            <div class="purchase-history-right">
                                                                <span>-$15</span>
                                                                <a href="#">View</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.footer')
        @include('front_layout.javascript')
    </body>
</html>

