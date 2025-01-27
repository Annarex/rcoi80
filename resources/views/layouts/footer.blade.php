<div id="footer" class="py-3 text-center text-sm w-full bg-black text-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="">
      <div class="flex justify-center "> <x-application-logo class="w-auto h-16 md:h-20 lg:h-24" /></div>
      <ul
        class="max-w-3xl mx-auto text-lg flex items-center justify-center flex-col gap-7 md:flex-row md:gap-12 transition-all duration-500 py-5 border-b border-gray-200">
        <li>
          <a href="javascript:;" class="text-white hover:text-slate-100">О нас</a>
        </li>
        <li>
          <a href="javascript:;" class=" text-white hover:text-slate-100">ГИА-11</a>
        </li>
        <li>
          <a href="javascript:;" class=" text-white hover:text-slate-100">ГИА-9</a>
        </li>
        <li>
          <a href="javascript:;" class=" text-white hover:text-slate-100">Документы</a>
        </li>
        <li>
          <a href="javascript:;" class=" text-white hover:text-slate-100">Контакты</a>
        </li>
      </ul>
      <div class="grid grid-cols-5 gap-2 py-5">
        <x-logo-a-footer href="https://edu.gov.ru/" lname="gia11.png" alt="ГИА 11" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="gia9.png" alt="ГИА 9" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="donriro.jpg" alt="ДонРИРО" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="mondpr.jpg" alt="МОН ДНР" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="fct.jpg" alt="ФЦТ" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="fioko.png" alt="ФИОКО" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="fipi.png" alt="ФИПИ" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="fsnson.png" alt="РОСОБР" />
        <x-logo-a-footer href="https://edu.gov.ru/" lname="minpros.png" alt="МИНПРОС" />

      </div>
      <span class="text-lg text-slate-200 text-center block">
        РЦОИ Донецкая Народная Республика {{ now()->year}}<br>
        © Все права защищены.
      </span>
    </div>
  </div>
</div>