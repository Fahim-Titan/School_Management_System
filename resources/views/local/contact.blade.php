
@extends('layouts.master')

@section('content')
    <div style="padding-top: 15px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="row">

                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Contact us</h3>
                                    <p>Fill in the form below to send us a message:</p>
                                </div>
                            </div>
                            <div class="form-bottom contact-form">
                                <form role="form" action="assets/contact.php" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-email">Email</label>
                                        <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-subject">Subject</label>
                                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-message">Message</label>
                                        <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                    </div>
                                    <button type="submit" class="btn">Send message</button>
                                </form>
                            </div>
                        <div style="padding-top: 15px;"></div>

                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
@endsection