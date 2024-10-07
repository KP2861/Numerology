@extends('Admin.layouts.app')

@section('content')
    <h2 style="margin-bottom: 1.5rem; color: #333; font-size: 28px;">Advance Numerology Detail</h2>
    <div>
        <a href="{{ route('advance_numerology.list') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-6">
            <div
                style="
                width: 100%; 
                height: 100%; 
                padding: 1rem; 
                border: 1px solid #dddddd; 
                background: #f3f3f3; 
                border-radius: 8px; 
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            ">

                <div
                    style="
                    border-bottom: 1px solid #dddddd; 
                    padding-bottom: 10px; 
                    margin-bottom: 10px;
                ">
                    <h6
                        style="
                        color: #251F14; 
                        font-size: 22px; 
                        font-weight: bold; 
                        margin-bottom: 0;
                    ">
                        Date of Birth</h6>
                    <p
                        style="
                        color: #251F14; 
                        font-size: 18px; 
                        line-height: 1.5; 
                        margin-bottom: 0;
                    ">
                        {{ $phoneNumerologyDetail->phone_number }}</p>
                </div>

                <div
                    style="
                    border-bottom: 1px solid #dddddd; 
                    padding-bottom: 10px; 
                    margin-bottom: 10px;
                ">
                    <h6
                        style="
                        color: #251F14; 
                        font-size: 22px; 
                        font-weight: bold; 
                        margin-bottom: 0;
                    ">
                        Phone Number</h6>
                    <p
                        style="
                        color: #251F14; 
                        font-size: 18px; 
                        line-height: 1.5; 
                        margin-bottom: 0;
                    ">
                        {{ $phoneNumerologyDetail->dob }}</p>
                </div>

                <div
                    style="
                    border-bottom: 1px solid #dddddd; 
                    padding-bottom: 10px; 
                    margin-bottom: 10px;
                ">
                    <h6
                        style="
                        color: #251F14; 
                        font-size: 22px; 
                        font-weight: bold; 
                        margin-bottom: 0;
                    ">
                        Type Of Bussiness</h6>
                    <p
                        style="
                        color: #251F14; 
                        font-size: 18px; 
                        margin-bottom: 0;
                    ">
                        {{ $phoneNumerologyDetail->area_of_concern }}</p>
                </div>
                <div
                    style="
                    border-bottom: 1px solid #dddddd; 
                    padding-bottom: 10px; 
                    margin-bottom: 10px;
                ">
                    <h6
                        style="
                        color: #251F14; 
                        font-size: 22px; 
                        font-weight: bold; 
                        margin-bottom: 0;
                    ">
                        Created At</h6>
                    <p
                        style="
                        color: #251F14; 
                        font-size: 18px; 
                        margin-bottom: 0;
                    ">
                        @if ($phoneNumerologyDetail->created_at)
                            @php
                                try {
                                    $date = new DateTime($phoneNumerologyDetail->created_at);
                                    echo $date->format('d/m/Y H:i:s');
                                } catch (Exception $e) {
                                    echo '-';
                                }
                            @endphp
                        @else
                            -
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div
                style="
                width: 100%; 
                height: 100%; 
                padding: 1rem; 
                border: 1px solid #dddddd; 
                background: #f3f3f3; 
                border-radius: 8px; 
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            ">
                <div
                    style="
                    border-bottom: 1px solid #dddddd; 
                    padding-bottom: 10px; 
                    margin-bottom: 10px;
                ">
                    <h6
                        style="
                        color: #251F14; 
                        font-size: 22px; 
                        font-weight: bold; 
                        margin-bottom: 0;
                    ">
                        Name</h6>
                    <p
                        style="
                        color: #251F14; 
                        font-size: 18px; 
                        line-height: 1.5; 
                        margin-bottom: 0;
                    ">
                        {{ $phoneNumerologyDetail->user_name }}</p>
                </div>


                <div
                    style="
                    border-bottom: 1px solid #dddddd; 
                    padding-bottom: 10px; 
                    margin-bottom: 10px;
                    margin-top: 1rem;
                ">
                    <h6
                        style="
                        color: #251F14; 
                        font-size: 22px; 
                        font-weight: bold; 
                        margin-bottom: 0;
                    ">
                        Email</h6>
                    <p
                        style="
                        color: #251F14; 
                        font-size: 18px; 
                        line-height: 1.5; 
                        margin-bottom: 0;
                    ">
                        {{ $phoneNumerologyDetail->user_email }}</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
@endsection
