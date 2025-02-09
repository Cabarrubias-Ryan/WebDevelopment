@extends('layouts.app')

@section('title','Contact')

@section('content')
<main id="contact">
    <section class="contact-form">
        <h1>Contact Us</h1>
        <form action="" method="post">
            <div class="contact-group">
                <div class="contact-label">
                    <label for="">Name</label>
                </div>
                <div class="contact-input">
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="contact-group">
                <div class="contact-label">
                    <label for="">Email</label>
                </div>
                <div class="contact-input">
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="contact-group">
                <div class="contact-label">
                    <label for="">Message</label>
                </div>
                <div class="contact-input">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>

</main>
@endsection
