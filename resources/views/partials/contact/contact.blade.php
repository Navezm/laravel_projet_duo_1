    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$general->title1}}</h2>
            <p>{{$general->p}}</p>
          </div>
  
          <div class="row">
            @include('partials.contact.cards')
            @include('partials.contact.form')
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->