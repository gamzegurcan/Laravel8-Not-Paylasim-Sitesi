@extends('layouts.admin')

@section('title', 'Settings')
@section('javascript')

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection
@section('content')

    <div id="page-wrapper" >
        <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>SETTING EDIT</h2>
                        </div>
                        <hr />
                    </div>
            <!-- /. ROW  -->
                    <hr />
                    <div class="card-body">
                        <div class="box box-primary">
                    <!-- form start -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#general" data-toggle="tab">General</a>
                                    </li>
                                    <li><a href="#social" data-toggle="tab">Social Media</a>
                                    </li>
                                    <li><a href="#smtp" data-toggle="tab">Smtp</a>
                                    </li>
                                    <li><a href="#about2" data-toggle="tab">About Us</a>
                                    </li>
                                    <li><a href="#contact2" data-toggle="tab">Contact</a>
                                    </li>
                                    <li><a href="#references2"  data-toggle="tab">References</a>
                                    </li>
                                </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="general">
                                            <hr />
                                            <input type="hidden" name="id" id="id" value="{{$data->id}}" class="form-control">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="description"  value="{{$data->description}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" name="company"  value="{{$data->company}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Adress</label>
                                            <input type="text" name="adress" value="{{$data->adress}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="phone" value="{{$data->phone}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="social">
                                        <hr />
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smtp">
                                        <hr />
                                        <div class="form-group">
                                            <label>Smtpserver</label>
                                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtpemail</label>
                                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtppassword</label>
                                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtpport</label>
                                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="about2">
                                        <hr />
                                       <div class="form-group">
                                           <label>About Us</label>
                                           <textarea id="aboutus" name="aboutus">{!!$data->aboutus!!}</textarea>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact2">
                                        <hr />
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <textarea id="contact" name="contact">{!!$data->contact!!}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="references2">
                                        <hr />
                                        <div class="form-group">
                                            <label>References</label>
                                            <textarea id="references" name="references">{!!$data->references!!}</textarea>
                                        </div>
                                    </div>
                                    <script>
                                        CKEDITOR.replace( 'aboutus' );
                                        CKEDITOR.replace( 'contact' );
                                        CKEDITOR.replace( 'references' );
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update setting</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

