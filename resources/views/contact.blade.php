@extends('layout.main')
@section('contacts', 'active')

@section('content')
    <section id="content">
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_8">
                        <div class="indent-left">
                            <h3 class="p0">Contact Form</h3>
                            <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <label><span class="text-form">Your Name:</span>
                                        <input type="text">
                                    </label>
                                    <label><span class="text-form">Your Email:</span>
                                        <input type="text">
                                    </label>
                                    <div class="wrapper">
                                        <div class="text-form">Your Message:</div>
                                        <div class="extra-wrap">
                                            <textarea></textarea>
                                            <div class="clear"></div>
                                            <div class="buttons"> <a class="button" href="#">Clear</a> <a
                                                    class="button" href="#">Send</a> </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </article>
                    <article class="grid_4">
                        <div class="indent-left indent-top">
                            <h4 class="img-indent-bot">Contact Us</h4>
                            <div class="wrapper indent-bot">
                                <figure class="img-border">
                                    <iframe width="230" height="167" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.1661805127624!2d80.00977991406306!3d9.666838381335943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe5401d6909549%3A0x21828c843ddbc08c!2sJaffna%20Bus%20Stand!5e0!3m2!1sen!2slk!4v1677293453365!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </figure>
                            </div>
                            <dl>
                                <dt class="prev-indent-bot2">Jaffna Bus Stand, Hospital Road, Jaffna</dt>
                                <dd><span>Freephone:</span> +94 775632452</dd>
                                <dd><span>Telephone:</span> +94 761234567</dd>
                                <dd><span>Fax:</span> +94 211234567</dd>
                                <dd><span>Email:</span><a href="#">poli@gmail.com</a></dd>
                            </dl>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="block"></div>
    </section>
@endsection
