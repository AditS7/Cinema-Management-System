@extends('main')
@section('secondcontainer')
<div class="contact-section">

  <h1>Contact Us</h1>

  <div class="border"></div>
  <div class="form-border">
  <form class="contact-form" action="index.html" method="post">
    <input type="text" class="contact-form-text" placeholder="Your name" required>
    <input type="email" class="contact-form-text" placeholder="Your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    <input type="text" class="contact-form-text" placeholder="Your phone" pattern="[0-9]{10}" required>
    <textarea class="contact-form-text" placeholder="Your message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form>
</div>
</div>
@endsection

