@extends('layouts.main')
@push('title')
    <title>Instagram | Sign up</title>
@endpush
@section('main-section')
<section class="w-[100%] h-[100vh] flex justify-center relative">
    {{-- main section start--}}
    <div class="border-[1px] border-[#ccc] w-[370px] h-[470px] m-[90px] rounded-[5px] relative">
         <span class="pl-[95px]  text-[44px] font-bold">ℑ𝔫𝔰𝔱𝔞𝔤𝔯𝔞𝔪</span>
         <span class="text-center"><p class="p-[10px] text-xl text-[#666464]">Sign up to see photos and videos from your friends.</p></span>
         <form action="{{url('/')}}/signup" method="post" class="">
            @csrf
             <div class="text-center mt-[20px]">
                <div>
                <input type="text" name="name" id="" placeholder="Fullname" class="border-[#ccc] border-[1px] h-[35px] w-[250px] px-[10px] rounded-[3px]" ><br>
                <span class="text-[#ff0000] text-[10px] font-bold ">
                @error('name')
                    {{$message}}    
                @enderror
             </span>
                </div>
                <div>
                 <input type="email" name="email" id="" placeholder="Email" class="border-[#ccc] border-[1px] h-[35px] w-[250px] px-[10px] rounded-[3px] mt-[6px]" ><br>
                 <span class="text-[#ff0000] text-[10px] font-bold ">
                    @error('email')
                        {{$message}}    
                    @enderror
                 </span>
                </div>
                <div>
                 <input type="password" name="password" id="" placeholder="Password" class="border-[#ccc] border-[1px] h-[35px] w-[250px] px-[10px] rounded-[3px] mt-[6px]" ><br>
                 <span class="text-[#ff0000] text-[10px] font-bold ">
                    @error('password')
                        {{$message}}    
                    @enderror
                 </span>
                </div>
                <div>
                 <input type="password" name="confirm_password" id="" placeholder="Confirm Password" class="border-[#ccc] border-[1px] h-[35px] w-[250px] px-[10px] rounded-[3px] mt-[6px]" ><br>
                 <span class="text-[#ff0000] text-[10px] font-bold ">
                    @error('confirm_password')
                        {{$message}}    
                    @enderror
                 </span>
                </div>
                </div>
            <div class="text-center mt-[50px] absolute left-[57px] bottom-[30px]">
                <div>         <hr>
                <button class="bg-[#4cb5f9] px-[101px] py-[6px] rounded-[8px] text-white font-bold hover:bg-blue-500">Sign up</button><br>
                </div>      
           </div>
         </form>
     </div>
     <div class="border-[1px] border-[#ccc] w-[370px] h-[70px] rounded-[5px] absolute bottom-[80px] flex justify-center items-center">
        <div class="">
            <p>Have an account?<a href="{{url('/')}}" class="text-[#0000ff] font-bold text-[15px]"> Log in</a></p>
        </div>
    </div>
    <footer class="absolute bottom-[0px] w-[100%]">
    <div class="text-center">
          <p class="text-[14px] text-[#686868]">&copy; 2024 instagram from Devil</p>
    </div>
</footer>
    {{-- main section end --}}
</section>
@endsection