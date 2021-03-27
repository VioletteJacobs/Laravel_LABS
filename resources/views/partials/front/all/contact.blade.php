<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{$contactSection[0]->title}}</h2>
                </div>
                <p>{{$contactSection[0]->p}}</p>
                <h3 class="mt60">{{$contactSection[0]->title2}}</h3>
                @foreach ($address as $item)
                <p class="con-item">{{$item->address}}</p>
                @endforeach

                @foreach ($phone as $item)
                <p class="con-item">{{$item->phone}}</p> 
                @endforeach

                @foreach ($email as $item)
                <p class="con-item">{{$item->email}}</p> 
                @endforeach
                
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->