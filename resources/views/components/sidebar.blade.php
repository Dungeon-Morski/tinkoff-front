<div class="sidebar">
    <div class="sidebar_items flex flex-col sm:gap-4">

        <a href="{{route('invoice')}}" class="
        sidebar_item flex items-center
        <?php echo (Request::segment(2) == 'invoice') ? 'active' : ''; ?>">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                     fill="none">
                    <path
                        d="M11 2.75C15.0516 2.75 18.3333 4.39083 18.3333 6.41667C18.3333 8.4425 15.0516 10.0833 11 10.0833C6.94829 10.0833 3.66663 8.4425 3.66663 6.41667C3.66663 4.39083 6.94829 2.75 11 2.75ZM3.66663 8.25C3.66663 10.2758 6.94829 11.9167 11 11.9167C15.0516 11.9167 18.3333 10.2758 18.3333 8.25V11.0733L17.4166 11C15.0425 11 13.0166 12.5033 12.2466 14.6117L11 14.6667C6.94829 14.6667 3.66663 13.0258 3.66663 11V8.25ZM3.66663 12.8333C3.66663 14.8592 6.94829 16.5 11 16.5H11.9166C11.9166 17.4625 12.1641 18.37 12.6041 19.1583L11 19.25C6.94829 19.25 3.66663 17.6092 3.66663 15.5833V12.8333ZM16.5 19.3233L13.9791 16.5733L15.0425 15.51L16.5 16.9583L19.7908 13.6767L20.8541 14.9692L16.5 19.3233Z"
                        fill="#2A2A2A"/>
                </svg>
            </div>
            <p>Мой счет</p>
            <p class="mobile">Счет</p>
        </a>

        <a href="{{route('refill-balance')}}" class="
        sidebar_item flex items-center
        <?php echo (Request::segment(2) == 'refill-balance') ? 'active' : ''; ?>
        ">
            <div class="circle">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_106_195)">
                        <path
                            d="M11 2.75C15.0516 2.75 18.3333 4.39083 18.3333 6.41667C18.3333 8.4425 15.0516 10.0833 11 10.0833C6.94829 10.0833 3.66663 8.4425 3.66663 6.41667C3.66663 4.39083 6.94829 2.75 11 2.75ZM3.66663 8.25C3.66663 10.2758 6.94829 11.9167 11 11.9167C15.0516 11.9167 18.3333 10.2758 18.3333 8.25V11.0733L17.4166 11C15.0425 11 13.0166 12.5033 12.2466 14.6117L11 14.6667C6.94829 14.6667 3.66663 13.0258 3.66663 11V8.25ZM3.66663 12.8333C3.66663 14.8592 6.94829 16.5 11 16.5H11.9166C11.9166 17.4625 12.1641 18.37 12.6041 19.1583L11 19.25C6.94829 19.25 3.66663 17.6092 3.66663 15.5833V12.8333Z"
                            fill="#2A2A2A"/>
                        <path
                            d="M16.585 18.691V13.609H18.004V18.691H16.585ZM14.682 16.821V15.479H19.918V16.821H14.682Z"
                            fill="#2A2A2A"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_106_195">
                            <rect width="22" height="22" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>

            </div>
            <p>Пополнить баланс</p>
            <p class="mobile">Пополнить</p>
        </a>

        <a href="{{route('withdraw-balance')}}" class="
        sidebar_item flex items-center
        <?php echo (Request::segment(2) == 'withdraw-balance') ? 'active' : ''; ?>
        ">
            <div class="circle">
                <svg class="output" width="22" height="22" viewBox="0 0 22 22" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 2.75C15.0516 2.75 18.3333 4.39083 18.3333 6.41667C18.3333 8.4425 15.0516 10.0833 11 10.0833C6.94829 10.0833 3.66663 8.4425 3.66663 6.41667C3.66663 4.39083 6.94829 2.75 11 2.75ZM3.66663 8.25C3.66663 10.2758 6.94829 11.9167 11 11.9167C15.0516 11.9167 18.3333 10.2758 18.3333 8.25V11.0733L17.4166 11C15.0425 11 13.0166 12.5033 12.2466 14.6117L11 14.6667C6.94829 14.6667 3.66663 13.0258 3.66663 11V8.25ZM3.66663 12.8333C3.66663 14.8592 6.94829 16.5 11 16.5H11.9166C11.9166 17.4625 12.1641 18.37 12.6041 19.1583L11 19.25C6.94829 19.25 3.66663 17.6092 3.66663 15.5833V12.8333Z"
                        fill="#2A2A2A"/>
                    <path class="arrow" d="M17 18.3334L19 16.3334M17 18.3334L15 16.3334M17 18.3334V13.6667"
                          stroke="#2A2A2A" stroke-width="1.2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <p>Вывод средств</p>
            <p class="mobile">Вывод</p>
        </a>

        <a href="{{route('quotes')}}" class="
        sidebar_item flex items-center
        <?php echo (Request::segment(2) == 'quotes') ? 'active' : ''; ?>
        ">
            <div class="circle">
                <svg class="quotes" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                     fill="none">
                    <path class="line"
                          d="M2.75 2.75V17.4167C2.75 17.9029 2.94315 18.3692 3.28697 18.713C3.63079 19.0568 4.0971 19.25 4.58333 19.25H19.25"
                          stroke="#2A2A2A" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round"
                          stroke-linejoin="round"/>

                    <path class="line" d="M6.41663 12.8334L10.0833 9.16671L13.75 12.8334L19.25 7.33337" stroke="#2A2A2A"
                          stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path class="line" d="M16.5 7.33337H19.25V10.0834" stroke="#2A2A2A" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <p>Котировки</p>
            <p class="mobile">Котировки</p>
        </a>

        <a href="{{route('settings')}}" class="
        sidebar_item flex items-center
        <?php echo (Request::segment(2) == 'settings') ? 'active' : ''; ?>
        ">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                     fill="none">
                    <path
                        d="M3.11717 8.46033C3.47807 7.3527 4.06999 6.3343 4.85379 5.47246C4.91869 5.40129 5.00319 5.35092 5.09665 5.32768C5.19012 5.30443 5.28837 5.30936 5.37904 5.34183L7.24904 6.00733C7.38187 6.05442 7.52333 6.07219 7.66368 6.05942C7.80403 6.04665 7.93996 6.00365 8.06211 5.93336C8.18427 5.86307 8.28976 5.76717 8.37133 5.65224C8.4529 5.53731 8.50862 5.40609 8.53466 5.26758L8.89217 3.32058C8.9096 3.22595 8.9547 3.13861 9.02176 3.06959C9.08881 3.00058 9.17482 2.95299 9.26892 2.93283C10.4112 2.69052 11.5916 2.69052 12.7339 2.93283C12.9264 2.97408 13.0749 3.12671 13.1107 3.32058L13.4682 5.26758C13.4938 5.40632 13.5492 5.53783 13.6307 5.65301C13.7122 5.76819 13.8177 5.86429 13.94 5.93465C14.0623 6.00501 14.1984 6.04795 14.3389 6.0605C14.4794 6.07305 14.621 6.05491 14.7538 6.00733L16.6238 5.34183C16.7145 5.30936 16.8127 5.30443 16.9062 5.32768C16.9996 5.35092 17.0841 5.40129 17.149 5.47246C17.9322 6.33452 18.5236 7.35289 18.8843 8.46033C18.914 8.55191 18.9158 8.65028 18.8894 8.74287C18.8629 8.83546 18.8094 8.91805 18.7358 8.98008L17.2205 10.2602C17.1127 10.3509 17.0259 10.4642 16.9664 10.592C16.9069 10.7197 16.8761 10.859 16.8761 11C16.8761 11.1409 16.9069 11.2802 16.9664 11.408C17.0259 11.5357 17.1127 11.649 17.2205 11.7397L18.7358 13.0198C18.887 13.1477 18.9448 13.3526 18.8843 13.5396C18.5238 14.6471 17.9324 15.6655 17.149 16.5275C17.0841 16.5986 16.9996 16.649 16.9062 16.6722C16.8127 16.6955 16.7145 16.6906 16.6238 16.6581L14.7538 15.9926C14.621 15.9455 14.4795 15.9277 14.3391 15.9405C14.1988 15.9533 14.0629 15.9963 13.9407 16.0666C13.8186 16.1368 13.7131 16.2327 13.6315 16.3477C13.5499 16.4626 13.4942 16.5938 13.4682 16.7323L13.1107 18.6793C13.0933 18.7742 13.0481 18.8618 12.9807 18.9308C12.9134 18.9999 12.827 19.0473 12.7325 19.0671C11.5907 19.3094 10.4107 19.3094 9.26892 19.0671C9.17457 19.0472 9.08826 18.9997 9.02094 18.9307C8.95362 18.8616 8.90832 18.7741 8.89079 18.6793L8.53466 16.7323C8.50905 16.5936 8.4536 16.4621 8.37213 16.3469C8.29066 16.2317 8.18514 16.1356 8.06286 16.0653C7.94057 15.9949 7.80446 15.952 7.66394 15.9394C7.52342 15.9269 7.38185 15.945 7.24904 15.9926L5.37904 16.6581C5.28837 16.6906 5.19012 16.6955 5.09665 16.6722C5.00319 16.649 4.91869 16.5986 4.85379 16.5275C4.07049 15.6655 3.47904 14.6471 3.11854 13.5396C3.08878 13.448 3.08702 13.3496 3.11347 13.257C3.13992 13.1645 3.19339 13.0819 3.26704 13.0198L4.78229 11.7397C4.88995 11.6488 4.97649 11.5356 5.03584 11.4078C5.0952 11.28 5.12596 11.1408 5.12596 11C5.12596 10.8591 5.0952 10.7199 5.03584 10.5921C4.97649 10.4643 4.88995 10.3511 4.78229 10.2602L3.26704 8.98008C3.19339 8.91805 3.13992 8.83546 3.11347 8.74287C3.08702 8.65028 3.08741 8.55191 3.11717 8.46033ZM8.59379 11C8.59379 11.6381 8.84731 12.2502 9.29856 12.7014C9.74982 13.1527 10.3619 13.4062 11 13.4062C11.6382 13.4062 12.2503 13.1527 12.7015 12.7014C13.1528 12.2502 13.4063 11.6381 13.4063 11C13.4063 10.3618 13.1528 9.74974 12.7015 9.29848C12.2503 8.84722 11.6382 8.59371 11 8.59371C10.3619 8.59371 9.74982 8.84722 9.29856 9.29848C8.84731 9.74974 8.59379 10.3618 8.59379 11Z"
                        fill="#2A2A2A"/>
                </svg>
            </div>
            <p>Настройки</p>
            <p class="mobile">Настройки</p>
        </a>

        <a href="{{route('support')}}" class="
        sidebar_item flex items-center
        <?php echo (Request::segment(2) == 'support') ? 'active' : ''; ?>
        ">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                     fill="none">
                    <path
                        d="M17.9502 16.9767C19.3831 15.3155 20.1699 13.1939 20.1667 11.0001C20.1699 8.80623 19.3831 6.68461 17.9502 5.02339L14.0333 8.93939C14.4472 9.54679 14.668 10.265 14.6667 11.0001C14.6667 11.7646 14.433 12.4731 14.0333 13.0607L17.9502 16.9767ZM16.9767 17.9502C15.3155 19.3831 13.1939 20.1699 11.0001 20.1667C8.80623 20.1699 6.68461 19.3831 5.02339 17.9502L8.93939 14.0333C9.54679 14.4472 10.265 14.668 11.0001 14.6667C11.7646 14.6667 12.4731 14.433 13.0607 14.0333L16.9767 17.9502ZM4.04989 16.9767L7.9668 13.0607C7.55296 12.4533 7.33218 11.7351 7.33339 11.0001C7.33339 10.2356 7.56714 9.52697 7.9668 8.93939L4.04989 5.02247C2.61678 6.68393 1.82995 8.80592 1.83339 11.0001C1.83017 13.1939 2.61699 15.3155 4.04989 16.9767ZM11.0001 7.33339C10.2356 7.33339 9.52697 7.56714 8.93939 7.9668L5.02247 4.04989C6.68393 2.61678 8.80592 1.82995 11.0001 1.83339C13.1939 1.83017 15.3155 2.61699 16.9767 4.04989L13.0607 7.9668C12.4533 7.55296 11.7351 7.33218 11.0001 7.33339Z"
                        fill="#2A2A2A"/>
                </svg>
            </div>
            <p>Поддержка</p>
            <p class="mobile">Поддержка</p>
        </a>

        <a href="{{route('register')}}" class="
        sidebar_item flex  items-center

        ">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                     fill="none">
                    <path
                        d="M14.4375 16.1562V11.6875H8.20703C8.02469 11.6875 7.84983 11.6151 7.7209 11.4861C7.59196 11.3572 7.51953 11.1823 7.51953 11C7.51953 10.8177 7.59196 10.6428 7.7209 10.5139C7.84983 10.3849 8.02469 10.3125 8.20703 10.3125H14.4375V5.84375C14.4368 5.20578 14.1831 4.59414 13.732 4.14303C13.2809 3.69192 12.6692 3.43818 12.0312 3.4375H3.78125C3.14328 3.43818 2.53164 3.69192 2.08053 4.14303C1.62942 4.59414 1.37568 5.20578 1.375 5.84375V16.1562C1.37568 16.7942 1.62942 17.4059 2.08053 17.857C2.53164 18.3081 3.14328 18.5618 3.78125 18.5625H12.0312C12.6692 18.5618 13.2809 18.3081 13.732 17.857C14.1831 17.4059 14.4368 16.7942 14.4375 16.1562ZM18.2776 11.6875L16.014 13.9515C15.8905 14.0815 15.8227 14.2546 15.825 14.4339C15.8273 14.6131 15.8995 14.7844 16.0263 14.9112C16.1531 15.038 16.3244 15.1102 16.5036 15.1125C16.6829 15.1148 16.856 15.047 16.986 14.9235L20.4235 11.486C20.5523 11.3571 20.6247 11.1823 20.6247 11C20.6247 10.8177 20.5523 10.6429 20.4235 10.514L16.986 7.07652C16.856 6.95303 16.6829 6.88521 16.5036 6.8875C16.3244 6.8898 16.1531 6.96203 16.0263 7.08881C15.8995 7.21559 15.8273 7.38687 15.825 7.56614C15.8227 7.74542 15.8905 7.9185 16.014 8.04848L18.2776 10.3125H14.4375V11.6875H18.2776Z"
                        fill="#2A2A2A"/>
                </svg>
            </div>
            <p>Выйти из аккаунта</p>
            <p class="mobile">Выйти</p>

        </a>


        <a href="{{route('support')}}" class="
        sidebar_item flex md:hidden items-center more
        <?php echo (Request::segment(2) == 'support') ? 'active' : ''; ?>
        ">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 18 18" fill="none">
                    <path d="M3.75 7.5C2.925 7.5 2.25 8.175 2.25 9C2.25 9.825 2.925 10.5 3.75 10.5C4.575 10.5 5.25 9.825 5.25 9C5.25 8.175 4.575 7.5 3.75 7.5ZM14.25 7.5C13.425 7.5 12.75 8.175 12.75 9C12.75 9.825 13.425 10.5 14.25 10.5C15.075 10.5 15.75 9.825 15.75 9C15.75 8.175 15.075 7.5 14.25 7.5ZM9 7.5C8.175 7.5 7.5 8.175 7.5 9C7.5 9.825 8.175 10.5 9 10.5C9.825 10.5 10.5 9.825 10.5 9C10.5 8.175 9.825 7.5 9 7.5Z" fill="#2A2A2A"/>
                </svg>
            </div>
            <p>Еще</p>
            <p class="mobile">Еще</p>
        </a>

    </div>
</div>



