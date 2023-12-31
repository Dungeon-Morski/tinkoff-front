@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Настройки</h1>

                    <div class="user_info">
                        <div class="personalInfo flex">

                            <div class="edit_info">
                                <h2>Персональные данные</h2>
                                <form action="" method="" class="">
                                    <div class="flex flex-col fields gap-[15px]">
                                        <div class="mt-[30px] flex flex-col gap-[5px]">
                                            <p>Ваше имя:</p>
                                            <input type="text" placeholder="Иван">
                                        </div>
                                        <div class="flex flex-col gap-[5px]">
                                            <p>Ваша фамилия:</p>
                                            <input type="text" placeholder="Иванов">
                                        </div>

                                        <div class="flex flex-col gap-[5px]">
                                            <p>Номер телефона:</p>
                                            <input type="tel" placeholder="+79531112252">
                                        </div>
                                        <button type="submit">Обновить личные данные</button>
                                    </div>
                                </form>
                            </div>
                            <div class="edit_info">
                                <h2>Изменение пароля</h2>
                                <form action="" method="" class="">
                                    <div class="flex flex-col fields gap-[15px]">
                                        <div class="mt-[30px] flex flex-col gap-[5px]">
                                            <p>Новый пароль:</p>
                                            <input type="text" placeholder="Введите новый пароль ">
                                        </div>
                                        <div class="flex flex-col gap-[5px]">
                                            <p>Повторите пароль:</p>
                                            <input type="text" placeholder="Подтвердите новый пароль ">
                                        </div>


                                        <button type="submit">Обновить пароль</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

