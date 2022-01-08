@extends('layout')

@section('content')

@include('slider')

 <!-- Information About This Doctor Start Here -->
 <section class="about-doctor">
    <div class="container">
     <div class="row">
       <div class="col-xl-6">
         <div class="about-doctor-image">
           <img src="assets/images/aboutdoctor.jpg" alt="aboutdoctor">
         </div>
       </div>
       <div class="col-xl-6">
         <div class="about-doctor-text">
           <h3>About Doctor</h3>
           <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae magnam velit, nulla neque deserunt nesciunt maxime unde. Facere dolores doloremque repudiandae odio sint necessitatibus quod eaque, tempora commodi soluta enim odit nulla delectus, laborum repellat quae ipsa eveniet voluptate recusandae consequuntur animi. Optio culpa quaerat eos fugiat officiis ipsam corrupti quisquam deleniti. Ratione corporis voluptas neque architecto animi similique fuga ipsa laudantium nam, blanditiis labore consequuntur, aspernatur nesciunt. Nemo minus maxime aperiam fugit! 
           </p>
           <div class="something-special">
             <h3>Something Special</h3>
             <p>
               <i class="fas fa-check-circle"></i>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
             </p>
             <p>
               <i class="fas fa-check-circle"></i>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
             </p>
             <p>
               <i class="fas fa-check-circle"></i>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
             </p>
           </div>
         </div>
       </div>
     </div>
    </div>
   </section>
   <!-- Information About This Doctor End Here -->
@endsection