<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="close-btn">
            <span class="close">&times;</span>
        </div>
        <div class='px-md-0 px-2'>
            <div class="product_grid">
                <ul class="product_list list">
                    <li class="product_item">
                        <div class='row m-0'>
                            <div class="p-0 col-md-5 position-relative image-container ">
                                <img src="assets\frontend\images\web_image-crop.png"
                                    class='d-md-block d-none overflow-image' width="100%" alt=""
                                    style="height:130% !important">
                                <img src="assets\frontend\images\02.jpeg" class='d-md-none d-block' width="100%" alt=""
                                    style="height:300px !important">
                            </div>
                            <div class="product_values col-md-7 py-md-5 py-5">
                                <div class="product_title">
                                    <h5 class=''>Secure Your Warranty Today!</h5>
                                </div>
                                <div class="product_price text-center w-100 pt-5">
                                    <p class="mt-md-0 mt-3" style="">Lifetime
                                        Structural Warranty for Your Dream Home or Office</p>
                                </div>
                                <div class="w-100 pt-3">
                                    <form autocomplete="off" method="POST" action="{{ route('enquiry.store') }}"
                                        class='w-100 popup-form px-md-1 px-2 contact-validation-active'>
                                        @csrf
                                        <div class='d-block'>
                                            <input class="form-control popup-input" autocomplete="off" required style=""
                                                name="name" type="text" placeholder="Your Name" />
                                        </div>
                                        <div class='d-block pt-4'>
                                            <input class="form-control popup-input" autocomplete="off"
                                                name="phonenumber" type="text" required
                                                placeholder="Your Contact Number" />
                                        </div>
                                        <div class='d-block pt-4'>
                                            <input class="form-control popup-input" autocomplete="off" required
                                                name="address" type="text" placeholder="Your City" />
                                        </div>
                                        <div class='w-100 d-flex justify-content-between mt-4'>
                                            <div class="cf-turnstile mr-4"
                                                data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
                                            <button type="submit" class='popup-btn px-4 py-2'>Book Free
                                                Consultation</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
