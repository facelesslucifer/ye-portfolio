<div class="row" id="contact">
    <div class="col s12">
        <div class="card indigo-lighten-5 z-depth-1">
            <div class="card-content">
                <span class="card-title"><h4>Let's Get In Touch</h4></span>
                <div class="row">
                    <div class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    Do you need a website, have a question or comment?
                                    Please feel free to send me an email or fill in this handy contact form.
                                    My aim is to reply within 24 hours.
                                </p>
                                <div class="contect-list">
                                    <i class="material-icons prefix">phone</i>
                                    <div>
                                        <a href="tel:+6593372343" target="_top">+65 - 9337 2343</a>
                                    </div>
                                </div>
                                <div class="contect-list">
                                    <i class="material-icons prefix">email</i>
                                    <div>
                                        <a href="mailto:yelinhtun1987@gmail.com" target="_top">yelinhtun1987@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m8 s12">
                        <div class="row">
                            {!! Form::open(array('url' => '/contact/submit', 'method'=> 'post', 'class' => 'col s12')) !!}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        {!! Form::text('name', null,
                                            array('required',
                                                'class'=>'validate')) !!}
                                        {!! Form::label('name', 'Name', array('class' => 'icon_prefix')) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        {!! Form::email('email', null,
                                            array('required',
                                                'class'=>'validate')) !!}
                                        {!! Form::label('email', 'Email', array('class' => 'icon_prefix')) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">subject</i>
                                        {!! Form::text('subject', null,
                                            array('required',
                                                'class'=>'validate')) !!}
                                        {!! Form::label('subject', 'Subject', array('class' => 'icon_prefix')) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">message</i>
                                        {!! Form::textarea('message', null,
                                            array('required',
                                                'class'=>'materialize-textarea')) !!}
                                        {!! Form::label('message', 'Message', array('class' => 'materialize-textarea')) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="g-recaptcha" data-sitekey="6LfO-BATAAAAANT8mIx0D-3i_P2bHTdR0FMwUho5"></div>
                                </div>
                                <div class="row">
                                    <button class="btn waves-effect waves-light indigo-darken-4" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>