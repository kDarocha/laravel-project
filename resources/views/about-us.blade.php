@extends('layouts.app')

@section('content')
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="feature-content wow zoomIn">
                    <div class="col-md-6">
                        We are a representative agency of a Brazilian Cooperative which is the leader of 23 sugar refineries. Able to supply sugar to industries, with annual contracts or to spot, we sell both with CIF or FOB delivery.
                        <br />For minimum quantities we can supply you from our warehouses located in Eastern Europe while for important contracts, we deliver the sugar from Brazil with CIF destiny to the port of your country.
                        <br />We take care of your sugar contract from start to finish even with the advice of our associated experts.
                        <br />A successful partnership with major companies of maritime transport and first class insurance companies, guarantee the full quality and safety for the customer, a crucial factor to be maintained the level of quality expected by the client.
                    </div>
                    <div class="col-md-6">
                        <img style="width: 100%" src="{{ asset('images/about.jpg') }}" alt="about us">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
