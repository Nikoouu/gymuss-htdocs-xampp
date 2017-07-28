@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Usuario</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <label for="rut" class="col-md-4 control-label">RUT</label>

                            <div class="col-md-6">
                                <input id="rut" type="number" class="form-control" name="rut" value="{{ old('rut') }}" required autofocus>

                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('usu_ape_pat') ? ' has-error' : '' }}">
                            <label for="usu_ape_pat" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="usu_ape_pat" type="text" class="form-control" name="usu_ape_pat" value="{{ old('usu_ape_pat') }}" required autofocus>

                                @if ($errors->has('usu_ape_pat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_ape_pat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_ape_mat') ? ' has-error' : '' }}">
                            <label for="usu_ape_mat" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="usu_ape_mat" type="text" class="form-control" name="usu_ape_mat" value="{{ old('usu_ape_mat') }}" required autofocus>

                                @if ($errors->has('usu_ape_mat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_ape_mat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('usu_gen') ? ' has-error' : '' }}">
                            <label for="usu_gen" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                <input type="radio" name="usu_gen"
                                       <?php if (isset($usu_gen) && $usu_gen=="female") echo "checked";?>
                                       value="female">Femenino
                                <input type="radio" name="usu_gen"
                                       <?php if (isset($usu_gen) && $usu_gen=="male") echo "checked";?>
                                       value="male">Masculino
                                @if ($errors->has('usu_gen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_gen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_nom_carr') ? ' has-error' : '' }}">
                            <label for="usu_nom_carr" class="col-md-4 control-label">Nombre Carrera</label>

                            <div class="col-md-6">
                                <input id="usu_nom_carr" type="text" class="form-control" name="usu_nom_carr" value="{{ old('usu_nom_carr') }}" required>

                                @if ($errors->has('usu_nom_carr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_nom_carr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_fech_nac') ? ' has-error' : '' }}">
                            <label for="usu_fech_nac" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="usu_fech_nac" type="date"
                                       name="usu_fech_nac"  step="1" min="01-01-1980" max="31-12-2099" value="<?php echo date("d-m-y");?>" required>

                                @if ($errors->has('usu_fech_nac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_fech_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_dir') ? ' has-error' : '' }}">
                            <label for="usu_dir" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="usu_dir" type="text" class="form-control" name="usu_dir" value="{{ old('usu_dir') }}" required>

                                @if ($errors->has('usu_dir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_dir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_tel') ? ' has-error' : '' }}">
                            <label for="usu_tel" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="usu_tel" type="number" class="form-control" name="usu_tel" value="{{ old('usu_tel') }}" required>

                                @if ($errors->has('usu_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_nom_cont_eme') ? ' has-error' : '' }}">
                            <label for="usu_nom_cont_eme" class="col-md-4 control-label">Nombre Contacto Emergencia</label>

                            <div class="col-md-6">
                                <input id="usu_nom_cont_eme" type="text" class="form-control" name="usu_nom_cont_eme" value="{{ old('usu_nom_cont_eme') }}" required>

                                @if ($errors->has('usu_nom_cont_eme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_nom_cont_eme') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_tel_eme') ? ' has-error' : '' }}">
                            <label for="usu_tel_eme" class="col-md-4 control-label">Teléfono Emergencia</label>

                            <div class="col-md-6">
                                <input id="usu_tel_eme" type="number" class="form-control" name="usu_tel_eme" value="{{ old('usu_tel_eme') }}" required>

                                @if ($errors->has('usu_tel_eme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_tel_eme') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_email') ? ' has-error' : '' }}">
                            <label for="usu_email" class="col-md-4 control-label">Email Institucional</label>

                            <div class="col-md-6">
                                <input id="usu_email" type="email" class="form-control" name="usu_email" value="{{ old('usu_email') }}" required>

                                @if ($errors->has('usu_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_ano_ing') ? ' has-error' : '' }}">
                            <label for="usu_ano_ing" class="col-md-4 control-label">Año Ingreso</label>

                            <div class="col-md-6">
                                <select name="usu_ano_ing" required="required">
                                    <option value=""> --- </option>
                                    <option value="2017"> 2017 </option>
                                    <option value="2016"> 2016 </option>
                                    <option value="2015"> 2015 </option>
                                    <option value="2014"> 2014 </option>
                                    <option value="2013"> 2013 </option>
                                    <option value="2012"> 2012 </option>
                                    <option value="2011"> 2011 </option>
                                    <option value="2010"> 2010 </option>
                                    <option value="2009"> 2009 </option>
                                    <option value="2008"> 2008 </option>
                                    <option value="2007"> 2007 </option>
                                    <option value="2006"> 2006 </option>
                                    <option value="2005"> 2005 </option>
                                    <option value="2004"> 2004 </option>
                                    <option value="2003"> 2003 </option>
                                    <option value="2002"> 2002 </option>
                                    <option value="2001"> 2001 </option>
                                    <option value="2000"> 2000 </option>
                                    <option value="1999"> 1999 </option>
                                    <option value="1998"> 1998 </option>
                                    <option value="1997"> 1997 </option>
                                    <option value="1996"> 1996 </option>
                                    <option value="1995"> 1995 </option>
                                    <option value="1994"> 1994 </option>
                                    <option value="1993"> 1993 </option>
                                    <option value="1992"> 1992 </option>
                                    <option value="1991"> 1991 </option>
                                    <option value="1990"> 1990 </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_fech_ins') ? ' has-error' : '' }}">
                            <label for="usu_fech_ins" class="col-md-4 control-label">Fecha de Inscripción</label>

                            <div class="col-md-6">
                                <input id="usu_fech_ins" type="date"
                                       name="usu_fech_ins"  step="1" min="2016-01-01" max="2999-12-31" value="2017-07-14" required>

                                @if ($errors->has('usu_fech_ins'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_fech_ins') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_cert_med') ? ' has-error' : '' }}">
                            <label for="usu_cert_med" class="col-md-4 control-label">Adjuntar Certificado Médico</label>

                            <div class="col-md-6">
                                <input id="usu_cert_med" type="file" class="form-control" name="adjunto" value="{{ old('usu_cert_med') }}" required>

                                @if ($errors->has('usu_cert_med'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_cert_med') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Completar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
