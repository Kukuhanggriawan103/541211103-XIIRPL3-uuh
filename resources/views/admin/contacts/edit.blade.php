@extends('layouts.app')
@section('title', 'Uuh | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Contact Us
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('contacts.update', $contact->id) }}" method="post" class="">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama barang</label>
                                                <input type="text" name="nama" class="form-control" value="{{ $contact->nama }}">
                                            </div>
                                              <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Harga jual</label>
                                                <input type="text" name="harga" class="form-control" value="{{ $contact->harga }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Alamat tujuan</label>
                                                <textarea  name="pesan" class="form-control">{{ $contact->pesan }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Opsi
                                            </button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Abakura Racing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection