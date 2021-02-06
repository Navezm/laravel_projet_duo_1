<div class="col-lg-6 mt-4 mt-lg-0">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="form-row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="{{$placeHolders->name}}" data-rule="minlen:4" data-msg="{{$datamsgs->name}}" />
          <div class="validate"></div>
        </div>
        <div class="col-md-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="{{$placeHolders->email}}" data-rule="email" data-msg="{{$datamsgs->email}}" />
          <div class="validate"></div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="{{$placeHolders->subject}}" data-rule="minlen:4" data-msg="{{$datamsgs->subject}}" />
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="{{$datamsgs->message}}" placeholder="{{$placeHolders->message}}"></textarea>
        <div class="validate"></div>
      </div>
      <div class="mb-3">
        <div class="loading">{{$contacts[0]->loading}}</div>
        <div class="error-message"></div>
        <div class="sent-message">{{$contacts[0]->sent}}</div>
      </div>
      <div class="text-center"><button type="submit">{{$contacts[0]->btn}}</button></div>
    </form>
  </div>