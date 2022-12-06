@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row">
            <div class="col-md-12 mb-4">
              <a href="{{url('all-type-of-ceremonies/')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-md-12">
               <div class="card panel-card mb-5">
                  <div class="card-body">
                        <form class="needs-validation" method="POST" novalidate
                                    action="{{ route('all-type-of-ceremonies.store') }}">
                        @csrf
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Type of ceremony</label>
                              <input type="text" name="ceremony_name" class="form-control body-1 netural-100" placeholder="Type of ceremony here" required>
                              <div class="invalid-feedback">
                                  Ceremony Name is required
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2 ms-2">Fee adjustment</label>
                              <div class="position-relative">
                                  <span class="currency-sign body-1 netural-100">$</span>
                                  <input type="number" name="fee_adjustment" class="form-control body-1 netural-100 ps-4" required>
                                  <div class="invalid-feedback" >
                                  Fee Adjustment is required.
                                 </div>
                              </div>
                          </div>
                           <div class="col-md-12 mb-4">
                              <label class="form-label small-text2 me-3">Conditions</label>
                              <!-- <a data-bs-toggle="offcanvas" data-bs-target="#add-hyperlink" role="button" class="small-text1 text-decoration-none turquoise-100">
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.41307 5.77918C5.41291 5.77918 5.41316 5.77926 5.41307 5.77918V5.77918Z" fill="#62CBC9"/>
                                 <path d="M7.2421 6.73289C7.21329 6.74984 7.18389 6.76571 7.15466 6.78157C7.15458 6.78182 7.1545 6.78224 7.15433 6.78241C7.18239 6.76721 7.21187 6.75076 7.2421 6.73289Z" fill="#62CBC9"/>
                                 <path d="M4.65195 6.93489C4.71258 6.96145 4.78607 6.98683 4.85487 7.00771L4.85596 7.00662C4.78715 6.98525 4.71918 6.96136 4.65195 6.93489Z" fill="#62CBC9"/>
                                 <path d="M4.85487 7.00771C4.9246 7.02884 4.98892 7.04554 5.02933 7.05573C4.97096 7.04128 4.91341 7.02433 4.85596 7.00662L4.85487 7.00771Z" fill="#62CBC9"/>
                                 <path d="M5.07244 7.06608L5.07294 7.06557C5.06234 7.06299 5.0519 7.06123 5.04138 7.05856C5.06067 7.06332 5.07244 7.06608 5.07244 7.06608Z" fill="#62CBC9"/>
                                 <path d="M7.10921 6.80647C7.04007 6.84271 6.96951 6.87536 6.89836 6.90559C6.89828 6.906 6.89803 6.90642 6.89794 6.90667C6.90504 6.90375 6.99022 6.86851 7.10921 6.80647Z" fill="#62CBC9"/>
                                 <path d="M7.15433 6.78241C7.1545 6.78224 7.15458 6.78182 7.15466 6.78157C7.14331 6.78792 7.132 6.79452 7.12039 6.80045C7.13158 6.79477 7.14306 6.78884 7.15433 6.78241Z" fill="#62CBC9"/>
                                 <path d="M4.95107 0.866204L3.68704 2.13023C3.57789 2.23937 3.47902 2.35494 3.39042 2.47578C3.37113 2.50208 3.35368 2.52939 3.33531 2.55611C3.94591 2.39077 4.59408 2.40045 5.2 2.58584L6.00033 1.78552C6.61176 1.17409 7.60315 1.17426 8.21458 1.78569C8.82593 2.39703 8.82602 3.38849 8.21467 3.99984L6.83214 5.38236C6.55615 5.65834 6.20283 5.80924 5.84192 5.83613C5.84208 5.83613 5.84175 5.83596 5.84192 5.83613C5.76609 5.84281 5.70054 5.84356 5.64493 5.84139C5.52267 5.83604 5.45169 5.81701 5.45169 5.81701C5.45178 5.81709 5.45161 5.81675 5.45169 5.81701C5.45152 5.81701 5.45127 5.81659 5.45119 5.8165C5.14597 5.76264 4.8537 5.61801 4.61796 5.38227C4.38866 5.15297 4.24536 4.87038 4.18791 4.57427C4.18632 4.56584 4.18532 4.55732 4.18382 4.54897C3.91584 4.57093 3.65397 4.6835 3.44929 4.88817L3.02834 5.30912C3.17255 5.67463 3.39151 6.0175 3.68712 6.31311C3.98256 6.60856 4.32511 6.82801 4.69053 6.97231C4.75775 6.99878 4.82581 7.02258 4.89454 7.04404C4.95191 7.06182 5.00961 7.07861 5.06806 7.09297C5.07249 7.09406 5.076 7.09489 5.07992 7.09581C5.09044 7.09848 5.10088 7.10024 5.11149 7.10283C5.71733 7.24236 6.35807 7.189 6.93702 6.94291C7.00825 6.9126 7.07881 6.87995 7.14787 6.84379C7.15163 6.84187 7.15539 6.83995 7.15906 6.83778C7.17067 6.83185 7.18186 6.82517 7.19322 6.81882C7.22244 6.80296 7.25184 6.78709 7.28065 6.77014C7.28098 6.7698 7.28132 6.7698 7.28173 6.76955C7.49158 6.64538 7.68949 6.49323 7.8697 6.31303L9.13374 5.049C10.2888 3.89395 10.2887 2.02134 9.13374 0.866371C7.97884 -0.288679 6.10613 -0.288846 4.95107 0.866204Z" fill="#62CBC9"/>
                                 <path d="M5.04913 9.13376L6.31316 7.86974C6.42239 7.76051 6.52118 7.64486 6.60978 7.52402C6.62907 7.49772 6.64669 7.47041 6.66489 7.44369C6.05438 7.60912 5.40612 7.59951 4.80028 7.41405L3.99987 8.21445C3.38844 8.82588 2.39713 8.8258 1.78562 8.21428C1.17418 7.60285 1.17418 6.61164 1.78562 6.00021L3.16806 4.61778C3.44397 4.34187 3.79728 4.19098 4.1582 4.16409C4.15803 4.16409 4.15836 4.16409 4.1582 4.16409C4.23402 4.15724 4.29949 4.15658 4.35511 4.15891C4.47728 4.16401 4.54826 4.18321 4.54826 4.18321C4.54826 4.18305 4.54834 4.1833 4.54826 4.18321C4.54834 4.18313 4.54859 4.18355 4.54884 4.18363C4.85406 4.23749 5.14641 4.38204 5.38207 4.61769C5.61138 4.847 5.75467 5.12975 5.81196 5.42569C5.81371 5.4343 5.81471 5.44265 5.81605 5.451C6.0841 5.42912 6.34615 5.31655 6.55074 5.11196L6.97178 4.69093C6.82739 4.32542 6.60836 3.98263 6.31274 3.68702C6.01722 3.3915 5.67476 3.17213 5.30933 3.02783C5.24211 3.00136 5.17405 2.97756 5.10533 2.9561C5.04787 2.93823 4.99009 2.92136 4.9318 2.90716C4.92737 2.90608 4.92378 2.90516 4.91994 2.90416C4.90942 2.90165 4.8989 2.89965 4.88846 2.89723C4.28262 2.75769 3.64171 2.81105 3.06293 3.05714C2.9917 3.08745 2.92122 3.12019 2.85199 3.15618C2.84823 3.1581 2.84456 3.1601 2.84072 3.16211C2.82928 3.1682 2.81809 3.17488 2.80673 3.18123C2.77742 3.19701 2.74803 3.21288 2.71922 3.23C2.7188 3.23025 2.71863 3.23041 2.7183 3.23058C2.50828 3.35459 2.31054 3.50673 2.13016 3.68711L0.866295 4.95096C-0.288765 6.10602 -0.288765 7.97855 0.866295 9.1336C2.02144 10.2887 3.89407 10.2888 5.04913 9.13376Z" fill="#62CBC9"/>
                                 <path d="M5.41307 5.77918C5.41307 5.77918 5.48409 5.79862 5.60635 5.80397C5.60626 5.80305 5.60618 5.80213 5.60643 5.80138C5.54163 5.79821 5.47712 5.79045 5.41307 5.77918C5.41316 5.77926 5.41291 5.77918 5.41307 5.77918Z" fill="#62CBC9"/>
                                 <path d="M5.60643 5.80138C5.60618 5.80213 5.60626 5.80305 5.60635 5.80397C5.66196 5.80631 5.727 5.8059 5.80291 5.79913C5.73761 5.80397 5.67182 5.80464 5.60643 5.80138Z" fill="#62CBC9"/>
                                 <path d="M5.80291 5.79913C5.80274 5.7988 5.80316 5.79787 5.80308 5.79645C5.80308 5.79712 5.80299 5.79838 5.80291 5.79913C5.80299 5.79905 5.80266 5.79905 5.80291 5.79913Z" fill="#62CBC9"/>
                                 </svg>
                                 Add hyperlink text
                              </a> -->
                              <textarea id="conditions" class="form-control body-1 netural-100 ckeditor" cols="30" rows="10" name="conditions" placeholder="Type ceremony conditions here"></textarea>
                              <div class="invalid-feedback" >
                                 Conditions is required.
                              </div>

                            
                           </div>
                           <div class="col-md-12 mb-4">
                              <label class="form-label small-text2">Additional informations</label>
                              <div class="p-4" style="border: 1px solid #E2F3F2;border-radius: 6px;">
                                 <?php $ceremonyAdditional = config('ceremonyStatus.CeremonyAdditional');?>
                                 @foreach($ceremonyAdditional as $key=>$value)
                                    <div class="form-check form-switch simple-switcher-toggle mb-2">
                                       <input class="form-check-input" name="additional_info[]" type="checkbox" value="{{$key}}"  role="switch">
                                       <label class="form-check-label body-1 netural-100"> {{$value}}</label>
                                    </div>
                                 @endforeach
                                
                             </div>
                           </div>
                           <div class="col-md-12">
                              <input type="submit" value="Save" class="d-inline-flex theme-btn primary-btn justify-content-start sticky-bottom">
                           </div>
                        </div>
                     </form>
                  </div>
              </div>
            </div>
         </div>
      </div>
   </div>
   @include('elements.admin.type-ceremonies.add-hyperlink')
   @endsection