@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Поддержка</h1>

                    <div class="support_block">
                        <div class="accordion">
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Какие гарантии?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Никаких...</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Могу ли я выводить себе прибыль на банковскую карту?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Да, Вы можете выводить средства на любой платежный инструмент любого формата (банковские карты, электронные кошельки или крипто кошельки)</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Много ли времени нужно для того, чтобы здесь зарабатывать?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">У меня нет опыта, могу ли я здесь зарабатывать?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Нет, кыш!</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Что нужно для инвестиций?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
@endsection

