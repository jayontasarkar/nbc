@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: large;">
                    যাচাই/পরিদর্শনকৃত বেসরকারি গ্রন্থাগারের বিবরণ
                </div>
                <div class="panel-body">
                    <table border="0" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগারের নাম : </td>
                                <td style="width: 60%;">{{ $verification->libraby_name }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগারের ঠিকানা : </td>
                                <td style="width: 60%;">
                                    {{ $verification->vill }},
                                    {{ $verification->post_code }},
                                    {{ $verification->upozila }},
                                    {{ $verification->area->tag }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগার প্রতিষ্ঠাকাল : </td>
                                <td style="width: 60%;">{{ entobn($verification->lib_foundtaion_year) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগার ভবনের বিবরণ : </td>
                                <td style="width: 60%;">{{ $verification->lib_description }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">আসবাবপত্র ও যন্ত্রপাতির বিবরণ : </td>
                                <td style="width: 60%;">{{ $verification->asset_description }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগারের বইসংখ্যা : </td>
                                <td style="width: 60%;">{{ entobn($verification->no_of_books) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">প্রতিদিনের পাঠকসংখ্যা : </td>
                                <td style="width: 60%;">{{ entobn($verification->visitors_per_day) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">পত্রিকা/সাময়িকীর সংখ্যা : </td>
                                <td style="width: 60%;">{{ entobn($verification->no_of_newspapers) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">প্রতিদিন খোলার সময় : </td>
                                <td style="width: 60%;">{{ entobn($verification->opening_time) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">সাপ্তাহিক খোলা (দিন) : </td>
                                <td style="width: 60%;">{{ entobn($verification->opening_days_week) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গঠনতন্ত্র, পরিচালনাকমিটি আছে কি না? : </td>
                                <td style="width: 60%;">{{ $verification->committee ? 'হ্যাঁ' : 'না' }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগারিকের নাম ও শিক্ষাগত যোগ্যতা : </td>
                                <td style="width: 60%;">{{ $verification->libarian_name }} ({{ $verification->libarian_qualification }})</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">সভাপতি/সম্পাদকের নাম ও মোবাইল নম্বর : </td>
                                <td style="width: 60%;">{{ $verification->chairman_name }} ({{ entobn($verification->chairman_mobile) }})</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">সার্বিক মন্তব্য : </td>
                                <td style="width: 60%;">{{ $verification->comments }})</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
