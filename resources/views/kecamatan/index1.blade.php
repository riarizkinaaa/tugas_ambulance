@extends('template')
@section('content')
    

<!-- ======= Constructions Section ======= -->
<section id="constructions" class="constructions">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Tracing Ambulance</h2>
      {{-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p> --}}
    </div>

    
    <div class="row gy-4">
      
      @foreach ($kecamatan as $kec)
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <div class="row">
            
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                <h4 class="card-title">Kecamatan:&ensp;{{ $kec->nama_kec }}</h4>
                <p>Desa:&ensp;{{ $kec->nama_desa }}</p>
                <p>Sopir:&ensp;{{ $kec->nama }}</p>
                <i class="bi bi-telephone-fill">&ensp;{{ $kec->no_hp1 }}</i><br>
                <i class="bi bi-telephone-fill">&ensp;{{ $kec->no_hp2 }}</i>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->
      @endforeach

      
</section><!-- End Constructions Section -->

        
                  
 @endsection