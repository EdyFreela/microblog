@extends('layouts.welcome')

@section('style')
<style>
nav.navbar{
   -webkit-transition: all 0.8s ease;
   transition: all 0.8s ease;
}
nav.navbar{
    min-height: 70px;
    padding-top: 10px;
    background-color: transparent;    
}
nav.navbar.shrink {
    min-height: 50px;
    padding-top: 0px;
    background-color: #232525;
    color:#000;
}
</style>
@endsection

@section('content')
<div class="section-one">
    <div class="container">
        <h1>Selo de segurança Bike Registrada</h1>
        <h2>"Faça todo mundo saber que a sua bike é sua"</h2>
        <h2>Frete único para todo Brasil!</h2>
    </div>
</div>
<div class="section-two">
    <div class="container">
        <div class="col-md-12">
            <h1>Faça seu pedido agora</h1>
        </div>
        <div class="col-md-6">
            <h2>Dados pessoais</h2>
            {!! Form::open(['url' => 'register']) !!}
            <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label for="exampleInputEmail1">Nome</label>
                    {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}
                    <small id="emailHelp" class="form-text text-muted">máximo 20 caracteres.</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label for="exampleInputEmail1">Sobrenome</label>
                    {!! Form::text('lastname', null, array('placeholder' => 'Sobrenome','class' => 'form-control')) !!}
                    <small id="emailHelp" class="form-text text-muted">máximo 20 caracteres.</small>
                </div>
            </div>            
            <div class="col-md-12">
                <div class="form-group form-group-lg">
                    <label for="exampleInputEmail1">Seu melhor e-mail</label>
                    {!! Form::text('email', null, array('placeholder' => 'E-Mail','class' => 'form-control')) !!}
                    <small id="emailHelp" class="form-text text-muted">máximo 40 caracteres.</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group form-group-lg">
                    <label for="exampleInputEmail1">Senha</label>
                    {!! Form::password('password', array('placeholder' => 'Senha','class' => 'form-control')) !!}
                    <small id="emailHelp" class="form-text text-muted">máximo 40 caracteres.</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group form-group-lg">
                    <label for="exampleInputEmail1">Confirme a Senha</label>
                    {!! Form::password('password-confirm', array('placeholder' => 'Confirmar Senha','class' => 'form-control')) !!}
                    <small id="emailHelp" class="form-text text-muted">máximo 40 caracteres.</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group form-group-lg">
                    {{ Form::button('Finalizar compra', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg col-md-12'] )  }}
                </div>
            </div>            

            {!! Form::close() !!}
        </div>
        <div class="col-md-6">
            <h2>Endereço de entrega</h2>
            
        </div>
    </div>
</div>
<div class="section-tree">
    <div class="container">
        <h1>Selo de segurança Bike Registrada</h1>
        <p>O Selo de Segurança Bike Registrada é um produto tecnológico que além de desestimular a ação dos ladrões, facilita a identificação da bicicleta e do proprietário, reduzindo de forma significativa o risco da compra de uma bike roubada e ajudando na devolução de bicicletas recuperadas.</p>
    </div>
</div>
<div class="section-footer">
    <div class="container">
        <div class="col-md-4 links">
            <ul>
                <li><a href="{{ url('/politica-de-privacidade')}}">Politica de privacidade</a></li>
                <li><a href="{{ url('/termo-de-useo')}}">Termo de Uso</a></li>
                <li><a href="">Link 01</a></li>
            </ul>
        </div>
        <div class="col-md-4 endereco">
            <p>Avenida Pau Brasil, lote 6, sala 1902, Centro</p>
            <p>Empresarial E-Business, Águas Claras</p>
            <p>71.916-500, Brasília-DF</p>
            <p>+55 (61)3522-4521</p>
            <p>contato@bikeregistrada.com.br</p>
        </div>
        <div class="col-md-4 social">
            
        </div>
        <div class="col-md-12 copy">
            <p>MicroBlog - Sistema de Blog com QRCode v0.1. Todos os direitos reservados {!! date('Y') !!}.</p>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
      } else {
        $('nav').removeClass('shrink');
      }
    });    
</script>
@endsection