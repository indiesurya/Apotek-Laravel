@extends('layouts.dashboard')
@section('content')
<div class="row mt-4">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Bordered table</h4>
            <p class="card-description"> Add class <code>.table-bordered</code>
            </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th> # </th>
                    <th> Nama Obat</th>
                    <th> Kategori </th>
                    <th> Kegunaan </th>
                    <th> Distributor </th>
                    <th> Stok </th>
                    <th> Harga </th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($data as $item) 
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kategori->nama }} </td>
                    <td>{{ $item->kegunaan }}</td>
                    <td>{{ $item->distributor->nama }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga }}</td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection