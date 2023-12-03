<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

    </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                   <p class="fw-bold"> {{ __('mylang.welcome') }}</p>

                </div>
            </div>
            <div class="Larger shadow container mt-5" style="background-color: #243d63">
                <p class="fw-bold text-center p-3 text-light">{{__('mylang.welcome to for you in education plateform')}} </p>
                <p class="fw-medium mb-1 text-light" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-circle-fill inline m-1" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                    </svg>{{__('mylang.We provide you with many features')}}</p>
                <p class="fw-medium mb-1 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-circle-fill inline m-1" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                </svg>{{__('mylang.this a platform goaled to make the students qualified for the labor market')}}</p>
            <p class="fw-medium mb-1 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-3-circle-fill inline m-1" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                </svg>{{__('mylang.We have many free courses')}} <p class="text-decoration-line-through inline fw-medium text-light">{{__('mylang.Paid course')}}</p><p class="text-light fw-medium inline"> {{__('mylang.great teachers, and a dedicated supervisor will monitor your work')}} </p></p>
            <p class="fw-medium mb-1 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-4-circle-fill inline m-1" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                </svg>{{__('mylang.you can watch navbar to help you')}} <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up inline" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                </svg></p>
            <p class="fw-bold text-center p-3 text-light">{{__('mylang.I hope you like it')}} <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-emoji-smile-fill inline" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                </svg></p>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
            <div class="p-6 text-gray-900 text-center ">
                <p class="fw-bold ">{{__('mylang.Do you want to strengthen yourself culturally?')}}</p>
                <p class="w-light"> {{__('mylang.You have some channels that might help you')}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers inline" viewBox="0 0 16 16">
                    <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                  </svg></p>
            </div>
            </div>
                <div class="row m-3">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                        <div class="card Larger shadow m-1" style="width: 18rem;">
                            <img src="{{ asset('image/zero.jpg') }}" alt="وصف الصورة" class="img-thumbnail">
                            <div class="card-body">
                              <h5 class="card-title">zero web school</h5>

                              <a href="https://www.youtube.com/@ElzeroWebSchool" class="btn btn-primary w-50">{{__('mylang.watch')}}</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card Larger shadow m-1" style="width: 18rem;">
                            <img src="{{ asset('image/yah.jpeg') }}" alt="وصف الصورة" class="img-thumbnail">
                            <div class="card-body">
                              <h5 class="card-title">Yehia Tech </h5>
                              <a href="https://www.youtube.com/@yehiatech" class="btn btn-primary w-50">{{__('mylang.watch')}}</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card Larger shadow m-1" style="width: 18rem;">
                            <img src="{{ asset('image/w33.jpeg') }}" alt="وصف الصورة" class="img-thumbnail">
                            <div class="card-body">
                              <h5 class="card-title">w3school </h5>
                              <a href="https://www.w3schools.com/" class="btn btn-primary w-50"> {{__('mylang.watch')}}</a>
                            </div>
                          </div>

                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card Larger shadow m-1" style="width: 18rem;">
                            <img src="{{ asset('image/icon.webp') }}" alt="وصف الصورة" class="img-thumbnail">
                            <div class="card-body">
                              <h5 class="card-title">octucode </h5>
                              <a href="https://www.youtube.com/@OctuCode" class="btn btn-primary w-50">{{__('mylang.watch')}} </a>
                            </div>
                          </div>

                      </div>

                  </div>
                 </div>

    </div>
</x-app-layout>
