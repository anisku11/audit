@extends('layouts.admin.main')

@section('title')
    Buat Data Beban AC (Air Conditioner)
@endsection

@section('maincontent')
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Buat Data Ruangan Gedung</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buat Data Ruangan Gedung</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  {!! Form::open(['url' => '/manage/ruang', 'class' => 'form-horizontal', 'files' => true]) !!}

                    <!-- Smart Wizard -->
                    <p>Buat Data Ruangan</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Nama dan Luas</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Data Penerangan</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Data AC</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Data Beban Lain</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                       <div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
                        {!! Form::label('nm_ruang', 'Nama Ruang', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nm_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('luas_ruang') ? 'has-error' : ''}}">
                            {!! Form::label('luas_ruang', 'Luas Ruang', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('luas_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('luas_ruang', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                      </div>
                      <div id="step-2">
                        <div class="form-group {{ $errors->has('jns_lamp') ? 'has-error' : ''}}">
                           {!! Form::label('jns_lamp', 'Jenis Lamp', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('jns_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jns_lamp', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('jml_lamp') ? 'has-error' : ''}}">
                            {!! Form::label('jml_lamp', 'Jumlah Lamp', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('jml_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jml_lamp', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('daya_lamp') ? 'has-error' : ''}}">
                            {!! Form::label('daya_lamp', 'Daya Lampu', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('daya_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('daya_lamp', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                      </div>
                      <div id="step-3">
                      <div class="form-group {{ $errors->has('nmbebanac') ? 'has-error' : ''}}">
                          {!! Form::label('nmbebanac', 'Nama Beban AC', ['class' => 'col-md-4 control-label']) !!}
                          <div class="col-md-6">
                              {!! Form::text('nmbebanac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                              {!! $errors->first('nmbebanac', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>
                      <div class="form-group {{ $errors->has('jml_ac') ? 'has-error' : ''}}">
                          {!! Form::label('jml_ac', 'Jumlah AC', ['class' => 'col-md-4 control-label']) !!}
                          <div class="col-md-6">
                              {!! Form::text('jml_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                              {!! $errors->first('jml_ac', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>
                      <div class="form-group {{ $errors->has('daya_ac') ? 'has-error' : ''}}">
                          {!! Form::label('daya_ac', 'Daya AC', ['class' => 'col-md-4 control-label']) !!}
                          <div class="col-md-6">
                              {!! Form::text('daya_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                              {!! $errors->first('daya_ac', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>
                      </div>

                      <div id=step-4>
                      <div class="form-group {{ $errors->has('jnsbebanlain') ? 'has-error' : ''}}">
                          {!! Form::label('jnsbebanlain', 'Jenis Bebanlain', ['class' => 'col-md-4 control-label']) !!}
                          <div class="col-md-6">
                              {!! Form::text('jnsbebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                              {!! $errors->first('jnsbebanlain', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>
                      <div class="form-group {{ $errors->has('jmlbebanlain') ? 'has-error' : ''}}">
                          {!! Form::label('jmlbebanlain', 'Jumlah Bebanlain', ['class' => 'col-md-4 control-label']) !!}
                          <div class="col-md-6">
                              {!! Form::text('jmlbebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                              {!! $errors->first('jmlbebanlain', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>
                      <div class="form-group {{ $errors->has('dyabebanlain') ? 'has-error' : ''}}">
                          {!! Form::label('dyabebanlain', 'Daya Bebanlain', ['class' => 'col-md-4 control-label']) !!}
                          <div class="col-md-6">
                              {!! Form::text('dyabebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                              {!! $errors->first('dyabebanlain', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>

                      </div>



                    </div>
                    <!-- End SmartWizard Content -->


                  {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('htmlpage')

@endsection

@section('jspage')
    <!-- jQuery Smart Wizard -->
    <script src="{{ asset('plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>

@endsection