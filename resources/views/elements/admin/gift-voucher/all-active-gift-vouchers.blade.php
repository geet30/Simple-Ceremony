
<div class="searchResult row">
    @if(count($gift_voucher) > 0)
        @foreach($gift_voucher as $voucher)
        <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
            <a class="card image-card admin-gift-voucher-card" href="{{route('gift-vouchers.show',$voucher->id)}}">
                @if(!empty($voucher['voucher_image']))
               <img src="{{ asset('/uploads/images/vouchers/'.$voucher['voucher_image']) }}" class="w-100 img-fluid mt-27 mb-27" alt="gift voucher Image">
               @else
               <img src="{{ asset('/images/voucher/placeholder.png') }}" class="w-100 img-fluid mt-27 mb-27" alt="gift voucher Image">
               @endif
                <div class="card-body pt-15 pb-20">
                    <div class="gift-certificate mb-3">
                        <span>Gift Certificate</span>
                    </div>
                    <div class="body-3 neutral-100 mb-1">${{$voucher->voucher_price}} <span class="font-weight-700">({{$voucher->voucher_number}})</span></div>
                    <h4 class="h4 netural-100 mb-1">{{$voucher->voucher_title}}</h4>
                    <p class="small-text2 netural-100 align-self-center mb-0">{{$voucher->voucher_description}}</p>
                </div>
            </a>
        </div>   
        @endforeach
    @else
    No result found
    @endif
</div>