@extends('layouts.auth')
@section('content')
    <div class="auth_container flex justify-center items-center">
        <div class="auth_card">
            <h1>Создать профиль</h1>
            <form action="{{route('registerPost')}}" method="POST" class="register_form">
                @csrf
                <div class="fields_wrapper flex flex-col gap-[25px]">
                    <div class="name">
                        <input type="text"  name="name" placeholder="Ваше имя">
                    </div>
                    @error('name')
                    <span class="error-text">{{$message}}</span>
                    @enderror


                    <div class="surname">
                        <input type="text" name="surname" placeholder="Ваша фамилия">

                    </div>
                    @error('surname')
                    <span class="error-text">{{$message}}</span>
                    @enderror

                    <div class="login">
                        <input type="text" name="login" placeholder="Придумайте логин">

                    </div>
                    @error('login')
                    <span class="error-text">{{$message}}</span>
                    @enderror


                    <div class="phone_number">
                        <input type="tel" name="phone" placeholder="Номер телефона" >
                    </div>
                    @error('phone')
                    <span class="error-text">{{$message}}</span>
                    @enderror
                    <div class="password">
                        <input class="password_field" name="password" type="password" placeholder="Придумайте пароль">
                        <a class="password_eye" href="#">
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" width="20" height="10"
                                 viewBox="0 0 20 10" fill="none">
                                <path
                                    d="M19.4875 6.35625C19.5597 6.48608 19.5786 6.63891 19.5401 6.78239C19.5016 6.92587 19.4088 7.04874 19.2813 7.125C19.1965 7.176 19.099 7.202 19 7.2C18.9012 7.20006 18.8042 7.1741 18.7186 7.12473C18.633 7.07535 18.5619 7.00431 18.5125 6.91875L16.6844 3.75937C15.5965 4.51702 14.3845 5.0786 13.1032 5.41875L13.675 8.68125C13.6995 8.82789 13.6649 8.97825 13.5788 9.09947C13.4927 9.22068 13.3622 9.30289 13.2157 9.32812H13.1219C12.9887 9.32968 12.8595 9.28312 12.7578 9.19701C12.6562 9.1109 12.5891 8.99101 12.5688 8.85937L11.9969 5.64375C11.337 5.75417 10.6691 5.81061 10 5.8125C9.32808 5.81368 8.65713 5.76038 7.99379 5.65312L7.42191 8.86875C7.3998 8.99956 7.33216 9.11835 7.23095 9.20413C7.12973 9.2899 7.00146 9.33714 6.86879 9.3375H6.77504C6.62852 9.31227 6.49796 9.23006 6.41188 9.10884C6.3258 8.98763 6.2912 8.83727 6.31566 8.69062L6.88754 5.42812C5.60837 5.08197 4.39736 4.52085 3.30629 3.76875L1.47816 6.9375C1.42876 7.02306 1.3577 7.0941 1.27212 7.14348C1.18654 7.19285 1.08946 7.21881 0.990661 7.21875C0.892176 7.21721 0.795584 7.19145 0.709411 7.14375C0.645361 7.10684 0.589213 7.05767 0.544178 6.99906C0.499143 6.94044 0.466103 6.87352 0.446948 6.80212C0.427793 6.73072 0.422898 6.65625 0.432544 6.58296C0.442189 6.50968 0.466186 6.439 0.503161 6.375L2.40629 3.06562C1.73224 2.49755 1.11382 1.86657 0.559411 1.18125C0.466171 1.06438 0.423173 0.91527 0.439875 0.766706C0.456578 0.618142 0.531613 0.482299 0.648474 0.389059C0.765335 0.295818 0.914449 0.25282 1.06301 0.269522C1.21158 0.286225 1.34742 0.36126 1.44066 0.478121C2.03345 1.2191 2.7098 1.88916 3.45629 2.475L3.49379 2.49375C5.35331 3.93738 7.64602 4.71043 10 4.6875C12.354 4.71043 14.6468 3.93738 16.5063 2.49375L16.5344 2.475C17.2859 1.89166 17.9656 1.22137 18.5594 0.478121C18.6527 0.36126 18.7885 0.286225 18.9371 0.269522C19.0856 0.25282 19.2347 0.295818 19.3516 0.389059C19.4685 0.482299 19.5435 0.618142 19.5602 0.766706C19.5769 0.91527 19.5339 1.06438 19.4407 1.18125C18.8832 1.86978 18.2617 2.50387 17.5844 3.075L19.4875 6.35625Z"
                                    fill="#D4D4D4"/>
                            </svg>

                            <svg class="open hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M23.0157 11.775C22.9782 11.7 22.2001 9.96563 20.4564 8.23125C18.7126 6.49688 16.0689 4.6875 12.0001 4.6875C7.93137 4.6875 5.15637 6.60938 3.54387 8.23125C1.93137 9.85313 1.02199 11.7 0.984492 11.775C0.951768 11.8455 0.934814 11.9223 0.934814 12C0.934814 12.0777 0.951768 12.1545 0.984492 12.225C1.02199 12.3 1.80012 14.0344 3.54387 15.7687C5.28762 17.5031 7.93137 19.3125 12.0001 19.3125C16.0689 19.3125 18.8439 17.3906 20.4564 15.7687C22.0689 14.1469 22.9782 12.3 23.0157 12.225C23.0485 12.1545 23.0654 12.0777 23.0654 12C23.0654 11.9223 23.0485 11.8455 23.0157 11.775ZM12.0001 18.1875C9.05637 18.1875 6.48762 17.1188 4.36887 15.0094C3.47545 14.1242 2.72015 13.1097 2.12824 12C2.72015 10.8903 3.47545 9.87584 4.36887 8.99063C6.48762 6.88125 9.05637 5.8125 12.0001 5.8125C14.9439 5.8125 17.5126 6.88125 19.6314 8.99063C20.5248 9.87584 21.2801 10.8903 21.872 12C21.272 13.1438 18.2814 18.1875 12.0001 18.1875ZM12.0001 7.6875C11.1472 7.6875 10.3134 7.94042 9.60422 8.41429C8.89503 8.88815 8.34229 9.56167 8.01589 10.3497C7.68948 11.1377 7.60408 12.0048 7.77048 12.8413C7.93688 13.6779 8.3476 14.4463 8.95072 15.0494C9.55383 15.6525 10.3222 16.0632 11.1588 16.2296C11.9953 16.396 12.8624 16.3106 13.6504 15.9842C14.4384 15.6578 15.112 15.1051 15.5858 14.3959C16.0597 13.6867 16.3126 12.8529 16.3126 12C16.3126 10.8563 15.8583 9.75935 15.0495 8.9506C14.2408 8.14185 13.1439 7.6875 12.0001 7.6875ZM12.0001 15.1875C11.3697 15.1875 10.7534 15.0006 10.2292 14.6503C9.70505 14.3001 9.2965 13.8022 9.05525 13.2198C8.814 12.6374 8.75087 11.9965 8.87386 11.3781C8.99685 10.7598 9.30043 10.1919 9.74621 9.7461C10.192 9.30032 10.76 8.99674 11.3783 8.87375C11.9966 8.75076 12.6375 8.81388 13.2199 9.05513C13.8024 9.29639 14.3002 9.70494 14.6504 10.2291C15.0007 10.7533 15.1876 11.3696 15.1876 12C15.1851 12.8446 14.8485 13.6539 14.2513 14.2512C13.654 14.8484 12.8447 15.185 12.0001 15.1875Z"
                                    fill="#D4D4D4"/>
                            </svg>
                        </a>
                    </div>
                    <div class="password password_confirm">
                        <input type="password" name="password_confirmation" placeholder="Повторите пароль">
                        <a class="password_eye" href="#">
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" width="20" height="10"
                                 viewBox="0 0 20 10" fill="none">
                                <path
                                    d="M19.4875 6.35625C19.5597 6.48608 19.5786 6.63891 19.5401 6.78239C19.5016 6.92587 19.4088 7.04874 19.2813 7.125C19.1965 7.176 19.099 7.202 19 7.2C18.9012 7.20006 18.8042 7.1741 18.7186 7.12473C18.633 7.07535 18.5619 7.00431 18.5125 6.91875L16.6844 3.75937C15.5965 4.51702 14.3845 5.0786 13.1032 5.41875L13.675 8.68125C13.6995 8.82789 13.6649 8.97825 13.5788 9.09947C13.4927 9.22068 13.3622 9.30289 13.2157 9.32812H13.1219C12.9887 9.32968 12.8595 9.28312 12.7578 9.19701C12.6562 9.1109 12.5891 8.99101 12.5688 8.85937L11.9969 5.64375C11.337 5.75417 10.6691 5.81061 10 5.8125C9.32808 5.81368 8.65713 5.76038 7.99379 5.65312L7.42191 8.86875C7.3998 8.99956 7.33216 9.11835 7.23095 9.20413C7.12973 9.2899 7.00146 9.33714 6.86879 9.3375H6.77504C6.62852 9.31227 6.49796 9.23006 6.41188 9.10884C6.3258 8.98763 6.2912 8.83727 6.31566 8.69062L6.88754 5.42812C5.60837 5.08197 4.39736 4.52085 3.30629 3.76875L1.47816 6.9375C1.42876 7.02306 1.3577 7.0941 1.27212 7.14348C1.18654 7.19285 1.08946 7.21881 0.990661 7.21875C0.892176 7.21721 0.795584 7.19145 0.709411 7.14375C0.645361 7.10684 0.589213 7.05767 0.544178 6.99906C0.499143 6.94044 0.466103 6.87352 0.446948 6.80212C0.427793 6.73072 0.422898 6.65625 0.432544 6.58296C0.442189 6.50968 0.466186 6.439 0.503161 6.375L2.40629 3.06562C1.73224 2.49755 1.11382 1.86657 0.559411 1.18125C0.466171 1.06438 0.423173 0.91527 0.439875 0.766706C0.456578 0.618142 0.531613 0.482299 0.648474 0.389059C0.765335 0.295818 0.914449 0.25282 1.06301 0.269522C1.21158 0.286225 1.34742 0.36126 1.44066 0.478121C2.03345 1.2191 2.7098 1.88916 3.45629 2.475L3.49379 2.49375C5.35331 3.93738 7.64602 4.71043 10 4.6875C12.354 4.71043 14.6468 3.93738 16.5063 2.49375L16.5344 2.475C17.2859 1.89166 17.9656 1.22137 18.5594 0.478121C18.6527 0.36126 18.7885 0.286225 18.9371 0.269522C19.0856 0.25282 19.2347 0.295818 19.3516 0.389059C19.4685 0.482299 19.5435 0.618142 19.5602 0.766706C19.5769 0.91527 19.5339 1.06438 19.4407 1.18125C18.8832 1.86978 18.2617 2.50387 17.5844 3.075L19.4875 6.35625Z"
                                    fill="#D4D4D4"/>
                            </svg>

                            <svg class="open hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M23.0157 11.775C22.9782 11.7 22.2001 9.96563 20.4564 8.23125C18.7126 6.49688 16.0689 4.6875 12.0001 4.6875C7.93137 4.6875 5.15637 6.60938 3.54387 8.23125C1.93137 9.85313 1.02199 11.7 0.984492 11.775C0.951768 11.8455 0.934814 11.9223 0.934814 12C0.934814 12.0777 0.951768 12.1545 0.984492 12.225C1.02199 12.3 1.80012 14.0344 3.54387 15.7687C5.28762 17.5031 7.93137 19.3125 12.0001 19.3125C16.0689 19.3125 18.8439 17.3906 20.4564 15.7687C22.0689 14.1469 22.9782 12.3 23.0157 12.225C23.0485 12.1545 23.0654 12.0777 23.0654 12C23.0654 11.9223 23.0485 11.8455 23.0157 11.775ZM12.0001 18.1875C9.05637 18.1875 6.48762 17.1188 4.36887 15.0094C3.47545 14.1242 2.72015 13.1097 2.12824 12C2.72015 10.8903 3.47545 9.87584 4.36887 8.99063C6.48762 6.88125 9.05637 5.8125 12.0001 5.8125C14.9439 5.8125 17.5126 6.88125 19.6314 8.99063C20.5248 9.87584 21.2801 10.8903 21.872 12C21.272 13.1438 18.2814 18.1875 12.0001 18.1875ZM12.0001 7.6875C11.1472 7.6875 10.3134 7.94042 9.60422 8.41429C8.89503 8.88815 8.34229 9.56167 8.01589 10.3497C7.68948 11.1377 7.60408 12.0048 7.77048 12.8413C7.93688 13.6779 8.3476 14.4463 8.95072 15.0494C9.55383 15.6525 10.3222 16.0632 11.1588 16.2296C11.9953 16.396 12.8624 16.3106 13.6504 15.9842C14.4384 15.6578 15.112 15.1051 15.5858 14.3959C16.0597 13.6867 16.3126 12.8529 16.3126 12C16.3126 10.8563 15.8583 9.75935 15.0495 8.9506C14.2408 8.14185 13.1439 7.6875 12.0001 7.6875ZM12.0001 15.1875C11.3697 15.1875 10.7534 15.0006 10.2292 14.6503C9.70505 14.3001 9.2965 13.8022 9.05525 13.2198C8.814 12.6374 8.75087 11.9965 8.87386 11.3781C8.99685 10.7598 9.30043 10.1919 9.74621 9.7461C10.192 9.30032 10.76 8.99674 11.3783 8.87375C11.9966 8.75076 12.6375 8.81388 13.2199 9.05513C13.8024 9.29639 14.3002 9.70494 14.6504 10.2291C15.0007 10.7533 15.1876 11.3696 15.1876 12C15.1851 12.8446 14.8485 13.6539 14.2513 14.2512C13.654 14.8484 12.8447 15.185 12.0001 15.1875Z"
                                    fill="#D4D4D4"/>
                            </svg>
                        </a>
                    </div>
                    @error('password')
                    <span class="error-text">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit">Зарегистрироваться</button>
            </form>
            <div class="have_account text-center">
                <a class="have_account" href="{{route('login')}}">У меня есть аккаунт</a>
            </div>
        </div>
    </div>

@endsection

