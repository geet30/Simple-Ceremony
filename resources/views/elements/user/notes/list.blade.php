@foreach ($notes as $note)
<div class=" col-xl-4 mb-3">
   <div class="notes">
      <div class="d-flex justify-content-between">
         <div class="align-self-center">
            <h2 class="mb-0"><a  class="h4 neutral-100 text-decoration-none"> {{ $note['title'] }}</a></h2>
         </div>
         <div class="dropdown align-self-center">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/icons/three-dots.svg" class="img-fluid" alt="dropdown-icon">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
               <li><a class="dropdown-item" href="#">Edit</a></li>
               <li><a class="dropdown-item" href="#">Delete</a></li>
            </ul>
         </div>
      </div>
      <div class="align-items-baseline d-flex my-2">
         <div class="theme-tag-blue d-flex  mb-3 mb-md-0 me-2 justify-content-center justify-content-md-start">
            <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
            <div class="align-self-center"> {{ $note['date'] }} </div>
         </div>
         <div class="position-relative share-icon ">
            <div class="theme-tag-blue d-flex justify-content-center justify-content-md-start">
               <div class="align-self-center"><img src="/images/icons/share.svg" class="img-fluid " alt="share"></div>
               <div class="align-self-center">{{ $note['share'] }}  Share</div>
            </div>
            <div class="share-content-up">
               <div class="share-content">
                  <ul>
                     <li>
                        <div class="d-flex mb-11">
                           <div  class="align-self-center"><img src="/images/avtar/michael.png" class="rounded-circle theme-avtar"  alt="Created" /></div>
                           <div class="align-self-center  ps-1">
                              <p class="body-2-semi-bold  neutral-100 mb-0">Michael</p>
                              <p class="small-text3 neutral-100 mb-0">Marriage Celebrant</p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="d-flex mb-11">
                           <div  class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar"  alt="Created" /></div>
                           <div class="align-self-center  ps-1">
                              <p class="body-2-semi-bold  neutral-100 mb-0">Admin</p>
                              <p class="small-text3 neutral-100 mb-0">Simple ceremonies</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <p class="body-3-regular neutral-100">{{ $note['info'] }} </p>
      <a class="d-flex attachment-link">
         <div class="align-self-center me-2"><img src="/images/icons/attachment.svg" class="img-fluid" alt="attachment-icon"></div>
         <div class="align-self-center"><span >{{ $note['attachment'] }} </span>
            <span > attachments</span>
         </div>
      </a>
   </div>
</div>
@endforeach