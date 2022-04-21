<x-app-layout title="Home">
   <div class="row">
       <div class="col-md-6">
           @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
           @endif
           <div class="card">
               <div class="card-header">Home Page</div>
               <div class="card-body">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, magnam culpa. Veritatis minus adipisci assumenda dolores maxime rerum quos ipsa.
               </div>
           </div>
       </div>
   </div>
</x-app-layout>