<nav id="sidebarMenu" class="sticky-top top-0 px-1">
    <div class="pt-5 pb-100">
        <div class="d-flex justify-content-center mb-4">
            <img src="/images/user/sidebar-main-logo.svg" alt="Logo" class="img-fluid d-none d-md-block">
            <img src="/images/icons/mobile-logo.svg" alt="Mobile Logo" class="img-fluid d-md-none">
        </div>

        <ul class="nav flex-column" id="sidebar">
            <li class="nav-item">
            
                <a class="body-1 nav-link d-flex align-items-center font-weight-600  {{ Request::segment(2) == 'overview' ? 'active' : '' }}"
                    aria-current="page" href="{{url('user/overview')}}">
                    <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.5498 6.72564L12.5834 0.627239C12.4513 0.495202 12.293 0.416016 12.1083 0.416016H3.39626C1.73301 0.416016 0.360352 1.78886 0.360352 3.45192V21.4567C0.360352 23.12 1.7332 24.4926 3.39626 24.4926H15.6987C17.3619 24.4926 18.7346 23.1198 18.7346 21.4567V7.17432C18.7346 7.01595 18.6819 6.85758 18.5499 6.72555L18.5498 6.72564ZM8.01616 19.7936C8.01616 20.1632 7.72575 20.4536 7.35616 20.4536H4.53146C4.16187 20.4536 3.87146 20.1632 3.87146 19.7936V16.9953C3.87146 16.6257 4.16187 16.3353 4.53146 16.3353H7.35635C7.72594 16.3353 8.01635 16.6257 8.01635 16.9953L8.01616 19.7936ZM8.01616 13.7216C8.01616 14.0912 7.72575 14.3816 7.35616 14.3816H4.53146C4.16187 14.3816 3.87146 14.0912 3.87146 13.7216V10.9233C3.87146 10.5537 4.16187 10.2633 4.53146 10.2633H7.35635C7.72594 10.2633 8.01635 10.5537 8.01635 10.9233L8.01616 13.7216ZM15.0914 19.0544H9.99616C9.62657 19.0544 9.33616 18.764 9.33616 18.3944C9.33616 18.0249 9.62657 17.7344 9.99616 17.7344H15.0914C15.461 17.7344 15.7514 18.0249 15.7514 18.3944C15.7514 18.764 15.461 19.0544 15.0914 19.0544ZM15.0914 12.9824H9.99616C9.62657 12.9824 9.33616 12.692 9.33616 12.3224C9.33616 11.9529 9.62657 11.6624 9.99616 11.6624H15.0914C15.461 11.6624 15.7514 11.9529 15.7514 12.3224C15.7514 12.692 15.461 12.9824 15.0914 12.9824ZM13.3753 6.77844C13.0057 6.77844 12.7153 6.48803 12.7153 6.11844V2.6599L16.7545 6.77825L13.3753 6.77844Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="body-1 nav-link d-flex align-items-center font-weight-600 {{ request()->is('user/NoIM') ? 'active' : '' }}"
                    href="{{url('user/NoIM')}}">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.7912 22.7813C22.795 22.9285 22.7361 23.0704 22.6293 23.1713C22.5223 23.2722 22.3773 23.3228 22.2309 23.3101V23.3209C21.919 23.2566 0.830668 23.4332 0.50257 23.2778C-0.0252303 23.0836 0.222438 22.0906 0.168575 21.648H0.168816C0.17122 19.23 1.13113 16.9118 2.83761 15.202C4.54415 13.4923 6.85801 12.5306 9.27153 12.5282H13.6882C16.2965 12.5545 18.7722 13.6826 20.5057 15.6352C22.2391 17.5877 23.0692 20.1828 22.791 22.7812L22.7912 22.7813ZM11.4801 11.3281C18.5185 11.104 18.516 0.878888 11.4799 0.65625C4.44207 0.880053 4.4433 11.1054 11.4801 11.3281Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Set up NoIM & <br>other documents</span>
                </a>
            </li>
            <li class="nav-item">
                {{ request()->is() }}
                <a class="body-1 nav-link d-flex align-items-center font-weight-600 {{ request()->is('user/documents') ? 'active' : '' }}"
                    href="{{url('user/documents')}}">
                    <svg width="24" height="27" viewBox="0 0 24 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.69019 6.48087C9.90141 6.34883 10.139 6.21679 10.3765 6.11128L8.92449 4.65923C8.47572 4.21045 8.18529 3.62963 8.10614 3.04883H5.28124C2.8788 3.04883 0.925339 5.00248 0.925339 7.40474V25.2775C0.925339 25.6208 1.1629 25.9639 1.50614 26.0167C1.95492 26.0959 2.32449 25.7527 2.32449 25.3304V13.9784C2.32449 12.2625 3.19569 10.6784 4.62124 9.75429L9.69019 6.48087Z"
                            fill="#62CBC9" />
                        <path
                            d="M19.5902 3.04712H16.7653C16.6861 3.65427 16.422 4.18223 15.9732 4.63121L14.4949 6.10957C14.7324 6.21509 14.97 6.34713 15.1812 6.47916L20.2237 9.75281C21.6492 10.6769 22.5204 12.2873 22.5204 13.9769V25.2497C22.5204 25.593 22.758 25.9361 23.1012 25.9889C23.55 26.0681 23.9196 25.7248 23.9196 25.3026L23.9197 7.37648C23.9461 4.97422 21.9924 3.04688 19.5901 3.04688L19.5902 3.04712Z"
                            fill="#62CBC9" />
                        <path
                            d="M12.2774 6.45368C12.3566 6.53286 12.515 6.53286 12.5941 6.45368L15.2078 3.84003C15.947 3.10083 15.8678 1.83368 14.9437 1.22638C14.2837 0.777605 13.3596 0.909638 12.8054 1.49046L12.4358 1.83371L12.0398 1.43779C11.3006 0.698589 10.0335 0.777789 9.42619 1.70187C8.97741 2.36187 9.10945 3.28596 9.69027 3.84022L12.2774 6.45368Z"
                            fill="#62CBC9" />
                        <path
                            d="M10.0334 12.0763C10.0334 13.0094 9.27688 13.7659 8.34378 13.7659C7.41068 13.7659 6.65417 13.0094 6.65417 12.0763C6.65417 11.143 7.41068 10.3867 8.34378 10.3867C9.27688 10.3867 10.0334 11.143 10.0334 12.0763Z"
                            fill="#62CBC9" />
                        <path
                            d="M17.7158 18.3342L18.0325 16.1166C18.1909 15.1134 17.3989 14.1895 16.3693 14.1895H15.4717C14.4421 14.1895 13.6766 15.087 13.8085 16.1166L14.1252 18.3342C12.8054 19.575 11.8022 22.1621 11.6438 25.2246C11.6174 25.647 11.9605 25.9901 12.3566 25.9901H19.4846C19.9071 25.9901 20.2238 25.6468 20.1975 25.2246C20.0391 22.1621 19.0622 19.575 17.7158 18.3342H17.7158Z"
                            fill="#62CBC9" />
                        <path
                            d="M17.6102 12.0763C17.6102 13.0094 16.8537 13.7659 15.9206 13.7659C14.9873 13.7659 14.2308 13.0094 14.2308 12.0763C14.2308 11.143 14.9873 10.3867 15.9206 10.3867C16.8537 10.3867 17.6102 11.143 17.6102 12.0763Z"
                            fill="#62CBC9" />
                        <path
                            d="M13.2542 18.0435L13.0958 16.9084C12.7262 16.7764 12.2246 16.5388 11.9342 16.1692C11.8286 16.0372 11.7229 15.9051 11.6437 15.7733C11.1158 15.0604 10.6141 14.5061 9.5317 14.2949L8.44925 16.9349C8.42292 16.9878 8.34373 16.9878 8.31721 16.9349L7.26131 14.3213C6.62766 14.4796 6.07336 14.8229 5.62456 15.298C4.33091 16.6972 4.48945 18.9148 4.51576 18.9939C4.54209 19.3899 4.88535 19.6803 5.25496 19.6803H5.30781C5.73025 19.654 6.02066 19.2844 5.99416 18.8619C5.99416 18.8356 5.88864 17.4099 6.57496 16.486L6.54863 19.5219L6.07352 25.1187C6.04719 25.5675 6.39027 25.9899 6.83903 26.0163C7.31413 26.0691 7.71023 25.6995 7.73658 25.2508L8.18536 19.8652H8.5021L8.95087 25.2508C8.97721 25.6996 9.3468 26.0163 9.79577 26.0163H9.87495C10.3237 25.9899 10.667 25.5675 10.6405 25.1187L10.1654 19.5219L10.139 16.3011C10.2182 16.4067 10.2974 16.5124 10.4031 16.6444C10.5086 16.8028 10.6143 16.9348 10.7464 17.0932C11.4327 17.9381 12.4623 18.2811 12.9375 18.4132C13.0429 18.2811 13.1486 18.1491 13.2541 18.0436L13.2542 18.0435Z"
                            fill="#62CBC9" />
                        <path
                            d="M9.00379 14.6381V14.0573C9.00379 14.0045 8.95093 13.9781 8.89827 14.0045L8.50234 14.1894C8.44949 14.1365 8.39682 14.1102 8.31745 14.1102C8.23827 14.1102 8.18542 14.1365 8.13256 14.1894L7.73664 14.0045C7.68379 13.9781 7.63112 14.0308 7.63112 14.0573V14.6381C7.63112 14.691 7.68397 14.7173 7.73664 14.691L8.13256 14.5061C8.18542 14.5589 8.23808 14.5853 8.31745 14.5853C8.39664 14.5853 8.44949 14.5589 8.50234 14.5061L8.89827 14.691C8.95093 14.7438 9.00379 14.691 9.00379 14.6381Z"
                            fill="#62CBC9" />
                        <path
                            d="M8.55499 15.1135C8.55499 15.3951 8.13254 15.3951 8.13254 15.1135C8.13254 14.8319 8.55499 14.8319 8.55499 15.1135Z"
                            fill="#62CBC9" />
                        <path
                            d="M8.55499 15.7465C8.55499 16.028 8.13254 16.028 8.13254 15.7465C8.13254 15.4647 8.55499 15.4647 8.55499 15.7465Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Documents</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="body-1 nav-link d-flex align-items-center {{ Request::segment(1) == 'all-invoices' || Request::segment(1) == 'invoices' ? 'active' : '' }} font-weight-600" href="{{url('user/invoices')}}" >

                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.981 17.5074C21.321 17.7449 20.2385 18.0353 19.0506 18.2994C18.6281 18.9858 17.8626 19.5666 16.6481 19.8043C16.3577 19.8572 16.041 19.8835 15.6977 19.8835C14.8528 19.9098 13.8761 19.8306 12.7673 19.7251C12.6881 19.7251 12.609 19.7251 12.5298 19.6988C12.2657 19.6725 12.0281 19.4612 12.0018 19.1971C11.9755 18.8539 12.2659 18.59 12.5826 18.6163C12.6618 18.6163 12.7675 18.6427 12.8467 18.6427C14.2722 18.7747 15.5922 18.8802 16.4371 18.7219C17.9946 18.4315 18.4434 17.4811 18.3379 16.689C18.2587 16.029 17.7834 15.4219 16.9915 15.4745C15.8827 15.5537 14.5891 15.4745 13.3483 15.369C11.9228 15.2635 10.4442 15.237 9.3883 15.3427C8.22665 15.4747 5.85075 16.3459 3.7651 17.7451C2.7355 18.4315 1.60021 19.2763 0.9139 19.778C0.570643 20.042 0.491458 20.5172 0.755528 20.8604L3.79143 24.7941C4.05551 25.1373 4.53063 25.19 4.87388 24.9261L5.98268 24.0549C6.24675 23.8437 6.58983 23.7908 6.90677 23.8965C8.93962 24.5565 11.1309 24.979 12.5564 25.0582C15.698 25.269 21.6908 21.5729 23.4068 20.3849C25.1227 19.197 23.8819 16.821 21.9811 17.5074L21.981 17.5074Z"
                            fill="#62CBC9" />
                        <path
                            d="M14.2458 13.3886C17.9154 13.3886 20.8986 10.4054 20.8986 6.73584C20.8986 3.06624 17.9153 0.0566406 14.2458 0.0566406C10.5762 0.0566406 7.56659 3.03989 7.56659 6.70944C7.56659 10.379 10.5496 13.3886 14.2458 13.3886ZM13.665 3.40944V2.56455C13.665 2.48536 13.7442 2.40617 13.8234 2.40617H14.6417C14.7209 2.40617 14.8001 2.48536 14.8001 2.56455V3.3829C15.645 3.43575 16.305 4.06925 16.3842 4.9141C16.3842 5.01962 16.305 5.09899 16.2258 5.09899H15.4075C15.3283 5.09899 15.2754 5.04614 15.2491 4.96695C15.1962 4.70288 14.9587 4.51817 14.6946 4.51817H13.9817C13.5593 4.51817 13.1634 4.83492 13.1105 5.25737C13.0577 5.73248 13.4538 6.15493 13.9289 6.15493H14.5362C15.6713 6.15493 16.5954 7.13168 16.4899 8.29328C16.4107 9.19083 15.6715 9.87737 14.8003 10.0092V10.8541C14.8003 10.9333 14.7211 11.0125 14.6419 11.0125H13.8236C13.7444 11.0125 13.6652 10.9333 13.6652 10.8541V10.0357C12.8203 9.98287 12.1603 9.34937 12.0811 8.50453C12.0811 8.39901 12.1603 8.34615 12.2395 8.34615H13.0578C13.137 8.34615 13.1899 8.39901 13.2162 8.47819C13.269 8.74227 13.5066 8.92697 13.7707 8.92697H14.4835C14.906 8.92697 15.3019 8.61023 15.3547 8.18777C15.4076 7.71266 15.0115 7.29022 14.5364 7.29022H14.0084C12.9788 7.29022 12.0813 6.55102 11.9756 5.52142C11.8697 4.46532 12.6354 3.54142 13.665 3.40937V3.40944Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Invoices</span>
                </a>
            </li>
            {{--<li class="nav-item">
            
                <a class="body-1 nav-link d-flex align-items-center font-weight-600 {{ Request::segment(2) == 'package' || Request::segment(2) == 'add-ons' ? 'active' : '' }}" href="{{url('user/add-ons')}}" >
                    <svg width="18" height="25" viewBox="0 0 18 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5308 9.68945L11.5197 11.0859C13.8851 11.8672 15.5959 14.0955 15.5959 16.7194C15.5959 19.9877 12.9347 22.6514 9.66624 22.6514C6.39259 22.6514 3.73142 19.9877 3.73142 16.7194C3.73142 14.0953 5.44478 11.8699 7.80763 11.0859L6.79387 9.68945C4.0246 10.8246 2.06827 13.5465 2.06827 16.7199C2.06827 20.9069 5.47377 24.315 9.66629 24.315C13.8508 24.315 17.2586 20.9067 17.2586 16.7199C17.2561 13.5466 15.3024 10.8218 12.5302 9.68945H12.5308Z"
                            fill="#62CBC9" />
                        <path
                            d="M6.34286 7.53342L7.48056 9.10422L8.46004 10.4506L8.96169 11.145L9.66388 11.0975L10.3635 11.145L10.8651 10.4506L11.8446 9.10422L12.9825 7.53342L11.9159 6.21875H7.40678L6.34286 7.53342Z"
                            fill="#62CBC9" />
                        <path
                            d="M4.55567 8.91619C4.55567 9.01379 4.63744 9.09574 4.73522 9.09574C4.83558 9.09574 4.91477 9.01398 4.91477 8.91619C4.91477 6.64047 6.76272 4.78992 9.04103 4.78992C9.14139 4.78992 9.22058 4.71073 9.22058 4.61037C9.22058 4.51001 9.14139 4.43082 9.04103 4.43082C6.76531 4.43082 4.91477 2.58009 4.91477 0.304548C4.91477 0.204186 4.833 0.125 4.73522 0.125C4.63762 0.125 4.55567 0.204186 4.55567 0.304548C4.55567 2.58028 2.70494 4.43082 0.42941 4.43082C0.331811 4.43082 0.249863 4.51001 0.249863 4.61037C0.249863 4.71073 0.331627 4.78992 0.42941 4.78992C2.70513 4.78992 4.55567 6.64066 4.55567 8.91619Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Add-ons</span>
                </a>
            </li>--}}
            <!-- <li class="nav-item">
                <a class="body-1 nav-link d-flex align-items-center font-weight-600" href="/user/activity-history">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.9236 0.945314H3.68754C2.95977 0.944456 2.2615 1.23247 1.74679 1.74626C1.23207 2.26004 0.943345 2.95712 0.944446 3.68362V10.5602C0.946166 11.1636 1.18416 11.7427 1.60727 12.1736C2.03037 12.6048 2.60549 12.8538 3.20981 12.8677L4.88957 12.8984V16.36C4.89129 16.9714 5.13552 17.5573 5.56873 17.9896C6.00173 18.422 6.58864 18.6656 7.20116 18.6675H16.3551C16.9676 18.6656 17.5545 18.422 17.9877 17.9896C18.4207 17.5573 18.665 16.9714 18.6667 16.36V3.68376C18.6677 2.95727 18.379 2.26022 17.8643 1.7464C17.3496 1.23258 16.6513 0.944577 15.9236 0.945457V0.945314ZM4.88957 11.3601L3.24057 11.3294V11.3292C2.82091 11.3213 2.4849 10.9792 2.48551 10.56V3.68349C2.48551 3.25489 2.71469 2.8587 3.08663 2.64431C3.45835 2.43013 3.91671 2.43013 4.28866 2.64431C4.66038 2.85871 4.88957 3.25488 4.88957 3.68349V11.3601ZM14.5058 11.714L9.01961 11.7138C8.59457 11.7127 8.25035 11.3689 8.24908 10.9446C8.25575 10.5227 8.59694 10.1821 9.01961 10.1754H14.5058C14.9287 10.1821 15.2697 10.5227 15.2763 10.9446C15.2753 11.3689 14.9308 11.7127 14.5058 11.7138V11.714ZM14.5058 8.63727L9.01961 8.63705C8.59457 8.63598 8.25035 8.29217 8.24908 7.86787C8.25575 7.44593 8.59694 7.10533 9.01961 7.09868H14.5058C14.9287 7.10533 15.2697 7.44593 15.2763 7.86787C15.2753 8.29217 14.9308 8.63595 14.5058 8.63705V8.63727ZM14.5058 5.56052L10.5607 5.5603C10.1356 5.55923 9.79141 5.21542 9.79014 4.79111C9.79681 4.36918 10.138 4.02857 10.5607 4.02193H14.5058C14.9287 4.02858 15.2697 4.36918 15.2763 4.79111C15.2753 5.21542 14.9308 5.5592 14.5058 5.5603V5.56052Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Activity history</span>
                </a>
            </li> -->
            {{--<li class="nav-item">
                <a class="body-1 nav-link d-flex align-items-center font-weight-600 {{ Request::segment(2) == 'list-to-do' ? 'active' : '' }}" href="/user/list-to-do">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.68431 12.8315L1.99425 10.1387L0.500061 11.6328L4.68436 15.8173L10.5899 9.91411L9.09829 8.41992L4.68431 12.8315Z"
                            fill="#62CBC9" />
                        <path d="M11.9915 11.0625H22.7391V13.1746H11.9915V11.0625Z" fill="#62CBC9" />
                        <path
                            d="M4.68431 20.7512L1.99425 18.0584L0.500061 19.5526L4.68436 23.7371L10.5899 17.8315L9.09829 16.3398L4.68431 20.7512Z"
                            fill="#62CBC9" />
                        <path d="M11.9915 18.9824H22.7391V21.0944H11.9915V18.9824Z" fill="#62CBC9" />
                        <path
                            d="M4.68431 4.91139L1.99425 2.21854L0.500061 3.71274L4.68436 7.89723L10.5899 1.99165L9.09829 0.5L4.68431 4.91139Z"
                            fill="#62CBC9" />
                        <path d="M11.9915 3.14258H22.7391V5.25462H11.9915V3.14258Z" fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">List to-do</span>
                </a>
            </li>--}}
            {{--<li class="nav-item">
                <a class="body-1 nav-link d-flex align-items-center font-weight-600" href="/user/notes">
                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.547 6.04399V0.5H0.874954V22.148H19.355V6.04399H13.547ZM16.7149 19.772H3.25091V18.452H16.7149V19.772ZM16.7149 14.756H3.25091V13.436H16.7149V14.756ZM16.7149 9.73999H3.25091V8.41999H16.7149V9.73999Z"
                            fill="#62CBC9" />
                    </svg>
                    <span class="ms-3 d-none d-md-block">Notes</span>
                </a>
            </li>--}}
        </ul>
    </div>
</nav>
