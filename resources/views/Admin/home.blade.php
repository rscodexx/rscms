@extends('adminlte::page')

@section('plugins.Chartjs', true)

@section('title', 'Painel')

@section('content_header')

        <div class="row">
            <div class="col-md-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-md-6 d-flex align-items-end flex-column">
                <form method="get">
                    <select onChange="this.form.submit()" name="interval" class="custom-select">
                        <option {{$dateInterval==1?'selected="selected"':''}} value="1">Últimos de Hoje</option>
                        <option {{$dateInterval==7?'selected="selected"':''}} value="7">Últimos 7 dias</option>
                        <option {{$dateInterval==15?'selected="selected"':''}} value="15">Últimos 15 dias</option>
                        <option {{$dateInterval==30?'selected="selected"':''}} value="30">Últimos 30 dias</option>
                        <option {{$dateInterval==60?'selected="selected"':''}} value="60">Últimos 2 Meses</option>
                        <option {{$dateInterval==90?'selected="selected"':''}} value="90">Últimos 3 Meses</option>
                        <option {{$dateInterval==120?'selected="selected"':''}} value="120">Últimos 6 Meses</option>
                    </select>
                </form>
            </div>
        </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$visitsCount}}</h3>
                    <p>Acessos</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$onlineCount}}</h3>
                    <p>Usuários Online</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-heart"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$pageCount}}</h3>
                    <p>Páginas</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-sticky-note"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$userCount}}</h3>
                    <p>Usuários</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-user"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitadas</h3>
                </div>
                <div class="card-body">
                    <canvas id="pagePie"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sobre o sistema</h3>
                </div>
                <div class="card-body">
                    ...
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){
            let ctx = document.getElementById('pagePie').getContext('2d');
            window.pagePie = new Chart(ctx, {
                type:'pie',
                data:{
                    datasets:[{
                        data:{{$pageValues}},
                        backgroundColor:'#0000FF'
                    }],
                    labels:{!! $pageLabels !!}
                },
                options:{
                    responsive:true,
                    legend:{
                        display:false
                    }
                }
            });
        }
    </script>
@endsection
