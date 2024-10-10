   {{-- columna de la derecha chica --}}
   <aside>
    <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
        <div class=" col-span-6">

            <a href="" class="object-cover object-center " width="350">
                <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                    alt="">
            </a>

            <a href="" class="object-cover object-center " width="350">
                <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                    alt="">
            </a>

            <div id="app">

                <div v-for="item in info">

                    <div class="flex-col pb-3">
                        <div
                            class="flex-col max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg"
                                    :src="'https://www.dailymotion.com/thumbnail/video/' + item.id"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        @{{ item.title }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-for="va in clima">

                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        @{{ va }}</h5>
                </div>
            </div>
        </div>
    </div>
</aside>

  {{-- aca arrancamos vue --}}

  @push('js')
  <script>
      new Vue({
          el: '#app',
          data: {
              info: [],
              clima: [],

          },

          mounted() {


              axios.get("https://api.dailymotion.com/videos?channel=news&limit=3")
                  .then(response => {
                      this.info = response.data.list
                  });

              /*    axios.get( */
              /*      "https://api.weatherbit.io/v2.0/current?lat=35.7796&lon=-78.6382&key=f2207d043ea74a359ff232a1d03d0c72&include=minutely"
              )*/
              axios.get(
                      "https://api.openweathermap.org/2.5/wheater?q=BURNOS AIRESlat=35.7796&lon=-78.6382&key=f2207d043ea74a359ff232a1d03d0c72&include=minutely"
                  )
                  .then(response => {
                      this.clima = response
                  });


          },

      });
  </script>
@endpush
