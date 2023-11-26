@extends('layouts.master')

@section('content')
<section id="contact">
    <div class="container">
        <div class="contact-content">
            <h1 class=" text-center mt-5">Contact Me</h1>
            <p>Have a question or want to collaborate? Feel free to get in touch!</p>

            <form method="POST" action="">
                @csrf

                <div class="form-group py-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                                   
                </div>

                <div class="form-group py-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
               
                </div>

                <div class="form-group py-2">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" rows="5"> </textarea>
                 
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection