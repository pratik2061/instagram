@extends('layouts.main')
@push('title')
<title>instagram</title>
@endpush
@section('main-section')
<section class="w-[100%] h-[100vh] flex justify-center relative">
    {{-- main section start--}}
    <div class="border-[1px] border-[#ccc] w-[370px] h-[390px] m-[80px] rounded-[5px] ">
         <span class="pl-[95px] pt-[55px] text-[44px] font-bold">ℑ𝔫𝔰𝔱𝔞𝔤𝔯𝔞𝔪</span>
         <form action="{{url('/')}}" method="post">
            @csrf
             <div class="text-center mt-[50px]">
                @foreach ($user as $user )
                 <input type="text" name="email" id="" required placeholder="Email" class="border-[#ccc] border-[1px] h-[35px] w-[250px] px-[10px] rounded-[3px]">
                 <input type="password" name="password" id="" required placeholder="Password" class="border-[#ccc] border-[1px] h-[35px] w-[250px] px-[10px] rounded-[3px] mt-[6px]">
                 @endforeach
                </div>
            <div class="text-center mt-[50px]">
                <div>
                <button type="submit" class="bg-[#4cb5f9] px-[101px] py-[6px] rounded-[8px] text-white font-bold hover:bg-blue-500">Log in</button><br>
                </div>
                <div class="mt-[20px]">
                    <a href="#" class="text-[#0000ff] text-[13px]">Forgot your password?</a>
                </div>        
           </div>
         </form>
     </div>
     <div class="border-[1px] border-[#ccc] w-[370px] h-[70px] rounded-[5px] absolute bottom-[155px] flex justify-center items-center">
        <div class="">
            <p>Don't have an account? <a href="{{url('/signup')}}" class="text-[#0000ff] font-bold text-[13px]">Sign up</a></p>
        </div>
    </div>
    <footer class="absolute bottom-[0px] w-[100%]">
    <div class="text-center">
          <p class="text-[14px] text-[#686868]">&copy; 2024 instagram from Devil</p>
    </div>
</footer>
    {{-- main section end --}}
</section>
{{-- footer section start--}}

{{-- footer section end--}}
@endsection