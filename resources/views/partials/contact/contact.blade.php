    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$contacts[0]->title1}}</h2>
            <p>{{$contacts[0]->p}}</p>
          </div>
  
          <div class="row">
            @include('partials.contact.cards')
            @include('partials.contact.form')
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->