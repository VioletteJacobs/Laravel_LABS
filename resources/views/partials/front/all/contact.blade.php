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
                @if ($errors->errorForm->any()) 
                    <div class="alert alert-danger"> 
                        <ul> 
                            @foreach ($errors->errorForm->all() as $error) 
                            <li>{{ $error }}</li> 
                            @endforeach 
                        </ul> 
                    </div> 
                 @endif
                 @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif  
                <form class="form-class" id="con_form" action="/mail" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12 ">

                            <select name="subject_id" id="" >
                                @foreach ($subject as $item)
                                <option value="{{$item->id}}" >{{$item->subject}}</option>
                                @endforeach
                            </select>
                            <br>


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