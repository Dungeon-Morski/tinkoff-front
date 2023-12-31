@extends('layouts.main')
@section('content')
    <div class="main_section w-full">
        <div class="container flex h-full">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Пополнить баланс</h1>

                    <div class="replenishments">
                        <div class="sec_card">

                            <div class="card_avatar_block flex gap-2 items-center">
                                <div class="avatar_wrapper">
                                    <img class="avatar" src="{{asset('sources/images/avatar2.png')}}" alt="avatar2">
                                </div>
                                <p class="nickname">Noname228</p>
                            </div>

                            <div class="card_info flex gap-4 justify-between  items-center mt-[12px] ">

                                <div class="flex flex-row md:flex-col gap-[20px]  w-full md:w-auto">
                                    <div class="flex gap-[10px]">
                                        <p>10 ордеров</p>
                                        <p>100.00% выполнено</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{asset('sources/icons/thumbs-up-fill.svg')}}" alt="thumbs-up-fill">
                                        <p>100%</p></div>
                                </div>
                                <div class="flex  items-center gap-1 self-start">
                                    <p class="summ">92.30</p>
                                    <span> RUB</span>
                                </div>
                                <div class="flex  flex-col gap-[5px] self-start">
                                    <p>3, 302.65 USDT</p>
                                    <p>₽304.700.00 - ₽304.700.00</p>
                                </div>
                                <div class="bank_info">
                                    <p class="bank border-l-2 pl-2 sber">Сбербанк</p>
                                </div>
                                <button class="paymentBtn">Пополнить</button>
                            </div>

                        </div>
                        <div class="sec_card">

                            <div class="card_avatar_block flex gap-2 items-center">
                                <div class="avatar_wrapper">
                                    <img class="avatar" src="{{asset('sources/images/avatar2.png')}}" alt="avatar2">
                                </div>
                                <p class="nickname">Noname228</p>
                            </div>

                            <div class="card_info flex gap-4 justify-between  items-center mt-[12px] ">

                                <div class="flex flex-row md:flex-col gap-[20px]  w-full md:w-auto">
                                    <div class="flex gap-[10px]">
                                        <p>10 ордеров</p>
                                        <p>100.00% выполнено</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{asset('sources/icons/thumbs-up-fill.svg')}}" alt="thumbs-up-fill">
                                        <p>100%</p></div>
                                </div>
                                <div class="flex  items-center gap-1 self-start">
                                    <p class="summ">92.30</p>
                                    <span> RUB</span>
                                </div>
                                <div class="flex  flex-col gap-[5px] self-start">
                                    <p>3, 302.65 USDT</p>
                                    <p>₽304.700.00 - ₽304.700.00</p>
                                </div>
                                <div class="bank_info">
                                    <p class="bank border-l-2 pl-2 ozon">Озон</p>
                                </div>
                                <button class="paymentBtn">Пополнить</button>
                            </div>

                        </div>
                        <div class="sec_card">

                            <div class="card_avatar_block flex gap-2 items-center">
                                <div class="avatar_wrapper">
                                    <img class="avatar" src="{{asset('sources/images/avatar2.png')}}" alt="avatar2">
                                </div>
                                <p class="nickname">Noname228</p>
                            </div>

                            <div class="card_info flex gap-4 justify-between  items-center mt-[12px] ">

                                <div class="flex flex-row md:flex-col gap-[20px]  w-full md:w-auto">
                                    <div class="flex gap-[10px]">
                                        <p>10 ордеров</p>
                                        <p>100.00% выполнено</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{asset('sources/icons/thumbs-up-fill.svg')}}" alt="thumbs-up-fill">
                                        <p>100%</p></div>
                                </div>
                                <div class="flex  items-center gap-1 self-start">
                                    <p class="summ">92.30</p>
                                    <span> RUB</span>
                                </div>
                                <div class="flex  flex-col gap-[5px] self-start">
                                    <p>3, 302.65 USDT</p>
                                    <p>₽304.700.00 - ₽304.700.00</p>
                                </div>
                                <div class="bank_info">
                                    <p class="bank border-l-2 pl-2 ozon">Озон</p>
                                </div>
                                <button class="paymentBtn">Пополнить</button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="depositOverlayBlock hidden">
        <div class="overlay">

        </div>
        <div class="modal_content">
            <form action="">
                <div>
                    <label for=""></label>
                    <input type="number" placeholder="Введите цену">
                </div>
                <button type="submit">Стать мамонтом</button>
            </form>
        </div>
    </div>
@endsection

