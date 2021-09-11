<div class="edina_tm_contact" id="contact">
    <div class="container">
        <div class="edina_tm_title">
            <h3>Contact</h3>
            <p>Don't hesitate to contact me via email or phone :D</p>
        </div>
        <div class="extra_info">
            <ul class="wrapper">
                <li class="wow fadeInLeft" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                    <div class="list_inner">
                        <h3>Phone:</h3>
                        <ul class="in">
                            <li>{{$personalinfo->phone}}</li>
                        </ul>
                    </div>
                </li>
                <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                    <div class="list_inner">
                        <h3>Email:</h3>
                        <ul class="in">
                            <li>{{$personalinfo->email}}</li>
                        </ul>
                    </div>
                </li>
                <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.4s; animation-name: none;">
                    <div class="list_inner">
                        <h3>Current location:</h3>
                        <ul class="in">
                            <li>
                                <p>Blida, Algeria</p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mainpart">
            <div class="left">
                <div class="title">
                    <p>I'm always open to discussing a job offer<br><span>gig or partnerships.</span></p>
                </div>
                <div class="fields wow fadeInLeft" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                    <form action="{{route('mail')}}" method="post" class="contact_form" id="contact_form" autocomplete="off">
                        @csrf
                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                        <div class="first_row">
                            <input id="name" type="text" placeholder="Name*" name="name">
                        </div>
                        <div class="second">
                            <input id="email" type="text" placeholder="Email*" name="email">
                        </div>
                        <div class="third">
                            <textarea id="message" placeholder="Message*" rows="6" name='message'></textarea>
                        </div>
                        <div class="fourth">
                            <input id="phone" type="number" placeholder="Phone" name="phone">
                        </div>
                        <div class="edina_tm_button" style="margin-top: 10px">
                            <button  style="padding: 20px; border:#000" type="submit">Submit</button>
                        </div>

                        <!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
