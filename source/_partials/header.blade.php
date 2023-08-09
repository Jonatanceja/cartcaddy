<nav
      class="flex items-center justify-between flex-wrap px-6 py-3 fixed w-full z-10 top-0"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-gray-100' : isOpen , 'bg-white shadow-md' : !isOpen}"
    >
      <!--Logo etc-->
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a class="text-white no-underline hover:text-white hover:no-underline" href="{{ $page->getUrl() }}">
          <img class="h-12" src="{{ $page->logo }}" alt="Powertugger">
        </a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-stone-800 hover:text-amber-400 focus:outline-none focus:text-amber-400"
        :class="{ 'transition transform-180': isOpen }"
      >
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
          />
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          />
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
        <ul
          class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center font-semibold"
        >
          <li class="mr-3">
            <a
              class="inline-block text-stone-800 no-underline hover:text-amber-400 hover:text-underline py-2 px-4"
              href="#hero"
              @click="isOpen = false"
              >Inicio
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-stone-800 no-underline hover:text-amber-400 hover:text-underline py-2 px-4"
              href="#about"
              @click="isOpen = false"
              >Características
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-stone-800 no-underline hover:text-amber-400 hover:text-underline py-2 px-4"
              href="#products"
              @click="isOpen = false"
              >Productos
            </a>
          </li>
        </ul>
        <div class="flex justify-center py-10 md:py-0">
          <a href="#form">
            <button class="bg-amber-400 px-5 py-3 rounded-md transform transition text-stone-800 hover:bg-stone-800 hover:text-white font-bold">
              Conseguir {{ $page->title }}
          </button>
          </a>
        </div>
      </div>
    </nav>
