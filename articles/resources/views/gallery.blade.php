<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="#">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                  <!--Register-->
                  <center>
                  <br>
<div style="font-weight:bolder;font-size:22px">Gallery Uploads</div>
<h3>Photo's</h3>

</center>
            </a>
        </x-slot>

      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST"  enctype="multipart/form-data" action="{{route('gallery')}}">
            @csrf



          
<!--photo1-->
<div class="mt-4">
                <x-label for="photo1" :value="__('First Picture')" />

                <x-input id="email" class="block mt-1 w-full" type="file"  name="photo1" required/>
                
            </div>


            <!--Photo2-->
            <div class="mt-4">
                <x-label for="photo2" :value="__('Second Picture')" />

                <x-input id="email" class="block mt-1 w-full" type="file" name="photo2" required/>
                
            </div>



             <!--photo3-->
             <div class="mt-4">
                <x-label for="photo3" :value="__('Third Picture')" />

                <x-input id="email" class="block mt-1 w-full" type="file" name="photo3" required/>
                
            </div>


            <!--photo4-->
            <div class="mt-4">
                <x-label for="photo4" :value="__('Fourth Picture')" />

                <x-input id="email" class="block mt-1 w-full" type="file"  name="photo4" required/>
                
            </div>

            
               



            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Upload') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
