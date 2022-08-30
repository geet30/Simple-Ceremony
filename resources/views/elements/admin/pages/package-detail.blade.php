    <?php $count = 0;?>
    @foreach($data['package'] as $package)
        <?php $count++; ?>
        <div class="row pb-60">
            <div class="col-md-3 col-lg-3 col-xl-2 ">
                <div class="d-flex">
                    <div class="numberCircle align-self-center">{{$count}}</div>
                    <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages {{$count}}</p>
                </div>
            </div>
            <div class="col-md-9 col-xl-10 mt-3 mt-md-0">
                <div class="row">
                    <div class="col-lg-12 d-md-flex justify-content-between">
                    <div class="align-self-center">
                    
                        <h2 class="h3 neutral-100">{{$package['package_name']}} • $ {{number_format($package['total_fee'])}}</h2>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="add-ons-discount d-flex mt-4 mb-3">
                        <div class="add-ons-discount-offer text-center me-4">
                            <p class="mb-1 small-text2 neutral-100">AC admin fee</p>
                            <h3 class="h3 mb-0 neutral-100">{{number_format($package['admin_fee'])}}%</h3>
                        </div>
                        <div class="add-ons-after-discount-price text-center">
                            <p class="mb-1 small-text2 neutral-100">Total fee <br>partners get</p>
                            <h3 class="h3 mb-0 neutral-100">$ {{number_format($package['partner_fee'])}}</h3>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 image-block pt-3">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class=" position-relative">

                                @foreach($package['gallery'] as $images)
                                @if ($loop->first)  
                                    @if(isset($images) && !empty($images['image_name']))
                                        <img src="{{ asset('/uploads/images/package/'.$images['image_name']) }}" alt="add-ons-image " class="img-fluid left-img">
                                    @endif
                                @endif
                                @endforeach
                                <div class="all-pictures-btn">
                                
                                <a href="{{ route('admin.package.gallery', ['id' => $package['id'], 'addonid' => $id]) }}" class="theme-btn primary-btn d-inline-flex">
                                    <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg"
                                        alt="shopping-icon">
                                    See all pictures
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 right-img">
                            <div class="row">
                                
                                @foreach($package['gallery'] as $images)
                                @if(isset($images) && !empty($images['image_name']))
                                    <div class="col-sm-6">
                                        @if(preg_match('/^.*\.(mp4|mov|mpg|mpeg|wmv|mkv)$/i', $images['image_name'])) {
                            
                                            <video controls width="100%" class="img-fluid mb-3 photo"  id="video" preload="metadata">
                                            <source src="{{ asset('/uploads/images/package/'.$images['image_name']) }}" type="video/mp4">
                                            </video>
                                        @else
                                            <img src="{{ asset('/uploads/images/package/'.$images['image_name']) }}" alt="add-ons-image " class="img-fluid mb-3 photo"> 
                                        @endif
                                    </div>
                                @endif
                                @endforeach
                                
                            </div>
                                
                        </div>
                        <div class="col-12 pt-3">
                            <p class="body-3-medium text-black">
                                {{$package['location_description']}}
                            </p>
                            <ul class="addons-list">
                                <li>Signing table and 2 white padded folding chairs </li>
                                <li>Signing table decoration </li>
                                <li> Aisle runner in natural sisal </li>
                                <li>Frame your ceremony with a beautiful chiffon with silk flowers </li>
                            </ul>
                            <h4 class="h4">Add title terms here</h4>
                            <p class="body-3-medium">{{$package['title_term']}}</p>
                            <ul class="addons-list">
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach