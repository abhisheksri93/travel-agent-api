@extends('layouts.app')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        
    
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Tables</span></li>
                <li><span>Editable</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            </div>
    
            <h2 class="card-title">Users</h2>
        </header>
        <div class="card-body">
            
          <h1 class="text-center">users</h1>
        </div>
    </section>
</section>
@endsection