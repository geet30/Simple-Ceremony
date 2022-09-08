<nav id="sidebarMenu" class="sticky-top top-0 px-3">
   <div class="pt-5 pb-100">
      <div class="d-flex justify-content-center mb-4">
         <img src="/images/user/sidebar-main-logo.svg" alt="Logo" class="img-fluid d-none d-md-block">
         <img src="/images/icons/mobile-logo.svg" alt="Mobile Logo"  class="img-fluid d-md-none">
      </div>
      <div class="switch-padding text-center">
         <label class="switch">
         <input type="checkbox" class="switch-input">
         <span class="switch-label" data-on="Off" data-off="On"></span>
         <span class="switch-handle"></span>
         </label>
      </div>
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="body-1 nav-link d-flex align-items-center {{ Request::segment(1)=='upcoming' ? 'active' : ''}}" aria-current="page" href="/upcoming">
               <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.69019 6.48087C9.90141 6.34883 10.139 6.21679 10.3765 6.11128L8.92449 4.65923C8.47572 4.21045 8.18529 3.62963 8.10614 3.04883H5.28124C2.8788 3.04883 0.925339 5.00248 0.925339 7.40474V25.2775C0.925339 25.6208 1.1629 25.9639 1.50614 26.0167C1.95492 26.0959 2.32449 25.7527 2.32449 25.3304V13.9784C2.32449 12.2625 3.19569 10.6784 4.62124 9.75429L9.69019 6.48087Z" fill="#62CBC9"/>
                  <path d="M19.5902 3.04712H16.7653C16.6861 3.65427 16.422 4.18223 15.9732 4.63121L14.4949 6.10957C14.7324 6.21509 14.97 6.34713 15.1812 6.47916L20.2237 9.75281C21.6492 10.6769 22.5204 12.2873 22.5204 13.9769V25.2497C22.5204 25.593 22.758 25.9361 23.1012 25.9889C23.55 26.0681 23.9196 25.7248 23.9196 25.3026L23.9197 7.37648C23.9461 4.97422 21.9924 3.04688 19.5901 3.04688L19.5902 3.04712Z" fill="#62CBC9"/>
                  <path d="M12.2774 6.45368C12.3566 6.53286 12.515 6.53286 12.5941 6.45368L15.2078 3.84003C15.947 3.10083 15.8678 1.83368 14.9437 1.22638C14.2837 0.777605 13.3596 0.909638 12.8054 1.49046L12.4358 1.83371L12.0398 1.43779C11.3006 0.698589 10.0335 0.777789 9.42619 1.70187C8.97741 2.36187 9.10945 3.28596 9.69027 3.84022L12.2774 6.45368Z" fill="#62CBC9"/>
                  <path d="M10.0334 12.0763C10.0334 13.0094 9.27688 13.7659 8.34378 13.7659C7.41068 13.7659 6.65417 13.0094 6.65417 12.0763C6.65417 11.143 7.41068 10.3867 8.34378 10.3867C9.27688 10.3867 10.0334 11.143 10.0334 12.0763Z" fill="#62CBC9"/>
                  <path d="M17.7158 18.3342L18.0325 16.1166C18.1909 15.1134 17.3989 14.1895 16.3693 14.1895H15.4717C14.4421 14.1895 13.6766 15.087 13.8085 16.1166L14.1252 18.3342C12.8054 19.575 11.8022 22.1621 11.6438 25.2246C11.6174 25.647 11.9605 25.9901 12.3566 25.9901H19.4846C19.9071 25.9901 20.2238 25.6468 20.1975 25.2246C20.0391 22.1621 19.0622 19.575 17.7158 18.3342H17.7158Z" fill="#62CBC9"/>
                  <path d="M17.6102 12.0763C17.6102 13.0094 16.8537 13.7659 15.9206 13.7659C14.9873 13.7659 14.2308 13.0094 14.2308 12.0763C14.2308 11.143 14.9873 10.3867 15.9206 10.3867C16.8537 10.3867 17.6102 11.143 17.6102 12.0763Z" fill="#62CBC9"/>
                  <path d="M13.2542 18.0435L13.0958 16.9084C12.7262 16.7764 12.2246 16.5388 11.9342 16.1692C11.8286 16.0372 11.7229 15.9051 11.6437 15.7733C11.1158 15.0604 10.6141 14.5061 9.5317 14.2949L8.44925 16.9349C8.42292 16.9878 8.34373 16.9878 8.31721 16.9349L7.26131 14.3213C6.62766 14.4796 6.07336 14.8229 5.62456 15.298C4.33091 16.6972 4.48945 18.9148 4.51576 18.9939C4.54209 19.3899 4.88535 19.6803 5.25496 19.6803H5.30781C5.73025 19.654 6.02066 19.2844 5.99416 18.8619C5.99416 18.8356 5.88864 17.4099 6.57496 16.486L6.54863 19.5219L6.07352 25.1187C6.04719 25.5675 6.39027 25.9899 6.83903 26.0163C7.31413 26.0691 7.71023 25.6995 7.73658 25.2508L8.18536 19.8652H8.5021L8.95087 25.2508C8.97721 25.6996 9.3468 26.0163 9.79577 26.0163H9.87495C10.3237 25.9899 10.667 25.5675 10.6405 25.1187L10.1654 19.5219L10.139 16.3011C10.2182 16.4067 10.2974 16.5124 10.4031 16.6444C10.5086 16.8028 10.6143 16.9348 10.7464 17.0932C11.4327 17.9381 12.4623 18.2811 12.9375 18.4132C13.0429 18.2811 13.1486 18.1491 13.2541 18.0436L13.2542 18.0435Z" fill="#62CBC9"/>
                  <path d="M9.00379 14.6381V14.0573C9.00379 14.0045 8.95093 13.9781 8.89827 14.0045L8.50234 14.1894C8.44949 14.1365 8.39682 14.1102 8.31745 14.1102C8.23827 14.1102 8.18542 14.1365 8.13256 14.1894L7.73664 14.0045C7.68379 13.9781 7.63112 14.0308 7.63112 14.0573V14.6381C7.63112 14.691 7.68397 14.7173 7.73664 14.691L8.13256 14.5061C8.18542 14.5589 8.23808 14.5853 8.31745 14.5853C8.39664 14.5853 8.44949 14.5589 8.50234 14.5061L8.89827 14.691C8.95093 14.7438 9.00379 14.691 9.00379 14.6381Z" fill="#62CBC9"/>
                  <path d="M8.55499 15.1135C8.55499 15.3951 8.13254 15.3951 8.13254 15.1135C8.13254 14.8319 8.55499 14.8319 8.55499 15.1135Z" fill="#62CBC9"/>
                  <path d="M8.55499 15.7465C8.55499 16.028 8.13254 16.028 8.13254 15.7465C8.13254 15.4647 8.55499 15.4647 8.55499 15.7465Z" fill="#62CBC9"/>
               </svg>
               <span class="ms-3 d-none d-md-block">Upcoming</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="body-1 nav-link d-flex align-items-center" href="/calendar">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
                  <path d="M19.4375 7.37549C19.4375 4.59182 16.6875 2.73323 15.1919 2.73323L15.1918 1.39118C15.1918 0.792172 14.7336 0.333984 14.1346 0.333984C13.5356 0.333984 13.0774 0.792153 13.0774 1.39118V2.56299H6.73457V1.39118C6.73457 0.792172 6.2764 0.333984 5.67737 0.333984C5.07833 0.333984 4.62016 0.792153 4.62016 1.39118L4.62029 2.73323C1.80094 2.73323 0.1875 5.61961 0.1875 7.80412V18.3755C0.1875 21.3002 2.04792 23.2782 4.97267 23.2782H14.8393C17.764 23.2782 19.4375 20.8716 19.4375 17.9469V7.37549ZM4.62029 4.59783V5.61961C4.62029 6.21862 5.07846 6.67681 5.67749 6.67681C6.27652 6.67681 6.73469 6.21864 6.73469 5.61961V4.56241H13.0775V5.61961C13.0775 6.21862 13.5357 6.67681 14.1347 6.67681C14.7338 6.67681 15.1919 6.21864 15.1919 5.61961V4.59783C16.7776 4.77407 18.011 6.11294 18.011 7.73401V8.79121H1.80094V7.73401C1.80094 6.11294 3.03465 4.77409 4.62029 4.59783ZM14.8393 21.4768H4.97267C3.21077 21.4768 1.80138 20.0674 1.80138 18.3055L1.80114 10.9055H18.0106V18.3055C18.0106 20.0674 16.6012 21.4768 14.8393 21.4768Z" fill="#62CBC9"/>
                  <path d="M12.7266 16.8965H7.08845C6.48944 16.8965 6.03125 17.3546 6.03125 17.9537C6.03125 18.5527 6.48942 19.0109 7.08845 19.0109H12.7266C13.3257 19.0109 13.7838 18.5527 13.7838 17.9537C13.7838 17.3546 13.3257 16.8965 12.7266 16.8965V16.8965Z" fill="#62CBC9"/>
                  <path d="M12.7266 13.3711H7.08845C6.48944 13.3711 6.03125 13.8293 6.03125 14.4283C6.03125 15.0273 6.48942 15.4855 7.08845 15.4855H12.7266C13.3257 15.4855 13.7838 15.0273 13.7838 14.4283C13.7838 13.8293 13.3257 13.3711 12.7266 13.3711V13.3711Z" fill="#62CBC9"/>
               </svg>
               <span class="ms-3  d-none d-md-block">Calendar</span>
            </a>
         </li>
         <li class="nav-item" >
            <a class="body-1 nav-link d-flex align-items-center" href="{{url('all-locations')}}">
               <svg xmlns="http://www.w3.org/2000/svg" width="19" height="27" viewBox="0 0 19 27" fill="none">
                  <path d="M2.47661 12.7044V13.3026C7.12975 12.8901 8.74237 7.62656 9.12611 5.97656C7.35717 6.00253 5.66903 6.72217 4.42526 7.98051C3.18168 9.2388 2.48189 10.9352 2.47656 12.7042L2.47661 12.7044Z" fill="#62CBC9"/>
                  <path d="M9.3125 5.9767C9.70033 7.62671 11.3091 12.8982 15.962 13.3107V12.7043C15.9578 10.9348 15.2584 9.23786 14.0144 7.97919C12.7707 6.72071 11.0818 6.00141 9.3125 5.97656V5.9767Z" fill="#62CBC9"/>
                  <path d="M4.92813 26.6017C5.67468 21.6187 3.65343 16.0252 2.45312 13.3027V26.6017H4.92813Z" fill="#62CBC9"/>
                  <path d="M13.5131 26.6017H15.9634V13.3027C14.7838 16.0252 12.7666 21.6187 13.5131 26.6017Z" fill="#62CBC9"/>
                  <path d="M8.41654 5.15181C7.95046 4.7859 7.51456 4.38315 7.11314 3.94727C5.2477 4.46032 3.60283 5.57261 2.43181 7.11267C1.26078 8.65255 0.628591 10.535 0.632834 12.4695V26.6015H1.62689V12.7043C1.62652 10.8293 2.31984 9.02031 3.57337 7.62606C4.82709 6.23167 6.55204 5.35033 8.41635 5.15162L8.41654 5.15181Z" fill="#62CBC9"/>
                  <path d="M15.7069 6.2232C14.6423 5.15532 13.3213 4.37835 11.8706 3.9668C11.4478 4.42257 10.9823 4.8371 10.4805 5.2043C12.2327 5.49415 13.8269 6.39173 14.9834 7.73969C16.1396 9.08769 16.7844 10.7997 16.8043 12.5756L17.0518 26.6006H18.2893V12.4686C18.2931 11.3084 18.067 10.1592 17.6238 9.08717C17.1805 8.01505 16.529 7.04159 15.7069 6.22324L15.7069 6.2232Z" fill="#62CBC9"/>
                  <path d="M9.46443 4.89559C10.4298 4.26449 12.2488 2.76718 12.1746 1.43889V1.39764C12.1724 1.07961 12.0446 0.775399 11.8188 0.551282C11.5932 0.327169 11.2881 0.201392 10.97 0.201392C10.7334 0.20397 10.5028 0.277264 10.308 0.411692C10.1134 0.546308 9.96328 0.735799 9.87691 0.956239C9.82332 1.12879 9.66366 1.24646 9.48301 1.24646C9.30235 1.24646 9.14269 1.12879 9.08911 0.956239C9.00053 0.729915 8.84455 0.536186 8.64254 0.401226C8.44033 0.266242 8.20186 0.196447 7.95878 0.20142C7.63209 0.198474 7.3181 0.327933 7.08847 0.560333C6.87099 0.77892 6.75313 1.07725 6.76252 1.38533C6.76639 1.41259 6.76639 1.4404 6.76252 1.46783C6.76252 1.46783 6.63877 2.83738 9.46437 4.89564L9.46443 4.89559Z" fill="#62CBC9"/>
               </svg>
               <span class="ms-3  d-none d-md-block" >Locations</span>
            </a>
         </li>
         <li class="nav-item ">
            <a class="body-1 nav-link d-flex align-items-center"  href="/total-fee">
               <svg xmlns="http://www.w3.org/2000/svg" width="21" height="25" viewBox="0 0 21 25" fill="none">
                  <path d="M10.0547 14.2129H10.8797V17.1004H10.0547V14.2129Z" fill="#62CBC9"/>
                  <path d="M8.40625 15.4507V15.8632C8.40735 16.1182 8.48709 16.3667 8.63478 16.5746C8.78247 16.7825 8.99075 16.9397 9.23124 17.0248V14.2891C8.99073 14.3741 8.78246 14.5314 8.63478 14.7393C8.48709 14.9472 8.40736 15.1956 8.40625 15.4507V15.4507Z" fill="#62CBC9"/>
                  <path d="M10.0547 17.9258H10.8797V20.8133H10.0547V17.9258Z" fill="#62CBC9"/>
                  <path d="M11.707 20.7358C11.9475 20.6507 12.1558 20.4934 12.3035 20.2855C12.4512 20.0776 12.5309 19.8292 12.532 19.5741V19.1616C12.5309 18.9066 12.4512 18.6582 12.3035 18.4503C12.1558 18.2423 11.9475 18.0851 11.707 18V20.7358Z" fill="#62CBC9"/>
                  <path d="M20.3189 22.2415C19.556 21.4831 19.1284 20.4508 19.1314 19.3751V13.9976C19.1314 10.5279 16.9917 8.03728 13.4888 7.15005C13.6848 6.91287 13.7842 6.6105 13.7669 6.30313C13.7498 5.99597 13.6174 5.70649 13.396 5.4927C14.3934 4.89827 15.0048 3.82356 15.0064 2.66248V1.42498C15.0064 1.09682 14.876 0.781901 14.644 0.549911C14.412 0.317921 14.0971 0.1875 13.7689 0.1875H7.16894C6.84078 0.1875 6.52586 0.317878 6.29387 0.549911C6.06188 0.781943 5.93146 1.09686 5.93146 1.42498V2.66248C5.93294 3.8228 6.54376 4.89714 7.54021 5.4918C7.32623 5.69897 7.19511 5.97704 7.17136 6.2739C7.14742 6.57076 7.2325 6.86611 7.41075 7.1048C3.81536 7.91193 1.80641 10.2525 1.80641 13.8V19.3751C1.80936 20.4509 1.38176 21.4833 0.618839 22.242C0.322726 22.5381 0.15625 22.9398 0.15625 23.3585C0.15625 23.7773 0.322721 24.1791 0.618839 24.4752C0.914957 24.7714 1.3166 24.9377 1.73556 24.9377H19.2025C19.6214 24.9375 20.023 24.7712 20.3192 24.4749C20.6151 24.1788 20.7816 23.7771 20.7816 23.3582C20.7816 22.9394 20.6153 22.5378 20.3192 22.2414L20.3189 22.2415ZM13.3564 19.1626V19.5751C13.3559 20.0504 13.1914 20.511 12.8909 20.8791C12.5903 21.2474 12.1719 21.5006 11.7064 21.5964V22.4626C11.7064 22.6904 11.5217 22.8751 11.2939 22.8751C11.0661 22.8751 10.8814 22.6904 10.8814 22.4626V21.6376H10.0564V22.4626C10.0564 22.6904 9.8717 22.8751 9.64391 22.8751C9.41611 22.8751 9.23141 22.6904 9.23141 22.4626V21.5964C8.76587 21.5006 8.34748 21.2474 8.04694 20.8791C7.74641 20.511 7.58196 20.0504 7.58141 19.5751C7.58141 19.3473 7.76611 19.1626 7.99391 19.1626C8.2217 19.1626 8.40641 19.3473 8.40641 19.5751C8.40751 19.8302 8.48725 20.0786 8.63494 20.2865C8.78263 20.4944 8.99091 20.6517 9.23139 20.7368V17.8839C8.76586 17.7881 8.34746 17.5349 8.04693 17.1666C7.74639 16.7985 7.58194 16.3379 7.58139 15.8626V15.4501C7.58195 14.9748 7.74639 14.5142 8.04693 14.1461C8.34746 13.7778 8.76586 13.5246 9.23139 13.4289V12.5626C9.23139 12.3348 9.4161 12.1501 9.64389 12.1501C9.87169 12.1501 10.0564 12.3348 10.0564 12.5626V13.3876H10.8814V12.5626C10.8814 12.3348 11.0661 12.1501 11.2939 12.1501C11.5217 12.1501 11.7064 12.3348 11.7064 12.5626V13.4289C12.1719 13.5246 12.5903 13.7778 12.8909 14.1461C13.1914 14.5143 13.3558 14.9748 13.3564 15.4501C13.3564 15.6779 13.1717 15.8626 12.9439 15.8626C12.7161 15.8626 12.5314 15.6779 12.5314 15.4501C12.5303 15.1951 12.4506 14.9466 12.3029 14.7387C12.1552 14.5308 11.9469 14.3736 11.7064 14.2885V17.1414C12.1719 17.2371 12.5903 17.4903 12.8909 17.8587C13.1914 18.2268 13.3559 18.6873 13.3564 19.1626ZM8.86713 5.96262H9.67813C9.72104 6.25082 9.81182 6.52961 9.94699 6.78762H9.64388C9.13855 6.78762 8.94263 6.32319 8.86711 5.96262H8.86713ZM12.3878 7.92989C12.413 8.00171 12.4386 8.07353 12.4629 8.14572V8.14553C12.1456 8.082 11.8235 8.04407 11.5001 8.0321C11.4589 7.917 11.4119 7.80154 11.3611 7.67742L12.3342 7.77926C12.3447 7.80044 12.3528 7.82272 12.3581 7.84574L12.3878 7.92989ZM12.7653 9.16409C12.8036 9.31749 12.8382 9.47273 12.8667 9.62816C12.5658 9.52945 12.2592 9.44934 11.9485 9.38802C11.9239 9.2976 11.8973 9.20737 11.8706 9.1175C11.8544 9.03647 11.8299 8.95747 11.7975 8.88142C12.1235 8.89891 12.4441 8.97073 12.7463 9.0943L12.7653 9.16409ZM12.116 10.2725C12.3909 10.3325 12.6591 10.4202 12.9163 10.534C12.8852 10.7311 12.729 10.8848 12.5314 10.9126C12.3079 10.9126 12.1189 10.6482 12.1189 10.3351C12.1189 10.3152 12.1169 10.2939 12.116 10.2725H12.116ZM10.5172 5.96262H11.3306C11.3716 6.25082 11.4619 6.52998 11.5976 6.78762H11.2939C10.7886 6.78762 10.5927 6.32319 10.5172 5.96262H10.5172ZM12.7034 6.74637C12.4047 6.59187 12.204 6.29722 12.1698 5.96262H12.5314C12.722 5.96667 12.885 6.10092 12.9257 6.28728C12.9662 6.47345 12.8738 6.66332 12.7021 6.74637H12.7034ZM8.28269 6.76294C8.11199 6.71064 7.99505 6.55356 7.99394 6.37512C7.99615 6.29722 8.02065 6.22154 8.06484 6.15727C8.11125 6.36757 8.18454 6.57124 8.28269 6.76296V6.76294Z" fill="#62CBC9"/>
               </svg>
               <span class="ms-3  d-none d-md-block">Total fee</span>
            </a>
         </li>
         <li class="nav-item"  >
            <a class="body-1 nav-link d-flex align-items-center"href="/invoices">
               <svg xmlns="http://www.w3.org/2000/svg" width="22" height="27" viewBox="0 0 22 27" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.929688 0.867188H15.8113L21.9653 7.02357V26.2692H0.929688V0.867188ZM11.8065 23.4024C11.4422 23.4024 11.1439 23.1067 11.1439 22.7424C11.1439 22.3782 11.4422 22.0824 11.8065 22.0824H18.4989C18.8659 22.0824 19.1615 22.3782 19.1615 22.7424C19.1615 23.1067 18.8657 23.4024 18.4989 23.4024H11.8065ZM4.3961 8.46285C4.02909 8.46285 3.73351 8.1671 3.73351 7.80025C3.73351 7.436 4.02926 7.14025 4.3961 7.14025H9.11652C9.48077 7.14025 9.77911 7.436 9.77911 7.80025C9.77911 8.16727 9.48079 8.46285 9.11652 8.46285H4.3961ZM4.3961 11.8104C4.02909 11.8104 3.73351 11.512 3.73351 11.1478C3.73351 10.7835 4.02926 10.4878 4.3961 10.4878H18.4989C18.8659 10.4878 19.1615 10.7835 19.1615 11.1478C19.1615 11.512 18.8657 11.8104 18.4989 11.8104H4.3961ZM4.3961 15.1553C4.02909 15.1553 3.73351 14.8595 3.73351 14.4953C3.73351 14.131 4.02926 13.8353 4.3961 13.8353H18.4989C18.8659 13.8353 19.1615 14.131 19.1615 14.4953C19.1615 14.8595 18.8657 15.1553 18.4989 15.1553H4.3961ZM4.3961 18.5028C4.02909 18.5028 3.73351 18.2071 3.73351 17.8428C3.73351 17.4758 4.02926 17.1802 4.3961 17.1802H18.4989C18.8659 17.1802 19.1615 17.476 19.1615 17.8428C19.1615 18.2071 18.8657 18.5028 18.4989 18.5028H4.3961Z" fill="#62CBC9"/>
               </svg>
               <span class="ms-3  d-none d-md-block">Invoices</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="body-1 nav-link d-flex align-items-center"href="/financial-report">
               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                  <path d="M24.8211 15.8492C24.5382 15.4925 24.1259 15.2621 23.674 15.208C23.222 15.1539 22.7669 15.2806 22.4079 15.5605L17.5404 19.4036C17.2975 19.5902 17.0011 19.6938 16.6948 19.6992H13.2092C12.9813 19.6992 12.7627 19.6087 12.6015 19.4475C12.4403 19.2864 12.3498 19.0678 12.3498 18.8398C12.3498 18.6119 12.4403 18.3933 12.6015 18.2322C12.7627 18.071 12.9813 17.9805 13.2092 17.9805H16.1311C16.5869 17.9805 17.0241 17.7994 17.3464 17.4771C17.6687 17.1547 17.8498 16.7176 17.8498 16.2617C17.8498 15.8059 17.6687 15.3687 17.3464 15.0464C17.0241 14.7241 16.5869 14.543 16.1311 14.543H8.98104C8.05858 14.5436 7.16299 14.8535 6.43732 15.423L4.05168 17.293C3.97935 17.3499 3.93233 17.433 3.92076 17.5244C3.90918 17.6157 3.93395 17.7079 3.98978 17.7811L8.63041 23.6455C8.66207 23.6864 8.70275 23.7194 8.74924 23.7421C8.79574 23.7647 8.84682 23.7764 8.89854 23.7761L14.5017 23.8242H16.0417C16.9822 23.837 17.898 23.5236 18.6336 22.9373L24.5254 18.283C24.7055 18.1432 24.8562 17.9692 24.9686 17.7709C25.0811 17.5726 25.1531 17.354 25.1806 17.1277C25.2081 16.9014 25.1904 16.6719 25.1287 16.4525C25.067 16.2331 24.9625 16.028 24.8211 15.8492Z" fill="#62CBC9"/>
                  <path d="M2.64157 18.827C2.58586 18.7551 2.50392 18.7082 2.41372 18.6966C2.32352 18.685 2.2324 18.7096 2.16032 18.7651L1.08094 19.6245C1.04509 19.652 1.01516 19.6864 0.992899 19.7258C0.970642 19.7651 0.956531 19.8085 0.951399 19.8534C0.946268 19.8983 0.950214 19.9438 0.963023 19.9871C0.975831 20.0305 0.997208 20.0708 1.02592 20.1057L5.54969 25.8257C5.6054 25.8976 5.68734 25.9444 5.77754 25.956C5.86774 25.9676 5.95886 25.943 6.03094 25.8876L7.11032 25.0351C7.18265 24.9781 7.22967 24.895 7.24124 24.8037C7.25282 24.7124 7.22801 24.6201 7.17218 24.5469L2.64157 18.827ZM15.8553 0.298832C14.6574 0.298832 13.4864 0.654054 12.4903 1.31959C11.4943 1.98513 10.7179 2.93109 10.2595 4.03784C9.80107 5.14459 9.68113 6.36242 9.91483 7.53734C10.1485 8.71225 10.7254 9.79149 11.5724 10.6386C12.4195 11.4856 13.4987 12.0625 14.6737 12.2962C15.8486 12.5299 17.0664 12.41 18.1732 11.9515C19.2799 11.4931 20.2259 10.7168 20.8914 9.72073C21.557 8.72468 21.9122 7.55364 21.9122 6.35571C21.9131 5.56005 21.7571 4.77203 21.453 4.03677C21.1489 3.3015 20.7028 2.63344 20.1402 2.07083C19.5776 1.50822 18.9095 1.06211 18.1743 0.75804C17.439 0.453974 16.651 0.297927 15.8553 0.298832ZM15.5184 5.19383L16.8934 5.88133C17.2962 6.08719 17.6228 6.41625 17.8256 6.82061C18.0284 7.22497 18.0969 7.68351 18.0209 8.12946C17.968 8.4725 17.8294 8.79663 17.6179 9.07183C17.4063 9.34704 17.1288 9.56442 16.8109 9.70383V9.88945C16.8109 10.1174 16.7204 10.336 16.5593 10.4971C16.3981 10.6583 16.1795 10.7488 15.9516 10.7488C15.7236 10.7488 15.5051 10.6583 15.3439 10.4971C15.1828 10.336 15.0922 10.1174 15.0922 9.88945V9.77945C14.7541 9.67135 14.4427 9.49296 14.1785 9.25598C13.9143 9.019 13.7032 8.72881 13.5591 8.40445C13.476 8.19712 13.477 7.96559 13.5617 7.75893C13.6464 7.55228 13.8082 7.38672 14.0129 7.29734C14.2176 7.20795 14.449 7.20177 14.6582 7.2801C14.8673 7.35843 15.0378 7.51511 15.1334 7.71695C15.2023 7.87658 15.3197 8.01039 15.4691 8.09929C15.6185 8.18818 15.7922 8.22761 15.9653 8.21195C16.053 8.21107 16.1374 8.1786 16.203 8.12051C16.2687 8.06242 16.3112 7.9826 16.3228 7.8957C16.3376 7.80755 16.3243 7.71698 16.2849 7.63678C16.2454 7.55659 16.1817 7.49084 16.1028 7.44883L14.7278 6.76133C14.3185 6.55229 13.9881 6.21617 13.786 5.80338C13.584 5.3906 13.5212 4.92342 13.6072 4.47195C13.6732 4.08138 13.8503 3.71809 14.1173 3.42549C14.3843 3.13289 14.7299 2.92336 15.1128 2.82196V2.6982C15.1128 2.47028 15.2034 2.2517 15.3645 2.09053C15.5257 1.92937 15.7443 1.83883 15.9722 1.83883C16.2001 1.83883 16.4187 1.92937 16.5799 2.09053C16.741 2.2517 16.8316 2.47028 16.8316 2.6982V3.01445C17.3796 3.27351 17.8146 3.72316 18.0553 4.27945C18.1432 4.48848 18.1457 4.72364 18.0621 4.93445C17.9786 5.14526 17.8157 5.3149 17.6085 5.40695C17.5052 5.45234 17.3939 5.47677 17.2811 5.47884C17.1683 5.48091 17.0562 5.46058 16.9513 5.41902C16.8465 5.37745 16.7509 5.31547 16.6702 5.23669C16.5894 5.15791 16.5251 5.0639 16.481 4.96008C16.4104 4.80172 16.2926 4.66911 16.1436 4.58046C15.9947 4.49182 15.8219 4.45151 15.6491 4.46508C15.562 4.4692 15.4791 4.50383 15.415 4.56291C15.3509 4.62199 15.3096 4.70175 15.2984 4.78821C15.2905 4.87004 15.3072 4.95239 15.3464 5.02466C15.3856 5.09693 15.4455 5.15584 15.5184 5.19383Z" fill="#62CBC9"/>
               </svg>
               <span class="ms-3  d-none d-md-block">Financial report</span>
            </a>
         </li>
      </ul>
   </div>
</nav>